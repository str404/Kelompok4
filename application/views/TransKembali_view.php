

<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
    <p>List Transaksi Pengembalian Barang</p>
    </div>
    <div class="container">

      <table class="table table-bordered table-striped" id="mydata">

            <thead>

                  <tr>

                        <td>Id_kembali</td>

                        <td>Id_member </td>

                        <td>Id_barang</td>

                        <td>Tanggal Pengembalian</td>

                        <td>Tanggal Sekarang</td>

                         <td>Denda</td>

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

                              $id=$i['id_kembali'];

                              $id_member=$i['id_member'];

                              $id_barang=$i['id_barang'];

                              $TglKembali=$i['Tglkembali'];

                              $tglskrg=$i['tglskrg'];

                              $denda=$i['denda'];

                  ?>

                  <tr>

                        <td><?php echo $id;?> </td>

                        <td><?php echo $id_member;?> </td>

                        <td><?php echo $id_barang;?> </td>

                        <td><?php echo $TglKembali;?> </td>

                        <td><?php echo $tglskrg;?> </td>

                        <td><?php echo $denda;?> </td>

                        <?php
                    if($this->session->userdata('id_level') == 1){
                    ?>
                        <td><a href="<?php echo site_url ('TransaksiKembali/hapus/'.$id); ?>" class="btn btn-danger btn-xs pull-right" role="button">Delete</a>
      <a href=" <?php echo site_url('TransaksiKembali/edit/'.$id); ?>" class="btn btn-primary btn-xs" role="button">Edit</a></td> 
    <?php }?>

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