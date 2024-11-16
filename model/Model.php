<?php

class Model {
    private $pdo;


    public function __construct($host, $dbname, $username, $password) {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Ошибка подключения к базе данных: " . $e->getMessage());
        }
    }


    public function getBookList() {
        $sql = "SELECT * FROM shows";
        try {
            $stmt = $this->pdo->query($sql); 
            return $stmt->fetchAll(PDO::FETCH_ASSOC); 
        } catch (PDOException $e) {
            echo "Ошибка запроса: " . $e->getMessage();
            return [];
        }
    }

public function getBookByName($name) {
    $sql = "SELECT * FROM shows WHERE name = :name"; 
    try {
        $stmt = $this->pdo->prepare($sql); 
        $stmt->bindParam(':name', $name, PDO::PARAM_STR); 
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    } catch (PDOException $e) {
        echo "Ошибка запроса: " . $e->getMessage();
        return null;
    }
}


}
