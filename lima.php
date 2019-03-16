<?php
function jumlahsalaman($n){
	$l=0;
	for ($i=$n; $i>1; $i--){
		$m=$i-1;
		$l=$l+$m;
		//echo "$l"; echo "<br>";
	}
	echo "banyak orang : $n"; echo "<br>";
	echo "jumlah jabat tangan yang terjadi : $l kali";
}
jumlahsalaman(6);
?>