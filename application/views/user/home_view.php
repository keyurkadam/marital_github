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
  <script>
 function getXMLHTTP() { //fuction to return the xml http object
        var xmlhttp=false;  
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch(e)    {       
            try{            
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                try{
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e){
                    xmlhttp=false;
                }
            }
        }
            
        return xmlhttp;
    }


    function get_data(data_value)
    {       
      if(data_value.length>2)
      {
          var strURL="<?php echo base_url();?>ajax/check_google?data="+data_value;
          //alert(strURL);
          var req = getXMLHTTP();
          if (req) {
              req.onreadystatechange = function() {
                  if (req.readyState == 4) {
                      // only if "OK"
                      if (req.status == 200) {
                      //alert(req.responseText);                      
                          document.getElementById("location_div").innerHTML=req.responseText;                       
                      } else {
                          alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                      }
                  }               
              }           
              req.open("GET", strURL, true);
              req.send(null);
              
          }
      }
      else
      {
        document.getElementById("location_div").innerHTML="";
      }
    }

    


</script>
   </head>
   <body>
      <!-- ============================  Navigation Start =========================== -->
      <?php 
         include_once('header.php');
      ?>
<div class="grid_3" >
  <div class="" >
   <div class="breadcrumb1" >
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Premium Members</li>
     </ul>
   </div>
   <div class="col-md-3 col_5">
       <ul class="match_box">
         <h4>Matches</h4>
         <li><a href="#">Mutual Matches</a></li>
         <li><a href="#">Profiles yet to be viewed</a></li>
         <li><a href="#">Mutual Matches</a></li>
       </ul>
     <ul class="menu">
      <li class="item1"><h3 class="m_2">Show Profiles Created</h3>
        <ul class="cute">
         <li class="subitem1"><a href="#">within a week (2) </a></li>
         <li class="subitem2"><a href="#">within a month (4)</a></li>
        </ul>
      </li>
      <li class="item1"><h3 class="m_2">Profile type</h3>
        <ul class="cute">
         <li class="subitem1"><a href="#">with Photo (3) </a></li>
        </ul>
      </li>
      <li class="item1"><h3 class="m_2">Marital Status</h3>
        <ul class="cute">
         <li class="subitem1"><a href="#">Unmarried (2) </a></li>
        </ul>
      </li>
      <li class="item1"><h3 class="m_2">Mother Tongue</h3>
        <ul class="cute">
         <li class="subitem1"><a href="#">English </a></li>
        </ul>
      </li>
      <li class="item1"><h3 class="m_2">Education</h3>
        <ul class="cute">
         <li class="subitem1"><a href="#">Bachelors-Engineering </a></li>
         <li class="subitem1"><a href="#">Masters-Engineering </a></li>
        </ul>
      </li>
      <li class="item1"><h3 class="m_2">Occupation</h3>
        <ul class="cute">
         <li class="subitem1"><a href="#">Engineer-Non IT (2) </a></li>
         <li class="subitem1"><a href="#">Software Professional (3)</a></li>
        </ul>
      </li>
      <li class="item1"><h3 class="m_2">Physical Status</h3>
        <ul class="cute">
         <li class="subitem1"><a href="#">Normal (2) </a></li>
        </ul>
      </li>
      <li class="item1"><h3 class="m_2">Eating Habits</h3>
        <ul class="cute">
         <li class="subitem1"><a href="#">Non Vegetarian (3)</a></li>
         <li class="subitem1"><a href="#">Vegetarian (2)</a></li>
        </ul>
      </li>
      <li class="item1"><h3 class="m_2">Smoking</h3>
        <ul class="cute">
         <li class="subitem1"><a href="#">Not Specified (3)</a></li>
        </ul>
      </li>
      <li class="item1"><h3 class="m_2">Drinking</h3>
        <ul class="cute">
         <li class="subitem1"><a href="#">Not Specified (3)</a></li>
         <li class="subitem1"><a href="#">Never Drinks (3)</a></li>
        </ul>
      </li>
      <li class="item1"><h3 class="m_2">Profile Created by</h3>
        <ul class="cute">
         <li class="subitem1"><a href="#">Self (1)</a></li>
        </ul>
      </li>
     </ul>
   </div>
   <div class="col-md-6 members_box" >
     <h1>Suitable Matches</h1>
     <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested..</p>
       <div class="members_box1">
        <div class="col_1_of_3 span_1_of_3  phone_1">
         <ul class="phone">
         <li class="phone_left"><i class="fa fa-mobile icon_1"></i></li>
         <li class="phone_right"><p>Access Verified Mobile Numbers</p></li>
         <div class="clearfix"> </div>
         </ul>
        </div>
        <div class="col_1_of_3 span_1_of_3 phone_1">
         <ul class="phone">
         <li class="phone_left"><i class="fa fa-heart-o icon_2"></i></li>
         <li class="phone_right"><p>Access Verified Mobile Numbers</p></li>
         <div class="clearfix"> </div>
         </ul>
        </div>
        <div class="col_1_of_3 span_1_of_3">
         <ul class="phone">
         <li class="phone_left"><i class="fa fa-envelope-o icon_2"></i></li>
         <li class="phone_right"><p>Access Verified Mobile Numbers</p></li>
         <div class="clearfix"> </div>
         </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
      <?php
         foreach ($resultset->result() as $row) {
      ?>

      
      <div class="profile_top"><a href="<?php echo base_url();?>view_profile/view_profile_via_id/<?php echo $row->member_id;?>">
      <h2><?php echo $row->member_id;?></h2>
       <div class="col-sm-3 profile_left-top">
         <img src="<?php echo base_url(); ?>template/user/images/<?php echo $row->member_photo1; ?>" class="img-responsive" alt=""/>
       </div>
       <div class="col-sm-3">
         <ul class="login_details1">
          <li><p>"<?php echo $row->member_desc;?>" More....</p></li>
        </ul>
       </div>
       <div class="col-sm-8">
         <table class="table_working_hours">
            <tbody>
               <tr class="opened_1">
                  <td class="day_label1">Name :</td>
                  <td class="day_value"><?php echo $row->member_name;?></td>
               </tr>
               <tr class="opened_1">
                  <td class="day_label1">Age / Height :</td>
                  <td class="day_value"><?php echo $row->member_age;?>, <?php echo $row->member_height; ?>cm</td>
               </tr>
                <tr class="opened">
                  <td class="day_label1">Marital Status :</td>
                  <td class="day_value"><?php echo $row->member_marital_status; ?></td>      
               </tr>
                <tr class="opened">
                  <td class="day_label1">Location :</td>
                  <td class="day_value"><?php echo $row->member_country;?></td>
               </tr>
                <tr class="closed">
                  <td class="day_label1">Education :</td>
                  <td class="day_value closed"><span><?php echo $row->member_education; ?></span></td>
               </tr>
             </tbody>
         </table>
         <div class="buttons">
            <div class="vertical">Send Mail</div>
            <div class="vertical">Shortlisted</div>
            <div class="vertical">Send Interest</div>
         </div>
       </div>
       <div class="clearfix"> </div>
    </a></div>
    <?php    
         }
      ?>
    
   </div>
   
   <div class="col-sm-3" style="background-color: #f0f0f0;">
    
      <h3>Fliters:</h3>
    <hr style="border-color: #c32143;">
      <form method="post" id="age_form" name="age_form" action="<?php echo base_url(); ?>home/find_member_via_age">
        <h4>Age:</h4>
        <br>
        <div style="margin-left: 55px;">
          <input type="text" name="txt_min_age" id="txt_min_age" value="20">
          <input type="text" name="txt_max_age" id="txt_max_age" value="40">
          <br>
          <center><input type="submit" name="btn_age_filter" id="btn_age_filter" value="Find">  </center>  
        </div>
        </form>
        <form method="post" action="<?php echo base_url(); ?>home/find_member_via_city">
        <hr style="border-color: #c32143;">
        <h4>Location</h4>
        <div class="row" style="background-color:#f0f0f0; ">
          <div class="col-md-6" style="width:210px;">
            <input type="text" id="txt_location" name="txt_location" onkeyup="get_data(this.value)">

            <div  id="location_div" style=" background-color:white;"></div>
          </div>
          <div class="col-md-3">
            <input type="submit" name="btn_city_filter" id="btn_city_filter" value="Find">
          </div>
        </div>
      </form>
   </div>
  </div>
</div>
<?php 
         //include_once('footer.php');
      ?>
      <script type="text/javascript">
        
        function set_data(val)
    {
      
      document.getElementById("txt_location").value=val;
      document.getElementById('location_div').innerHTML="";
    }
      </script>
</html>
