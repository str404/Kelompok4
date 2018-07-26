<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
  <p align="center">
    <center>
		<h1>Silahkan edit member</h1>
		<h3>Edit member </h3>
	</center>
	<?php foreach($data as $i){ ?>
	<form action="<?php echo base_url(). 'Member/update'; ?>" method="post" enctype ="form-data">
		<table style="margin:20px auto;">
			<tr style="height: 50px;">
				<td>Nama Member :</td><br>
				<td><input type="hidden" name="id_member" value="<?php echo $i->id_member ?>">
					<input type="text" name="nama" value="<?php echo $i->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir : </td>
				<td><input type="text" name="tgl_lahir" value="<?php echo $i->tgl_lahir ?>"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Alamat :</td>
				<td><input type="text" name="alamat" value="<?php echo $i->alamat ?>"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Jenis Kelamin :</td>
				<td><input type="text" name="jenis_kelamin" value="<?php echo $i->jenis_kelamin ?>"></td>
			</tr>
      <tr style="height: 50px;">
        <td>Nomer Telepon :</td>
        <td><input type="text" name="no_telp" value="<?php echo $i->no_telp ?>"></td>
      </tr>
      		<tr style="height: 50px;">
        	<td>Username :</td>
        	<td><input type="text" name="username" value="<?php echo $i->username ?>"></td>
      		</tr>
      		<tr style="height: 50px;">
        	<td>Password :</td>
        	<td><input type="text" name="password" value="<?php echo $i->password ?>"></td>
      		</tr>
      		<tr style="height: 50px;">
        	<div class="form-group">
        		<td>Prioritas : </td>
        		 	<div class="form-check">
        		<td><input class="form-check-input" type="radio" name="id_level" id="freemember" value="3" checked>
        			<label class="form-check-label" for="freemember">free Member</label>
        			</div>
        			<br>
        			<div class="form-check">
        			<input class="form-check-input" type="radio" name="id_level" id="paidmember" value="2">
        			<label class="form-check-label" for="paidmember">Paid Member</label>
        			</div>
			    </div>
			</td>
      		</tr>
			
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

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php } ?>

