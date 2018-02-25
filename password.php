<html>

<head>
<title>Registration form </title>
<link rel="stylesheet" href="style.css">
</head>

<body>


 <div id="sWrapper">

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <div class="sRows">
	
	<div class="sLabel"> Password:</div>
    <input type="password" id="password" name="password" >
	
	 <br>
	 <br>
      <input type="submit" name="submit" value="Submit"><br>
    </div>
	 </form>
	 
	
    





</body>
</html>

<?php

$password="";
$passwordErr="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["password"])) {
    $passwordErr = ("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/");
  } else {
    $password = test_input($_POST["password"]);
  }



$password = '<p class="errText">Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit</p>';

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