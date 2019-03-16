<?php

function drawKarakter($n) {
echo '<div style="font:bold 16px courier new; line-height:10px">';
	$m=floor($n/2)+1;
	for ($i=1; $i<=$n; $i++){
		for($j=1; $j<=$n; $j++){
			if ($i==$m || $j==$m || ($i==1 && $j==1) || ($i==1 && $j==$n) || ($i==$n && $j==1) || ($i==$n && $j==$n)){
				echo "*";
			}
			else{
			    echo "=";
			}
		}
		        echo "<br>";
	}
	echo '</div>';
}
drawKarakter(7);
//drawKarakter(5);
?>