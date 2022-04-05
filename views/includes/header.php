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
            <h1>
                <a href="#">
                    <img src="./img/Logo-cut.png" alt="Toys R Us" id="logo">
                </a>
            </h1>

            <nav>
                <ul class="first-menu">
                    <li>
                        <a href="">Tous les jouets</a>
                    </li>
                    <li>
                        <a href="">Par marque</a>
                        <ul class="sub-menu">
                            <li><a href="">Ravensburguer</a></li>
                            <li><a href="">Asmodée</a></li>
                            <li><a href="">Mattel</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>

        <main> 
            <h2><?php echo $page_title ?></h2>

            <div class="items-container">
            