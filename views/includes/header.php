<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $html_title ?> - Toys-R-Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="site-background">
        <div class="container">
        <header>
            <span>
                <a href="<?php echo '/'?>">
                    <img src="./img/Logo-cut.png" alt="Toys R Us" id="logo">
                </a>
            </span>

            <nav>
                <ul class="first-menu">
                    <li>
                        <a href="list">Tous les jouets</a>
                    </li>
                    <li id="li">
                        <a href="">Par marque</a>
                            <ul class="sub-menu">
                            <?php
                                global $mysqli;
                                $brandQuery = ( mysqli_query( $mysqli, 'SELECT * FROM brands;') );
                                while( $brandData = mysqli_fetch_assoc( $brandQuery ) ) {
                            ?>           
                            <li><a href="/list?brand=<?= $brandData['id']?>"><?php echo $brandData['name'] ?></a></li>
                            <?php
				            }
				            ?>    
                            </ul>
                    </li>
                </ul>
            </nav>
        </header>

        <main> 
            <h1><?php echo $page_title ?></h1>

            <div class="items-container">
            