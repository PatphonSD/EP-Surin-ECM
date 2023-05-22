<?
function connect_db( ){ 
	  $link = mysqli_connect("localhost" ,"epsurinn_database", "testANDtest" , "epsurinn_database" );  //·Õè SERVER
	// $link = mysqli_connect("127.0.0.1" ,"root", "testANDtest" , "iamgolfc_golf" );  //à¤Ã×èÍ§
	if($link == false  ){
		die(' error connect database ');
	}else{
		mysqli_query($link , "set names utf8");
		return $link;
		}
	}
?>

<?
	//echo "<br>".$_SESSION["customer_id"];	
	//echo "<br>".$_SESSION["customer"];

	if($_SESSION["customer"] == ''){
		echo "<script>window.parent.location ='logout.php';</script>";
	}

?>