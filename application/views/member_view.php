

<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
    <p>List Member</p>
    </div>
    <div class="container">

      <table class="table table-bordered table-striped" id="mydata">

            <thead>

                  <tr>

                        <td>Id</td>

                        <td>Nama Member</td>

                        <td>Tanggal Lahir</td>

                        <td>Alamat</td>

                        <td>Jenis Kelamin</td>

                        <td>Nomer Telepon</td>

                        <td>Username</td>

                        <td>Password</td>

                        <td>id_level</td>

                        <td>action</td>


                  </tr>

            </thead>

            <tbody>

                  <?php

                        foreach($data->result_array() as $i):

                              $id_member=$i['id_member'];

                              $nama=$i['nama'];

                              $tgl_lahir=$i['tgl_lahir'];

                              $alamat=$i['alamat'];

                              $jenis_kelamin=$i['jenis_kelamin'];

                              $no_telp=$i['no_telp'];

                              $username=$i['username'];

                              $password=$i['password'];

                              $id_level=$i['id_level'];



                  ?>

                  <tr>

                        <td><?php echo $id_member;?> </td>

                        <td><?php echo $nama;?> </td>

                        <td><?php echo $tgl_lahir;?> </td>

                        <td><?php echo $alamat;?> </td>

                        <td><?php echo $jenis_kelamin;?> </td>

                        <td><?php echo $no_telp;?> </td>

                        <td><?php echo $username;?> </td>

                        <td><?php echo $password;?> </td>

                        <td><?php echo $id_level;?> </td>

                        <td><a href="<?php echo site_url ('Member/hapus/'.$id_member); ?>" class="btn btn-danger btn-xs pull-right" role="button">Delete </i></a><br><br>&ensp;
      <a href=" <?php echo site_url('Member/edit/'.$id_member); ?>" class="btn btn-primary btn-xs" role="button">Edit </i></a></td>

                  </tr>

                  <?php endforeach;?>

            </tbody>

      </table>

</div>
<!-- <div class="container">
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
</div> -->

</div>
</div>

<br>
<br>
