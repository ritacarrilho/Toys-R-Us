<?php 
function detailsRender() {
    $html_title = 'Details'; 
    $toys = getToys();

    // Page title according to toy
    if( isset($_GET['id']) ) :
        foreach( $toys as $toy ): 
        $page_title = $toy['name'];
        endforeach;
    endif;

    $stores = getAllStores();
    $stock_all_stores = getStockTotal();
    $stocks_each_store = getStockByStore();
    
    // var_dump($stocks_each_store);
    // var_dump($stock_all_stores);
    
    // if a store is selected display all toys available in that store, else display toys available in all stores
    $stocks = !isset($_GET['store']) ? $stock_all_stores : $stocks_each_store;

    // pages redirection and error control
    if($toys && $stocks) {
        require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'header.php';
        require_once PATH_ROOT . 'views' . SLASH . 'details.php';
        require_once PATH_ROOT . 'views' . SLASH . 'includes' . SLASH . 'footer.php';
    }
    else {
        header( 'Location: /error');
    }
}

// Get name, details, image and brand of each toy 
function getToys() {
    global $mysqli;
    
    $toys_list = [];
    
    $q_prep = 'SELECT toys.name, toys.id, toys.description, toys.price, toys.image, brands.name AS brand_name 
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

// Get all stores name
function getAllStores() {
    global $mysqli;
    
    $stores_list = [];
    
    $q = 'SELECT id AS store_id, name AS store_name FROM stores';
    
    $q_list = mysqli_query( $mysqli, $q );
        
        if( $q_list ) {
            while( $store = mysqli_fetch_assoc( $q_list ) ) {

                $stores_list[] = $store;
                // var_dump($stores_list);
            }
        }
        return $stores_list;
}

// Get stock total of all stores, by toy_id
function getStockTotal() {
    global $mysqli;
    
    $stock_total = [];
    
    $q_prep = 'SELECT sum(quantity) AS stock_total, toy_id 
                    FROM stock    
                    WHERE toy_id=? 
                    GROUP BY toy_id';
    
    if( $stmt = mysqli_prepare( $mysqli, $q_prep ) ) {
        if (isset($_GET['id'])) {
            $toy = $_GET['id'];
        }

        if( mysqli_stmt_bind_param( $stmt, 'i', $toy) ) {
            mysqli_stmt_execute( $stmt );

            $q_result = mysqli_stmt_get_result( $stmt );

            mysqli_stmt_close( $stmt );

            if( $q_result ) {
                while( $quantity = mysqli_fetch_assoc( $q_result ) ) {
                    $stock_total[] = $quantity;
                }
            }
        }
    }
    return $stock_total;
}


// Get stock of each store, by store_id and toy_id
function getStockByStore() {
    global $mysqli;
    
    $stores_stock = [];
    
    if( !empty( $_GET['store']) && isset($_GET['store'] )) {

        $q_prep = 'SELECT stock.quantity, stores.id AS store_id, stock.toy_id 
                        FROM stock
                        JOIN stores ON stock.store_id = stores.id 
                        WHERE store_id=? AND toy_id=?';

        if( $stmt = mysqli_prepare( $mysqli, $q_prep ) ) {
                $store = $_GET['store'];
                $toy = $_GET['id'];
                
        
            if( mysqli_stmt_bind_param( $stmt, 'ii', $store, $toy ) ) {
                mysqli_stmt_execute( $stmt );

                $result = mysqli_stmt_get_result( $stmt );

                mysqli_stmt_close( $stmt );

                if( $result ) {
                    while( $stores = mysqli_fetch_assoc( $result ) ) {
                        $stores_stock[] = $stores;
                    }
                }
            }
        }
    }

    return $stores_stock;
}