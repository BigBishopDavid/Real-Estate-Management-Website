<?php

    try {
        define("HOSTNAME", "localhost"); // Host
        define("DBNAME", "homeland"); // Database name
        define("USERNAME", "root"); // Username
        define("PASSWORD", ""); // Password

        $conn = new PDO("mysql:host=".HOSTNAME.";dbname=".DBNAME, USERNAME, PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
?>