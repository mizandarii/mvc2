<?php



class Controller {



    public function StartSite() {
        include 'view/main.php';
    }

    private $model;

    public function __construct() {
        // Создаем объект модели, передавая параметры подключения к базе данных
        $this->model = new Model('localhost', 'tvshows', 'root', '');
    }

    // Метод для отображения списка книг
    public function BookList() {
        $bookList = $this->model->getBookList(); // Получаем список книг через модель
        include 'view/bookList.php'; // Подключаем шаблон с отображением списка
    }

    // Метод для отображения детальной информации по книге
    public function BookDetail($name) {
        $book = $this->model->getBookByName($name); // Получаем информацию о книге по ID
        include 'view/bookDetail.php'; // Подключаем шаблон с отображением информации
    }
public function error404() {
    include 'view/error404.php';
}
}
?>