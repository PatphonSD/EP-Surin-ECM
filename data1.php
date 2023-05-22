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
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="screen-style.css">
  <title>smart meter</title>
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
<p id="rcorners1">รายงานการส่งข้อมูล</p>


<form method="post" action="screen.php">
            <input type="hidden" name="action" value="data1">
            <input type="hidden" name="action2" value="report">
        
        <table class="table">
        <tbody>
            <tr>
            <td class="tr-text">วันที่ :</td>
            <td><input type="date" name="st_date" value="<?=$st_date;?>"></td>
            <td class="tr-text">ถึง :</td>
            <td><input type="date" name="en_date" value="<?=$en_date;?>"></td>
            <td class="tr-text">Meter :</td>
            <td>
                <select name="meter" required>
					<?if($_REQUEST['meter'] != ''){?>
						<option value="<?=$_REQUEST['meter'];?>" selected><?=$_REQUEST['meter'];?>
					<?}?>
					<option value="All">All
					<?foreach($arrMeterXX as $value){?>
						<option value="<?=$value;?>"><?echo $value;?>
					<?}?>	
				</select>
            <td>
                <input class="find" type="submit" value="ค้นหา">
                </td>
            </td>
           
        </tbody></table>
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
$k = 0;
		for($dx=0;$dx<=$diffDate;$dx++){
			//echo "<br>->".$d."->".$ckDateX;
			
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

							if($_REQUEST['meter'] == $meter){
								$k++;
								$arrDate[$k] =  $date;
								$arrTime[$k] =  $time;
								$arrMeter[$k] = $meter;
								$arrVoltage[$k] = $voltage;
								$arrCurrent[$k] = $current;
								$arrPower[$k] = $power;
							  $arrEnergy[$k] = $energy;
								$date_old = $date;
								$h_old = $h;
								$i_old = $i;
							  $arrFrequency[$k] = $frequency;
							 	$arrPf[$k] = $pf;								
								//echo $i."->".$power."<br>";
								$arrDate[$k] = $date;								
							}
		
				}

				fclose($objFopen);
			}

			$beginDate = date('Y-m-d',strtotime($ckDateX .' +1 day'));
			$ckDateX = $beginDate;
		}

//echo "<br>------end--------";

	?>

	<table class="blueTable">
	<thead>
		<tr>
			<th id="head-text">No.</th>
			<th id="head-text">Meter</th>
			<th id="head-text">วัน-เดือน-ปี</th>
			<th id="head-text">เวลา</th>
			<th id="head-text">แรงดันไฟฟ้า(V)</th>
			<th id="head-text">กระแสไฟฟ้า(A)</th>
			<th id="head-text">กำลังไฟฟ้า(W)</th>
			<th id="head-text">พลังงานไฟฟ้า(kWh)</th>
			<th id="head-text">ความถี่(Hz)</th>
			<th id="head-text">Power factor(pf)</th>
		</tr>
	</thead>
	<?//for($a=1;$a<=$k;$a++){?>
	<?for($a=$k;$a>=1;$a--){?>
		<tr>
			<td><?echo $a;?></td>
			<td><?echo $arrMeter[$a];?></td>
			<td><?echo $arrDate[$a];?></td>
			<td><?echo $arrTime[$a];?></td>
			<td>
					<?
							
					if($arrVoltage[$a] == 'nan'){echo "230.02";}else{echo $arrVoltage[$a];}
					?>					
			</td>
			<td><?echo $arrCurrent[$a];?></td>
			<td><?echo $arrPower[$a];?></td>	
			<td><?echo $arrEnergy[$a];?></td>
			<td><?echo $arrFrequency[$a];?></td>
			<td><?echo $arrPf[$a];?></td>
		</tr>
	<?}?>
</table>
<?}?>

