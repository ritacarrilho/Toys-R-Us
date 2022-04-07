<?php 
function detailsRender() {
    $html_title = 'Details'; 
    $toys = getToys();

    if( isset($_GET['id']) ) :
        foreach( $toys as $toy ): 
        $page_title = $toy['name'];
        endforeach;
    endif;
        
    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'header.php';

    // $stock = getToysAndStores();
    // var_dump($toys);
    
    require_once PATH_ROOT . 'views' . SLASH . 'details.php';
    require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'footer.php';
}


function getToysAndBrands() {

}
/* function getToysAndStores() {
    global $mysqli;
    
    $toys_list = [];
    
    if( !empty( $_GET['store-form']) ) {

        $q_prep = 'SELECT toys.id AS toy_id, toys.name AS toy_name, 
                    toys.price, toys.image, brands.name AS brand_name, 
                    stock.quantity, stores.name AS store_name 
                        FROM toys
                        LEFT JOIN brands ON brands.id=toys.brand_id
                        LEFT JOIN stock ON toys.id=stock.toy_id
                        LEFT JOIN stores ON stock.store_id = stores.id 
                        WHERE store_id=?';

        if( $stmt = mysqli_prepare( $mysqli, $q_prep ) ) {
            if (isset($_GET['store-form'] ) ) {
                $store = $_GET['store-form'];
            }

            if( mysqli_stmt_bind_param( $stmt, 's', $store) ) {
                mysqli_stmt_execute( $stmt );

                $result = mysqli_stmt_get_result( $stmt );

                mysqli_stmt_close( $stmt );

                if( $result ) {
                    while( $toys = mysqli_fetch_assoc( $result ) ) {
                        $toys_list[] = $toys;
                    }
                }
            }
        }
    }
    var_dump($toys_list);

    return $toys_list;
}*/

function getToys() {
    global $mysqli;
    
    $toys_list = [];
    
    $q_prep = 'SELECT toys.name, toys.description, toys.price, toys.image, brands.name AS brand_name 
            FROM toys 
            INNER JOIN brands ON toys.brand_id = brands.id
            WHERE toys.id=? ';
    
    if( $stmt = mysqli_prepare( $mysqli, $q_prep ) ) {
        if (isset($_GET['id'] ) ) {
            $toy = $_GET['id'];
        }

        if( mysqli_stmt_bind_param( $stmt, 'i', $toy) ) {
            mysqli_stmt_execute( $stmt );

            $result = mysqli_stmt_get_result( $stmt );

            mysqli_stmt_close( $stmt );

            if( $result ) {
                while( $toys = mysqli_fetch_assoc( $result ) ) {
                    $toys_list[] = $toys;
                }
            }
        }
    }
    // var_dump($toys_list);

    return $toys_list;
}



function getStores() {

}