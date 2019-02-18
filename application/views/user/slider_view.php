<div class="container" style="width:100%">
	<!--<script src="<?php echo base_url(); ?>template/js/jquery-1.11.0.js"></script>-->
	<script src="<?php echo base_url(); ?>template/slider/jquery.bxslider.js"></script>
	<link href="<?php echo base_url(); ?>template/slider/jquery.bxslider.css" rel="stylesheet" />

	<ul class="bxslider" style="min-height:500px">
	  <!--<li><img src="<?php echo base_url(); ?>files/user/slider/1.jpg" /></li>
	  <li><img src="<?php echo base_url(); ?>files/user/slider/2.jpg" /></li>
	  <li><img src="<?php echo base_url(); ?>files/user/slider/3.jpg" /></li>-->
	  <?php 
	  $slider_res = $this->db->get_where('tbl_slider',array('slider_status'=>'Active'));
	  foreach($slider_res->result() as $result_row)
	  {
	  	?>
	  	<li><img src="<?php echo base_url(); ?>files/user/slider/<?php echo $result_row->slider_image; ?>" /></li>
	  	<?php
	  }
	  ?>

	</ul>

	<script>
	$(document).ready(function(){
	  $('.bxslider').bxSlider(
	  	{
	  auto: true
	});
	});
	</script>
	
</div>