<?
// ติดต่อฐานข้อมูล
function connect_db( ){ 
	  $link = mysqli_connect("localhost" ,"surintec_database", "testANDtest" , "surintec_database" );  //ที่ SERVER
	  //$link = mysqli_connect("127.0.0.1" ,"root", "testANDtest" , "surintec_database" );  //เครื่อง
	if($link == false  ){
		die(' error connect database ');
	}else{
		//mysqli_query($link , "set names tis620");
		mysqli_query($link , "set names utf8");
		return $link;
		
		}
	}

	$db = "surintec_database";
?>
<? //mysqli_close($dblink);?>

