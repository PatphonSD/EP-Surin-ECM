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
		<td  align="center" bgcolor="<?=$bgpage2;?>"><a href="main_page.php?page=2&menu=1">�ҹ����¹</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align="center" bgcolor="<?=$bgpage3;?>"><a href="main_page.php?page=3&menu=1">�ҹ�Ѵ���</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align="center" bgcolor="<?=$bgpage4;?>"><a href="main_page.php?page=4&menu=4">�ҹ��ѡ�ٵ�</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align="center" bgcolor="<?=$bgpage5;?>"><a href="main_page.php?page=5&menu=1">�ҹ�ؤ�ҡ�</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align="center" bgcolor="<?=$bgpage12;?>"><a href="main_page.php?page=12&menu=3">�ҹ����Թ</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align="center" bgcolor="<?=$bgpage6;?>"><a href="main_page.php?page=6&menu=1">�ҹ�Ҩ�������֡��</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
<?// echo "<td  align='center' bgcolor='$bgpage7'><a href='main_page.php?page=7'>�ҹ����</a></td>"; ?>
		<td  align="center" bgcolor="<?=$bgpage8;?>"><a href="main_page.php?page=8&menu=1">�ҹ����Ҥ�</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>

		<td  align="center" bgcolor="<?=$bgpage10;?>"><a href="main_page.php?page=10&menu=1">�ҹ�Ԩ����</a></td><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align='center' bgcolor='<?=$bgpage9;?>'><a href='main_page.php?page=9&menu=1'>�к��͡���</a><td align='center' bgcolor='<?=$bgpage0;?>'>|</td>
		<td  align="center" bgcolor="<?=$bgpage11;?>"><a href="main_page.php?page=11&menu=5">��������ǹ���</a></td>

</tr>

<?
	echo "<table width='900'>";
	echo "<tr height='25'>";
	if($_REQUEST['page'] == 1){
		echo "<td align='center' bgcolor='#FFA4A4'><big><b><font color='#3300cc'>�Թ�յ�͹�Ѻ</font></td>";
		//echo "<td align='center' bgcolor=".$bg1.">��Ǩ�ͺ��ª��͹ѡ�֡��</td>";
		//echo "<td align='center' bgcolor=".$bg2.">��Ѻ��ا�����Źѡ�֡��</td>";
	}elseif($_REQUEST['page'] == 2){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=2&menu=1'>������ ��.</a></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=2&menu=4'>����ѵ� ��.</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=2&menu=5'>���������� ��.</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=2&menu=2'>�Ѵ����¡��ŧ����¹</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg8."><a href='main_page.php?page=2&menu=8'>�����š��ŧ����¹</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg6."><a href='main_page.php?page=2&menu=6'>�����ѵ�ŧ����¹</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg7."><a href='main_page.php?page=2&menu=7'>������ͧ���¹</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=2&menu=3'>��Ѻ��ا�����Ū�����¹</a></td>";
		
	}elseif($_REQUEST['page'] == 3){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=3&menu=1'>��§ҹ�š�����¹</a></td></td><td width='1' align='center' bgcolor='$bg0'>|</td>";
		//echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=3&menu=3'>ʶԵ�����Ԫ�</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=3&menu=2'>���ͺ V-net</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=3&menu=5'>����Ҽš�����¹</a></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=3&menu=4'>����Ҽ� V-net</a></td></td><td align='center' width='1' bgcolor='$bg0'></td>";
		
	}elseif($_REQUEST['page'] == 4){
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=4&menu=4'>Ἱ������¹</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=4&menu=3'>����Ԫҷ���Դ�͹</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=4&menu=1'>�����Ԫ����¹</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=4&menu=2'>�������Ԫ�</a></td></td><td align='center' width='1' bgcolor='$bg0'></td>";
		
		//echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=4&menu=4'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		//echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=4&menu=5'>xx</a></td></td>";
	}elseif($_REQUEST['page'] == 5){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=5&menu=1'>��§ҹ�ӹǹ�ؤ�ҡ�</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=5&menu=2'>��䢢����źؤ�ҡ�</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=5&menu=3'>�����ؤ�ҡ�</a></td></td><td align='center' width='1' bgcolor='$bg0'></td>";
//		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=5&menu=4'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
//		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=5&menu=5'>xx</a></td></td>";
	}elseif($_REQUEST['page'] == 6){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=6&menu=1'>��¹���Ҩ�������֡��</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=6&menu=3'>�ҹ�Ѵ��ͧ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		//echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=6&menu=4'>�ѹ�֡�����������ҹ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=6&menu=2'>��Ѻ��ا�Ҩ�������֡��</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=6&menu=4'>�����ż�黡��ͧ</a></td></td><td align='center' width='1' bgcolor='$bg0'></td>";
	//	echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=6&menu=4'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
	//	echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=6&menu=5'>xx</a></td></td>";
	}elseif($_REQUEST['page'] == 7){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=7&menu=1'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=7&menu=2'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=7&menu=3'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=7&menu=4'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=7&menu=5'>xx</a></td></td>";
	}elseif($_REQUEST['page'] == 8){
		echo "<td align='center' bgcolor='".$bg1."'><a href='main_page.php?page=8&menu=1'>��§ҹ��ý֡�ҹ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg6."'><a href='main_page.php?page=8&menu=6'>��䢻���ѵԹѡ�֡��</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg2."'><a href='main_page.php?page=8&menu=2'>��˹���ý֡�ҹ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg8."'><a href='main_page.php?page=8&menu=8'>Ἱ��ý֡</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg3."'><a href='main_page.php?page=8&menu=3'>������ʶҹ��Сͺ���</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg4."'><a href='main_page.php?page=8&menu=4'>������͡��õ�ҧ�</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg7."'><a href='main_page.php?page=8&menu=7'>Ẻ�ͺ���</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor='".$bg5."'><a href='main_page.php?page=8&menu=5'>�š�û����Թ�ѡ�֡��</a></td>";
	}elseif($_REQUEST['page'] == 9){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=9&menu=1'>˹ѧ������</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=9&menu=2'>˹ѧ����͡</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=9&menu=4'>�����/��С��</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg6."><a href='main_page.php?page=9&menu=6'>�ѹ�֡��ͤ���</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=9&menu=3'>�͡��� �ç���</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=9&menu=5'>Upload �͡���</a></td></td>";
	}elseif($_REQUEST['page'] == 10){
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=10&menu=1'>��§ҹ�����������Ԩ����(��ºؤ��)</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=10&menu=4'>��§ҹ�����������Ԩ����(�Ң��Ԫ�)</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		//echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=10&menu=2'>��§ҹ�Ԩ���������ԪҪվ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=10&menu=3'>��¹����С�����ê����ԪҪվ</a></td></td>";
		
		//echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=10&menu=5'>xx</a></td>";
	}elseif($_REQUEST['page'] == 11){
		
		if($_SESSION['Status'] == "SUPERUSER"){
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=11&menu=4'>��˹���Ҿ�鹰ҹ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		}
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=11&menu=5'>Ẻ�����Թ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=11&menu=1'>����¹�ٻ��Шӵ��</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=11&menu=3'>����¹���ʼ�ҹ</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=11&menu=2'>��䢢�������ǹ���</a></td></td>";
	
		//echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=11&menu=5'>xx</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
	}elseif($_REQUEST['page'] == 12){
		echo "<td align='center' bgcolor=".$bg3."><a href='main_page.php?page=12&menu=3'>��§ҹ���ŧ����¹(���)</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg4."><a href='main_page.php?page=12&menu=4'>��§ҹ���ŧ����¹(�Ң��Ԫ�)</a></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg2."><a href='main_page.php?page=12&menu=2'>ŧ����¹��ºؤ��</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg1."><a href='main_page.php?page=12&menu=1'>Upload �����š��ŧ����¹</a></td></td><td align='center' width='1' bgcolor='$bg0'>|</td>";
		echo "<td align='center' bgcolor=".$bg5."><a href='main_page.php?page=12&menu=5'>Upload ��ª��͹ѡ�֡������</a></td></td>";
	}
		echo "</tr>";
		echo "</table>";
?>
</table>