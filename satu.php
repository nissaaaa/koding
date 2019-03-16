
      
      <?php
       function  biodataku(){		
		     $name='Choirun Nisa';
			 $address='Desa Punjul Kecamatan Plosoklaten Kabupaten Kediri';
             $hobby = array ("proramming", "basket", "nonton film", "jalan-jalan");
	
			 $is_married=false;
			 if ($is_married== true) {
				$status="menikah";
			 }
			 else {
				$status="belum menikah";
             } 	
		
			class Skill
			{
				public $hardskill;
				public $softskill;
			}
				$mySkill1 = new Skill ();
				$mySkill1->hardskill='programming,';
				$mySkill1->softskill='hard working';
				$myskills = array($mySkill1);
		
			class biodataku 
			{
	            public $nama;
				public $alamat;
				public $hobi;
				public $statusku;
				public $keahlian;
	
				public function school($highschool, $university) {
			    echo json_encode($highschool); echo json_encode($university);
					}
			}

				$biodata = new biodataku();
				$biodata->nama= $name;
				$biodata->alamat= $address;
				$biodata->hobi=$hobby[1];
				$biodata->statusku=$status;
				$biodata->keahlian=$mySkill1;
				echo json_encode($biodata);  
				$biodata->school('SMAN 2 PARE', 'PENS');  
 
        }
            biodataku();	
            ?>
      
  