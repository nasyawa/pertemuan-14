<?php
    include "koneksi2.php";
    $sql = "CREATE DATABASE dbpro";
    if (mysqli_query($conn, $sql)){
        echo "Database created succesfully";
    } else{
        echo "Error creating database: ". mysqli_error($conn);
    }
    mysqli_close($conn);