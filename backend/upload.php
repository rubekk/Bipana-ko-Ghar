<?php
    if($_POST){
        session_start();
        
        $propertyName=$_POST['pname'];
        $address=$_POST['address'];
        $area=$_POST['area'];
        $price=$_POST['price'];
        $info=$_POST['info'];
        
        include "connection.php";

        if($connection){   
            $sql="INSERT INTO property(pname, `address`, area, price, info) VALUES ('$propertyName', '$address', '$area', '$price', '$info')";
            mysqli_query($connection, $sql);        
        }    
        mysqli_close($connection);
    }
?>