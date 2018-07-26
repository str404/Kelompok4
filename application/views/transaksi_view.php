

<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
    <p>List Transaksi</p>
    </div>
    <div class="container">

      <table class="table table-bordered table-striped" id="mydata">

            <thead>

                  <tr>

                        <td>Id</td>

                        <td>Id_member </td>

                        <td>Id_barang</td>

                        <td>Harga</td>

                        <td>Bayar</td>

                        <td>Tanggal Pinjam</td>

                        <td>Tanggal Kembali</td>
                        <?php
                    if($this->session->userdata('id_level') == 1){
                    ?>
                        <td>Action</td>
                    <?php } ?>

                  </tr>

            </thead>

            <tbody>

                  <?php

                        foreach($data->result_array() as $i):

                              $id=$i['id_transaksi'];

                              $id_member=$i['id_member'];

                              $id_barang=$i['id_barang'];

                              $harga=$i['harga'];

                              $bayar=$i['bayar'];

                              $tgl_pinjam=$i['tgl_pinjam'];

                              $tgl_kembali=$i['tgl_kembali'];

                  ?>

                  <tr>

                        <td><?php echo $id;?> </td>

                        <td><?php echo $id_member;?> </td>

                        <td><?php echo $id_barang;?> </td>

                        <td><?php echo $harga;?> </td>

                        <td><?php echo $bayar;?> </td>

                        <td><?php echo $tgl_pinjam;?> </td>

                        <td><?php echo $tgl_kembali;?> </td>
                        <?php
                    if($this->session->userdata('id_level') == 1){
                    ?>
                        <td><a href="<?php echo site_url ('Transaksi/hapus/'.$id); ?>" class="btn btn-danger btn-xs pull-right" role="button">Delete</a>
      <a href=" <?php echo site_url('Transaksi/edit/'.$id); ?>" class="btn btn-primary btn-xs" role="button">Edit</a></td> 
    <?php } ?>
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
<br>
<br>
<br>
<br>