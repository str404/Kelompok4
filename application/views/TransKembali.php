
<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
  <p align="center">
    <center>
		<h1>Silahkan menambah transaksi baru</h1>
		<h3>Tambah transaksi baru</h3>
	</center>
  <?php echo form_open('TransaksiKembali/create',  array('class' => 'needs-validation', 'novalidate' => '') ); ?>
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
        		<td>Tanggal Kembali : </td>
        		<td><input type="date" name="TglKembali" value="<?php echo set_value('TglKembali') ?>"></td>
      		</tr>
      		<tr style="height: 50px;">
        		<td>Tanggal Sekarang : </td>
        		<td><input type="date" name="tglskrg" value="<?php echo set_value('tglskrg') ?>"></td>
      		</tr>
      		<tr style="height: 50px;">
				<td>Denda : </td>
				<td><input type="text" name="denda" value="<?php echo set_value('denda') ?>"></td>
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

