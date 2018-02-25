
		
		
		
		
		<html>

<head>
<title>Registration form </title>
<link rel="stylesheet" href="style.css">
</head>

<body>

 <div id="sWrapper">

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <div class="sRows">
	 <div class="sLabel">  UserName:</div>
	 <div class ="sInput">
	     <input type ="text" class="inputCls" name="name">
	 </div>
	 
	 <br>
  <input type="submit" name="submit" value="Submit"><br>
   </div>
	 </form>
	 
</div>
</body>

</html>
<?php

$name=$nameErr="";
 if (empty($_POST["name"])) {
        $nameErr = "You Forgot to Enter  Name!";
    } else {
        $name = test_input($_POST["name"]);
        //Checks if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed"; 
        }
		
	}
  
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
?>
