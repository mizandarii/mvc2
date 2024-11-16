<?php
    ob_start();
?>
<h2>Список сериалов</h2>

<?php
if (!empty($bookList)) {
    foreach ($bookList as $bookOne) {
        echo '<article>';
        echo '<div class="book-cover-container">'; 
        echo '<img src="' . htmlspecialchars($bookOne['poster']) . '" alt="' . htmlspecialchars($bookOne['poster']) . '" class="book-cover">';
        echo '</div>';  

        echo '<div class="book-info">'; 
        echo '<h3>';
        echo '<a href="show?title=' . htmlspecialchars($bookOne['name']) . '">' . htmlspecialchars($bookOne['name']) . '</a>';
        echo '</h3>';
        echo '<p>Жанры: ' . htmlspecialchars($bookOne['genre']) . '</p>';
        echo '<p>Год: ' . htmlspecialchars($bookOne['year']) . '</p>';
        echo '<p style="padding-top:10px;">';
        echo '<a href="show?name=' . htmlspecialchars($bookOne['name']) . '" role="button">Содержание &raquo;</a>';
        echo '</p>';
        echo '</div>';  
        echo '</article>';
        echo '<div style="clear:both;"></div>';
    }
} else {
    echo '<p>Нет доступных сериалов.</p>';
}
?>

<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
?>
