<?
	ob_start() 
?>
<?
	session_start();
?>
<?php
	date_default_timezone_set('Asia/Krasnoyarsk'); 
?>
<?
		include( "include/function.php");
		$dblink = connect_db();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

 <body>
  <html>
<head>
</head>
<body>

<?

			echo "<br>".$school_id = $_POST["school_id"];
			echo "<br>".$student_id = $_POST["txtName"];
			echo "<br>".$FilesName = $_POST["txtName"].$_FILES["filUpload"]["name"];

	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../DVT_surin/".$school_id."/".$_POST["txtName"].$_FILES["filUpload"]["name"]))
	{
		echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//

			echo "<br>".$school_id = $_POST["school_id"];
			echo "<br>".$student_id = $_POST["txtName"];
			echo "<br>".$FilesName = $_POST["txtName"].$_FILES["filUpload"]["name"];


		echo $strSQL = "INSERT INTO `electri3_test`.`dvtstd_picture`(`FilesID`, `school_id`, `student_id`, `FilesName`) VALUES 
		('NULL','$school_id','$student_id', '$FilesName')";
		$objQuery = mysqli_query($dblink,$strSQL);		
	}

			if($_SESSION["Status"] != "")
			{
				header("location:../MyCollege/main_page.php?page=8&menu=6&do=62&student_id=$student_id&group_id=$group_id&school_id=$school_id");
			}

?>
</body>
</html>
 </body>
</html>
