<?php
namespace FunctionMbti;
require 'vendor/autoload.php';
use PostgreSQL\Connection;
$pdo = Connection::get()->connect();
#$STH = $DBH->query('SELECT name, addr, city from folks');  #запуск строки для вывода
# устанавливаем режим выборки
#$STH->setFetchMode(PDO::FETCH_ASSOC); 
# $row = $STH->fetch() #вывод
# $sql = 'INSERT INTO labels(name) VALUES(:name)'; #строка
#         $stmt = $this->pdo->prepare($sql); #запуск строки для ввода
#         $stmt->bindValue(':name', $id_message);
#         $stmt->execute(); #вывод
class message {
    public $message;
    public $otvet_one;
    public $otvet_two;
    public $id_message;

    public function __construct($id_message) {

    }
    public function newmessage($id_message) {
        $sql = "SELECT * FROM question where id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id_message]);
        #$stmt->setFetchMode(PDO::FETCH_ASSOC);  
        $info = $stmt->fetch();
        return $info;
    }
    public function savereturn($id_user, $id_message, $id_return) {
        $sql = 'INSERT INTO info_lite_mbti ("id_user","id_question","id_return") VALUES (:id_user, :id_question, :id_return)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id_user' => $id_user,
            'id_question' => $id_message,
            'id_return' => $id_return
        ]);
        #$stmt->setFetchMode(PDO::FETCH_ASSOC);  
        if( $stmt ) return "good";
    }
    #разбор отправки сообщений
}