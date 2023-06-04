<?php
    include "connection.php";

    if($connection){    
        $sql="CREATE table users(
            id INT PRIMARY KEY AUTO_INCREMENT,
            uname VARCHAR(25) NOT NULL,
            email VARCHAR(50) NOT NULL,
            pw VARCHAR(25) NOT NULL
        )";
        mysqli_query($connection, $sql);
    }    
    mysqli_close($connection);
?>