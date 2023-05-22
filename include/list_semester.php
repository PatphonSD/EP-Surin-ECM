	<?	
		$strsemes = "SELECT * FROM myschool_semester WHERE school_id='".$_SESSION['school_id']."' ORDER BY start_date DESC";
		$querysemes = mysqli_query($dblink,$strsemes);
		while ($resultsemes = mysqli_fetch_array($querysemes)){

					$f = substr($resultsemes['semester'],0,1);
					$f2 = substr($resultsemes['semester'],0,2);
					list($t,$y) = explode("/",$resultsemes['semester']);

					if($f == 'w'){
						$year = "[ตุลาคม ".$y."]";
					}elseif($f == 's'){
						if($f2 == 's1'){
							$yy = $y+1;
							$year = "[มีนาคม ".$yy."]";
						}elseif($f2 == 's2'){
							$yy = $y+1;
							$year = "[เมษายน ".$yy."]";
						}else{
							$year = "";
						}
						
					}else{
						$year = "";
					}


	?>
		<Option value="<?=$resultsemes['semester'];?>"><?=$resultsemes['semester']." ".$year;?></option> 
	<?}?>