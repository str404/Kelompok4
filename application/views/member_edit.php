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
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">&ensp;&ensp;&ensp;&ensp;Member<span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('Member/create')?>">Buat Member baru</a></li>
            <li><a href="<?php echo site_url('Member')?>">list Member</a></li>
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
        	<td>Prioritas :</td>
        	<td><input type="text" name="prioritas" value="<?php echo $i->prioritas ?>"></td>
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

