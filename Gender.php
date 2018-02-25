<html>

<head>
<title>Registration form </title>
<link rel="stylesheet" href="style.css">
</head>

<body>


 <div id="sWrapper">

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <div class="sRows">
	
	
   <div class="sLabel">Gender:</div>
	    <input type="radio" name="gender" id="male" value="male">
       <label for="male">Male</label>
        <input type="radio" name="gender" id="female" value="female">
       <label for="female">Female</label>
      <input type="radio" name="gender" id="other" value="other">
       <label for="other">Other</label>
	   
	    <br>
	 <br>
      <input type="submit" name="submit" value="Submit"><br>
    </div>
	 </form>
	 
	
    





</body>
</html>

<?php

$gender="";
$genderErr="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
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


echo "<h2>Your Input:</h2>";
echo $gender;
echo "<br>";
?>