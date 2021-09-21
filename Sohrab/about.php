<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            
        }
        .About{
            margin: 0;
            padding: 0;
            width: 99vw;
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center 
        }
        .AboutImg{
            height: 55vh;
        }
    </style>
</head>
<body>
<?php
  include 'navbar.php';
?>
<main>
    <div class="About">
        <h1>About The Project</h1>
        <img src="Img/About.png" class="AboutImg" alt="">
    </div>
</main>
<?php
  include 'footer.php';
?>
</body>
</html>