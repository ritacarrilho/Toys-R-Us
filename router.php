<?php
// start router and display site
function routerStart(): void 
{
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

        case '/error':
            require_once PATH_ROOT . 'controllers' . SLASH . 'error-controller.php';
            errorRender();
            break;

        default:
            require PATH_ROOT . 'controllers' . SLASH . 'error-controller.php';
            errorRender();
            break;
    }
}