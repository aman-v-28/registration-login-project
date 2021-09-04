<?php
session_start();

    include 'conf.php';

    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $query = " select * from members where member_email = '$email' and password = '$password'";

        $data = mysqli_query($conn,$query);
        $total = mysqli_num_rows($data);

        if($total == 1)
        {
            $_SESSION['email'] = "$email";
            header('location:profile.php');
        }
        else{
            echo " Login Failed! You have entered wrong credentials.";
        }

    }
    // else{
    //     echo "Please Login to continue";
    // }
?>