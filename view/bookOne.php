<?php
    ob_start();

    echo '<article>';
    echo '<h3>'.$book['BOOKNAME'].'</h3>';
    echo '<img src = '.$book['IMAGE_URL'].'>';
    echo '<p>Author(s): '.$book['AUTHOR'].'</p>';
    echo '<p>Price: '.$book['PRICE'].'$</p>';
    echo '<p>Содержание: '.$book['BOOK_DESCRIPTION'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '<a href="books" role="button"> Back &raquo;</a>';
    echo '</p>';
    echo '</article>';

    echo '<div style="clear:both;"</div>';

    $content = ob_get_clean();

include 'view/templates/layout.php';