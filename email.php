<html>

<head>
<title>Registration form </title>
<link rel="stylesheet" href="style.css">
</head>

<body>


 <div id="sWrapper">

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <div class="sRows">
	
	<div class="sLabel"> Email:</div>
    <input type="email" id="email" name="email" >
	
	 <br>
	 <br>
      <input type="submit" name="submit" value="Submit"><br>
    </div>
	 </form>
	 
	
    





</body>
</html>

<?php

$email="";
$emailErr="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

}
  
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


echo "<h2>Your Input:</h2>";
echo $email;
echo "<br>";
?>