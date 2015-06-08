<?php
echo "<script> alert('done')</script>";
$h=$_REQUEST["height"]; 
$w=$_REQUEST["width"]; 
$i=1;
 ?>
<div style='left:0%; padding-top:0%; width:200%; height:120%; text-align:left; position:relative;'>
<?php 
$wlimit = 0;
$hlimit = 0;
while($i<13)
{
	$wid=22/100 * $w;
	$g=$i+1;
	if ($wlimit >= $w){echo "<div class='thumb' style='clear:both;'><img style='height:100%;' src='images/gallery/$i.jpg' /></div>"; $wlimit=0; 
	$i++;}
	if($i<13){
	echo "<div class='thumb'><img style='height:100%;' src='images/gallery/$i.jpg' /></div>";
	$wlimit+=$wid;
	$i++;
	}
	}
	$i=1;
	while ($wlimit < $w)
	{
	$wid=22/100 * $w;
		echo "<div class='thumb'><img style='height:100%; ' src='images/gallery/$i.jpg' /></div>";
		$wlimit+=$wid;
		$i++;
		}
	
?>
</div>
