<?php 
function listRender() {
    $html_title = 'List'; 
    $page_title = 'Les jouets'; 
    $list_url = "PATH_ROOT . 'views' . SLASH . 'list.php'";

    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'header.php';
    $games = getAllGames();
    require_once PATH_ROOT . 'views' . SLASH . 'list.php';
    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'footer.php';
}

function getAllGames() {
    global $mysqli;
    
    $games_list = [];
    
    $q = 'SELECT name, price, image 
            FROM lamp.toys; ';
    
    // Query execution
    $q_list = mysqli_query( $mysqli, $q );
    // var_dump($q);
        
        if( $q_list ) {
            while( $game = mysqli_fetch_assoc( $q_list ) ) {
                // echo $game['name'];
                // echo $game['price'];
                // echo $game['image'];

                $games_list[] = $game;
                // var_dump($games_list);
            }
        }
        // var_dump($games_list);
        return $games_list;
}