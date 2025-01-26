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

    public function __construct() {

    }
    public function newmessage($id_user) {
        $sql1 = "SELECT * FROM info_lite_mbti where id_user = :id ORDER BY id_question DESC LIMIT 1";
        $sql = "SELECT * FROM question where id = :id";
        $sql2 = "UPDATE user_temp set ending = 'end' where id = :id;";
        $pdo = Connection::get()->connect();
        $stm = $pdo->prepare($sql1);
        $stm->execute(['id' => $id_user]);
        $info = $stm->fetch();
        if($info){
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $info['id_question']+1]);
            $resul = $stmt->fetch();
            if($resul){
                $_SESSION['question'] = $resul['id'];
                return $resul;
            }else{
                $_SESSION['question'] = NULL;
                $stmu = $pdo->prepare($sql2);
                $stmu->execute(['id' => $id_user]);
            }
        }else{
            $stml = $pdo->prepare($sql);
            $stml->execute(['id' => 1]);
            $resul = $stml->fetch();
            $_SESSION['question'] = $resul['id'];
            return $resul;
        }
        

    }
    public function savereturn($id_user, $id_message, $id_return) {
        if($id_return){
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
        
    }
    #разбор отправки сообщений
}
class mbti_lite {
    public function __construct() {

    }
    public function mbti_resul($id_user) {
        $sql2 = "SELECT * FROM question where id = :id";
        $pdo = Connection::get()->connect();
        $stmt = $pdo->prepare($sql1);
        $stmt->execute(['id' => $id_user]);
        $info = $stmt->fetch();
    }
    public function clear_resul($id_user) {
        $sql2 = "UPDATE user_temp set ending = null where id = :id";
        $pdo = Connection::get()->connect();
        $stmt = $pdo->prepare($sql2);
        $stmt->execute(['id' => $id_user]);
    }
}