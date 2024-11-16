<?php
class Model {

    private $conn;
    

    
    public function __construct($host, $username, $password, $dbname) {
        $this->conn = new mysqli($host, $username, $password, $dbname);

        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }


    public function GetBookList() {
        $arrayResult = [];
    

        $sql = "SELECT bookname, author, price, book_description, image_url FROM books";
    

        $result = $this->conn->query($sql);
    
        if ($result === false) {
            echo "Error: " . $this->conn->error;
        } else {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

    
                    // Добавляем строку в массив
                    $arrayResult[] = array(
                        'BOOKNAME' => $row['bookname'],
                        'AUTHOR' => $row['author'],
                        'PRICE' => $row['price'],
                        'BOOK_DESCRIPTION' => $row['book_description'],
                        'IMAGE_URL' => $row['image_url']
                    );
                }
            } else {
                echo "No records found";
            }
        }
    
        return $arrayResult;
    }
    

    
    public function __destruct() {
        $this->conn->close();
    }

    // public function getBookList(){
    //     include_once 'model/booksArray.php';
    //     return $books;
    // }

    public function getBook($title){
        $model = new Model('localhost', 'root', '', 'mvc2');
        //$allBook = Model::getBookList();
        $allBook = $model -> getBookList();
        $i = 0;
        $test = array(false);
        foreach($allBook as $oneBook){
            if($oneBook['BOOKNAME'] ==$title){
                $test = array(true, $allBook[$i]);
                return $test;
            }
            $i++;
        }
        return $test;
    }
}
?>
