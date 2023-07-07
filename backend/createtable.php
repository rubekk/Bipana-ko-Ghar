<?php
    include "connection.php";

    if($connection){    
        // $sql="CREATE table users(
        //     id INT PRIMARY KEY AUTO_INCREMENT,
        //     uname VARCHAR(25) NOT NULL,
        //     email VARCHAR(50) NOT NULL,
        //     pw VARCHAR(25) NOT NULL
        // )";
        // $sql="CREATE table properties(
        //     pid INT PRIMARY KEY AUTO_INCREMENT,
        //     id INT NOT NULL,
        //     pname VARCHAR(100) NOT NULL,
        //     `address` VARCHAR(100) NOT NULL,
        //     area VARCHAR(50) NOT NULL,
        //     latitude double NOT NULL, 
        //     longitude double NOT NULL, 
        //     price BIGINT(20) NOT NULL, 
        //     info TEXT,
        //     uploadedon DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        //     FOREIGN KEY (id) REFERENCES users(id)
        // )";
        $sql="CREATE table pictures(
            pid INT NOT NULL,
            phid INT PRIMARY KEY AUTO_INCREMENT,
            `imgpath` VARCHAR(100) NOT NULL,
            `isthumbnail` BOOLEAN NOT NULL DEFAULT 0,
            FOREIGN KEY (pid) REFERENCES properties(pid)
        )";
        mysqli_query($connection, $sql);

        echo("successful");
    }    
    mysqli_close($connection);
?>