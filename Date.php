
		
		
		
		
		<html>

<head>
<title>Registration form </title>
<link rel="stylesheet" href="style.css">
</head>

<body>

 <div id="sWrapper">

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <div class="sRows">
	 <div class="sLabel">  Date:</div>
	 <div class ="sInput">
	     <input type ="text" class="inputCls" name="date">
	 </div>
	 
	 <br>
  <input type="submit" name="submit" value="Submit"><br>
   </div>
	 </form>
	 
</div>
</body>

</html>
<?php
$Date="";
$DateErr="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(preg_match("/^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$/", $_POST["Date"]) === 0){
 $Date = '<p class="errText">Date must comply with this mask: YYYY-MM-DD</p>';
}
 else {
    $password = test_input($_POST["password"]);
  }
}
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


echo "<h2>Your Input:</h2>";
echo $Date;
echo "<br>";
?>
