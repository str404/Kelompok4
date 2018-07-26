<div align="center" class="style7">
    <p>List kategori</p>
    </div>

    <div class="container">

      <table class="table table-bordered table-striped" id="mydata">

            <thead>

                  <tr>

                        <td>Id</td>

                        <td>Nama Kategori</td>

                        <!-- <td>Deskripsi</td>

                        <td>date_created</td> -->

                        <td>action</td>


                  </tr>

            </thead>

            <tbody>

                  <?php

                        foreach($data->result_array() as $i):

                              $id_kategori=$i['id_kategori'];

                              $nama=$i['nama_kategori'];

                             

                  ?>

                  <tr>

                        <td><?php echo $id_kategori;?> </td>

                        <td><?php echo $nama;?> </td>

                       <!--  <td><?php echo $deskripsi;?> </td>

                        <td><?php echo $date_created;?> </td> -->
                        <td><a href="<?php echo site_url ('Category/hapus/'.$id_kategori); ?>" class="btn btn-danger btn-xs" role="button">Delete </i></a>
      <a href=" <?php echo site_url('Category/edit/'.$id_kategori); ?>" class="btn btn-primary btn-xs" role="button">Edit </i></a></td>

                  </tr>

                  <?php endforeach;?>

            </tbody>

      </table>

</div>