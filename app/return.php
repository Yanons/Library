<?php
session_start();
if($_POST['otvet']){
    $_SESSION['otvet'] = $_POST['otvet'];
}
if($_POST['editlmb']){
    switch($_POST['editlmb']){
        case 1:
            unset($_SESSION['mbtitest']);
            unset($_POST['mbtitest']);
            break;
        case 2:
            $_SESSION['editlmb'] = $_POST['editlmb'];
            break;
    }
}
header("Location:/");
