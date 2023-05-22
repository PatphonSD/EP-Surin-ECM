<?
$FileName = $name;
$objFopen = fopen($FileName, 'r');
if ($objFopen) {
    while (!feof($objFopen)) {
        $file = fgets($objFopen, 4096);
		$i++;
		if($i == 1){
			$exp1 = $file;
			list($tran1, $str1, $end1)= explode("@",$exp1);
		}
		if($i == 2){
			$exp2 = $file;
			list($tran2, $str2, $end2)= explode("@",$exp2);
		}
		if($i == 3){
			$exp3 = $file;
			//echo "-------->".$exp3;
			list($tran3, $str3, $end3)= explode("@",$exp3);
		}
		if($i == 4){
			$exp4 = $file;
			list($tran4, $str4, $end4)= explode("@",$exp4);
		}
		if($i == 5){
			$exp5 = $file;
			list($tran5, $str5, $end5)= explode("@",$exp5);
		}
	}
    fclose($objFopen);
}
?>