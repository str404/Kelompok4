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
    <p>List barang</p>
    </div>
<!-- 
    <div class="container">

      <table class="table table-bordered table-striped" id="mydata">

            <thead>

                  <tr>

                        <td>Id</td>

                        <td>Nama Kategori</td>

                        <td>Deskripsi</td>

                        <td>date_created</td>

                        <td>action</td>


                  </tr>

            </thead>

            <tbody>

                  <?php

                        foreach($data->result_array() as $i):

                              $id=$i['id'];

                              $nama=$i['nama'];

                              $deskripsi=$i['deskripsi'];

                              $date_created=$i['date_created'];

                  ?>

                  <tr>

                        <td><?php echo $id;?> </td>

                        <td><?php echo $nama;?> </td>

                        <td><?php echo $deskripsi;?> </td>

                        <td><?php echo $date_created;?> </td>
                        <td></td>

                  </tr>

                  <?php endforeach;?>

            </tbody>

      </table>

</div> -->
<div class="container">
<table class="table table-bordered table-striped" id="mydata">
 <?php foreach($data->result() as $i){ ?>
<div class="col-md-4">
  <div class="thumbnail">
    <div class="caption">
      <p class=""><h2><?php echo $i->nama_barang ?></h2></p>
      <hr>
      <p class=""> <img src="<?php echo base_url().'assets/gambar/upload/'.$i->gambar ?>" alt="#" height="300" width="300')?>" > </p>
      <p class="">Harga : <?php echo $i->harga ?> </p>
      <p class="">Tipe : <?php echo $i->tipe ?> </p>
      <p class="">Ukuran : <?php echo $i->ukuran ?> </p>
      <p class="">Keterangan :<br> <?php echo $i->penjelasan ?> </p>
      <a href="<?php echo site_url ('Barang/hapus/'.$i->id_barang); ?>" class="btn btn-danger btn-xs pull-right" role="button">Delete </i></a>
      <a href=" <?php echo site_url('Barang/edit/'.$i->id_barang); ?>" class="btn btn-primary btn-xs" role="button">Edit </i></a>
    </div>
  </div>
</div>
<?php } ?>
</table>
</div>

</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>