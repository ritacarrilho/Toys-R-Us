<?php 
function listRender() {
    $html_title = 'List'; 
    $page_title = 'Les jouets'; 
    $list_url = "PATH_ROOT . 'views' . SLASH . 'list.php'";

    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'header.php';
    $toys = getAllGames();

    // if(!isset([$_GET])) {
    //     $games = getAllGames();
    // } else {
    //     $games = getByBrand();
    // };

    require_once PATH_ROOT . 'views' . SLASH . 'list.php';
    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'footer.php';
}

function getAllGames() {
    global $mysqli;
    
    $games_list = [];
    
    $q = 'SELECT name, price, image, id 
            FROM lamp.toys; ';
    
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

function getByBrand() {
    global $mysqli;
    
    $brand_list = [];
    
    if( !empty( $_GET['id']) ) {

        $q_prep = 'SELECT id, name, price, image
            FROM toys
            WHERE brand_id=?';

        var_dump($q_prep);

        if( $stmt = mysqli_prepare( $mysqli, $q_prep ) ) {
            $id = $_GET['id'];
    
            if( mysqli_stmt_bind_param( $stmt, 'i', $id ) ) {
                mysqli_stmt_execute( $stmt );
    
                $result = mysqli_stmt_get_result( $stmt );
    
                mysqli_stmt_close( $stmt );
    
                if( $result ) {
                    $brand_list = mysqli_fetch_assoc( $result );
                    var_dump($brand_list);
                };
            }
        }
    }
    var_dump($brand_list);
    return $brand_list;
}