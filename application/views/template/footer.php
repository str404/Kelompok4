<div id="footer" align="center">
    <span class="success style17">&copy; STR_WEB 2018. CodeIgniter. All rights reserved.    </span><br />
    Copyright &copy; 2018
Designed by Muhammad Satria R P</div>
</div>

 <script>
$(document).ready(function(){
    $('body').scrollspy({target: ".navbar", offset: 50});   
  $("#myNavbar a").on('click', function(event) {
  if (this.hash !== "") {
   event.preventDefault();
   var hash = this.hash;
   $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
    window.location.hash = hash;
    });

  }
  });
});
    </script>
  

<script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
<!-- <script src="<?php //echo base_url('assets/js/bootstrap.min.js')?>"></script> -->
<script src="<?php echo base_url('assets/js/smoothscroll.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.nav.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.parallax.js')?>"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/isotope.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/wow.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/counter.js')?>"></script>
<!-- <script src="<?php //echo base_url('assets/js/custom.js')?>"></script> -->
<script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url() ?>assets/js/holder.min.js"></script>

    <!-- Custom -->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"> </script>

<script>

      $(document).ready(function(){

            $('#mydata').DataTable();

      });

</script>

</body>
</html>
