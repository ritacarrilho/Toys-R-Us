<?php 
function errorRender() { 
    http_response_code( 404 );

    $html_title = '404 ERROR';
    $page_title = ' ';

    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'header.php';
    require_once PATH_ROOT . 'views' . SLASH . 'error.php';
    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'footer.php';
}