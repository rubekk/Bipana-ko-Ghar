<?php 
    if($_POST){
        session_start();
        
        $formEmail=$_POST['email'];
        $formPassword=$_POST['password'];
        $encryptedPw=md5($formPassword);
        
        include "connection.php";

        if($connection){  
            $sql="SELECT uname FROM users WHERE email='$formEmail' AND pw='$encryptedPw'";
            $result=mysqli_query($connection, $sql);

            if(mysqli_num_rows($result) == 1) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $_POST['email'];

                header("Location: ./../view/index.php");
            }
            else {
                echo "Incorrect information";
            }
        }
        mysqli_close($connection);
    }
?>