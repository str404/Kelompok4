<div align="center" class="style7">
  <p align="center">
    <center>
		<h1>Silahkan edit artikel </h1>
		<h3>Edit artikel </h3>
	</center>
	<?php foreach($data as $i){ ?>
	<form action="<?php echo base_url(). 'Category/update'; ?>" method="post" enctype ="multipart/form-data">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama :</td><br>
				<td><input type="hidden" name="id_kategori" value="<?php echo $i->id_kategori ?>">
					<input type="text" name="nama_kategori" value="<?php echo $i->nama_kategori ?>">
				</td>
			</tr>
			<!-- <tr>
				<td>Deskripsi : </td>
				<td><input type="text" name="deskripsi" style="width : 500px; height: 200px;" value="<?php echo $i->deskripsi ?>"></td>
			</tr>
		 -->
		 
			<tr>
				<td></td>
				<td><button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</p>
</div>
