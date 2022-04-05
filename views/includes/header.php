<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $html_title ?> - Toys-R-Us</title>
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="site-background">
        <header>
            <span>
                <a href="<?php echo '/'?>">
                    <img src="./img/Logo-cut.png" alt="Toys R Us" id="logo">
                </a>
            </span>

            <nav>
                <ul class="first-menu">
                    <li>
                        <a href="<?php echo 'list'?>">Tous les jouets</a>
                    </li>
                    <li>
                        <a href="<?php echo 'details' ?>">Par marque</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo 'list?id=1' ?>">Ravensburguer</a></li>
                            <li><a href="<?php echo 'list?id=2' ?>">Silverlit Toys</a></li>
                            <li><a href="<?php echo 'list?id=3' ?>">Mattel</a></li>
                            <li><a href="<?php echo 'list?id=4' ?>">Clementoni</a></li>
                            <li><a href="<?php echo 'list?id=5' ?>">Playmobil</a></li>
                            <li><a href="<?php echo 'list?id=6' ?>">Mattel</a></li>
                            <li><a href="<?php echo 'list?id=7' ?>">Wow Wee</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>

        <main> 
            <h1><?php echo $page_title ?></h1>

            <div class="items-container">
            