
<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
  <p align="center">
    <center>
		<h1>Silahkan menambah Member baru</h1>
		<h3>Tambah Member baru</h3>
	</center>
  <?php echo form_open('Member/create',  array('class' => 'needs-validation', 'novalidate' => '') ); ?>
	<?php echo validation_errors()?>	
    <table style="margin:20px auto;">
			<tr style="height: 50px;">
				<td>Nama Member :</td><br>
				<td><input type="text" name="nama" value="<?php echo set_value('nama') ?>">
			</tr>
			<tr style="height: 50px;">
				<td>Tanggal lahir : </td>
				<td><input type="text" name="tgl_lahir" value="<?php echo set_value('tgl_lahir') ?>"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Alamat : </td>
				<td><input type="text" name="alamat" value="<?php echo set_value('alamat') ?>"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Jenis Kelamin : </td>
				<td><input type="text" name="jenis_kelamin" value="<?php echo set_value('jenis_kelamin') ?>"></td>
			</tr>
      		<tr style="height: 50px;">
        		<td>no telp : </td>
        		<td><input type="text" name="no_telp" value="<?php echo set_value('no_telp') ?>"></td>
      		</tr>
      		<tr style="height: 50px;">
        		<td>Username : </td>
        		<td><input type="text" name="username" value="<?php echo set_value('username') ?>"></td>
      		</tr>
      		<tr style="height: 50px;">
        		<td>Password : </td>
        		<td><input type="text" name="password" value="<?php echo set_value('password') ?>"></td>
      		</tr>
      		<tr style="height: 50px;">
        		<td>Prioritas : </td>
        		<td><input type="text" name="prioritas" value="<?php echo set_value('prioritas') ?>"></td>
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

