<?
	$strDepart = "SELECT * FROM myschool_depart WHERE school_id='".$_SESSION['school_id']."' AND Depart_code1 != '' ORDER BY Depart_code1 ASC";
	$queryDepart = mysqli_query($dblink,$strDepart);
	while ($resultDepart = mysqli_fetch_array($queryDepart)){
?>
	<Option value="<?=$resultDepart['Depart'];?>"><?=$resultDepart['Depart_name'];?></option>
<?}?>