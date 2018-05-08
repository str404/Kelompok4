

<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
  <p align="center">
    <center>
		<h1>Silahkan edit barang</h1>
	</center>
	<?php foreach($data as $i){ ?>
	<form action="<?php echo base_url(). 'Barang/update'; ?>" method="post" enctype ="multipart/form-data">
	<input type="hidden" name="gambar" value="<?php echo $i->gambar ?>">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Barang :</td><br>
				<td><input type="hidden" name="id_barang" value="<?php echo $i->id_barang ?>">
					<input type="text" name="nama_barang" value="<?php echo $i->nama_barang ?>">
				</td>
			</tr>
			<tr>
				<td>Harga : </td>
				<td><input type="text" name="harga" value="<?php echo $i->harga ?>"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Tipe :</td>
				<td><input type="text" name="tipe" value="<?php echo $i->tipe ?>"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Keterangan :</td>
				<td><input type="text" name="penjelasan" style="width : 500px; height: 200px;" value="<?php echo $i->penjelasan ?>"></td>
			</tr>
      <tr style="height: 50px;">
        <td>Ukuran :</td>
        <td><input type="text" name="ukuran" value="<?php echo $i->ukuran ?>"></td>
      </tr>
			<tr style="height: 50px;">
				<td>Gambar :</td>
				<td><input type="file" name="userfile" size="20" /></td>

			<tr>
				<td></td>
				<td><button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button></td>
			</tr>
		</table>
	</form>	
</p>
</div>
</div>
</div>

<?php } ?>

