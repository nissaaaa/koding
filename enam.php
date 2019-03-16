<html>
   <body>
   <h3>Data Gudang</h3>
   <table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>Id</th>
			<th>Categorie Name</th>
			<th>Product</th>
		</tr>	
		<?php
			$koneksi =mysqli_connect("localhost", "root", "", "gudang");
			if ($koneksi-> connect_error) {
				die("Koneksi Gagal:". $koneksi-> connect_error);
			}else {
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
		<td><?php echo $data['Id'];?></td>
		<td><?php echo $data['Name'];?></td>
		<td><?php echo $data2['nama_produk'];?></td>
	  </tr>
   
	    <?php
			}
			}
			}
		?>
	</table> 
 </body>
</html>