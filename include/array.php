<?

	$array_Level = array("2"=>"ปวช.","3"=>"ปวส.","4"=>"ปริญญาตรี");

	$strDep = "SELECT * FROM myschool_depart WHERE school_id = '1332016101' AND Depart_code1 != '' ORDER BY Depart_code1 ASC";
	$queryDep = mysqli_query($dblink,$strDep);
	while($resultDep = mysqli_fetch_array($queryDep)){
		$array_Depart[$resultDep['Depart']] = $resultDep['Depart_name'];
	}
?>

