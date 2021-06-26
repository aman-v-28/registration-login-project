<?php
session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password);
    
    mysqli_select_db($conn,'test');

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