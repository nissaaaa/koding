<html>
   <head>
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	  <script src="http://code.jquery.com/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </head>
   <body>

      <div class="navbar navbar-fixed-top navbar-inverse">
           <div class="navbar-inner">
	            <div class="container">
	                 <img alt="Gambar" src="gh.png" height="250" width="120" />
                     <font size="6" color="#fff">Gudang Inventory</font>
		        </div>
           </div>
      </div>	

      <style type="text/css">
           .col-md-1,.col-md-12,.col-md-4,.col-md-8,.col-md-6{
            background: #b76e79;
            color: #fff;
            padding:150px 50px 150px 50px;
            text-align: justify;
            border: 1px solid #fff;  	
        }    
     </style>
     <div class="container" >
          <div class="row">
               <div class="col-md-6">
                  <h3>Data Gudang</h3>
                  <table cellpadding="5" cellspacing="0" border="1" class="table table-bordered">
		            <tr bgcolor="#CCCCCC">
			            <th>Id</th>
			            <th>Categorie Name</th>
			            <th>Product</th>
		            </tr>	
     <?php
         $koneksi =mysqli_connect("localhost", "root", "", "gudang");
	     if ($koneksi-> connect_error) {
		     die("Koneksi Gagal:". $koneksi-> connect_error);
	     } else{
		     $query="SELECT * from categories ";
		     $query2="SELECT  GROUP_CONCAT(Name separator ',') as nama_produk from product GROUP BY categories_id";

		     $result=$koneksi->query($query);
		     $result2=$koneksi->query($query2);
    ?>
	
    <?php	   
		if($result->num_rows >0) {
			while($data=$result->fetch_assoc()){
				  $data2=$result2->fetch_assoc();
	?>
  
                <tr>
		            <td><font color="#fff"><?php echo $data['Id'];?></font></td>
		            <td><font color="#fff"><?php echo $data['Name'];?></font></td>
		            <td><font color="#fff"><?php echo $data2['nama_produk'];?></font></td>
	            </tr>
    <?php
	}
	}
	if (isset($_POST['submit'])){
		   $kategori=$_POST['input'];
		   $query3="INSERT INTO categories VALUES ('', '$kategori')";
		   $result3=$koneksi->query($query3);	
	       if($result3){
	?>   
      <meta http-equiv="refresh" content="1">
	 
	<?php
	}
	else {
		   echo "data belum masuk";
	}
	}   
	}
    ?>
	     </div>
    </div>
</div>
  	</table>  
    <h3>Tambah Kategori</h3>
	<form action="tujuh.php" method="post">
    <input type="text" name="input" placeholder="categories"><br>
	<input type="submit" name="submit" value="tambah" class="btn btn-danger">
	</form>
    </body>
</html>