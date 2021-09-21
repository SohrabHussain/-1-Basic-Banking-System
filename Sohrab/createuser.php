<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="user.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
</head>

<body>
  
<?php
    include 'config.php';
    if(isset($_POST['Submit'])){
      $FName=$_POST['FName'];
      $LName=$_POST['LName'];
      $City=$_POST['City'];
      $Country=$_POST['Country'];
      $Amount=$_POST['Amount'];
      $Email=$_POST['Email'];
      $Password=$_POST['Password'];
      $sql="insert into users(FName,LName,City,Country,Balance,email,Password) values('{$FName}','{$LName}','{$City}','{$Country}','{$Amount}','{$Email}','{$Password}')";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo "<script> alert('Hurray! User created');
             window.location='transfermoney.php';
             </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

<main>
        <div class="mainframe">
            <div class="container">
            <div class="createAcc">
            <img class="createAccImg" src="Img/Add User.png" alt="">
            <p>Create an Account</p>
            </div>
            <br>
            <form  method="POST">
            <input type="text" class="input FName" id="FName" type="text" name="FName" placeholder="First Name">
            <input type="text" type="text" class="input LName" id="LName" name="LName" placeholder="Last Name"><br>
            <input type="text" class="input City" id="City" name="City" type="text" placeholder="City">
            <input type="text" class="input Country" id="Country" type="text" name="Country" placeholder="Country" default="India"><br>
            <input type="number" class="input  Amount" id="Amount" type="number" name="Amount" placeholder="&#8377 Amount"><br>
            <input type="email" class="input Email" id="Email" type="email" name="Email" placeholder="Email  address"><br>
            <input type="Password" class="input Password" Id =Password name="Password" placeholder="Password"><br>
            <div class="CheckBox">
            <div class="btn">
            <input name="Submit" type="submit" class="createAccountButton" value="Create Account">
            </div>
            </form>
        </div>
    </div>
</main>
<?php
  include 'footer.php';
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>