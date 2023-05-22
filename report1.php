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
		@ini_set('display_errors', '0');  //?????? err
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
 <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="screen-style.css">
  <title>smart meter</title>
  <META HTTP-EQUIV="Refresh"  CONTENT="60">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?
	if($_REQUEST['st_date'] == ''){
		$st_date = date("Y-m")."-01";
	}else{
		$st_date = $_REQUEST['st_date'];
	}
	if($_REQUEST['en_date'] == ''){
		$en_date = date("Y-m-d");
	}else{
		$en_date = $_REQUEST['en_date'];
	}
?>


<?
	$strSel = "SELECT * FROM smart_meter_code";
	$querySel = mysqli_query($dblink,$strSel);
	//echo "-->".$numSel = mysqli_num_rows($querySel);
	while($resultSel = mysqli_fetch_array($querySel)){
		$arrMeterXX[] = $resultSel['meter_code'];

	}
?>

<p id="rcorners1">รายงานการใช้พลังงานไฟฟ้า</p>


<form method="get" action="screen.php">
	<input type="hidden" name="action" value="report1">
	<input type="hidden" name="action2" value="report">

<table class="table">
<tr>
	<td class="tr-text">วันที่</td>
	<td><input type="date" name="st_date" value="<?=$st_date?>"></td>
	<td class="tr-text">ถึง</td>
	<td><input type="date" name="en_date" value="<?=$en_date?>"></td>
	<td class="tr-text">Meter</td>

	<td width="">
		<select name="meter" required>
			<?if($_REQUEST['meter'] != ''){?>
				<option value="<?=$_REQUEST['meter'];?>" selected><?=$_REQUEST['meter'];?>
			<?}?>
			<option value="All">All
			<?foreach($arrMeterXX as $value){?>
				<option value="<?=$value;?>"><?echo $value;?>
			<?}?>	


		</select>
	</td>
	<td colspan="0">
			<input class="find" type="submit" value="ค้นหา">
	</td>
</tr>

</table>
</form>


<?
		$strSel = "SELECT * FROM smart_meter_code";
		$querySel = mysqli_query($dblink,$strSel);
		while($resultSel = mysqli_fetch_array($querySel)){
			$arrMeter[$resultSel['meter_code']] = $resultSel['meter_linetoken'];
			$arrCustomerName[$resultSel['meter_code']] = $resultSel['meter_detail'];
		}

?>



<?if($_REQUEST['action2'] == 'report'){?>


	<table class="blueTable">
	<thead>
		<tr>
			<th id="head-text">Meter</th>
			<th id="head-text">จำนวนข้อมูล</th>
			<th id="head-text">กำลังไฟฟ้าสะสม(W)</th>
			<th id="head-text">พลังงานไฟฟ้าที่ใช้(Wh)</th>
			<th id="head-text">จำนวนหน่วย(Unit)</th>
			<th id="head-text">จำนวนเงิน(บาท)</th>
			<th id="head-text">ชื่อลูกค้า</th>
			<th id="head-text">ส่งข้อมูล</th>
		</tr>
	</thead>

	<?
		$e = 0;
		$diffDate = DateDiff($st_date,$en_date);
		//echo "diff -> ".$diffDate;
		$ckDateX = $_REQUEST['st_date'];
		$beginDate = $_REQUEST['st_date'];

//		echo "<br>----------->".$diffDate;
/*
		for($d=0;$d<$diffDate;$d++){
			echo "<br>->".$d."->".$ckDateX;
			echo "<br>----->".$strFileName = "data/".$ckDateX.".txt";
			$beginDate = date('Y-m-d',strtotime($ckDateX .' +1 day'));
			$ckDateX = $beginDate;

		}
*/
//echo "<br>--------------";

		for($dx=0;$dx<=$diffDate;$dx++){
			//echo "<br>->".$d."->".$ckDateX;
			$k = 0;
			$strFileName = "data/".$ckDateX.".txt";
			$objFopen = fopen($strFileName, 'r');
			if ($objFopen) {
				$date_old = 99;
				$date = 99;
				$h_old = 99;
				$i_old = 99;


				while (!feof($objFopen)) {$i++;
					$file = fgets($objFopen, 4096);
					//echo $i."-------->".$file."<br>";
					list($date,$time,$meter,$voltage,$current,$power,$energy,$frequency,$pf) = explode("@",$file);
					list($y,$m,$d) = explode("-",$date);
					list($h,$i,$s) = explode(":",$time);
					$CKdate = $y.$m.$d;
					$CKtime = (int)$h;
							if($_REQUEST['meter'] == 'All'){							
										$k++;
										$arrMeter[] = $meter;
										$arrCurrent[$meter][] = $current;
										$arrPower[$meter][] = $power;
										$arrEnergy[$meter][] = $energy;
									//*********New*******//
									$arrPowerNew[$meter][] = $power;
									$arrEnergyNew[$meter][] = $energy;
							}else{
									if($_REQUEST['meter'] == $meter){
											$arrMeter[] = $meter;
											$arrCurrent[$meter][] = $current;
											$arrPower[$meter][] = $power;
											$arrEnergy[$meter][] = $energy;
										//*********New*******//				
											$arrPowerNew[$meter][] = $power;
											$arrEnergyNew[$meter][] = $energy;
									}

							}
					}

				fclose($objFopen);
			}

			$beginDate = date('Y-m-d',strtotime($ckDateX .' +1 day'));
			$ckDateX = $beginDate;
		}

//echo "<br>------end--------<br>";

$Meter = array_unique($arrMeter);
$Minite = array_unique($arrCodeDateTimeMin);



/*
echo "<pre>";
	//print_r($arrEnergyMin);
	print_r($HourValue);
echo "</pre>";
*/

		$arrMeterX = array_unique($arrMeter);
		sort($arrMeterX);
		$arrDateX = array_unique($arrDate);
		sort($arrDateX);

		$strPrice = "SELECT * FROM smart_meter_price";
		$queryPrice = mysqli_query($dblink,$strPrice);
		$resultPrice = mysqli_fetch_array($queryPrice);

		$strFile = "customer.txt";
		$objFopen = fopen($strFile, 'r');
		if ($objFopen) {
			while (!feof($objFopen)) {$i++;
				$file = fgets($objFopen, 4096);
				//echo $i."->".$file."<br>";
				list($meter,$name) = explode("@",$file);
				$arrName[$meter] = $name;
			}
			fclose($objFopen);
		}

	?>

	<?$dataForSend = "data@999";?>
	<?foreach($arrMeterX as $value){?>
		<?
			$checkMeter = substr($value,0,5);	
		?>
		<?if($checkMeter == 'meter'){$e++;?>
		<tr>
			<td><?echo $value;?></td>
			<td>
					<?
							echo number_format(count($arrPower[$value]));
							$num = count($arrPower[$value]);
					?>						
			</td>

			<td>
					<?
						$sumPower = array_sum($arrPowerNew[$value]);
						echo number_format($sumPower,2);
					?>
			</td>

      <td>         	 
         	 <?
         	 			$EnergyNew = array_sum($arrEnergyNew[$value]);
         	 			echo number_format($EnergyNew,2);
         	 	?>
      </td>
			<td>		
					<?
							$unitNew =  $sumPower/(60*1000);
							echo number_format($unitNew,4);
					?>			
			</td>

			<?
				$Price = $unitNew * $resultPrice['price']; 
				$amount = number_format($Price,2);

				$dataForSend .= "&".$value."@".$amount."@".number_format($unitNew,4);

			?>

			<td><?echo number_format($Price,2);?></td>
			<td>
					<?
						//echo $arrName[$value];
						echo $arrCustomerName[$value];
					?>
						
			</td>
			<td>
				<a href="screen.php?action=report1&action2=report&action3=sendline&st_date=<?=$_REQUEST['st_date'];?>&en_date=<?=$_REQUEST['en_date'];?>&meter=<?=$_REQUEST['meter'];?>&meterX=<?=$value;?>&amount=<?=$amount;?>&unit=<?=number_format($unitNew,4);?>"><button class="button2">Send to line</button></a>
			</td>
			
		</tr>
 	 <?}?>
	<?}?>

<?if($e == 0){?>

	<tr>
		<td> 
				++ไม่พบข้อมูล++
		</td>
	</tr>
<?}?>

<?if($_REQUEST['meter'] == 'All' OR $_REQUEST['meter'] == ''){?>
	<tr>
		<td></td>
		<td colspan="6"></td>
		<td>
				
						<a href="screen.php?action=report1&action2=report&action3=sendAll&st_date=<?=$_REQUEST['st_date'];?>&en_date=<?=$_REQUEST['en_date'];?>&meter=All&data=<?=$dataForSend;?>">
							<button class="button button1"><ส่งทั้งหมด></button>
						</a>	
		</td>
	</tr>
<?}?>

</table>
<?}?>

<?
	if($_REQUEST['action3'] == 'sendline'){
		if($_REQUEST['meterX'] != ''){
			$strSel = "SELECT * FROM smart_meter_code WHERE meter_code = '".$_REQUEST['meterX']."'";
			$querySel = mysqli_query($dblink,$strSel);
			$resultSel = mysqli_fetch_array($querySel);
			//$sToken = trim($arrLineToken[$_REQUEST['meterX']]);
			$sToken = $resultSel['meter_linetoken'];
			$textMessage = "ค่าไฟฟ้าระหว่างวันที่  ".$_REQUEST['st_date']."	 ถึง ".$_REQUEST['en_date']." จำนวน ".$_REQUEST['unit']." หน่วย เป็นเงิน ".$_REQUEST['amount']." บาท ";
			$textMessage .= " โปรดสแกน qr code นี้เพื่อชำระเงิน";
			$sMessage = $textMessage;
			include("line_notify.php");
		}
	}
//echo $dataForSend;
	if($_REQUEST['action3'] == 'sendAll'){
		$strSel = "SELECT * FROM smart_meter_code";
		$querySel = mysqli_query($dblink,$strSel);
		while($resultSel = mysqli_fetch_array($querySel)){
			$arrMeter[$resultSel['meter_code']] = $resultSel['meter_linetoken'];
		}
		list($m0,$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10) = explode("&",$dataForSend);
		list($meter1,$amount1,$unit1) = explode("@",$m1);
		list($meter2,$amount2,$unit2) = explode("@",$m2);
		list($meter3,$amount3,$unit3) = explode("@",$m3);
		list($meter4,$amount4,$unit4) = explode("@",$m4);
		list($meter5,$amount5,$unit5) = explode("@",$m5);
		list($meter6,$amount6,$unit6) = explode("@",$m6);
		list($meter7,$amount7,$unit7) = explode("@",$m7);
		list($meter8,$amount8,$unit8) = explode("@",$m8);
		list($meter9,$amount9,$unit9) = explode("@",$m9);
		list($meter10,$amount10,$unit10) = explode("@",$m10);

		for($i=1;$i<=8;$i++){
			if($i == 1){$amount = $amount1;$unit = $unit1;}
			if($i == 2){$amount = $amount2;$unit = $unit2;}
			if($i == 3){$amount = $amount3;$unit = $unit3;}
			if($i == 4){$amount = $amount4;$unit = $unit4;}
			if($i == 5){$amount = $amount5;$unit = $unit5;}
			if($i == 6){$amount = $amount6;$unit = $unit6;}
			if($i == 7){$amount = $amount7;$unit = $unit7;}
			if($i == 8){$amount = $amount8;$unit = $unit8;}
			if($i == 9){$amount = $amount9;$unit = $unit9;}
			if($i == 10){$amount = $amount10;$unit = $unit10;}
			//$sToken = trim($arrLineToken["meter".$i]);
			$sToken = trim($arrMeter["meter".$i]);
			$textMessage = "ค่าไฟฟ้าระหว่างวันที่  ".$_REQUEST['st_date']."	 ถึง ".$_REQUEST['en_date']." จำนวน ".$unit." หน่วย เป็นเงิน ".$amount." บาท ";
			$textMessage .= " โปรดสแกน qr code นี้เพื่อชำระเงิน";
			$sMessage = $textMessage;
			include("line_notify.php");
		}
		header("location:screen.php?action=report1&action2=report&meter=All&action3=sendline&st_date=".$_REQUEST['st_date']."&en_date=".$_REQUEST['en_date']."");
	}	

?>

<?
  //echo "<br>===>>>".$dataForSend;
	$strTime = "SELECT * FROM meter_time";
	$queryTime = mysqli_query($dblink,$strTime);
	$resultTime = mysqli_fetch_array($queryTime);
	//echo "-->>".$resultTime['hour']."-->>".$resultTime['mins'];
	list($h,$m,$i) = explode(":",date("H:i:s"));
	//echo "<br>->".(int)$h."->".(int)$m."->".(int)$i;
	//echo "<br>-->>".date("H:i:s");

	$setDate = $resultTime['year'].":".$resultTime['month'].":".$resultTime['day'];
//if($_REQUEST['action3'] == 'sendAll'){
	//echo "กำหนดส่งไลน์อัตโนมัติครั้งต่อไป -> ".$setDate ." เวลา ".$resultTime['hour'].":".$resultTime['mins'];
//}
	$yy = date("Y")+543;
	$mm = date("m");
	$dd = date("d");
	$refDate = $yy.":".(int)$mm.":".(int)$dd;
if($setDate == $refDate){
	if((int)$h == (int)$resultTime['hour']){
		if((int)$m == (int)$resultTime['mins']){
			$strSel = "SELECT * FROM smart_meter_code";
			$querySel = mysqli_query($dblink,$strSel);
			while($resultSel = mysqli_fetch_array($querySel)){
				$arrMeter[$resultSel['meter_code']] = $resultSel['meter_linetoken'];
			}


			list($m0,$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10) = explode("&",$dataForSend);
			list($meter1,$amount1,$unit1) = explode("@",$m1);
			list($meter2,$amount2,$unit2) = explode("@",$m2);
			list($meter3,$amount3,$unit3) = explode("@",$m3);
			list($meter4,$amount4,$unit4) = explode("@",$m4);
			list($meter5,$amount5,$unit5) = explode("@",$m5);
			list($meter6,$amount6,$unit6) = explode("@",$m6);
			list($meter7,$amount7,$unit7) = explode("@",$m7);
			list($meter8,$amount8,$unit8) = explode("@",$m8);
			list($meter9,$amount9,$unit9) = explode("@",$m9);
			list($meter10,$amount10,$unit10) = explode("@",$m10);

			for($i=1;$i<=8;$i++){
				if($i == 1){$amount = $amount1;$unit = $unit1;}
				if($i == 2){$amount = $amount2;$unit = $unit2;}
				if($i == 3){$amount = $amount3;$unit = $unit3;}
				if($i == 4){$amount = $amount4;$unit = $unit4;}
				if($i == 5){$amount = $amount5;$unit = $unit5;}
				if($i == 6){$amount = $amount6;$unit = $unit6;}
				if($i == 7){$amount = $amount7;$unit = $unit7;}
				if($i == 8){$amount = $amount8;$unit = $unit8;}
				if($i == 9){$amount = $amount9;$unit = $unit9;}
				if($i == 10){$amount = $amount10;$unit = $unit10;}

				//$sToken = trim($arrLineToken["meter".$i]);
				$sToken = trim($arrMeter["meter".$i]);
				$textMessage = "ค่าไฟฟ้าระหว่างวันที่  ".$_REQUEST['st_date']."	 ถึง ".$_REQUEST['en_date']." จำนวน ".$unit." หน่วย เป็นเงิน ".$amount." บาท ";
				$textMessage .= " โปรดสแกน qr code นี้เพื่อชำระเงิน";
				$sMessage = $textMessage;
				include("line_notify.php");
			}
			echo "Send Line All OK........";
		}
	}
}
?>

<?

//echo "->>".date("Y-m-d", strtotime("last day of this month"));
list($h,$m,$i) = explode(":",date("H:i:s"));
if(date("Y-m-d", strtotime("last day of this month")) == date("Y-m-d")){
	if((int)$h == 23){
		if((int)$m == 59){
			$strSel = "SELECT * FROM smart_meter_code";
			$querySel = mysqli_query($dblink,$strSel);
			while($resultSel = mysqli_fetch_array($querySel)){
				$arrMeter[$resultSel['meter_code']] = $resultSel['meter_linetoken'];
			}
			list($m0,$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10) = explode("&",$dataForSend);
			list($meter1,$amount1,$unit1) = explode("@", $m1);
			list($meter2,$amount2,$unit2) = explode("@", $m2);
			list($meter3,$amount3,$unit3) = explode("@", $m3);
			list($meter4,$amount4,$unit4) = explode("@", $m4);
			list($meter5,$amount5,$unit5) = explode("@", $m5);
			list($meter6,$amount6,$unit6) = explode("@", $m6);
			list($meter7,$amount7,$unit7) = explode("@", $m7);
			list($meter8,$amount8,$unit8) = explode("@", $m8);
			list($meter9,$amount9,$unit9) = explode("@", $m9);
			list($meter10,$amount10,$unit10) = explode("@", $m10);

			for($i=1;$i<=8;$i++){
				if($i == 1){$amount = $amount1;$unit = $unit1;}
				if($i == 2){$amount = $amount2;$unit = $unit2;}
				if($i == 3){$amount = $amount3;$unit = $unit3;}
				if($i == 4){$amount = $amount4;$unit = $unit4;}
				if($i == 5){$amount = $amount5;$unit = $unit5;}
				if($i == 6){$amount = $amount6;$unit = $unit6;}
				if($i == 7){$amount = $amount7;$unit = $unit7;}
				if($i == 8){$amount = $amount8;$unit = $unit8;}
				if($i == 9){$amount = $amount9;$unit = $unit9;}
				if($i == 10){$amount = $amount10;$unit = $unit10;}

				//$sToken = trim($arrLineToken["meter".$i]);
				$sToken = trim($arrMeter["meter".$i]);
				$textMessage = "ค่าไฟฟ้าระหว่างวันที่  ".$_REQUEST['st_date']."	 ถึง ".$_REQUEST['en_date']." จำนวน ".$unit." หน่วย เป็นเงิน ".$amount." บาท ";
				$textMessage .= " โปรดสแกน qr code นี้เพื่อชำระเงิน";
				$sMessage = $textMessage;
				include("line_notify.php");
			}
			echo "Send Line All OK........";
		}
	}
}
?>