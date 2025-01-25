<!--session_destroy();
if(isset($_SESSION['cart']))-->
 <?php
 session_start(); // запустите свою сессию PHP! 

 require 'vendor/autoload.php';

 use PostgreSQL\Connection;
 
 try {
     Connection::get()->connect();
 } catch (\PDOException $e) {
     echo $e->getMessage();
 }
 ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mbti-test</title><!-- Детектив, который ищет скрытые таланты-->
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
        <?php
            require 'block/header.php';
            
            if (isset($_POST['mbtitest']))
            {
                $_SESSION['mbtitest'] = $_POST['mbtitest'];
            }

            if (isset($_SESSION['mbtitest']))
            {
                switch($_SESSION['mbtitest']){
                    case 1:
                        require 'block/mbtitest.php';
                    case 2:
                        require 'block/mbtitestcognitiv.php';
                }
            }
            else{
                require 'block/center-main.php';
            }
            require 'block/button.php'; 

        ?>
    </div>
</body>
</html>
<?php ?>