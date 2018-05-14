
  <div align="center" class="style7">
  <p align="center">
    <center>
		<h1>Silahkan menambah kategori baru</h1>
		<h3>Tambah kategori baru</h3>
	</center>
  <?php echo form_open( 'Category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
  <?php echo validation_errors()?>	
<table style="margin:20px auto;">
			<tr style="height: 50px;">
				<td width="100px">Nama :</td><br>
				<td><input type="text" name="nama_kategori" value="<?php echo set_value('nama_kategori') ?>"> </td>
			</tr>
			<!-- <tr style="height: 50px;">
				<td>Deskripsi : </td>
				<td><textarea cols="50" rows="10" name="deskripsi" class="form-control" ><?php set_value('konten') ?></textarea></td>
			</tr> -->
</table>
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>
    <?php form_close() ?>
</p>
</div>
