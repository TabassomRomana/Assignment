<html>

<head>
<title>Registration form </title>
<link rel="stylesheet" href="style.css">
</head>

<body>


 <div id="sWrapper">

<form  method="post" action=">
     <div class="sRows">
	
	<div class="sLabel"> Password:</div>
    <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
	
	 <br>
	 <br>
      <input type="submit" name="submit" value="Submit"><br>
    </div>
	 </form>
	 
	
    





</body>
</html>

<?php

$passwordErr=$cpasswordErr="";
$password=$cpassword="";
if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
        $password = test_input($_POST["password"]);
        $cpassword = test_input($_POST["cpassword"]);
        if (strlen($_POST["password"]) <= '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } else {
            $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
        }
    }

  
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


echo "<h2>Your Input:</h2>";
echo $password;
echo "<br>";
?>