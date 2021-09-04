<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container">
            <div class="left" id="item">
                GYM
            </div>
            <div class="navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#" onclick="window.location.href = 'plan.php'">Plans</a></li>
                    <li><a href="#" onclick="window.location.href = 'trainer.php'">Trainer</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="right">
                <button onclick="window.location.href='login.html';" class="btn">Login</button>
            </div>
        </div>
    </header>
    <section>
        <div class="home">
            <div class="glass-rect">
                <div class="main">
                    <h2 class="title">
                        Welcome,<br>
                        To our Gym.
                    </h2>
                    <p class="desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Quasi nesciunt corrupti dolores est iure deleniti quis.
                    </p>
                    <button class="btn1" onclick="window.location.href='Register/index.html';">Become a Member</button>
                </div>
                <div class="img-wrapper">
                    <img src="img/banner.png" alt="Loading...">
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="home">
        <div class="img-wrapper1">
            <img src="" alt="Loading...">
        </div>
        <div class="main1">
            <h2>Story ABOUT us</h2>
        </div>
    </section> -->
</body>

</html>