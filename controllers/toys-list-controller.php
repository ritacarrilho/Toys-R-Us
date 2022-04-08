<?php
// Display brand name with count of toys of each brand
function getAllBrands() {
    global $mysqli;
    
    $brands_list = [];
    
    $q = 'SELECT brands.name AS brand_name, brands.id AS brand_id, count(toys.id) as toys_total, toys.brand_id 
            FROM brands 
            JOIN toys 
            WHERE brands.id = toys.brand_id  
            GROUP BY toys.brand_id';
    
    $q_list = mysqli_query( $mysqli, $q );
        
    if( $q_list ) {
        while( $brand = mysqli_fetch_assoc( $q_list ) ) {

            $brands_list[] = $brand;
            // var_dump($brands_list);
        }
    }
    
    return $brands_list;
}