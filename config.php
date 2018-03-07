<?php
   define("DB_SERVER", "localhost:3306");
   define("DB_USERNAME", "linzimai");
   define("DB_PASSWORD", "maisygould98");
   define("DB_DATABASE", "100ford");
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>