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
          <li><img src="<?php echo base_url('assets/gambar/str/1.jpg"  alt="#" width="70" height"50"')?>" ></li>
          <li><a href="<?php echo site_url('Welcome/Tugas')?>">&ensp;&ensp;&ensp;&ensp;Home</a></li>
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

<h1 align="center" class="style2"><span class="navbar-inverse "><span class="text-danger style9">Blog</span></h1>

<br />
<br />



<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
  <p align="center">
    <center>
		<h1>Silahkan edit barang</h1>
		<h3>Edit barang </h3>
	</center>
	<?php foreach($data as $i){ ?>
	<form action="<?php echo base_url(). 'Barang/update'; ?>" method="post" enctype ="multipart/form-data">
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

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php } ?>

