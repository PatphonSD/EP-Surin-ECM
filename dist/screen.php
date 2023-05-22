<?
	ob_start() 
?>
<?
	session_start();
?>
<?php
	date_default_timezone_set('Asia/Bangkok'); 
?>
<?
		include( "include/function.php");
		$dblink = connect_db();
		include( "include/date.php");
		include( "include/array.php");
		@ini_set('display_errors', '0');  //?????? err
?>


<?
    //echo "-->>".$_SESSION['member'];
    if($_SESSION['member'] == ''){
      header("location:login.php");
      //exit();
    }


?>



<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
   <style>

  
font-family: Verdana, Arial, Helvetica, sans-serif;
input[type=text], select {
    width: 100%;
    padding: 5px 5px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	box-align: left;
	font-size: 15px;
  color : #000000;
}


input[type=number], select {
    width: 100%;
    padding: 5px 5px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	box-align: left;
	font-size: 15px;
}

input[type=date]{
    width: 100%;
    padding: 5px 5px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	box-align: left;
	font-size: 15px;
}

input[type=file], select {
    width: 100%;
    padding: 5px 5px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	box-align: left;
	font-size: 15px;
}

input[type=submit] {
    width: 100%;
    background-color: #858D88;
    color: white;
    padding: 6px 15px;
	font-size: 16px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #6A716D;
}


div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;

}

table.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EAEAEA;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueTable tbody td {
  font-size: 17px;
}
table.blueTable tr:nth-child(even) {
  background: #EAEAEA;
}
table.blueTable thead {
  background: #000000;
  background: -moz-linear-gradient(top, #EAEAEA 0%, #000000 66%, #EAEAEA 100%);
  background: -webkit-linear-gradient(top, #EAEAEA 0%, #000000 66%, #EAEAEA 100%);
  background: linear-gradient(to bottom, #EAEAEA 0%, #000000 66%, #EAEAEA 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  background: #6A716D;
  height: 30px;
  font-size: 16px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #EAEAEA;
  background: -moz-linear-gradient(top, #EAEAEA 0%, #d4e6f6 66%, #EAEAEA 100%);
  background: -webkit-linear-gradient(top, #EAEAEA 0%, #d4e6f6 66%, #EAEAEA 100%);
  background: linear-gradient(to bottom, #EAEAEA 0%, #d4e6f6 66%, #EAEAEA 100%);
  border-top: 2px solid #444444;
}
table.blueTable tfoot td {
  font-size: 14px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #EAEAEA;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
#rcorners1 {
	background: #858D88;
  color: #ffffff;
    border-radius: 5px;
	border: 2px solid #5D6D7E;
    padding: 7px; 
    width: 98%;
    height: 20px;    
}


#rcorners2 {
	background: #339933;
    border-radius: 5px;
	border: 2px solid #73AD21;
    padding: 7px; 
    width: 98%;
    height: 20px;    
}

#al1 {
    border: 2px solid #ff9966;
    padding: 5px 5px 5px 5px; 
    background: #ffffcc;
    border-radius: 5px;
	margin: 1px;
	width:98%;
}

input {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

select {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

.button {
  background-color: #0081C9; /* Green */
  border: none;
  border-radius: 4px;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */
.button4 {background-color: #e7e7e7; color: black;} /* Gray */
.button5 {background-color: #555555;} /* Black */


#input[type=file]{
    background: #8080c0;
}
input{
    background: #f7f7f7;
}

::-webkit-input-placeholder { /* Edge */
  color: #f8f8f8;
}

:-ms-input-placeholder { /* Internet Explorer */
  color: #f8f8f8;
}

::placeholder {
  color: #f8f8f8;
}

a:link {
  text-decoration: none;
  color: #ffffff;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}


</style>


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