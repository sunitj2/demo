<!DOCTYPE html>
<html lang="en">
<head>
	<title>REGISTRATION FORM</title>
	<style>
		h1.ex1 { 
			color: red;
  padding: 10px 5px 5px 20px;
}
.error{color: #FF0000;}

</style></head>
<body background="reg.jpg">
	<?php
$FnameErr = $LnameErr = $emailErr = $genderErr = $phonenumberErr = $bdayErr = "";
$Fname = $Lname = $email = $gender = $bday = $phonenumber = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Fname"])) {
    $FnameErr = "Name is required";
  } else {
    $Fname = test_input($_POST["Fname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$Fname)) {
      $FnameErr = "Only letters and white space allowed";
  }
  }
  
  if (empty($_POST["Lname"])) {
    $LnameErr = "Name is required";
  } else {
    $Lname = test_input($_POST["Lname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$Lname)) {
      $LnameErr = "Only letters and white space allowed";
  }
}

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["bday"])) {
    $bdayErr = "Birthday is required";
  } else {
    $bday = test_input($_POST["bday"]);
  }

  if (empty($_POST["phonenumber"])) {
    $phonenumberErr = "Phone Number is required";
  } else {
    $phonenumber = test_input($_POST["phonenumber"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h1 class=ex1 align="left">MEMBERSHIP REGISTERION</h1>
	<p align="left">Complete the form below to sign up for our membership service</p>
	<form  method="post">
<h2 align="left">First Name:<span class="error">* <?php echo $nameErr;?></span> <br><input type="text" name="name"><br></h2>
<h2 align="left">Last Name:<span class="error">* <?php echo $nameErr;?></span>	<br><input type="text" name="name"><br></h2>
<h2 align="left">Birthday:<span class="error">* <?php echo $bdayErr;?></span><br><input type="date" name="bday"><br></h2>
<h2 align="left">Gender:<span class="error">* <?php echo $genderErr;?></span> <br>
		<input type="radio" name="gender" value="male" >Male
  		<input type="radio" name="gender" value="female"> Female
  		<input type="radio" name="gender" value="other"> Other</h2>
		
<h2 align="left">E-mail:<span class="error">* <?php echo $emailErr;?></span>   	<br><input type="email" name="email"><br></h2>
<h2 align="left">Phone Number:<span class="error">* <?php echo $phonenumberErr;?></span> <br><input type="tel" name="phonenumber"><br></h2>

<br><input type="submit">
<input type="reset">
</form>
</body>
</html>