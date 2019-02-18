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
      <script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
   </head>
   <body>
      <!-- ============================  Navigation Start =========================== -->
      <?php 
         include_once('header.php');
      ?>
      <!-- ============================  Navigation End ============================ -->
      <?php 
         //include_once('banner_view.php');
         //include_once('slider_view.php');
      ?>
 <div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
   <?php 
      foreach ($resultset->result() as $row) 
      {
         ?>

    
   <div class="profile">
       <div class="col-md-8 profile_left">
         <h2>Profile Id : <?php echo $row->member_id;?></h2>
         <div class="col_3">
              <div class="col-sm-4 row_2">
            <div class="flexslider">
                <ul class="slides">
                  <li data-thumb="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo1; ?>">
                     <img src="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo1; ?>" />
                  </li>
                  <li data-thumb="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo2; ?>">
                     <img src="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo2; ?>" />
                  </li>
                  <li data-thumb="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo3; ?>">
                     <img src="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo3; ?>" />
                  </li>
                  <li data-thumb="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo4; ?>">
                     <img src="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo4; ?>" />
                  </li>
                </ul>
              </div>s
         </div>
         <div class="col-sm-8 row_1">
            <table class="table_working_hours">
               <tbody>
                  <tr class="opened_1">
                     <td class="day_label">Age</td>
                     <td class="day_value"><?php echo $row->member_age; ?></td>
                  </tr>
                  <tr class="opened">
                     <td class="day_label">Mobile No :</td>
                     <td class="day_value"><?php echo $row->member_mobile_no;?></td>
                  </tr>
                  <tr class="opened">
                     <td class="day_label">Email :</td>
                     <td class="day_value"><?php echo $row->member_email;?></td>
                  </tr>
                   <tr class="opened">
                     <td class="day_label">Marital Status :</td>
                     <td class="day_value"><?php echo $row->member_marital_status; ?></td>
                  </tr>
                   <tr class="opened">
                     <td class="day_label">Height / Weight :</td>
                     <td class="day_value"><?php echo $row->member_height; ?>cm , <?php echo $row->member_weight; ?></td>
                  </tr>
                   <tr class="opened">
                     <td class="day_label">Location :</td>
                     <td class="day_value"><?php echo $row->country_id;?></td>
                  </tr>
                   <tr class="closed">
                     <td class="day_label">Education :</td>
                     <td class="day_value closed"><span><?php echo $row->member_education;?></span></td>
                  </tr>
                </tbody>
            </table>
           
         </div>
         <div class="clearfix"> </div>
      </div>
      <div class="col_4">
          <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
              <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
              <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
              <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Partner Preference</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                
                <div class="basic_1">
                  <h3>Basics & Lifestyle</h3>
                  <div class="col-md-6 basic_1-left">
                    <table class="table_working_hours">
                     <tbody>
                        <tr class="opened_1">
                           <td class="day_label">Name :</td>
                           <td class="day_value"><?php echo $row->member_name;?></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Marital Status :</td>
                           <td class="day_value"><?php echo $row->member_marital_status; ?></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Body Type :</td>
                           <td class="day_value"><?php echo $row->member_body_type; ?></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Height :</td>
                           <td class="day_value"><?php echo $row->member_height; ?>cm</td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Physical Disable :</td>
                           <td class="day_value closed"><span><?php  echo $row->member_physical_disable; ?></span></td>
                        </tr>
                         
                        <tr class="opened">
                           <td class="day_label">Drink :</td>
                           <td class="day_value closed"><span><?php echo $row->member_drink; ?></span></td>
                        </tr>
                      </tbody>
                      </table>
                     </div>
                     <div class="col-md-6 basic_1-left">
                      <table class="table_working_hours">
                     <tbody>
                        <tr class="opened_1">
                           <td class="day_label">Age :</td>
                           <td class="day_value"><?php echo $row->member_age; ?></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Mother Tongue :</td>
                           <td class="day_value"><?php echo $row->member_mother_tongue_id; ?></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Complexion :</td>
                           <td class="day_value"><?php echo $row->member_skin_tone; ?></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Weight :</td>
                           <td class="day_value"><?php echo $row->member_weight;?></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Blood Group :</td>
                           <td class="day_value"><?php echo $row->member_blood_group; ?></td>
                        </tr>
                         <tr class="closed">
                           <td class="day_label">Diet :</td>
                           <td class="day_value closed"><span><?php echo $row->member_diet; ?></span></td>
                        </tr>
                         <tr class="closed">
                           <td class="day_label">Smoke :</td>
                           <td class="day_value closed"><span><?php echo $row->member_smoke; ?></span></td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="basic_1">
                  <h3>Religious / Social & Astro Background</h3>
                  <div class="col-md-6 basic_1-left">
                    <table class="table_working_hours">
                     <tbody>
                        <tr class="opened">
                           <td class="day_label">Time of Birth :</td>
                           <td class="day_value"><?php echo $row->member_birth_time; ?></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Date of Birth :</td>
                           <td class="day_value closed"><span><?php echo $row->member_dob; ?></span></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Place of Birth :</td>
                           <td class="day_value closed"><span><?php echo $row->member_birth_place; ?></span></td>
                        </tr>
                      </tbody>
                      </table>
                     </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="basic_1 basic_2">
                  <h3>Education & Career</h3>
                  <div class="basic_1-left">
                    <table class="table_working_hours">
                     <tbody>
                        <tr class="opened">
                           <td class="day_label">Education   :</td>
                           <td class="day_value"><?php echo $row->member_education; ?></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Occupation Detail :</td>
                           <td class="day_value closed"><span><?php echo $row->member_occupation; ?></span></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Annual Income :</td>
                           <td class="day_value closed"><span><?php echo $row->member_annual_income; ?></span></td>
                        </tr>
                      </tbody>
                      </table>
                     </div>
                     <div class="clearfix"> </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                <div class="basic_3">
                  <h4>Family Details</h4>
                  <div class="basic_1 basic_2">
                  <h3>Basics</h3>
                  <div class="col-md-6 basic_1-left">
                    <table class="table_working_hours">
                     <tbody>
                        <tr class="opened">
                           <td class="day_label">Father's Occupation :</td>
                           <td class="day_value"><?php echo $row->member_father_occupation; ?></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Mother's Occupation :</td>
                           <td class="day_value"><?php echo $row->member_mother_occupation; ?></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">No. of Brothers :</td>
                           <td class="day_value closed"><span><?php echo $row->member_brother;?> </span></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">No. of Sisters :</td>
                           <td class="day_value closed"><span><?php echo $row->member_sister; ?></span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">No. of Brother Married :</td>
                           <td class="day_value closed"><span><?php echo $row->member_married_brother; ?></span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">No. of Sisters Married :</td>
                           <td class="day_value closed"><span><?php echo $row->member_married_sister; ?></span></td>
                        </tr>
                      </tbody>
                      </table>
                     </div>
                   </div>
                </div>
             </div>
             <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
                <div class="basic_1 basic_2">
                   <div class="basic_1-left">
                    <table class="table_working_hours">
                     <tbody>
                        <tr class="opened">
                           <td class="day_label">Age   :</td>
                           <td class="day_value"><?php echo $row->partner_age; ?></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Marital Status :</td>
                           <td class="day_value"><?php echo $row->partner_marital_status; ?></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Body Type :</td>
                           <td class="day_value closed"><span><?php echo $row->partner_body_type; ?></span></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Complexion :</td>
                           <td class="day_value closed"><span><?php echo $row->partner_skin_tone; ?></span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Height :</td>
                           <td class="day_value closed"><span><?php echo $row->partner_height; ?>cm</span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Diet :</td>
                           <td class="day_value closed"><span><?php echo $row->partner_diet; ?></span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Kujadosham / Manglik :</td>
                           <td class="day_value closed"><span><?php echo $row->partner_manglik; ?></span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Mother Tongue :</td>
                           <td class="day_value closed"><span>Doesn't matter</span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Education :</td>
                           <td class="day_value closed"><span><?php echo $row->partner_education;?></span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Occupation :</td>
                           <td class="day_value closed"><span><?php echo $row->partner_occupation; ?></span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Country of Residence :</td>
                           <td class="day_value closed"><span><?php echo $row->partner_country_residency; ?></span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">State :</td>
                           <td class="day_value closed"><span><?php echo $row->partner_state; ?></span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Residency Status :</td>
                           <td class="day_value closed"><span><?php echo $row->partner_residency_status; ?></span></td>
                        </tr>
                      </tbody>
                      </table>
                    </div>
                 </div>
             </div>
           </div>
        </div>
      </div>
       </div>
     
       <div class="clearfix"> </div>
    </div>
         <?php
      }
   ?>
  </div>
</div>
      <?php 
         include_once('footer.php');
      ?>

      <script defer src="<?php echo base_url(); ?>/template/user/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>/template/user/css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script> 
   </body>
</html>

