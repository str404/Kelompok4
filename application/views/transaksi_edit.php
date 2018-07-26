

<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
  <p align="center">
    <center>
		<h1>Silahkan edit transaksi</h1>
	</center>
	<?php foreach($data as $i){ ?>
	<form action="<?php echo base_url(). 'Transaksi/update'; ?>" method="post" enctype ="multipart/form-data">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Member :</td><br>
				<td><input type="hidden" name="id_transaksi" value="<?php echo $i->id_transaksi ?>">
					<?php echo form_dropdown('member', $dropdown, set_value('member',$i->id_member), 'class="form-control" required'); ?></td>
				</td>
			</tr>
			<tr>
				<td>Nama Barang :</td><br>
				<td><?php echo form_dropdown('barang', $dropdown1, set_value('barang',$i->id_barang), 'class="form-control" required'); ?></td>
				</td>
			</tr>
			<tr style="height: 50px;">
				<td>Harga : </td>
				<td><input type="text" name="harga" value="<?php echo $i->harga ?>"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Bayar : </td>
				<td><input type="text" name="bayar" value="<?php echo $i->bayar ?>"></td>
			</tr>
      		<tr style="height: 50px;">
        		<td>Tanggal Pinjam : </td>
        		<td><input type="date" name="tgl_pinjam" value="<?php echo $i->tgl_pinjam ?>"></td>
      		</tr>
      		<tr style="height: 50px;">
        		<td>Tanggal Kembali : </td>
        		<td><input type="date" name="tgl_kembali" value="<?php echo $i->tgl_kembali ?>"></td>
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

