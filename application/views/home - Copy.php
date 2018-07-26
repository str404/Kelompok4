<br>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url().'assets/images/bee.jpg'?>" alt="Los Angeles" style="width:1400px; height:600px">
      </div>

      <div class="item">
        <img src="<?php echo base_url().'assets/images/ei.png'?>" alt="#" style="width:1400px; height:600px">
      </div>
    
      <div class="item">
        <img src="<?php echo base_url().'assets/images/ranu.jpg'?>" alt="New york" style="width:1400px; height:600px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
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
      <p class="">Harga : <?php echo $i->harga ?> </p>
      <!-- <p class="">Tipe : <?php echo $i->nama_kategori ?> </p> -->
      <p class="">Ukuran : <?php echo $i->ukuran ?> </p>
      <p class="">Keterangan :<br> <?php echo $i->penjelasan ?> </p>
    <!--   <a href="<?php echo site_url ('Barang/hapus/'.$i->id_barang); ?>" class="btn btn-danger btn-xs pull-right" role="button">Delete </i></a>
      <a href=" <?php echo site_url('Barang/edit/'.$i->id_barang); ?>" class="btn btn-primary btn-xs" role="button">Edit </i></a> -->
    </div>
  </div>
</div>
<?php } ?>
</table>
</div>

					

			

