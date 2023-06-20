<?php
/**
 * Projet                   Dynamis
 * @file                    gabarit.php
 * @brief                   This file is designed to provide the template for all the pages of the website with the header and the footer.
 * @author                  Created by Timothée RAPIN
 * Creation date            20.06.2023
 * update                   20.06.2023
 * @version                 0.1
 * @note                    Creation of the file
 */
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Specify the character encoding -->
        <meta charset=utf-8" />

        <!-- Specify the initial scale -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Page title -->
        <title></title>

        <!-- SEO keywords and description -->
        <meta name="keywords" content="Dynamis, Chorale, Gospel, Vevey" />
        <meta name="description" content="Présentation de la chorale de gospel Dynamis basée à Vevey" />

        <!-- Link to CSS files -->
        <link rel="stylesheet" href="../View/Contents/CSS/reset.css" />
        <link rel="stylesheet" href="../View/Contents/CSS/style.css" />
        <!--<link rel="icon" href="../View/Contents/Icons/favicon.png">-->
    </head>
    <body>
        <header>
            <nav>
                <nav>
                    <ul>
                        <li><a href="index.php?action=home">Accueil</a></li>
                    </ul>
                </nav>
            </nav>
        </header>

        <?php if (isset($content)) : ?>
            <!-- Input the content of the page -->
            <?=$content; ?>
        <?php else: ?>
            <!-- If the content could not be loaded, display an error message -->
            <main id="content" class="container">
                <p>Le contenu de la page n'a pas pu être chargé.</p>
            </main>
        <?php endif;?>

        <footer>
            <span>&copy; Untitled. All rights reserved. | Design by Timothée Rapin.</span>
        </footer>
    </body>
</html>