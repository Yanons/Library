<?php
session_start();


if($_POST['otvet']){
    $_SESSION['otvet'] = $_POST['otvet'];
}
if($_POST['edit_l_mb']){
    switch($_SESSION['edit_l_mb']){
        case 1:
            unset($_SESSION['mbtitest']);
            header("Location:/");
        case 2:
            $_SESSION['edit_l_mb'] = $_POST['edit_l_mb'];
    }
    $_SESSION['otvet'] = $_POST['otvet'];
}
header("Location:/");
