<? //check page
	$page = $_REQUEST['page'];
	$menu = $_REQUEST['menu'];
	$bgpage0="#D8D8D8";
	$bgpage1="#D8D8D8";
	$bgpage2="#D8D8D8";
	$bgpage3="#D8D8D8";
	$bgpage4="#D8D8D8";
	$bgpage5="#D8D8D8";
	$bgpage6="#D8D8D8";
	$bgpage7="#D8D8D8";
	$bgpage8="#D8D8D8";
	$bgpage9="#D8D8D8";
	$bgpage10="#D8D8D8";
	$bgpage11="#D8D8D8";
	$bgpage12="#D8D8D8";
	$bg0="#F6CED8";
	$bg1="#F6CED8";
	$bg2="#F6CED8";
	$bg3="#F6CED8";
	$bg4="#F6CED8";
	$bg5="#F6CED8";
	$bg6="#F6CED8";
	$bg7="#F6CED8";
	$bg8="#F6CED8";
	$bg9="#F6CED8";
	$bg10="#F6CED8";
	$bg11="#F6CED8";
	$bg12="#F6CED8";

	if($page == "1" ){
		$bgpage1 = "#A4A4A4"; 
	}elseif($page == "2"){
		$bgpage2 = "#A4A4A4"; 
	}elseif($page == "3"){
		$bgpage3 = "#A4A4A4"; 
	}elseif($page == "4"){
		$bgpage4 = "#A4A4A4"; 
	}elseif($page == "5"){
		$bgpage5 = "#A4A4A4"; 
	}elseif($page == "6"){
		$bgpage6 = "#A4A4A4"; 
	}elseif($page == "7"){
		$bgpage7 = "#A4A4A4"; 
	}elseif($page == "8"){
		$bgpage8 = "#A4A4A4"; 
	}elseif($page == "9"){
		$bgpage9 = "#A4A4A4"; 
	}elseif($page == "10"){
		$bgpage10 = "#A4A4A4"; 
	}elseif($page == "11"){
		$bgpage11 = "#A4A4A4"; 
	}elseif($page == "12"){
		$bgpage12 = "#A4A4A4"; 
	}

	if($menu == 1){
		$bg1 = "#FFA4A4";
	}elseif($menu == 2){
		$bg2 = "#FFA4A4";
	}elseif($menu == 3){
		$bg3 = "#FFA4A4";
	}elseif($menu == 4){
		$bg4 = "#FFA4A4";
	}elseif($menu == 5){
		$bg5 = "#FFA4A4";
	}elseif($menu == 6){
		$bg6 = "#FFA4A4";
	}elseif($menu == 7){
		$bg7 = "#FFA4A4";
	}elseif($menu == 8){
		$bg8 = "#FFA4A4";
	}elseif($menu == 9){
		$bg9 = "#FFA4A4";
	}elseif($menu == 10){
		$bg10 = "#FFA4A4";
	}elseif($menu == 11){
		$bg11 = "#FFA4A4";
	}elseif($menu == 12){
		$bg12 = "#FFA4A4";
	}
?>
<table width="900">

<tr height="25"> 
		<td  align="center" bgcolor="<?=$bgpage1;?>"><a href="main_page.php?page=1">HOME</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align="center" bgcolor="<?=$bgpage2;?>"><a href="main_page.php?page=2&menu=1">งานทะเบียน</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align="center" bgcolor="<?=$bgpage3;?>"><a href="main_page.php?page=3&menu=1">งานวัดผลฯ</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align="center" bgcolor="<?=$bgpage4;?>"><a href="main_page.php?page=4&menu=4">งานหลักสูตร</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align="center" bgcolor="<?=$bgpage5;?>"><a href="main_page.php?page=5&menu=1">งานบุคลากร</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align="center" bgcolor="<?=$bgpage12;?>"><a href="main_page.php?page=12&menu=3">งานการเงิน</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align="center" bgcolor="<?=$bgpage6;?>"><a href="main_page.php?page=6&menu=1">งานอาจารย์ที่ปรึกษา</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
<?// echo "<td  align='center' bgcolor='$bgpage7'><a href='main_page.php?page=7'>งานแนะแนว</a></td>"; ?>
		<td  align="center" bgcolor="<?=$bgpage8;?>"><a href="main_page.php?page=8&menu=1">งานทวิภาคี</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>

		<td  align="center" bgcolor="<?=$bgpage10;?>"><a href="main_page.php?page=10&menu=1">งานกิจกรรม</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align='center' bgcolor='<?=$bgpage9;?>'><a href='main_page.php?page=9&menu=1'>ระบบเอกสาร</a><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align="center" bgcolor="<?=$bgpage11;?>"><a href="main_page.php?page=11&menu=5">ข้อมูลส่วนตัว</a></td>

</tr>

<?
	echo "<table width='900'>";
	echo "<tr height='25'>";
	if($_REQUEST['page'] == 1){
		echo "<td align='center' bgcolor='#FFA4A4'><big><b><font color='#3300cc'>ยินดีต้อนรับ</font></td>";
		//echo "<td align='center' bgcolor=".$bg1.">ตรวจสอบรายชื่อนักศึกษา</td>";
		//echo "<td align='center' bgcolor=".$bg2.">ปรับปรุงข้อมูลนักศึกษา</td>";
	}elseif($_REQUEST['page'] == 2){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=2&menu=1'>ข้อมูล นศ.</a></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=2&menu=4'>ประวัติ นศ.</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=2&menu=5'>เพิ่มข้อมูล นศ.</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=2&menu=2'>จัดทำรายการลงทะเบียน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg8."><a href='main_page.php?page=2&menu=8'>ข้อมูลการลงทะเบียน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg6."><a href='main_page.php?page=2&menu=6'>พิมพ์บัตรลงทะเบียน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg7."><a href='main_page.php?page=2&menu=7'>เพิ่มห้องเรียน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=2&menu=3'>ปรับปรุงข้อมูลชั้นเรียน</a></td>";
		
	}elseif($_REQUEST['page'] == 3){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=3&menu=1'>รายงานผลการเรียน</a></td></td><td width='1' align='center' bgcolor='$bg0'>|</td>";
		//echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=3&menu=3'>สถิติรายวิชา</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=3&menu=2'>ผลสอบ V-net</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=3&menu=5'>นำเข้าผลการเรียน</a></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=3&menu=4'>นำเข้าผล V-net</a></td></td><td align='center' width='1' bgcolor='$bg0'></td>";
		
	}elseif($_REQUEST['page'] == 4){
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=4&menu=4'>แผนการเรียน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=4&menu=3'>รายวิชาที่เปิดสอน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=4&menu=1'>เพิ่มวิชาเรียน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=4&menu=2'>แก้ไขรายวิชา</a></td></td><td align='center' width='1' bgcolor='$bg0'></td>";
		
		//echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=4&menu=4'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		//echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=4&menu=5'>xx</a></td></td>";
	}elseif($_REQUEST['page'] == 5){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=5&menu=1'>รายงานจำนวนบุคลากร</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=5&menu=2'>แก้ไขข้อมูลบุคลากร</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=5&menu=3'>เพิ่มบุคลากร</a></td></td><td align='center' width='1' bgcolor='$bg0'></td>";
//		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=5&menu=4'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
//		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=5&menu=5'>xx</a></td></td>";
	}elseif($_REQUEST['page'] == 6){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=6&menu=1'>รายนามอาจารย์ที่ปรึกษา</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=6&menu=3'>งานคัดกรอง</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		//echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=6&menu=4'>บันทึกการเยี่ยมบ้าน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=6&menu=2'>ปรับปรุงอาจารย์ที่ปรึกษา</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=6&menu=4'>ข้อมูลผู้ปกครอง</a></td></td><td align='center' width='1' bgcolor='$bg0'></td>";
	//	echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=6&menu=4'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
	//	echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=6&menu=5'>xx</a></td></td>";
	}elseif($_REQUEST['page'] == 7){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=7&menu=1'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=7&menu=2'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=7&menu=3'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=7&menu=4'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=7&menu=5'>xx</a></td></td>";
	}elseif($_REQUEST['page'] == 8){
		echo "<td align='center' bgcolor='".$bg1."'><a href='main_page.php?page=8&menu=1'>รายงานการฝึกงาน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg6."'><a href='main_page.php?page=8&menu=6'>แก้ไขประวัตินักศึกษา</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg2."'><a href='main_page.php?page=8&menu=2'>กำหนดการฝึกงาน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg8."'><a href='main_page.php?page=8&menu=8'>แผนการฝึก</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg3."'><a href='main_page.php?page=8&menu=3'>ข้อมูลสถานประกอบการ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg4."'><a href='main_page.php?page=8&menu=4'>พิมพ์เอกสารต่างๆ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg7."'><a href='main_page.php?page=8&menu=7'>แบบสอบถาม</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg5."'><a href='main_page.php?page=8&menu=5'>ผลการประเมินนักศึกษา</a></td>";
	}elseif($_REQUEST['page'] == 9){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=9&menu=1'>หนังสือเข้า</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=9&menu=2'>หนังสือออก</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=9&menu=4'>คำสั่ง/ประกาศ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg6."><a href='main_page.php?page=9&menu=6'>บันทึกข้อความ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=9&menu=3'>เอกสาร โครงการ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=9&menu=5'>Upload เอกสาร</a></td></td>";
	}elseif($_REQUEST['page'] == 10){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=10&menu=1'>รายงานการเข้าร่วมกิจกรรม(รายบุคคล)</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=10&menu=4'>รายงานการเข้าร่วมกิจกรรม(สาขาวิชา)</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		//echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=10&menu=2'>รายงานกิจกรรมชมรมวิชาชีพ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=10&menu=3'>รายนามคณะกรรมการชมรมวิชาชีพ</a></td></td>";
		
		//echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=10&menu=5'>xx</a></td>";
	}elseif($_REQUEST['page'] == 11){
		
		if($_SESSION['Status'] == "SUPERUSER"){
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=11&menu=4'>กำหนดค่าพื้นฐาน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		}
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=11&menu=5'>แบบประเมิน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=11&menu=1'>เปลี่ยนรูปประจำตัว</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=11&menu=3'>เปลี่ยนรหัสผ่าน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=11&menu=2'>แก้ไขข้อมูลส่วนตัว</a></td></td>";
	
		//echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=11&menu=5'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
	}elseif($_REQUEST['page'] == 12){
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=12&menu=3'>รายงานการลงทะเบียน(รวม)</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=12&menu=4'>รายงานการลงทะเบียน(สาขาวิชา)</a></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=12&menu=2'>ลงทะเบียนรายบุคคล</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=12&menu=1'>Upload ข้อมูลการลงทะเบียน</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=12&menu=5'>Upload รายชื่อนักศึกษาใหม่</a></td></td>";
	}
		echo "</tr>";
		echo "</table>";
?>
</table>