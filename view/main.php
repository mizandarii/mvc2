<?php
    ob_start();
?>

<h2>Проект MVC технологии. Книги</h2>
<article>
    <p>
        Просмотр списка книг и детальной информации по одной книге
    </p>
</article>

<?php
    // Правильная функция, которая завершает буфер и возвращает его содержимое
    $content = ob_get_clean(); 
?>

<?php 
    // Подключаем основной шаблон layout.php
    include 'view/templates/layout.php';
?>
