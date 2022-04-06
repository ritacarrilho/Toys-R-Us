<?php 
function detailsRender() {
    $html_title = 'Details'; 
    $page_title = 'Game Name'; 

    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'header.php';
    $games = getToys();
    require_once PATH_ROOT . 'views' . SLASH . 'details.php';
    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'footer.php';
}

function getToys() {
    global $mysqli;
    
    $games_list = [];
    
    $q = 'SELECT * FROM toys; ';
    
    // Query execution
    $q_list = mysqli_query( $mysqli, $q );
    // var_dump($q);
        
        if( $q_list ) {
            while( $game = mysqli_fetch_assoc( $q_list ) ) {

                $games_list[] = $game;
                // var_dump($games_list);
            }
        }
        // var_dump($games_list);
        return $games_list;
}

function getStores() {

}