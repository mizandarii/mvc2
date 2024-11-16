<?php
    ob_start();

    echo '<article>';
    echo '<h3>'.$book['name'].'</h3>';
    echo '<img src = '.$book['poster'].'>';
    echo '<p>Жанр: '.$book['genre'].'</p>';
    echo '<p>Год: '.$book['year'].'</p>';
    echo '<p>Сюжет: '.$book['plot'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '<a href="shows" role="button"> Back &raquo;</a>';
    echo '</p>';
    echo '</article>';

    echo '<div style="clear:both;"</div>';

    $content = ob_get_clean();

include 'view/templates/layout.php';