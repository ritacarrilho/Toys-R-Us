<?php 
function homeRender() {
    $html_title = 'Home'; 
    $page_title = 'Top 3 des Ventes';
    $home_url = "PATH_ROOT . 'views' . SLASH . 'home.php'";

    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'header.php';
    $top_list = getTopThree();
    require_once PATH_ROOT . 'views' . SLASH . 'home.php';
    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'footer.php';
}

function getTopThree() {
    global $mysqli;
    
    $top_list = [];
        
    $q = 'SELECT SUM(sales.quantity) AS quantity, toys.id, toys.name, toys.price, toys.image, sales.toy_id 
            FROM sales 
            JOIN toys
            WHERE toys.id=sales.toy_id
            GROUP BY sales.toy_id 
            ORDER BY toys.price DESC 
            LIMIT 3';
        
    // Query execution
    $q_list = mysqli_query( $mysqli, $q );
    // var_dump($q);
            
        if( $q_list ) {
            while( $list = mysqli_fetch_assoc( $q_list ) ) {
                // echo $list['name'];
                // echo $list['price'];
                // echo $list['image']; 

                $top_list[] = $list;
            }
        }

        return $top_list;
}