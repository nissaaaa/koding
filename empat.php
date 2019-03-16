
   <?php
   
    function hitungKembalian($totalBelanja, $jumlahUang){
	$kembalian=$jumlahUang-$totalBelanja;
    echo "Total Belanja Anda $totalBelanja "; echo"<br>";
	echo "Bayar $jumlahUang"; echo "<br>";
	echo "Maka Kembaliann Anda: $kembalian "; echo "<br>";
	echo "============================================"; echo "<br>";
	
   
	$kembalian=$jumlahUang-$totalBelanja;
		if ($kembalian>=50000) {
	   
			$receh=floor(($kembalian/50000));
			echo "$receh X 50000"; echo "<br>";
			$kembalian=$kembalian%50000;
		}
   
		if ($kembalian>=20000 && $kembalian<=50000) {
			
			$receh=floor(($kembalian/20000));
			echo "$receh X 20000"; echo "<br>";
			$kembalian=$kembalian%20000;
	   
		}
   
		if ($kembalian>=10000 && $kembalian<=20000) {
			
			$receh=floor(($kembalian/10000));
			echo "$receh X 10000"; echo "<br>";
			$kembalian=$kembalian%10000;
	   
		}
  
		if ($kembalian>=5000 && $kembalian<=10000) {
			
			$receh=floor(($kembalian/5000));
			echo "$receh X 5000"; echo "<br>";
			$kembalian=$kembalian%5000;
	   
		}
   
		if ($kembalian>=2000 && $kembalian<=5000) {
			
			$receh=floor(($kembalian/2000));
			echo "$receh X 2000"; echo "<br>";
			$kembalian=$kembalian%2000;
	   
		}
   
		if ($kembalian>=1000 && $kembalian<=2000) {
			
			$receh=floor(($kembalian/1000));
			echo "$receh X 1000"; echo "<br>";
			$kembalian=$kembalian%1000;
	   
		}
   
		if ($kembalian>=500 && $kembalian<=1000) {
			
			$receh=floor(($kembalian/500));
			echo "$receh X 500"; echo "<br>";
			$kembalian=$kembalian%500; 
		}
		}

		hitungKembalian(15500, 50000);   
    
   ?>
         