<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body{
            background-color: #8d33f3;
        }
        .profile{
            margin: 15px 30px;
            margin-top: 30px;
            font-size: 30px;
            color: white;
            font-weight: 600;
        }
        table{
            margin: 40px 150px;
            margin-top: 5px;
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
        .plan{
            color: white;
            margin: 15px 30px;
            font-size: 20px
        }

        button{
            font-weight: 600;
            padding: 6px;
            color: #8d33f3;
            border: 2px solid white;
            border-radius: 10px;
        }
        p{
            font-size: 18px;
        }
    </style>
</head>
<body>

<?php

session_start();

$email = $_SESSION['email'];
$servername = "localhost";
$username = "root";
$password = "";
    
// Create a conn
$conn = mysqli_connect($servername, $username, $password);
    
mysqli_select_db($conn,'test');

$query = " select * from members where member_email = '$email' ";

$result = mysqli_query($conn,$query);
// $data = mysqli_fetch_assoc($result);

while($row = mysqli_fetch_array($result))
{
    ?>
    <p>
    <?php echo "Welcome " . $row['member_name'];?>
    </p>

    <div class="profile">Profile :</div>
    <table>
        <tr>
            <th>Email</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>D-O-B</th>
            <th>Gender</th>
        </tr>
        <br>
        <tr>
            <td> <?php echo $row['member_email']; ?> </td>
            <td> <?php echo $row['member_mobile']; ?> </td>
            <td> <?php echo $row['member_add']; ?> </td>
            <td> <?php echo $row['DOB']; ?> </td>
            <td> <?php echo $row['Gender']; ?> </td>
        </tr>
    </table> <br>
    <?php

}


$query = " select * from workout_session where workout_id in (select workout_id from workout where member_email = '$email') ";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
    ?>
    <div class="profile">
    Workout Details :
        <!-- <strong> :  &nbsp &nbsp  </strong> -->
    </div>
    <table>
        <tr>
            <th>Type</th>
            <th>Workout Id</th>
            <th>Days(per week)</th>
            <th>Duration</th>
        </tr>
        <br>
        <tr>
            <td><?php echo $row['Type']; ?> </td>
            <td><?php echo $row['workout_id']; ?> </td>
            <td><?php echo $row['days']; ?> </td>
            <td><?php echo $row['duration(hours)']; ?> </td>
        </tr>
    </table>
    <br><br>
    <?php
}



$query = " select * from plan_taken where member_email = '$email' ";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
    ?>
    <div class="plan">
        <strong>Membership Plan Taken :  &nbsp &nbsp  </strong>
        <button>
    <?php
        echo  $row['membership_id'] . " ( " . $row['description'] . " ) ";?>
    </button>
    </div>
    <?php
}
$query = " select * from trainer where trainer_id in (select trainer_id from trained_by where member_email = '$email') ";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
    ?>
    <div class="plan">
        <strong>Trainer :  &nbsp &nbsp  </strong>
        <button>
    <?php
        echo  $row['Trainer_name'];?>
    </button>
    </div>
    <?php
}
?>
</body>
</html>