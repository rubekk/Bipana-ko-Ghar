<?php
    if($_POST){
        session_start();
        
        // data from form
        $propertyName=$_POST['pname'];
        $address=$_POST['address'];
        $area=$_POST['area'];
        $price=$_POST['price'];
        $info=$_POST['info'];
        $imgAddress=$_FILES['image'];
        $coordinates=$_POST['coordinates'];
        $coordinatesArr=explode(",",str_replace('"',"",$coordinates));
        
        include "connection.php";

        if($connection){   
            $uname=$_SESSION['username'];

            $sql="SELECT id FROM users where uname='$uname'";
            $result=mysqli_query($connection, $sql);
            $row=$result->fetch_assoc();

            $id=$row['id'];

            // uploading data to property table
            $sql="INSERT INTO properties(id, pname, `address`, area, latitude, longitude, price, info) VALUES ('$id','$propertyName', '$address','$area', '$coordinatesArr[0]', '$coordinatesArr[1]', '$price', '$info')";
            mysqli_query($connection, $sql);   
            
            // storing image
            $target_dir="./../uploads/";
            $sql="SELECT pid FROM properties WHERE id='$id' AND `pname`='$propertyName' AND `area`='$area' AND `price`='$price' AND `info`='$info'";

            $result=mysqli_query($connection, $sql);
            $row=$result->fetch_assoc();

            $pid=$row['pid'];

            foreach ($imgAddress['name'] as $key => $value) {
                $target_file = $target_dir . str_replace(" ","",basename($imgAddress["name"][$key]));
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                
                $check = getimagesize($imgAddress["tmp_name"][$key]);
                if($check !== false) {
                    move_uploaded_file($imgAddress['tmp_name'][$key], $target_file);

                    $isThumbnail=0;
                    if($key==0) $isThumbnail=1;
                    else $isThumbnail=0;

                    
                    $sql="INSERT INTO pictures(pid, imgPath, isThumbnail) VALUES ('$pid', '$target_file', '$isThumbnail')";

                    mysqli_query($connection, $sql);
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

            header("Location: ./../view/message.php?message=uploaded");
        }    
        else{
            header("Location: ./../view/message.php?message=notuploaded");
        }
        mysqli_close($connection);
    }
?>