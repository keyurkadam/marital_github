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

</script>
      <?php 
         include_once('head_file.php');
      ?>
   </head>
   <body>
      <!-- ============================  Navigation Start =========================== -->
      <?php 
         include_once('header.php');
      ?>

<div class="container">

<div class="row">

  <div class="col-md-8 col-md-offset-2">

    <div class="panel panel-default">
      <div class="panel-body">
        <center><h2>Change Password</h2></center>
        <br>
        <br>
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>user/change_password/update">
          <div><?php
            if(isset($msg))
            {
              echo $msg;   
            }
            ?></div>
         
          <div class="form-group">
            <label class="col-md-4 control-label">Old Password</label>
            <div class="col-md-6">
              <input id="txt_old_password" type="password" class="form-control" name="txt_old_password">
              <span toggle="#txt_old_password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">New Password</label>
            <div class="col-md-6">
              <input id="txt_new_password" type="password" class="form-control" name="txt_new_password">
              <span toggle="#txt_new_password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Confirm Password</label>
            <div class="col-md-6">
              <input id="txt_confirm_password" type="password" class="form-control" name="txt_confirm_password" >
              <span toggle="#txt_confirm_password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
          </div>
          <center>
          <input type="submit" name="btn_submit" value="Submit" style="background-color: #c32143; color: #FFFFFF; border:1px solid #ddd;">
        </center>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<?php 
         include_once('footer.php');
      ?>
</html>
