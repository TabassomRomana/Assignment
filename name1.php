<html>

<head>
<title>Registration form </title>
<link rel="stylesheet" href="style.css">
</head>

<body>

 <div id="sWrapper">

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
     <div class="sRows">
	 <div class="sLabel">  UserName:</div>
	 <div class ="sInput">
	     <input type ="text" class="inputCls" name="UserName">
	 </div>
	 </div>
	 <br>
  
   
	 </form>
	 <input type="submit" name="submit" value="Submit"><br>
</div>
</body>

</html>
<?php

$name="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
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





