<?php

class DB
{

    private  $pdo;
	private static $_instanse = null;

    private  static $db_host = "localhost";
    private static  $db_database = "dev_site";
    private  static $db_user = "root";
    private static $db_pass = "";

//

	private function __construct () {
		$this->pdo = new PDO ('mysql:host='.self::$db_host.';'.'dbname='.self::$db_database.';',self::$db_user,self::$db_pass,
            [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);

	}

	private function __clone () {}
	private function __wakeup () {}

        public static function getInstance()
        {
            if (self::$_instanse != null) {
                return self::$_instanse;
            }
            return new self;
        }

	    public function query_(string $sql, array $params = [])
	    {
            //$this->pdo->exec('USE dev_site');
	        $sth = $this->pdo->prepare($sql);
	        $result = $sth->execute($params);
            //echo "\nPDO::errorInfo():\n";
            //print_r($sth->errorInfo());
	        if ($result === false) {
						return null;
	        }
	        return $sth->fetchAll(PDO::FETCH_ASSOC);
	    }

	    public function get_category_by_id(string $sql){
	        $st = $this->pdo->query($sql);
           foreach ( $st as $row){
               echo $row['tag_id'];
           }
        }
        public function get_id(string $sql){
	        $stmt = $this->pdo->query($sql);
	        return $stmt->fetchAll(PDO::FETCH_ASSOC);
	        //$stmt = $this->pdo->prepare($st);
	        //$stmt->execute($id);
	        //$st = $stmt->fetch(PDO::FETCH_ASSOC);
	        //return $st;
        }

        public function get_p(){
            $d = $_POST["search1"];
            $param = [':text'=> $d];
            $stm = $this->pdo->prepare('SELECT * FROM page WHERE text = :text');
            $stm->execute($param);
            return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

        public function get_tag(string $sql){
	        $stmt = $this->pdo->query($sql);
	        return  $stmt->fetchALL(PDO::FETCH_ASSOC);
        }
}




