
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div id="sWrapper">

<form  method="post" enctype="multipart/form-data" action="upload.php">
  
     <div class="sRows">
	
	<div class="sLabel"> Upload File:</div>
    <input type="file" name="fileToUpload" id="fileToUpload">
	
	 <br>
	 <br>
    <input type="submit" name="submit" value="Submit">
    </div>
	 </form>


</body>
</html>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
?>