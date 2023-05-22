<?
	$objFopen = fopen($strFileName, 'w');
	$strText1 = $_REQUEST['tran1']."@".$_REQUEST['str1']."@".$_REQUEST['end1']."\r\n";
	fwrite($objFopen, $strText1);
	$strText2 = $_REQUEST['tran2']."@".$_REQUEST['str2']."@".$_REQUEST['end2']."\r\n";
	fwrite($objFopen, $strText2);
	$strText3 = $_REQUEST['tran3']."@".$_REQUEST['str3']."@".$_REQUEST['end3']."\r\n";
	fwrite($objFopen, $strText3);
	$strText4 = $_REQUEST['tran4']."@".$_REQUEST['str4']."@".$_REQUEST['end4']."\r\n";
	fwrite($objFopen, $strText4);
	$strText5 = $_REQUEST['tran5']."@".$_REQUEST['str5']."@".$_REQUEST['end5']."\r\n";
	fwrite($objFopen, $strText5);
	fclose($objFopen);
?>