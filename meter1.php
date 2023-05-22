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
  <link rel="stylesheet" href="css\screen-style.css">

<p id="rcorners1">ข้อมูลมิเตอร์/ลูกค้า</p>

<?
	if($_REQUEST['action10'] == 'del'){
		$strDel = "DELETE FROM smart_meter_code WHERE meter_code = '".$_REQUEST['meter_code']."' LIMIT 1";
		$queryDel = mysqli_query($dblink,$strDel);

	}



	$strSel = "SELECT * FROM smart_meter_code";
	$querySel = mysqli_query($dblink,$strSel);
	//echo "-->".$numSel = mysqli_num_rows($querySel);
	while($resultSel = mysqli_fetch_array($querySel)){
		$arrMeter[] = $resultSel['meter_code'];
		$arrMeterName[$resultSel['meter_code']] = $resultSel['meter_name'];
		$arrMeterQrCode[$resultSel['meter_code']] = $resultSel['meter_qrcode'];
		$arrMeterLineToken[$resultSel['meter_code']] = $resultSel['meter_linetoken'];
		$arrMeterBrance[$resultSel['meter_code']] = $resultSel['meter_brance'];
		$arrMeterDetail[$resultSel['meter_code']] = $resultSel['meter_detail'];

	}

?>


<div class="blank">
    <p style="font-size: 0px;"></p>
</div>
<table class="blueTable">
	<thead>
	<tr>
		<th id="head-text">รหัส</th>
		<th id="head-text">ชื่อมิเตอร์</th>
		<th id="head-text">Line Token</th>
		<th id="head-text">อาคาร/ห้อง</th>
		<th id="head-text">รายละเอียด/ผู้พัก</th>
		<th id="head-text">แก้ไข</th>
	</tr>
	</thead>
	<?$i == 0;?>
	<?foreach ($arrMeter as  $value) {$i++;?>
		<tr>
			<td><?echo $value;?></td>
			<td><?echo $arrMeterName[$value];?></td>
			<td><?echo $arrMeterLineToken[$value];?></td>
			<td><?echo $arrMeterBrance[$value];?></td>
			<td><?echo $arrMeterDetail[$value];?></td>
			<td align="center">
				<a href="screen.php?action=meter3&meter_code=<?=$value;?>" title="edit data"><img src="pic/edit.png" width="20px" height="20px"></a>
 | 
				<a href="screen.php?action=meter&action10=del&meter_code=<?=$value;?>" title="Delete data"><img src="pic/delete.png" width="15px" height="15px" onclick="return confirm('Are you sure?')"></a>


			</td>

		</tr>
	<?}?>



</table>





<hr>
<a class="button3" style="padding: 5px; width: 20em; margin-top: 1%; text-align: center;" href="screen.php?action=meter2">เพิ่มมิเตอร์</a>
<hr>