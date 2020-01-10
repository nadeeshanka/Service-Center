<?php

@$name = $_FILES['file']['name'];
$extension = strtolower(substr($name, strpos($name, '.') + 1));
@$tmp_name = $_FILES['file']['tmp_name'];
@$type = $_FILES['file']['type'];
@$size = $_FILES['file']['size'];
$max_size = 74752;




if(isset($name)){

  if(!empty($name)){
  	
    if(($extension == 'jpg' || $extension == 'jpeg')&& $type == 'image/jpeg' && $size <= $max_size){
		
	// Image submitted by form. Open it for reading (mode "r")
		$fp = fopen($_FILES['file']['tmp_name'], "r");
		
		// If successful, read from the file pointer using the size of the file (in bytes) as the length.
		if ($fp) {
			$content = fread($fp, $_FILES['file']['size']);
			fclose($fp);
		
			// Add slashes to the content so that it will escape special characters.
			// As pointed out, mysql_real_escape_string can be used here as well. Your choice.
			$content = addslashes($content);
			$content= mysqli_real_escape_string($conn, $content);
			$name= mysqli_real_escape_string($conn, $name);
			// Insert into the table "table" for column "image" with our binary string of data ("content")
			mysqli_query($conn,"INSERT INTO product(serial_nophoto) Values('$name')") or 
			die("Couldn't execute query in your database!".mysqli_error($conn));
			
			echo 'Data-File was inserted into the database!|';
			echo '<a href="showImages.php?id=1">view</a>';
		}
		
    else{
      echo 'There was an error!';
    }
  }
  else{
    echo 'File must be jpg/jpeg and must be 73 kilobyte or less! ';
  }

}

  else {
  echo 'Please select a file!';

  }
}

?>
<!DOCTYPE>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> File upload</title>
</head>
<body>
<form action = "uploadFile.php" method= "POST"  enctype = "multipart/form-data">
      <input type = "file" name = "file"><br><br>
      <input type = "submit" value = "Submit">
</form>
</body>
</html>




<?php
//Open a new connection to the MySQL server
include("conni.php");
mysqli_select_db($conn,"cs2018g2");
if (isset($_GET['nic'])) {
	$id= mysqli_real_escape_string($conn, $_GET['nic']);
	$mysql_run=mysqli_query($conn, "SELECT * FROM customer WHERE  NIC_No='$nic';");
	
	while ($row=mysqli_fetch_assoc($mysql_run)) {
		
		header("Content-type: image/jpeg");
		$name=$row['name'];
		$type=$row['type'];
		$size=$row['size'];
		//header("Content-length: $size");
		//header("Content-type: $type");
		//header("Content-Disposition: attachment; filename=$name");
		echo $image=$row['image'];
		
	}
	
	
	

}

else {
	echo 'Error!';
}

