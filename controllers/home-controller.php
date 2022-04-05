<?php 
function homeRender() {
    $html_title = 'Home'; 
    $page_title = 'Top 3 des Ventes';
    $home_url = "PATH_ROOT . 'views' . SLASH . 'home.php'";

    // TODO: the choses a faire avant afficher home
    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'header.php';
    require_once PATH_ROOT . 'views' . SLASH . 'home.php';
    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'footer.php';
}

function gamesGetTopThree() {
    global $mysqli;
    
    $result = [];
    
    $q = 'SELECT ';
    
    $q_result = mysqli_query( $mysqli, $q );
    
        // if( $q_result ) {
        //     while( $game = mysqli_fetch_assoc( $q_result ) ) {
        //         $result[] = $game;
        //     }
        // }
    
        return $result;
  
}