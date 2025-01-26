<?php
#namespace FunctionMbti;
require 'vendor/autoload.php';
use PostgreSQL\Connection;
$pdo = Connection::get()->connect();


class ip_reg{

    public string $device_user;
    public string $ip_user;
    public $id_user;

    public function __construct() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $this->ip_user = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $this->ip_user = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
            $this->ip_user = $_SERVER['REMOTE_ADDR'];
        }
        $this->device_user = $_SERVER['HTTP_USER_AGENT'];
    }

    public function serch_id(){
        $sql = 'SELECT * FROM user_temp where ip = :ip_user and device = :device_user';
        $pdo = Connection::get()->connect();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'ip_user' => $this->ip_user,
            'device_user' => $this->device_user
        ]);
        $info = $stmt->fetch();
        return $info;
    }

    public function add_user(){
        $sql = 'INSERT INTO user_temp (ip, device) VALUES (:ip_user, :device_user)';
        $pdo = Connection::get()->connect();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'ip_user' => $this->ip_user,
            'device_user' => $this->device_user
        ]);
        $id_user = $pdo->lastInsertId();
        return $id_user;
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