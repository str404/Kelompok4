
<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
  <p align="center">
    <center>
		<h1>Silahkan menambah barang baru</h1>
		<h3>Tambah barang baru</h3>
	</center>
  <?php echo form_open_multipart('Barang/create',  array('class' => 'needs-validation', 'novalidate' => '') ); ?>
	<?php echo validation_errors()?>	
    <table style="margin:20px auto;">
			<tr style="height: 50px;">
				<td>Nama Barang :</td><br>
				<td><input type="text" name="nama_barang" value="<?php echo set_value('nama_barang') ?>">
			</tr>
			<tr style="height: 50px;">
				<td>Harga : </td>
				<td><input type="text" name="harga" value="<?php echo set_value('harga') ?>"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Tipe :</td>
				<td><input type="text" name="tipe" value="<?php echo set_value('tipe') ?>"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Keterangan :</td>
				<td><textarea cols="100" rows="10" name="penjelasan" class="form-control" ><?php set_value('penjelasan') ?></textarea></td>
			</tr>
      <tr style="height: 50px;">
        <td>Ukuran :</td>
        <td><input type="text" name="ukuran" value="<?php echo set_value('ukuran') ?>"></td>
      </tr>
			<tr style="height: 50px;">
				<td>Gambar :</td>
				<td><input type="file" name="userfile" size="20" /></td>

			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-primary" type="submit" value="tambah"></td>
			</tr>
		</table>
    <?php form_close() ?>
</p>
</div>
</div>
</div>


