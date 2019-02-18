<script src="<?php echo base_url(); ?>template/js/jquery-1.11.0.js"></script>
<script src="<?php echo base_url(); ?>template/slider/jquery.bxslider.js"></script>
<link href="<?php echo base_url(); ?>template/slider/jquery.bxslider.css" rel="stylesheet" />

<ul class="bxslider" style="min-height:500px">
  <li><img src="<?php echo base_url(); ?>files/user/slider/1.jpg" /></li>
  <li><img src="<?php echo base_url(); ?>files/user/slider/2.jpg" /></li>
  <li><img src="<?php echo base_url(); ?>files/user/slider/3.jpg" /></li>

</ul>

<script>
$(document).ready(function(){
  $('.bxslider').bxSlider(
  	{
  auto: true
});
});
</script>