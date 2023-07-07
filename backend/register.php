<?php 
    if($_POST){
        $formName=$_POST['name'];
        $formPhone=$_POST['phoneno'];
        $formEmail=$_POST['email'];
        $formPassword=$_POST['password'];
        $formCpassword=$_POST['cpassword'];
        $encryptedPw=md5($formPassword);

        include "connection.php";

        if($connection){    
            $sql="SELECT uname FROM users where uname='$formName' OR email='$formEmail'";
            $result=mysqli_query($connection, $sql);

            if(!mysqli_num_rows($result)>0 && $formPassword==$formCpassword){
                $sql="INSERT INTO users(uname, phone, email, pw) VALUES ('$formName', '$formPhone', '$formEmail', '$encryptedPw')";
                mysqli_query($connection, $sql);

                echo "Registration successful";
                header("Location: ./../view/message.php?message=registered");
            }
            else{
                echo "Cannot register";
                header("Location: ./../view/message.php?message=notregistered");
            }
        }    
        mysqli_close($connection);
    }
?>