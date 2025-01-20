<!-- -->
 <?php
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
            require 'block/center-main.php'; 
            require 'block/button.php'; 
        ?>
    </div>
</body>
</html>