<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE HTML>
<html>
   <head>
      <title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
      <?php 
         include_once('head_file.php');
      ?>
      <!-- <link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.2/css/themes/default/jquery.mobile-1.4.2.min.css">  
<script src="https://demos.jquerymobile.com/1.4.2/js/jquery.js"></script>

  <script src="https://demos.jquerymobile.com/1.4.2/js/jquery.mobile-1.4.2.min.js"></script> -->
   </head>
   <body>
      <!-- ============================  Navigation Start =========================== -->
      <?php 
         include_once('header.php');
      ?>

  
   
   
   <div class="col-sm-3" style="background-color: #f0f0f0;">
      
      <form method="post" id="age_form" name="age_form" action="<?php echo base_url(); ?>home_temp">
        <!-- <div data-role="rangeslider">
          <label for="txt_min_age">Age:</label>
          <input type="text" name="txt_min_age" id="txt_min_age" min="20" max="60" value="25" data-popup-enabled="true" data-show-value="true">
          <label for="txt_max_age">Age:</label>
          <input type="range" name="txt_max_age" id="txt_max_age" min="20" max="60" value="40" data-popup-enabled="true" data-show-value="true">
        </div> -->
        <input type="text" name="txt_min_age" id="txt_min_age" value="1">
        <input type="submit" name="btn_age_filter" id="btn_age_filter" value="Search">  
      </form>
   </div>
  

<?php 
         //include_once('footer.php');
      ?>
</html>
