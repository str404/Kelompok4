<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
  <p align="center">
    <center>
		<h1>Silahkan edit transaksi</h1>
	</center>
	<?php foreach($data as $i){ ?>
	<form action="<?php echo base_url(). 'TransaksiKembali/update'; ?>" method="post" enctype ="multipart/form-data">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Member :</td><br>
				<td><input type="hidden" name="id_kembali" value="<?php echo $i->id_kembali ?>">
					<?php echo form_dropdown('member', $dropdown, set_value('member',$i->id_member), 'class="form-control" required'); ?></td>
				</td>
			</tr>
			<tr>
				<td>Nama Barang :</td><br>
				<td><?php echo form_dropdown('barang', $dropdown1, set_value('barang',$i->id_barang), 'class="form-control" required'); ?></td>
				</td>
			</tr>
      		<tr style="height: 50px;">
        		<td>Tanggal Kembali : </td>
        		<td><input type="date" name="TglKembali" value="<?php echo $i->Tglkembali ?>"></td>
      		</tr>
      		<tr style="height: 50px;">
        		<td>Tanggal Sekarang : </td>
        		<td><input type="date" name="tglskrg" value="<?php echo $i->tglskrg ?>"></td>
      		</tr>
      		<tr style="height: 50px;">
        		<td>Denda </td>
        		<td><input type="text" name="denda" value="<?php echo $i->denda ?>"></td>
      		</tr>
				<td><button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button></td>
			</tr>
		</table>
	</form>	
</p>
</div>
</div>
</div>

<?php } ?>

