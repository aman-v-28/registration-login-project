<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plans</title>
    <style>
        body{
            background-color: #8d33f3;
        }
        .profile{
            margin: 0px 30px;
            margin-top: 50px;
            margin-bottom: 0px;
            font-size: 30px;
            color: white;
            font-weight: 600;
        }
        table{
            margin: 0px 150px;
        }
        table, th, td{
            border: 2px solid white;
            border-radius: 40px;
            color: grey;
            width: 1200px;
            text-align: center;
            padding: 5px;
            background-color: white;
        }
        th{
            color: black;
        }
    </style>
</head>
<body>
    

<?php

$servername = "localhost";
$username = "root";
$password = "";
    
// Create a conn
$conn = mysqli_connect($servername, $username, $password);
    
mysqli_select_db($conn,'test');

$query = " select * from trainer";

$result = mysqli_query($conn,$query);

    ?>
    <div class="profile">Trainers Details :</div>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Hired Date</th>
            <th>Email</th>
        </tr>
        <br>
        <?php
while($row = mysqli_fetch_assoc($result))
{
    ?>
        <tr>
            <td> <?php echo $row['Trainer_id']; ?> </td>
            <td> <?php echo $row['Trainer_name']; ?> </td>
            <td> <?php echo $row['Hired_date']; ?> </td>
            <td> <?php echo $row['Trainer_email']; ?> </td>
        </tr>
        <br>
        <?php
}
?>
</table> 
</body>
</html>