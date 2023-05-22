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
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="screen-style.css">
<?
	if($_REQUEST['action2'] == 'save1'){

		$strUp = "UPDATE `smart_meter_price` SET `price` = '".$_REQUEST['price']."'";
		$queryUp = mysqli_query($dblink,$strUp);

	}

	if($_REQUEST['action2'] == 'save2'){

		$strDel = "DELETE FROM meter_time";
		$queryDel = mysqli_query($dblink,$strDel);
		$strUptime = "INSERT INTO `meter_time` (`day`,`month`,`year`,`hour`, `mins`) VALUES ('".$_REQUEST['day']."','".$_REQUEST['month']."','".$_REQUEST['year']."','".$_REQUEST['hour']."','".$_REQUEST['mins']."')";

		$queryUptime = mysqli_query($dblink,$strUptime);

	}
	$strPrice = "SELECT * FROM smart_meter_price";
	$queryPrice = mysqli_query($dblink,$strPrice);
	$resultPrice = mysqli_fetch_array($queryPrice);

	$strTime = "SELECT * FROM meter_time";
	$queryTime = mysqli_query($dblink,$strTime);
	$resultTime = mysqli_fetch_array($queryTime);

?>



<p id="rcorners1">ตั้งค่าไฟฟ้าต่อหน่วย</p>



<table>
<form name="form1" method="post" action="screen.php">
	<input type="hidden" name="action" value="config">
	<input type="hidden" name="action2" value="save1">


<?
	if($queryUp){
		echo "<p><font color='green'>*****บันทึกเรียบร้อย*****</font></p>";
	}
?>	
<div class="add_meter-button">
	<input style="margin-top: 2%; max-width: 100px;" type="number" name="price" min="0.01" step="0.01" value="<?=$resultPrice['price'];?>"> 
	<p id="head-text2">บาท</p>
    <input class="button3" style="padding: 5px; max-width: 100px; margin-top: 1%;" type="submit" value="บันทึก">
</div>
</table>
</form>

<hr>
<p id="rcorners1">ตั้งค่าการส่งไลน์อัตโนมัติ</p>
<form name="form2" method="post" action="screen.php">
	<input type="hidden" name="action" value="config">
	<input type="hidden" name="action2" value="save2">

<table class="setting-table">

<tr>
	<td>
     <div class="add_meter-button"> 
	    <p id="head-text2">วันที่</p> 	
		        <select name="day" style="max-width:130px">
					<option value="<?=$resultTime['day'];?>" checked><?=$resultTime['day'];?></option>
					<?for($d=1;$d<=31;$d++){?>
						<option value="<?=$d;?>"><?echo $d;?></option>	
					<?}?>		
				</select>
	 </div>
	 <div class="add_meter-button"> 
		<p id="head-text2">เดือน</p> 	
		        <select name="month" style="max-width:130px">
					<option value="<?=$resultTime['month'];?>" checked><?=$arrMonthTh[$resultTime['month']];?></option>
					<?for($d=1;$d<=12;$d++){?>
						<option value="<?=$d;?>"><?echo $arrMonthTh[$d];?></option>	
					<?}?>		
				</select>
	 </div>
	 <div class="add_meter-button">  
		<p id="head-text2">พ.ศ.</p> 	
		        <select name="year" style="max-width:130px;">
					<option value="<?=$resultTime['year'];?>" checked><?=$resultTime['year'];?></option>
					<?for($d=2566;$d<=2576;$d++){?>
						<option value="<?=$d;?>"><?echo $d;?></option>	
					<?}?>		
				</select>	
	 </div>

	</td>
</tr>
<tr>	
	
    <td width="">
		</div>
		<div class="add_meter-button"> 
	    <p id="head-text2">เวลา</p> <input type="number" style="max-width:130px;" name="hour" min="00" max="23" value="<?=$resultTime['hour'];?>" >
		</div>
		
		<div class="add_meter-button"> 
		<p id="head-text2">นาที</p> <input type="number" style="max-width:130px;" name="mins" min="00" max="59" value="<?=$resultTime['mins'];?>">
        <input  class="button3" style="padding: 5px; max-width: 20em; margin-top: 1%;" type="submit" value="บันทึก">
		</div>
	</td>	
</tr>

<?
	if($queryUptime){
		echo "<p><font color='green'>*****บันทึกเรียบร้อย*****</font></p>";
	}
?>
</table>
</form>
<hr>