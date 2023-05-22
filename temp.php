<?php



// ติดต่อฐานข้อมูล
	function connect_db( ){ 
	  	$link = mysqli_connect("localhost" ,"epsurinn_database", "testANDtest" , "epsurinn_database" );  //ที่ SERVER
	  	//$link = mysqli_connect("127.0.0.1" ,"root", "testANDtest" , "surintec_database" );  //เครื่อง
		if($link == false  ){
			die(' error connect database ');
		}else{
			//mysqli_query($link , "set names tis620");
			mysqli_query($link , "set names utf8");
			return $link;
		}
	}

	$db = "epsurinn_database";


	$dblink = connect_db();

	list($meter,$voltage,$current,$power,$energy,$f,$pf) = explode("@",$_REQUEST['temp']); 



	$str = "SELECT * FROM smart_meter_energy WHERE meter = '".$meter."' AND month = '".date("Y-m")."'";
	$query = mysqli_query($dblink,$str);
	$num = mysqli_num_rows($query);

	if($num == 0){
		$strIn = "INSERT INTO `smart_meter_energy` (`meter`, `month`, `energy`, `remark`) VALUES ('".$meter."', '".date("Y-m")."', '".$energy."', '')";
		$query = mysqli_query($dblink,$strIn);	
		echo $energy;
	}else{
		$result = mysqli_fetch_array($query);
		$energy_new = $energy + $result['energy'];
		$strUp = "UPDATE `smart_meter_energy` SET energy = '".$energy_new."' WHERE `meter` = '".$meter."' AND `month` = '".date("Y-m")."'";
		$queryUp = mysqli_query($dblink,$strUp);
		echo $energy_new;
	}

	
  
    //echo "------------>>".$meter."->".$voltage;
if($voltage != 777){
	$file = date("Y-m-d").".txt";
	$filename = "data/".$file;

	if (file_exists($filename)) {
		//echo "The file $filename exists";
	} else{
		//echo "The file $filename not have exists";
		$objCreate = fopen($filename, 'w');	
	}

	//$i = 10;
	//$P = 230;
	$myfile = fopen($filename, "a") or die("Unable to open file!");
	$txt = date("Y-m-d")."@".date("H:i:s")."@".$_REQUEST['temp']."\n";
	fwrite($myfile, $txt);
	fclose($myfile);


	$fileEnergy = date("Y-m").".txt";
	$filenameEnergy = "data/".$fileEnergy;
	if (file_exists($filenameEnergy)) {
		//echo "The file $filenameEnergy exists";
	}else{
		//echo "The file $filenameEnergy not have exists";
		$objCreate = fopen($filenameEnergy, 'w');	
	}

	$myfileEnergy = fopen($filenameEnergy, "a") or die("Unable to open file!");
	$txtEnergy = $energy."\n";
	fwrite($myfileEnergy, $txtEnergy);
	fclose($myfileEnergy);

}
?>
