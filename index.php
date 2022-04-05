<?php 
// PATH CONSTANTS
define('SLASH',  DIRECTORY_SEPARATOR ); // Alias to '/'
define( 'PATH_ROOT', __DIR__ . DIRECTORY_SEPARATOR ); // file absolute path (not url) from the project root 
// var_dump(__DIR__);
// var_dump(DIRECTORY_SEPARATOR);

// Initializate router
require_once PATH_ROOT . 'router.php';

// Connect to DB
$mysqli = mysqli_connect( 'database', 'lamp', 'lamp', 'lamp' );

// Start app (router)
routerStart();

// Close DB tunnel connection
mysqli_close( $mysqli );
?>