
		
<style type="text/css">
<!--
body { margin: 0px 0px; padding: 0px 0px}
a:link { color: #005CA2; text-decoration: none}
a:visited { color: #005CA2; text-decoration: none}
a:active { color: #0099FF; text-decoration: underline}
a:hover { color: #0099FF; text-decoration: underline}
-->
</style>


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
	$bgpage13="#D8D8D8";
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
	$bg13="#F6CED8";

	if($page == "1" ){
		$bgpage1 = "#ff9900"; 
	}elseif($page == "2"){
		$bgpage2 = "#ff9900"; 
	}elseif($page == "3"){
		$bgpage3 = "#ff9900"; 
	}elseif($page == "4"){
		$bgpage4 = "#ff9900"; 
	}elseif($page == "5"){
		$bgpage5 = "#ff9900"; 
	}elseif($page == "6"){
		$bgpage6 = "#ff9900"; 
	}elseif($page == "7"){
		$bgpage7 = "#ff9900"; 
	}elseif($page == "8"){
		$bgpage8 = "#ff9900"; 
	}elseif($page == "9"){
		$bgpage9 = "#ff9900"; 
	}elseif($page == "10"){
		$bgpage10 = "#ff9900"; 
	}elseif($page == "11"){
		$bgpage11 = "#ff9900"; 
	}elseif($page == "12"){
		$bgpage12 = "#ff9900"; 
	}elseif($page == "13"){
		$bgpage13 = "#ff9900"; 
	}


	if($menu == 1){
		$bg1 = "#0000cc";
	}elseif($menu == 2){
		$bg2 = "#0000cc";
	}elseif($menu == 3){
		$bg3 = "#0000cc";
	}elseif($menu == 4){
		$bg4 = "#0000cc";
	}elseif($menu == 5){
		$bg5 = "#0000cc";
	}elseif($menu == 6){
		$bg6 = "#0000cc";
	}elseif($menu == 7){
		$bg7 = "#0000cc";
	}elseif($menu == 8){
		$bg8 = "#0000cc";
	}elseif($menu == 9){
		$bg9 = "#0000cc";
	}elseif($menu == 10){
		$bg10 = "#0000cc";
	}elseif($menu == 11){
		$bg11 = "#0000cc";
	}elseif($menu == 12){
		$bg12 = "#0000cc";
	}elseif($menu == 13){
		$bg13 = "#0000cc";
	}
?>
<table width="900">

<tr height="25"> 
	<td  align="center" bgcolor="<?=$bgpage1;?>"><div class="box3">
		<a href="main_page.php?page=1">HOME</a></div>
	</td>
	<td  align="center" bgcolor="<?=$bgpage2;?>"><div class="box3">
		<a href="main_page.php?page=2&menu=1">ทะเบียน</a></div>
	</td>
	<td  align="center" bgcolor="<?=$bgpage3;?>"><div class="box3">
		<a href="main_page.php?page=3&menu=1">วัดผลฯ</a></div>
	</td>
	<td  align="center" bgcolor="<?=$bgpage4;?>"><div class="box3">
		<a href="main_page.php?page=4&menu=4">หลักสูตร</a></div>
	</td>
	<td  align="center" bgcolor="<?=$bgpage5;?>"><div class="box3">
		<a href="main_page.php?page=5&menu=1">บุคลากร</a></div>
	</td>

<?//if($_SESSION['Status']== 'SUPERUSER'){?>
	<td  align="center" bgcolor="<?=$bgpage12;?>"><div class="box3">
		<a href="main_page.php?page=12&menu=3">การเงิน</a></div>
	</td>
<?//}?>	
	
	<td  align="center" bgcolor="<?=$bgpage6;?>"><div class="box3">
		<a href="main_page.php?page=6&menu=1">ครูที่ปรึกษา</a></div>
	</td>
	<td  align='center' bgcolor="<?=$bgpage7;?>"><div class="box3">
		<a href='main_page.php?page=7'>ศูนย์ข้อมูล</a></div>
	</td>
	<td  align="center" bgcolor="<?=$bgpage8;?>"><div class="box3">
		<a href="main_page.php?page=8&menu=1">ทวิภาคี</a></div>
	</td>
	<td  align="center" bgcolor="<?=$bgpage10;?>"><div class="box3">
		<a href="main_page.php?page=10&menu=1">กิจกรรม</a></div>
	</td>
	<td  align='center' bgcolor='<?=$bgpage9;?>'><div class="box3">
		<a href='main_page.php?page=9&menu=1'>ระบบเอกสาร</a></div>
	</td>
<?if($_SESSION['Status'] == 'SUPERUSER'){?>
	<td  align="center" bgcolor="<?=$bgpage13;?>"><div class="box3">
		<a href="main_page.php?page=13&menu=1">ระบบ</a></div>
	</td>
<?}?>

	<td  align="center" bgcolor="<?=$bgpage11;?>"><div class="box3">
		<a href="main_page.php?page=11&menu=5">ข้อมูลส่วนตัว</a></div>
	</td>

</tr>

<?
	echo "<table width='900'>";
	echo "<tr height='25'>";
	if($_REQUEST['page'] == 1){
		echo "<td align='center' bgcolor='#FFA4A4'><big><b><font color='#3300cc'>
			<div class='box4'>ยินดีต้อนรับ</div></font></td>";
		//echo "<td align='center' bgcolor=".$bg1.">ตรวจสอบรายชื่อนักศึกษา</td>";
		//echo "<td align='center' bgcolor=".$bg2.">ปรับปรุงข้อมูลนักศึกษา</td>";
	}elseif($_REQUEST['page'] == 2){
	echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=2&menu=1'><div class='box4'>ข้อมูล นศ.</div></a></td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=2&menu=4'><div class='box4'>ประวัติ นศ.</div></a></td></td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=2&menu=5'><div class='box4'>เพิ่มข้อมูล นศ.</div></a></td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=2&menu=2'><div class='box4'>จัดทำรายการลงทะเบียน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg8."><a href='main_page.php?page=2&menu=8'><div class='box4'>ข้อมูลการลงทะเบียน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg6."><a href='main_page.php?page=2&menu=6'><div class='box4'>พิมพ์บัตรลงทะเบียน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg7."><a href='main_page.php?page=2&menu=7'><div class='box4'>เพิ่มห้องเรียน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=2&menu=3'><div class='box4'>ข้อมูลชั้นเรียน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg9."><a href='main_page.php?page=2&menu=9'><div class='box4'>รบ.</div></a></td>";
		
	}elseif($_REQUEST['page'] == 3){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=3&menu=1'><div class='box4'>รายงานผลการเรียน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=3&menu=3'><div class='box4'>รายงานการสอน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg8."><a href='main_page.php?page=3&menu=8'><div class='box4'>ผลเรียนซ้ำ</div></a></td>";
		echo "<td align='center' bgcolor=".$bg6."><a href='main_page.php?page=3&menu=6'><div class='box4'>ส่งออกข้อมูล</div></a></td>";
if($_SESSION['Status'] == "SUPERUSER" OR $_SESSION['Status'] == "EVA"){
		echo "<td align='center' bgcolor=".$bg7."><a href='main_page.php?page=3&menu=7'><div class='box4'>กำหนดค่าพื้นฐาน</div></a></td>";
}
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=3&menu=2'><div class='box4'>ผลสอบ V-net</div></a></td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=3&menu=5'><div class='box4'>นำเข้าผลการเรียน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=3&menu=4'><div class='box4'>นำเข้าผล V-net</div></a></td>";
		
	}elseif($_REQUEST['page'] == 4){
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=4&menu=4'><div class='box4'>แผนการเรียน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=4&menu=3'><div class='box4'>รายวิชาที่เปิดสอน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=4&menu=1'><div class='box4'>เพิ่มวิชาเรียน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=4&menu=2'><div class='box4'>แก้ไขรายวิชา</div></a></td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=4&menu=5'><div class='box4'>ส่งออกแผนการเรียน</div></a></td>";
	}elseif($_REQUEST['page'] == 5){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=5&menu=1'><div class='box4'>รายงานจำนวนบุคลากร</div></a></td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=5&menu=4'><div class='box4'>รายงานการลงเวลา</div></a></td>";
if($_SESSION["Status"] == "PERSONAL" OR $_SESSION["Status"] == "SUPERUSER"){
		echo "<td align='center' bgcolor=".$bg6."><a href='main_page.php?page=5&menu=6'><div class='box4'>กำหนดการลงเวลา</div></a></td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=5&menu=5'><div class='box4'>นำเข้าข้อมูลลงเวลา</div></a></td>";
	if($_SESSION["Status"] == "SUPERUSER" OR $_SESSION["Status"] == "PERSONAL"){
		echo "<td align='center' bgcolor=".$bg7."><a href='main_page.php?page=5&menu=7'><div class='box4'>เบิกธุรการ</div></a></td>";
	}
}
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=5&menu=2'><div class='box4'>ข้อมูลบุคลากร</div></a></td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=5&menu=3'><div class='box4'>เพิ่มบุคลากร</div></a></td>";
	}elseif($_REQUEST['page'] == 6){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=6&menu=1'><div class='box4'>รายนามอาจารย์ที่ปรึกษา</div></a></td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=6&menu=3'><div class='box4'>งานคัดกรอง</div></a></td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=6&menu=5'><div class='box4'>รายงานการเข้าชั้นเรียน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=6&menu=2'><div class='box4'>ปรับปรุงอาจารย์ที่ปรึกษา</div></a></td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=6&menu=4'><div class='box4'>ข้อมูลผู้ปกครอง</div></a></td>";
	}elseif($_REQUEST['page'] == 7){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=7&menu=1'><div class='box4'>Upload Data V-cop</div></a></td>";
		//echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=7&menu=2'><div class='box4'>xx</div></a></td>";
	}elseif($_REQUEST['page'] == 8){
		echo "<td align='center' bgcolor='".$bg1."'><a href='main_page.php?page=8&menu=1'><div class='box4'>รายงานการฝึกงาน</div></a></td>";
		echo "<td align='center' bgcolor='".$bg6."'><a href='main_page.php?page=8&menu=6'><div class='box4'>ประวัตินักศึกษา</div></a></td>";
		echo "<td align='center' bgcolor='".$bg2."'><a href='main_page.php?page=8&menu=2'><div class='box4'>กำหนดการฝึกงาน</div></a></td>";
		echo "<td align='center' bgcolor='".$bg8."'><a href='main_page.php?page=8&menu=8'><div class='box4'>แผนการฝึก</div></a></td></td>";
		echo "<td align='center' bgcolor='".$bg3."'><a href='main_page.php?page=8&menu=3'><div class='box4'>ข้อมูลสถานประกอบการ</div></a></td>";
		echo "<td align='center' bgcolor='".$bg4."'><a href='main_page.php?page=8&menu=4'><div class='box4'>พิมพ์เอกสารต่างๆ</div></a></td>";
		echo "<td align='center' bgcolor='".$bg7."'><a href='main_page.php?page=8&menu=7'><div class='box4'>แบบสอบถาม</div></a></td>";
		echo "<td align='center' bgcolor='".$bg5."'><a href='main_page.php?page=8&menu=5'><div class='box4'>ผลการประเมินนักศึกษา</div></a></td>";
	}elseif($_REQUEST['page'] == 9){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=9&menu=1'><div class='box4'>หนังสือเข้า[ภายนอก]</div></a></td>";
		echo "<td align='center' bgcolor=".$bg8."><a href='main_page.php?page=9&menu=11'><div class='box4'>หนังสือเข้า[ภายใน]</div></a></td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=9&menu=2'><div class='box4'>หนังสือออก</div></a></td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=9&menu=4'><div class='box4'>คำสั่ง</div></a></td>";
		echo "<td align='center' bgcolor=".$bg6."><a href='main_page.php?page=9&menu=6'><div class='box4'>บันทึกข้อความ</div></a></td>";
		echo "<td align='center' bgcolor=".$bg7."><a href='main_page.php?page=9&menu=7'><div class='box4'>ประกาศ/หนังสือประชาสัมพันธ์</div></a></td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=9&menu=3'><div class='box4'>ปฎิทิน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=9&menu=5'><div class='box4'>Upload เอกสาร</div></a></td>";
	}elseif($_REQUEST['page'] == 10){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=10&menu=1'><div class='box4'>รายงานกิจกรรม(รายบุคคล)</div></a></td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=10&menu=4'><div class='box4'>รายงานกิจกรรม(สาขาวิชา)</div></a></td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=10&menu=2'><div class='box4'>บันทึกการแก้กิจกรรม</div></a></td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=10&menu=5'><div class='box4'>แบบลงเวลาโครงการ</div></a></td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=10&menu=3'><div class='box4'>รายนามคณะกรรมการชมรมฯ</div></a></td>";

	}elseif($_REQUEST['page'] == 11){
		if($_SESSION['Status'] == "SUPERUSER"){
			echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=11&menu=4'><div class='box4'>กำหนดค่าพื้นฐาน</div></a></td>";
		}
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=11&menu=5'><div class='box4'>แบบประเมิน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=11&menu=1'><div class='box4'>เปลี่ยนรูปประจำตัว</div></a></td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=11&menu=3'><div class='box4'>เปลี่ยนรหัสผ่าน</div></a></td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=11&menu=2'><div class='box4'>แก้ไขข้อมูลส่วนตัว</div></a></td>";
	}elseif($_REQUEST['page'] == 12){
		echo "<td align='center' bgcolor=".$bg7."><a href='main_page.php?page=12&menu=7'><div class='box4'>พิมพ์เอกสารหมายเลข 1,2</div></a></td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=12&menu=3'><div class='box4'>รายงานการลงทะเบียน(รวม)</div></a></td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=12&menu=4'><div class='box4'>รายงานการลงทะเบียน(สาขาวิชา)</div></a></td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=12&menu=2'><div class='box4'>ลงทะเบียนรายบุคคล</div></a></td>";
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=12&menu=1'><div class='box4'>Upload ข้อมูลการลงทะเบียน</div></a></td>";
		//echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=12&menu=5'>Upload รายชื่อนักศึกษาใหม่</a></td></td>";
		//echo "<td align='center' bgcolor=".$bg6."><a href='main_page.php?page=12&menu=6'>ยืมงาน/เคลียเงินไปราชการ</a></td></td>";
		echo "<td align='center' bgcolor=".$bg6."><a href='../finsy/index.php' target='_blank'>Finsy</a></td></td>";
	}elseif($_REQUEST['page'] == 13){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=13&menu=1'><div class='box4'>เปิด - ปิด ระบบ</div></a></td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=13&menu=2'><div class='box4'>สำรอง</div></a></td>";
	}
		echo "</tr>";
		echo "</table>";
?>
</table>