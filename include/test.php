
	<table width="500" border="0" cellspacing="2" cellpadding="0">
<?
$objConnect = mysql_connect("localhost","electri3_test","testANDtest") or die("Error Connect to Database");
$objDB = mysql_select_db("electri3_test");
$i=1;
$q="SELECT DVT_couse.* FROM DVT_couse  WHERE DVT_couse.group_id ='56310404'"; 
$qr=mysql_query($objDB,$q);   
$numItem=mysql_num_rows($qr);
$numCol=4;
$remainCol=$numCol-($numItem%$numCol);
while($rs=mysql_fetch_array($qr)){  
?>
<?php if($i%$numCol==1){ ?>
  <tr>
    <td width="125"><?=$rs['tcode']?></td>
<?php } ?>
<?php if($i%$numCol==2){ ?>    
    <td width="125"><?=$rs['tcode']?></td>
<?php } ?>
<?php if($i%$numCol==3){ ?>        
    <td width="125"><?=$rs['tcode']?></td>
<?php } ?>
<?php if($i%$numCol==0){ ?>        
    <td width="125"><?=$rs['tcode']?></td>
  </tr>
<?php } ?>
<?php $i++; } ?>
<?=($remainCol>0 && $remainCol!=$numCol)?"<td colspan=".$remainCol."></td></tr>":""?>  
</table>
