<html>

<head>
<title>Registration form </title>
<link rel="stylesheet" href="style.css">
</head>

<body>


 <div id="sWrapper">

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <div class="sRows">
	
	
   <div class="sLabel">Degree:</div>
	    <input type="checkbox" name="degree" id="ssc" >
       <label for="certificate">SSC</label>
       <input type="checkbox" name="degree" id="hsc"  >
       <label for="certificate">HSC</label>
       <input type="checkbox" name="degree" id="bsc" >
       <label for="certificate">BSC</label>
       <input type="checkbox" name="degree" id="msc" >
	    <label for="certificate">MSC</label>
	   
	    <br>
	 <br>
      <input type="submit" name="submit" value="Submit"><br>
    </div>
	 </form>
	 
	
    





</body>
</html>

<?php

$degree="";
$degreeErr="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }

}
  
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


echo "<h2>Your Input:</h2>";
echo $degree;
echo "<br>";
?>