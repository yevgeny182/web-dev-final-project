<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>milkTEAbar</title>
  <link rel="icon" href="images/generic logo.jpg">
  <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">

</head>

<body>


<?php
if(isset($_POST['s'])){
$x=$_POST['username'];
$y=$_POST['password'];
$conn = new mysqli("localhost","root","");
$select = $conn->select_db("milkteabar");
$a= $conn->query("select * from users where name='$x' and pass='$y' ");
$b=mysqli_num_rows($a);

if($b>0){
$_SESSION['name']=$x;
header('location:sales.php');
}
else{
  echo'<script>alert("Wrong user!");</script>';
}

}
?>
  <div id="navbar">
    <div id="logo-name">
      <h1>milkTEAbar</h1>
    </div>
  </div>

  <div class="form-container">
    <div id="form-logo">
      <img src="images/generic logo.jpg" alt="Cafe+_logo">
    </div>
    <div id="form-input">
      <form method= 'post' action=''>
        <input type='text' name='username' id='username' placeholder='Username'>
        <input type='password' name='password' id='password' placeholder='Password'>
        <input type='submit' name='s' id='login' value='Login'>
      </form>
    </div>
    <div class="lower-div">
     <a href="new.php"><button class="btn">Register Here</button></a>
     <h6> Copyright milkTEAbar™ 2021 All Rights Reserved </h6>
    </div>
  </div>

</body>

</html>