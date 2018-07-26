
<div class="container-fluid">
<div class="transbox">
  <div align="center" class="style7">
    <p>List barang</p>
    </div>

<div class="container">
<table class="table table-bordered table-striped" id="mydata">
 <?php foreach($all_barang as $i){ ?>
<div class="col-md-4">
  <div class="thumbnail">
    <div class="caption">
      <p class=""><h2><?php echo $i->nama_barang ?></h2></p>
      <hr>
      <p class=""> <img src="<?php echo base_url().'assets/gambar/upload/'.$i->gambar ?>" alt="#" height="300" width="300')?>" > </p>           

                    <?php
                    if($this->session->userdata('id_level') == 1){
                    ?>
      <p class="">Harga : <?php echo $i->harga ?> </p>
                    <?php } ?>

                    <?php
                    if($this->session->userdata('id_level') == 3){
                    ?>
      <p class="">Harga : <?php echo $i->harga ?> </p>
                    <?php } ?>

                    <?php
                    if($this->session->userdata('id_level') == 2 && $i->id_barang== 4){
                    ?>
      <p class="">Harga : <?php echo $i->harga * 30 / 100 ?> </p>
                    <?php } ?>

                    <?php
                    if($this->session->userdata('id_level') == 2 && $i->id_barang== 2){
                    ?>
      <p class="">Harga : <?php echo $i->harga * 40 / 100 ?> </p>
                    <?php } ?>

                    <?php
                    if($this->session->userdata('id_level') == 2 && $i->id_barang== 3){
                    ?>
      <p class="">Harga : <?php echo $i->harga * 45 / 100 ?> </p>
                    <?php } ?>

                    <?php
                    if($this->session->userdata('id_level') == 2 && $i->id_barang== 5){
                    ?>
      <p class="">Harga : <?php echo $i->harga * 50 / 100 ?> </p>
                    <?php } ?>
      <!-- <p class="">Tipe : <?php echo $i->nama_kategori ?> </p> -->
      <p class="">Ukuran : <?php echo $i->ukuran ?> </p>
      <p class="">Keterangan :<br> <?php echo $i->penjelasan ?> </p>
                    <?php
                    if($this->session->userdata('id_level') == 2 && $i->id_barang== 4){
                    ?>
      <p class=""><h2>Diskon spesial 30% untuk anda Member setia </h2> </p>
                    <?php } ?>

                    <?php
                    if($this->session->userdata('id_level') == 2 && $i->id_barang== 2){
                    ?>
      <p class=""><h2>Diskon spesial 40% untuk anda Member setia </h2>  </p>
                    <?php } ?>


                    <?php
                    if($this->session->userdata('id_level') == 2 && $i->id_barang== 3){
                    ?>
      <p class=""><h2>Diskon spesial 45% untuk anda Member setia </h2>  </p>
                    <?php } ?>

                    <?php
                    if($this->session->userdata('id_level') == 2 && $i->id_barang== 5){
                    ?>
      <p class=""><h2>Diskon spesial 50% untuk anda Member setia </h2>  </p>
                    <?php } ?>

                   <?php
                    if($this->session->userdata('id_level') == 1){
                    ?>
      <a href="<?php echo site_url ('Barang/hapus/'.$i->id_barang); ?>" class="btn btn-danger btn-xs pull-right" role="button">Delete </i></a>
      <a href=" <?php echo site_url('Barang/edit/'.$i->id_barang); ?>" class="btn btn-primary btn-xs" role="button">Edit </i></a>
    <?php } ?>
    </div>
  </div>
</div>
<?php } ?>
</table>
</div>

<div align="center">
<?php
        // $links ini berasal dari fungsi pagination
        // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
            echo $links;
        ?>
</div>

</div>
</div>
