<?
	ob_start() 
?>
<?
	session_start();
?>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist\screen-style.css">


<?

	if($_REQUEST['action'] == 'save'){
		if($_REQUEST['passcode'] == 'surinmeter'){
			$_SESSION['member'] = 'surinmeter';
			header("location:dist\poster.html");
		}else{
			$_SESSION['member'] = '';
			echo "<p id="head-text-error">**รหัสผ่านไม่ถูกต้อง**</p>";
		}
	}

?>



<p id="rcorners1">ยินดีต้อนรับ</p>

<table class="table">
<form name="form1" method="post" action="login.php">
	<input type="hidden" name="action" value="save">

<tr>
        <td id="head-text">รหัสผ่าน :</td>
        <td><input type="password" name="passcode"></td>
        <td><input class="button1" type="submit" value="ตกลง"></td>
      </tr>

</table>
</form>
