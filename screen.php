
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 </head>


<body>

<?
	if($_REQUEST['action'] == 'report1'){
		include("report1.php");
		//echo "xxxx";
	}
	if($_REQUEST['action'] == 'config'){
		include("config1.php");
	}
	if($_REQUEST['action'] == 'report3'){
		include("report3.php");
	}
	if($_REQUEST['action'] == 'report4'){
		include("report4.php");
	}

  if($_REQUEST['action'] == 'data1'){
    include("data1.php");
  }  

  if($_REQUEST['action'] == 'meter'){
    include("meter1.php");
  }  
  if($_REQUEST['action'] == 'meter2'){
    include("meter2.php");
  } 
  if($_REQUEST['action'] == 'meter3'){
    include("meter3.php");
  }  
  if($_REQUEST['action'] == ''){
    include("blank.php");
  }  

?>


</body>
</html>