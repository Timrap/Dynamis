<?php
/**
 * Project                  Dynamis
 * @file                    navigation.php
 * @brief                   This file is designed to manage the navigation of the site
 * @author                  Created by Timothée RAPIN
 * Creation date            20.06.2023
 * @update                  20.06.2023
 * @version                 0.1
 * @note                    Creation of this file
 */

/**
 * @brief This function is designed to display the home page
 * @return void
 */
function home()
{
    require_once "View/home.php";
}

/**
 * @brief This function is designed to inform the user that the resource requested doesn't exist (if the user modify the url manually)
 * @return void
 */
function lost()
{
    require_once "View/lost.php";
}