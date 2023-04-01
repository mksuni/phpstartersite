<?php
   // require_once ("/Includes/simplecms-config.php");
    $filepath = dirname(__FILE__, 2);
    require_once ($filepath."/Includes/simplecms-config.php");
    require_once ($filepath."/Functions/database.php");

    // Create database connection
    $databaseConnection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($databaseConnection->connect_error)
    {
        die("Database selection failed: " . $databaseConnection->connect_error);
    }

    // Create tables if needed.
    prep_DB_content();
?>
