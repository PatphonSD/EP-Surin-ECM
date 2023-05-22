<?
	//echo $_REQUEST['semester'];

	$str1 = "SELECT * FROM datetime_semester WHERE semester = '".$_REQUEST['semester']."'";
	$Query1 = mysqli_query($dblink,$str1);
	$Result1 = mysqli_fetch_array($Query1);
	
	$start_day = $Result1['start_date'];
	$end_day = $Result1['end_date'];

?>