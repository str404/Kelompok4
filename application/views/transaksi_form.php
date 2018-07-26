
<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
  <p align="center">
    <center>
		<h1>Silahkan menambah transaksi baru</h1>
		<h3>Tambah transaksi baru</h3>
	</center>
  <?php echo form_open('transaksi/create',  array('class' => 'needs-validation', 'novalidate' => '') ); ?>
	<?php echo validation_errors()?>	
    <table style="margin:20px auto;">
			<tr style="height: 50px;">
				<td>Nama Customer :</td><br>
				<td><?php echo form_dropdown('member', $dropdown, set_value('member'), 'class="form-control" required'); ?>
			</tr>
			<tr style="height: 50px;">
				<td>Nama barang :</td><br>
				<td><?php echo form_dropdown('barang', $dropdown1, set_value('barang'), 'class="form-control" required'); ?>
			</tr>
			<tr style="height: 50px;">
				<td>Harga : </td>
				<td><input type="text" name="harga" value="<?php echo set_value('harga') ?>"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Bayar : </td>
				<td><input type="text" name="bayar" value="<?php echo set_value('bayar') ?>"></td>
			</tr>
      		<tr style="height: 50px;">
        		<td>Tanggal Pinjam : </td>
        		<td><input type="date" name="tgl_pinjam" value="<?php echo set_value('tgl_pinjam') ?>"></td>
      		</tr>
      		<tr style="height: 50px;">
        		<td>Tanggal Kembali : </td>
        		<td><input type="date" name="tgl_kembali" value="<?php echo set_value('tgl_kembali') ?>"></td>
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

