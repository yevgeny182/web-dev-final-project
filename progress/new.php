<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MilkTEAbar</title>
  <link rel="icon" href="images/generic logo.jpg">
  <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">

</head>

<body>

<div id="navbar">
    <div id="logo-name">
      <h1>MilkTEAbar</h1>
    </div>
  </div>

<div class="form-container" id="registration-form">
	<div id="reg-header">
		<h2>Registration Form</h2>
	</div>
	<form method="POST" action="new1.php" id="register-form">
		<input type="text" name="a" class="field" required pattern="[a-zA-Z}+" placeholder="Username" />
		<input type="email" name="b" placeholder="Email" required/>
		<input type="Password" name="c" placeholder="Password" required/>
		<input type="tel" name="d" placeholder="Telephone Number" required>
		<input type="submit" name="d" value="Submit"  />
	</form>
	<div class="lower-div">		
		<a href="login.php"><button class="btn">Back</button></a>
	</div>

</div>

</body>
</html>