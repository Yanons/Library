<?php
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

    function __construct($otvet, $id_message) {
        $this->message = $name;
        return $message;
    }
    public function newmessage($id_message) {
    {
        $sql = 'SELECT * FROM users WHERE email = :email'; #строка
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['' => '']);
        $user = $stmt->fetch();

        return $user;
    }
        $this->message = $name;
        $this->otvet_one = $otvet_one;
        $this->otvet_two = $otvet_two;
        $this->id_message = $id_message;
        return $message;
    }
    public function reg_init($otvet, $id_message) {
        $this->message = $name;
        $this->id_message = $id_message;
        return $message;
    }
    #разбор отправки сообщений
}