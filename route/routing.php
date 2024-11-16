<?php
    $host = explode('?', $_SERVER['REQUEST_URI'])[0];

    $num = substr_count($host, '/');
    $way = explode('/', $host)[$num];

    $contoller = new Controller();

    if ($way == '' || $way == 'index.php') {
        //$response = Controller::StartSite(); 
        $response = $contoller->StartSite(); 
    }
    elseif ($way == 'books') {
        //$response = Controller::BookList(); 

        
        $response = $contoller->BookList();
    }
    elseif ($way == 'book') {  
        if (isset($_GET['title'])) {
            $title = $_GET['title'];
        }
        //$response = Controller::BookOne($title); 
        $response = $contoller->BookOne($title);
         
    }
    else {
        //$response = Controller::error404();  
        $response = $contoller->error404();
    }
?>
