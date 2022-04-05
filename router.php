<?php
// démarrer le router et afficcher la page
function routerStart(): void 
{
    // echo 'this is the router';
    // var_dump($_SERVER);
    $route = $_SERVER[ 'REDIRECT_URL' ] ?? '/';

    switch( $route ) {
        case '/':
            require_once PATH_ROOT . 'controllers' . SLASH . 'home-controller.php';
            homeRender();
            break;

        case '/list':
            require_once PATH_ROOT . 'controllers' . SLASH  . 'list-controller.php';
            listRender();
            break;

        case '/details':
            require_once PATH_ROOT . 'controllers' . SLASH . 'details-controller.php';
            detailsRender();
            break;

        default:
            http_response_code( 404 );
            echo '404 - Not Found';
            break;
    }
}