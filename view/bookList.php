<?php
    ob_start();
?>
<h2>Список книг</h2>



<?php
if (!empty($bookList)) {
    foreach ($bookList as $bookOne) {
        echo '<article>';
        echo '<h3>';
        echo '<a href="book?title='.$bookOne['BOOKNAME'].'">'.$bookOne['BOOKNAME'].'</a>';
        echo '</h3>';
        echo '<img src="'.$bookOne['IMAGE_URL'].'">';
        echo '<p>Author(s): '.$bookOne['AUTHOR'].'</p>';
        echo '<p>Price: '.$bookOne['PRICE'].'$</p>';
        echo '<p style="padding-top:10px;">';
        echo '<a href="book?title='.$bookOne['BOOKNAME'].'" role="button"> Содержание &raquo;</a>';
        echo '</article>';
        echo '<div style="clear:both;"></div>';
    }
} else {
    echo '<p>Нет доступных книг.</p>';
}
?>

<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
?>
