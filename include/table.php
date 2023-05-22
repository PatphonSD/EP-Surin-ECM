							<? //echo $DQ;
								if($_SESSION["status"]!= ""){
									echo "<td align='left'>";
								
									if($_SESSION["status"]== ""){
									
									}else{
										echo "<a href='manager1-3.php?page=1&member_no=$member_no&match_code=$match_code&course=$course&type=$type'>";
									}
							
									echo  $result1['prename'] . $result1['fname'];
									echo "&nbsp;&nbsp;&nbsp;";
									echo  $result1['lname'];
									echo "</a>";
									echo "<font color='red'>&nbsp;&nbsp;".$result['status']."&nbsp;</font>";
										if($result['trophy1']==""){
										}else{
											echo  "<font color='red'>&nbsp;&nbsp;(".$result['trophy1'].")";
										}
										if($result['trophy2']==""){
										}else{
											echo  "<font color='red'>(".$result['trophy2'].")";
										}

									echo "</font></td><td></td>";
								}else{
									echo "<td align='left'>";
									echo  $result1['prename'] . $result1['fname'];
									echo "&nbsp;&nbsp;&nbsp;";
									echo  $result1['lname']."<font color='red'>&nbsp;&nbsp;".$result['status']."&nbsp;</font></a>";
										if($result['trophy1']==""){
										}else{
										echo  "<font color='red'>&nbsp;&nbsp;(".$result['trophy1'].")";
										}

										if($result['trophy2']==""){
										}else{
											echo  "<font color='red'>(".$result['trophy2'].")";
										}
									echo "</font></td><td></td>";
									//echo $DQ;
								}
							?>
							<?
								$IN=0;
								$OUT=0;
								for($h=1 ; $h<=18 ; $h++){
								$ref = $result4["H".$h] - $result["H".$h];
										if($ref >= 1 AND $result["H".$h] != 0 ){
											$bg="#FA8258";
										}elseif($ref >= 0 AND $result["H".$h] != 0){
											$bg="#A9D0F5";
										}else{
											$bg="";
										}
								
									echo "<td width='20' bgcolor='".$bg."'>".$result["H".$h]."</td>";
										if($h <= 9){
											$sumOUT=$OUT + $result["H".$h];
											$OUT = $sumOUT;
										}else{
											$sumIN=$IN + $result["H".$h];
											$IN=$sumIN;
										}
								}
								echo "<td> <font color='blue'><b>".$OUT."</b></font></td>";
								echo "<td><font color='blue'><b>".$IN."</b></font></td>";
							?>
							<td><b><?=$result['H_cap'];?></b></td>
							<? $NET=$IN+$OUT-$result['H_cap'];?>
							<? $GROSS=$IN+$OUT;?>

								<?  
									if($GROSS=="0"){
										$GROSS="<font color='black'>-</font>";
									}else{
									}
									if($NET<="0"){
										$NET="<font color='black'>-</font>";
									}else{
									}
								?>

								<? if(0<=$NET AND $NET<=$PAR){$color1="red";}else{$color1="black";}?>
								<? if(0<=$GROSS AND $GROSS<=$PAR){$color2="red";}else{$color2="black";}?>
						<td><b><font color="<?=$color2;?>"><?=$GROSS;?></font></b></td>
						<td><b><font color="<?=$color1;?>"><?=$NET;?></font></b></td>
