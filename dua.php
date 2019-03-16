
    
   <?php
  function passValid($n){
		$passw = $n;
		$uppercase = preg_match('@[A-Z]@', $passw);
		$lowercase = preg_match('@[a-z]@', $passw);
		$number    = preg_match('@[0-9]@', $passw);
		$specialchar= preg_match('/[^a-zA-Z\d]/', $passw);
		if( $lowercase && $number && strlen($passw)==8 && $uppercase && $specialchar ){
			echo "password anda $n : password OK"; 
        }else{
            echo "password anda $n : password harus 8 karakter dan Setidaknya terdapat minimal sebuah huruf kecil, sebuah huruf besar, sebuah angka dan sebuah karakter spesial"; 
             }
  }
  passValid('123Qwer_');
  ?>
   