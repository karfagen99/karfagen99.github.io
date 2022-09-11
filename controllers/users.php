<?php
require_once 'config.php';
$db = DB::getInstance();


    if ($_POST['name'] != NULL){
        $name = trim($_POST['name']);
    }
    if ($_POST['name'] < 3){
        echo "Ваше имя должно содержать 3 и более символов!";
    }


    $surName = $_POST['surName'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $admin = 0;

    $params = [
      'name' => $name,
        'surname' => $surName,
        'pwd' => $pass,
        'email' => $email,
        'admin' => $admin
    ];

//    $params = [
//        ':name' => $post['user_name'],
//        ':surname' => $post['user_surname'],
//        ':pwd' => $post['user_pass'],
//        ':email' => $post['user_email'],
//        ':admin' => $post['admin']
//    ];

    $query_insert = 'INSERT INTO users (user_name, user_surname, user_pass, user_mail, admin) VALUES (:name, :surname, :pwd, :email, :admin)';
    $db->query_($query_insert, $params);

