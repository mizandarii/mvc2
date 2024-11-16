<?php



class Controller {



    public function StartSite() {
        include 'view/main.php';
    }

    public function BookList() {
        // $booksList = Model::getBookList();

        $model = new Model('localhost', 'root', '', 'mvc2');
        $bookList = $model->GetBookList();
        include 'view/bookList.php';

    }

public function bookOne($title) {
    //$test = Model::getBook($title);
    $model = new Model('localhost', 'root', '', 'mvc2');
    $test = $model->GetBook($title);
    if ($test[0] == true){
        $book = $test[1];
        include 'view/bookOne.php';
    } 
    else {
        include 'view/error404.php';
    }
}
public function error404() {
    include 'view/error404.php';
}
}
?>