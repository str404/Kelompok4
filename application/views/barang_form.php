<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>      
		  </button>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo site_url('Barang/home')?>">&ensp;&ensp;&ensp;&ensp;Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">&ensp;&ensp;&ensp;&ensp;Barang<span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('Barang/create')?>">Buat barang baru</a></li>
            <li><a href="<?php echo site_url('Barang')?>">list barang</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<br />
<br />
<br />

<h1 align="center" class="style2"><span class="navbar-inverse "><span class="text-danger style9">Daftar Barang</span></h1>

<br />
<br />



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

<br>
<br>
<br>
<br>
<br>
<br>
<br>

