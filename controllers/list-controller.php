<?php 
function listRender() {
    $html_title = 'List'; 
    $page_title = 'Les jouets'; 
    $list_url = "PATH_ROOT . 'views' . SLASH . 'list.php'";

    
    // TODO: the choses a faire avant afficher la page
    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'header.php';
    require_once PATH_ROOT . 'views' . SLASH . 'list.php';
    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'footer.php';
}

function gamesGetTopThree() {
    global $mysqli;
    
    $list = [];
    
    $q = 'SELECT name, price, image 
            FROM lamp.toys; ';
    
    $q_list = mysqli_query( $mysqli, $q );

    
        if( $q_list ) {
            while( $game = mysqli_fetch_assoc( $q_list ) ) {
                $list[] = $game;
            }
        }
    var_dump($q_list);

    
        return $list;
  
}