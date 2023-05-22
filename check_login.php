<?
	ob_start() 
?>
<?
	session_start();
?>
<?php
	date_default_timezone_set('Asia/Bangkok'); 
?>
<?
		include( "include/function.php");
		$dblink = connect_db();
		include( "include/date.php");
		include( "include/array.php");
		@ini_set('display_errors', '1');  //?????? err

		echo $strCk = "SELECT * FROM smart_meter_member WHERE customer_id = '".$_REQUEST['customer_id']."' AND customer_password = '".$_REQUEST['customer_password']."'";
		$queryCk = mysqli_query($dblink,$strCk);
		echo "->>".$num = mysqli_num_rows($queryCk);
		$objResult = mysqli_fetch_array($queryCk);

		if($num != 0){
			echo "<br>".$_SESSION["customer_id"] = $objResult["customer_id"];	
			echo "<br>".$_SESSION["customer"] = $objResult["customer"];
			header("location:index.php");
		}else{
			$text = "**ข้อมูลไม่ถูกต้อง**";
			header("location:index2.php?text=".$text."");
		}









?>