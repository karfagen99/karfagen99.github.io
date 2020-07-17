<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>#DEV_</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="addpost.css">
</head>
<body>
<header>
    <?php include ("blocks/header.php");?>
<main role="main">
    <div class="main-tab">
        <div class="about"><h1 align="center">Добавление записи</h1></div>
        <div class="tab-add-post">
            <div class="text-area-post">
                <div class="form-tab">
                    <form action="loadingbzz.php" method="POST">
                    <div class="text-tab">
                        <textarea name="message">Введите краткое описание</textarea>
                    </div>
                        <div class="des">
                        <textarea name="description" >Введите ссылку на пост/книгу
                        </textarea>
                        </div>
                    <div class="tag-area d-flex justify-content-center">
                            <h3>#tag</h3>
                            <textarea name="tag"></textarea>
                    <button type="button" class="btn btn-success">Отправить
                    </button>
                    <!--<input type="submit" value="Отправить">-->
                </div>
            </div>
        </form>
    </div>
</div>




        </div>
    </div>

</div>
</main>
<?php include ("blocks/footer.php");?>



