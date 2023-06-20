<?php
/**
 * Projet                   Dynamis
 * @file                    index.php
 * @brief                   This file is designed to manage the navigation of the site
 * @author                  Created by Timothée RAPIN
 * Creation date            20.06.2023
 * update                   20.06.2023
 * @version                 0.1
 * @note                    Creation of the file
 */


// Start a new session
session_start();

// Include the controller files
require_once "Controller/navigation.php";

if (isset($_GET['action'])) {

    // Store the value of 'action' in a variable
    $action = $_GET['action'];

    // Use a switch statement to determine which function to call based on the value of 'action'
    switch ($action) {
        case 'home' :
            home();
            break;

        case 'lost' :
            lost();
            break;

        // If the value of 'action' is not recognized, call the 'lost' function
        default :
            lost();
    }
}

// Call the 'home' function if 'action' is not set
else {
    home();
}