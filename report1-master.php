<style>
::-webkit-input-placeholder { /* Edge */
  color: #d4d4d4;
}

:-ms-input-placeholder { /* Internet Explorer */
  color: #d4d4d4;
}

::placeholder {
  color: #d4d4d4;
}
</style>


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


<p id="rcorners1"><font size="3" color="#ffffff">รายงานการใช้พลังงานไฟฟ้า&nbsp;&nbsp;&nbsp;&nbsp;</font></p>


<form method="post" action="screen.php">
	<input type="hidden" name="action" value="report1">
	<input type="hidden" name="action2" value="report">

<table width="500" border="0">
<tr>
	<td width="25%" align="right">วันที่ : &nbsp;&nbsp;</td>
	<td width=""><input type="date" name="st_date" value="<?=$st_date?>"></td>
	<td width="25%" align="right">ถึง : &nbsp;&nbsp;</td>
	<td width=""><input type="date" name="en_date" value="<?=$en_date?>"></td>
</tr>

<tr>
	<td width="25%" align="right">Meter : &nbsp;&nbsp;</td>
	<td width="">
		<select name="meter" required>
			<?if($_REQUEST['meter'] != ''){?>
				<option value="<?=$_REQUEST['meter'];?>" selected><?=$_REQUEST['meter'];?>
			<?}?>
			<option value="All">All
			<option value="meter1">meter1
			<option value="meter2">meter2
			<option value="meter3">meter3
			<option value="meter4">meter4
		</select>
	</td>
</tr>







<tr>
	<td></td>
	<td colspan="3"><input type="submit" value="ค้นหา"></td>
</tr>
</table>
</form>

<?if($_REQUEST['action2'] == 'report'){?>



	<?
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
				while (!feof($objFopen)) {$i++;
					$file = fgets($objFopen, 4096);
					//echo $i."->".$file."<br>";
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

								if($date_old == $date AND $h_old == $h AND $i_old == $i){
										//echo "<br>".$file;
										$CodeDateTime = $y.$m.$d.$h.$i;
										$arrEnergyMin[$CodeDateTime][] = $energy;
								}else{
										$avEnergyMin = array_sum($arrEnergyMin[$CodeDateTime])/count($arrEnergyMin[$CodeDateTime]);
										$arrEnergyMinTrue[$meter][] = $avEnergyMin*60; 
										//echo "<br>".count($arrEnergyMin[$CodeDateTime]);
										//echo "<br>-------------------------------------------";
								}
								$date_old = $date;
								$h_old = $h;
								$i_old = $i;
							$arrFrequency[$meter][] = $frequency;
							$arrPf[$meter][] = $pf;
							//echo $i."->".$power."<br>";
							$arrDate[] = $date;
							$arrPowerHour[$meter][$CKdate][$CKtime][] = $power;


						}else{
							if($_REQUEST['meter'] == $meter){
								$k++;
								$arrMeter[] = $meter;
								$arrCurrent[$meter][] = $current;
								$arrPower[$meter][] = $power;
							  $arrEnergy[$meter][] = $energy;

								if($date_old == $date AND $h_old == $h AND $i_old == $i){
							  		//echo "<br>".$file;
										$CodeDateTime = $y.$m.$d.$h.$i;
										$arrEnergyMin[$CodeDateTime][] = $energy;
								}else{
										$avEnergyMin = array_sum($arrEnergyMin[$CodeDateTime])/count($arrEnergyMin[$CodeDateTime]);
										$arrEnergyMinTrue[$meter][] = $avEnergyMin*60; 
										//echo "<br>".count($arrEnergyMin[$CodeDateTime]);
										//echo "<br>-------------------------------------------";
								}

								$date_old = $date;
								$h_old = $h;
								$i_old = $i;
							  $arrFrequency[$meter][] = $frequency;
							  $arrPf[$meter][] = $pf;								
								//echo $i."->".$power."<br>";
								$arrDate[] = $date;
								$arrPowerHour[$meter][$CKdate][$CKtime][] = $power;
							}
						}
					}

				fclose($objFopen);
			}

			$beginDate = date('Y-m-d',strtotime($ckDateX .' +1 day'));
			$ckDateX = $beginDate;
		}

//echo "<br>------end--------";


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

	<table class="blueTable">
	<tr bgcolor="#0080c0">
		<th align="center">Meter</th>
		<th align="center">จำนวนข้อมูล</th>
		<th align="center">กำลังไฟฟ้าเฉลี่ย(W)</th>
		<th align="center">พลังงานไฟฟ้าที่ใช้(kWh)</th>
		<th align="center">จำนวนหน่วย(Unit)</th>
		<th align="center">จำนวนเงิน(บาท)</th>
		<th align="center">ชื่อลูกค้า</th>
		<th align="center">ส่งข้อมูล</th>
	</tr>
	<?foreach($arrMeterX as $value){?>
		<?
			$checkMeter = substr($value,0,5);	
		?>
		<?if($checkMeter == 'meter'){?>
		<tr>
			<td><?echo $value;?></td>
			<td><?echo number_format(count($arrPower[$value]));?></td>

			<?$av = array_sum($arrPower[$value])/count($arrPower[$value]);?>
			<td><?echo number_format($av,2);?></td>
				<?
					foreach($arrDateX as $val){
						list($yy,$mm,$dd) = explode("-",$val); 
						$ckDate = $yy.$mm.$dd;
						//echo "<br>".$value."->".$ckDate;
						for($H=0;$H<24;$H++){
							$sum = array_sum($arrPowerHour[$value][$ckDate][(int)$H]);
							$count = count($arrPowerHour[$value][$ckDate][(int)$H]);
							$WattHour[$value][] = $sum/$count;
							//echo "<br>->".$H."->".$sum/$count;
						}
					}
				?>
				



      <td>
         	 <?echo number_format(array_sum($arrEnergyMinTrue[$value]),2);?>
      </td>

      <?$unit = number_format(array_sum($arrEnergyMinTrue[$value])/1000,3);?>


			<td><?echo number_format($unit,3);?></td>

			<?
				$Price = $unit * $resultPrice['price']; 
				$amount = number_format($Price,2);
			?>

			<td><?echo number_format($Price,2);?></td>
			<td><?echo $arrName[$value];?></td>
			<td align="center">
				<a href="screen.php?action=report1&action2=report&action3=sendline&st_date=<?=$_REQUEST['st_date'];?>&en_date=<?=$_REQUEST['en_date'];?>&meter=<?=$_REQUEST['meter'];?>&meterX=<?=$value;?>&amount=<?=$amount;?>"><button class="button button2">Send to line</button></a>
			</td>
			
		</tr>
 	 <?}?>
	<?}?>
</table>
<?}?>

<?
	if($_REQUEST['action3'] == 'sendline'){

			$strFile = "line_token.txt";
			$objFopen = fopen($strFile, 'r');
			if ($objFopen) {
				while (!feof($objFopen)) {$i++;
					$file = fgets($objFopen, 4096);
					//echo $i."->".$file."<br>";
					list($meter,$token) = explode("@",$file);
					$arrLineToken[$meter] = $token;
				}

				fclose($objFopen);
			}
		$sToken = trim($arrLineToken[$_REQUEST['meterX']]);
		$textMessage = "ค่าไฟฟ้าระหว่างวันที่  ".$_REQUEST['st_date']."	 ถึง ".$_REQUEST['en_date']." จำนวน ".$_REQUEST['amount']." บาท";
		$sMessage = $textMessage;
		include("line_notify.php");
	}
?>