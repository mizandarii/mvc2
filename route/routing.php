<?php
    $host = explode('?', $_SERVER['REQUEST_URI'])[0];

    $num = substr_count($host, '/');
    $way = explode('/', $host)[$num];

    $contoller = new Controller();

    if ($way == '' || $way == 'index.php') {
        $response = $contoller->StartSite(); 
    }
    elseif ($way == 'shows') {
        $response = $contoller->BookList();
    }
    elseif ($way == 'show') {  
        if (isset($_GET['name'])) {
            $name = $_GET['name'];  
        }

        if (isset($name)) {  
            $response = $contoller->BookDetail($name);  
        } else {
            $response = $contoller->error404();
        }
    }
    else {
        $response = $contoller->error404();
    }
?>
