<div class="container">
   <div class="py-5 text-center">
   					<?php
                    if($this->session->userdata('id_level') == 1){
                    ?>
       <h2>Selamat datang Admin <?php echo  $user->nama ?></h2>
       				<?php } ?>

       				<?php
                    if($this->session->userdata('id_level') == 2){
                    ?>
       <h2>Selamat datang Paid Member <?php echo  $user->nama ?></h2>
       				<?php } ?>

       				<?php
                    if($this->session->userdata('id_level') == 3){
                    ?>
       <h2>Selamat datang Free Member <?php echo  $user->nama ?></h2>
       				<?php } ?>
   </div>
</div>
