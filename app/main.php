<?php
namespace FunctionMbti;
require 'vendor/autoload.php';
use PostgreSQL\Connection;
$pdo = Connection::get()->connect();


class ip_reg{

    public $device_user;
    public $ip_user;
    public $id_user;

    public function __construct() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip_user = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip_user = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
            $ip_user = $_SERVER['REMOTE_ADDR'];
        }
        $device_user = $_SERVER['HTTP_USER_AGENT'];
    }

    public function serch_id(){

        
    }

    public function add_user(){
        $sql = 'INSERT INTO user_temp (ip, device) VALUES (:ip_user, :device_user)';
        $pdo = Connection::get()->connect();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'ip_user' => $ip_user,
            'device_user' => $device_user
        ]); 
        $id_user = $stmt->lastInsertId();
    }
    
}
class message {
    public $message;
    public $otvet_one;
    public $otvet_two;
    public $id_message;

    public function __construct($id_message) {

    }
    public function newmessage($id_message) {
        $sql = "SELECT * FROM question where id = :id";
        $pdo = Connection::get()->connect();
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id_message]);
        #$stmt->setFetchMode(PDO::FETCH_ASSOC);  
        $info = $stmt->fetch();
        return $info;
    }
    public function savereturn($id_user, $id_message, $id_return) {
        $sql = 'INSERT INTO info_lite_mbti (id_user,id_question,id_return) VALUES (:id_user, :id_question, :id_return)';
        $pdo = Connection::get()->connect();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id_user' => $id_user,
            'id_question' => $id_message,
            'id_return' => $id_return
        ]); 
        if( $stmt ) return "good";
    }
    #разбор отправки сообщений
}