<? //if($_REQUEST['type'] == "old"){
//		
//	}
?>
<?
if($check == group){
	$str = "SELECT * FROM Tgroup WHERE group_id = '".$_REQUEST['search']."' AND school_id = '".$_SESSION['school_id']."' ";
}else{

	if($_REQUEST['from'] == "New"){
		$str = "SELECT * FROM Tgroup WHERE group_id = '".$result1['group_id']."' AND school_id = '".$_SESSION['school_id']."' ";
	}else{
		//include("session.php");
		$str = "SELECT * FROM Tgroup WHERE group_id = '".$_REQUEST['group_id']."' AND school_id = '".$_SESSION['school_id']."' ";
	}

}
	
	$query = mysqli_query($dblink,$str);
	$result = mysqli_fetch_array($query);
		$str100 = "SELECT * FROM myschool_depart WHERE Depart = '".$result['Depart']."' AND school_id = '".$_SESSION['school_id']."' ";
		$query1 = mysqli_query($dblink,$str100);
		$result1 = mysqli_fetch_array($query1);

		$str21 = "SELECT Name FROM member WHERE pin_id = '".$result['advisor1']."' ";
		$query21 = mysqli_query($dblink,$str21);
		$result21 = mysqli_fetch_array($query21);
		$str22 = "SELECT Name FROM member WHERE pin_id = '".$result['advisor2']."' ";
		$query22 = mysqli_query($dblink,$str22);
		$result22 = mysqli_fetch_array($query22);
?>
<b>ระดับชั้น</b>
<?echo $result['group_th']." ".$result['namepart']."[".$result['group_id']."]";?>
<b>&nbsp;&nbsp;สาขาวิชา</b>
<?=$result1['Depart_name'];?>
<b>&nbsp;&nbsp;สาขางาน</b>
<?=$result['depart_th'];?>

<? if($result['advisor1'] != ""){ ?>
<br><b>ครูที่ปรึกษา</b>
<?=$result21['Name'];?>
	<?
		if($result22['Name'] !=""){
			echo "&nbsp; และ ".$result22['Name'];
		}
	?>
<?}?>