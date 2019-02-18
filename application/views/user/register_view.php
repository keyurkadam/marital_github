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
                  <li class="current-page">Regular Search</li>
               </ul>
            </div>
            <!--<script type="text/javascript">
               $(function () {
                $('#btnRadio').click(function () {
                     var checkedradio = $('[name="gr"]:radio:checked').val();
                     $("#sel").html("Selected Value: " + checkedradio);
                 });
               });
               </script>-->
            <div class="col-md-9 search_left">
               <form>
                  <h2>Registration Information</h2>
                  <br>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="name">Name : </label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_full_name" id="txt__fullname"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="father_name">Father Name : </label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_father_name" id="txt_father_name"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Gender : </label>
                     <div class="col-sm-7 form_radios">
                        <input type="radio" id="rdo_gender" name="rdo_gender" value="male" class="radio_1" checked="checked"/> Male &nbsp;&nbsp;
                        <input type="radio" id="rdo_gender" name="rdo_gender" value="female" class="radio_1"  /> Female
                        <!--<hr />
                           <p id="sel"></p><br />
                           <input id="btnRadio" type="button" value="Get Selected Value" />-->
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Marital Status : </label>
                     <div class="col-sm-7 form_radios">
                        <input type="radio" class="radio_1" id="rdo_marital_status" name="rdo_marital_status" value="Single"  checked="checked" /> Single &nbsp;&nbsp;
                        <input type="radio" class="radio_1"  id="rdo_marital_status" name="rdo_marital_status" value="Divorced"/> Divorced &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_marital_status" name="rdo_marital_status"  value="Widowed" /> Widowed &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_marital_status" name="rdo_marital_status"  value="Separated" /> Separated &nbsp;&nbsp;
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="address">Address : </label>
                     <div class="col-sm-7 form_radios">
                        <textarea rows="4" cols="65" id="txt_address" name="txt_address"></textarea>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Country : </label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select  style="color:black" id="cmb_country" name="cmb_country" onchange="get_state(this.value)">
                              <option>--Select Any--</option>
                              <?php 
                              $country_res=$this->db->get("tbl_country");
                              foreach($country_res->result() as $country_row)
                              {
                                 ?>
                                 <option value='<?php echo $country_row->country_id; ?>'><?php echo $country_row->country_name; ?></option>
                                 <?php
                              }
                              ?>
                           </select>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">State : </label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select style="color:black" id="cmb_state" name="cmb_state" onchange="get_city(this.value)">
                              <option>--Select Any--</option>
                           </select> 
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">District / City : </label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select  style="color:black" id="cmb_city" name="cmb_city">
                              <option>--Select Any--</option>
                           </select>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="other city">Other city : </label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_other_city" id="txt_other_city"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                 <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="postal_code">Postal Code : </label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_postal_code" id="txt_postal_code"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="contact">Contact : </label>
                     <div class="col-sm-7 form_radios">
                        <div class="col-sm-6">
                           <input class="form-control input-sm has-dark-background" name="txt_phone" id="txt_phone" placeholder="Phone Number" type="text" required="">
                        </div>
                        <div class="col-sm-6">
                           <input class="form-control has-dark-background" name="txt_mobile" id="txt_mobile" placeholder="Mobile Number"  type="text" required="">
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="email">Email : </label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_email" id="txt_email"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="password">Password : </label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_password" id="txt_password"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="gol">Name of Head of Gol/Panch : </label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_gol_name" id="txt_gol_name"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <h3>Birth Detail Information</h3>
                  <br>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="dob">Birth Date : </label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_dob" id="txt_dob"  type="date" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="birth_place">Birth Place : </label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_birth_place" id="txt_birth_place"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="birth_time">Birth time : </label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_birth_time" id="txt_birth_time"  type="time" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="believe horoscope">Do You Believe in Horoscope : </label>
                     <div class="col-sm-7 form_radios">
                        <input type="radio" id="rdo_belive_horoscope" name="rdo_belive_horoscope" value="yes" class="radio_1" checked="checked"/> Yes &nbsp;&nbsp;
                        <input type="radio" id="rdo_belive_horoscope" name="rdo_belive_horoscope" value="no" class="radio_1"  /> No
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="believe horoscope">Do You have Saturn(Shani) or Mars(Mangal) in your kundali? 
 : </label>
                     <div class="col-sm-7 form_radios">
                        <input type="radio" id="rdo_shani_mangal" name="rdo_shani_mangal" value="yes" class="radio_1" checked="checked"/> Yes &nbsp;&nbsp;
                        <input type="radio" id="rdo_shani_mangal" name="rdo_shani_mangal" value="no" class="radio_1"  /> No
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="birth_time">If Yes then Whom?(Saturn(Shani) or Mars(Mangal)) : </label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_shani_mangal" id="txt_shani_mangal"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <h3>Education/Occupation</h3>
                  <br>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="eduction">Eduction :</label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_eduction" id="txt_eduction"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Occupation : </label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select  style="color:black" id="cmb_occupation" name="cmb_occupation">
                              <option>--Select Any--</option>
                              <option>Business</option>
                              <option>Business/Service</option>
                              <option>Business/Study</option>
                              <option>Government Job</option>  
                              <option>Service</option>  
                              <option>Service/Study</option>  
                              <option>Study</option>  
                              <option>Not Applicable</option>     
                              <option>Government Job</option>  
                              <option>Other</option>  
                           </select>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="other occupation">For Other Occupation :</label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_other_occupation" id="txt_other_occupation"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="monthly_income">Monthly Income :</label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_monthly_income" id="txt_monthly_income"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="job_desc">If You Doing Job,then which Department? Position ? From ?
:</label>
                     <div class="col-sm-7 form_radios">
                        <input class="form-control has-dark-background" name="txt_job_description  " id="txt_job_description"  type="text" required="">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <h3>Family Information</h3>
                  <br>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="parent alive">Mother And Father Is Alive? :</label>
                     <div class="col-sm-7 form_radios">
                        <input type="radio" id="rdo_mother_father_alive" name="rdo_mother_father_alive" value="yes" class="radio_1" checked="checked"/> Yes &nbsp;&nbsp;
                        <input type="radio" id="rdo_mother_father_alive" name="rdo_mother_father_alive" value="no" class="radio_1"  /> No
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="father occupation">If Father alive then his Occupation :</label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select  style="color:black" id="cmb_father_occupation" name="cmb_father_occupation">
                              <option>--Select Any--</option>
                              <option>Business</option>
                              <option>Business/Service</option>
                              <option>Business/Study</option>
                              <option>Government Job</option>  
                              <option>Service</option>  
                              <option>Service/Study</option>  
                              <option>Study</option>  
                              <option>Not Applicable</option>     
                              <option>Government Job</option>  
                              <option>Other</option>  
                           </select>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="no_of_brother">Number Of Brothers :</label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select  style="color:black" id="txt_no_of_brothers" name="txt_no_of_brothers">
                              <option>--Select Any--</option>
                              <option>0</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>  
                              <option>4</option>  
                              <option>5</option>  
                              </select>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="no_of_sister">Number Of Sisters :</label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select  style="color:black" id="txt_no_of_sisters" name="txt_no_of_sisters">
                              <option>--Select Any--</option>
                              <option>0</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>  
                              <option>4</option>  
                              <option>5</option>  
                              </select>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="no_of_brothers_married">Number Of Brothers Married :</label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select  style="color:black" id="txt_no_of_brothers_married" name="txt_no_of_brothers_married">
                              <option>--Select Any--</option>
                              <option>0</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>  
                              <option>4</option>  
                              <option>5</option> 
                              <option>Not Applicable</option> 
                              </select>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="no_of_sisters_married">Number Of Sisters Married :</label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select  style="color:black" id="txt_no_of_sisters_married" name="txt_no_of_sisters_married">
                              <option>--Select Any--</option>
                              <option>0</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>  
                              <option>4</option>  
                              <option>5</option> 
                              <option>Not Applicable</option> 
                              </select>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <h3>To Be Filled By Divorced or Widows Candidate Only</h3>
                  <br>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="girl_child">Children(Girl) :</label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select  style="color:black" id="txt_girl_child" name="txt_girl_child">
                              <option>--Select Any--</option>
                              <option>0</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>  
                              <option>More then 3</option>  
                              </select>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="boy_child">Children(Boy) :</label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select  style="color:black" id="txt_boy_child" name="txt_boy_child">
                              <option>--Select Any--</option>
                              <option>0</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>  
                              <option>More then 3</option>  
                              </select>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <h3>Other Information</h3>
                  <br>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="residence status">If Male Candidate then Residence House ?  :
  </label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <select  style="color:black" id="cmb_residence" name="cmb_residence">
                              <option>--Select Any--</option>
                              <option>Own</option>
                              <option>Rent</option>
                              <option>Not Applicable</option>
                              </select>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="nri candidate">Want To Marry With NRI Candidate ?
 : </label>
                     <div class="col-sm-7 form_radios">
                        <div class="select-block1">
                           <input type="radio" id="rdo_marry_nri" name="rdo_marry_nri" value="yes" class="radio_1" checked="checked"/> Yes &nbsp;&nbsp;
                        <input type="radio" id="rdo_marry_nri" name="rdo_marry_nri" value="no" class="radio_1"  /> No
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="spous expection">What Type of Spouse expectation? : </label>
                     <div class="col-sm-7 form_radios">
                        <textarea rows="4" cols="65" id="txt_expectation" name="txt_expectation"></textarea>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <h3>Attachment Details</h3>
                  <br>
                   <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="file upload">Photos : </label>
                     <div class="col-sm-7 form_radios">
                        <input type="file" name="img_photo1" id="img_photo1">
                        <input type="file" name="img_photo2" id="img_photo2">
                        <input type="file" name="img_photo3" id="img_photo3">
                        <input type="file" name="img_photo4" id="img_photo4">
                        <input type="file" name="img_photo5" id="img_photo5">
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <br>
                  <center><input type="checkbox" name="chk_agreed" value="yes">I Agreed with your all terms & conditions 
                     <br>
                     <br>
                  <input type="submit" name="btn_submit" id="btn_submit" value="Submit" style="background-color: #c32143; color: #FFFFFF; border:1px solid #ddd; "></center>
                  <!--<div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Show Profile : </label>
                     <div class="col-sm-7 form_radios">
                        <input type="checkbox" class="radio_1" /> with Photo &nbsp;&nbsp;
                        <input type="checkbox" class="radio_1" checked="checked" /> with Horoscope
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Don't Show : </label>
                     <div class="col-sm-7 form_radios">
                        <input type="checkbox" class="radio_1" /> Ignored Profiles &nbsp;&nbsp;
                        <input type="checkbox" class="radio_1" checked="checked" /> Profiles already Contacted
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                   <div class="form_but1">
                     <label class="col-sm-5 control-lable1" for="sex">Age : </label>
                     <div class="col-sm-7 form_radios">
                        <div class="col-sm-5 input-group1">
                           <input class="form-control has-dark-background" name="28" id="slider-name" placeholder="28" type="text" required="">
                        </div>
                        <div class="col-sm-5 input-group1">
                           <input class="form-control has-dark-background" name="40" id="slider-name" placeholder="40" type="text" required="">
                        </div>
                        <div class="clearfix"> </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div> -->
               </form>
               <div class="paid_people">
                  <h1>Paid People</h1>
                  <div class="row_1">
                     <div class="col-sm-6 paid_people-left">
                        <ul class="profile_item">
                           <a href="view_profile.html">
                              <li class="profile_item-img">
                                 <img src="images/a5.jpg" class="img-responsive" alt=""/>
                              </li>
                              <li class="profile_item-desc">
                                 <h4>2458741</h4>
                                 <p>29 Yrs, 5Ft 5in Christian</p>
                                 <h5>View Full Profile</h5>
                              </li>
                              <div class="clearfix"> </div>
                           </a>
                        </ul>
                     </div>
                     <div class="col-sm-6">
                        <ul class="profile_item">
                           <a href="view_profile.html">
                              <li class="profile_item-img">
                                 <img src="images/a6.jpg" class="img-responsive" alt=""/>
                              </li>
                              <li class="profile_item-desc">
                                 <h4>2458741</h4>
                                 <p>29 Yrs, 5Ft 5in Christian</p>
                                 <h5>View Full Profile</h5>
                              </li>
                              <div class="clearfix"> </div>
                           </a>
                        </ul>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="row_1">
                     <div class="col-sm-6 paid_people-left">
                        <ul class="profile_item">
                           <a href="view_profile.html">
                              <li class="profile_item-img">
                                 <img src="images/a7.jpg" class="img-responsive" alt=""/>
                              </li>
                              <li class="profile_item-desc">
                                 <h4>2458741</h4>
                                 <p>29 Yrs, 5Ft 5in Christian</p>
                                 <h5>View Full Profile</h5>
                              </li>
                              <div class="clearfix"> </div>
                           </a>
                        </ul>
                     </div>
                     <div class="col-sm-6">
                        <ul class="profile_item">
                           <a href="view_profile.html">
                              <li class="profile_item-img">
                                 <img src="images/a8.jpg" class="img-responsive" alt=""/>
                              </li>
                              <li class="profile_item-desc">
                                 <h4>2458741</h4>
                                 <p>29 Yrs, 5Ft 5in Christian</p>
                                 <h5>View Full Profile</h5>
                              </li>
                              <div class="clearfix"> </div>
                           </a>
                        </ul>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
                  <div class="row_2">
                     <div class="col-sm-6 paid_people-left">
                        <ul class="profile_item">
                           <a href="view_profile.html">
                              <li class="profile_item-img">
                                 <img src="images/a5.jpg" class="img-responsive" alt=""/>
                              </li>
                              <li class="profile_item-desc">
                                 <h4>2458741</h4>
                                 <p>29 Yrs, 5Ft 5in Christian</p>
                                 <h5>View Full Profile</h5>
                              </li>
                              <div class="clearfix"> </div>
                           </a>
                        </ul>
                     </div>
                     <div class="col-sm-6">
                        <ul class="profile_item">
                           <a href="view_profile.html">
                              <li class="profile_item-img">
                                 <img src="images/a4.jpg" class="img-responsive" alt=""/>
                              </li>
                              <li class="profile_item-desc">
                                 <h4>2458741</h4>
                                 <p>29 Yrs, 5Ft 5in Christian</p>
                                 <h5>View Full Profile</h5>
                              </li>
                              <div class="clearfix"> </div>
                           </a>
                        </ul>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3 match_right">
               <div class="profile_search1">
                  <form>
                     <input type="text" class="m_1" name="ne" size="30" required="" placeholder="Enter Profile ID :">
                     <input type="submit" value="Go">
                  </form>
               </div>
               <section class="slider">
                  <h3>Happy Marriage</h3>
                  <div class="flexslider">
                     <ul class="slides">
                        <li>
                           <img src="images/s2.jpg" alt=""/>
                           <h4>Lorem & Ipsum</h4>
                           <p>It is a long established fact that a reader will be distracted by the readable</p>
                        </li>
                        <li>
                           <img src="images/s1.jpg" alt=""/>
                           <h4>Lorem & Ipsum</h4>
                           <p>It is a long established fact that a reader will be distracted by the readable</p>
                        </li>
                        <li>
                           <img src="images/s3.jpg" alt=""/>
                           <h4>Lorem & Ipsum</h4>
                           <p>It is a long established fact that a reader will be distracted by the readable</p>
                        </li>
                     </ul>
                  </div>
               </section>
               <div class="view_profile view_profile2">
                  <h3>View Similar Profiles</h3>
                  <ul class="profile_item">
                     <a href="view_profile.html">
                        <li class="profile_item-img">
                           <img src="images/p5.jpg" class="img-responsive" alt=""/>
                        </li>
                        <li class="profile_item-desc">
                           <h4>2458741</h4>
                           <p>29 Yrs, 5Ft 5in Christian</p>
                           <h5>View Full Profile</h5>
                        </li>
                        <div class="clearfix"> </div>
                     </a>
                  </ul>
                  <ul class="profile_item">
                     <a href="view_profile.html">
                        <li class="profile_item-img">
                           <img src="images/p6.jpg" class="img-responsive" alt=""/>
                        </li>
                        <li class="profile_item-desc">
                           <h4>2458741</h4>
                           <p>29 Yrs, 5Ft 5in Christian</p>
                           <h5>View Full Profile</h5>
                        </li>
                        <div class="clearfix"> </div>
                     </a>
                  </ul>
                  <ul class="profile_item">
                     <a href="view_profile.html">
                        <li class="profile_item-img">
                           <img src="images/p7.jpg" class="img-responsive" alt=""/>
                        </li>
                        <li class="profile_item-desc">
                           <h4>2458741</h4>
                           <p>29 Yrs, 5Ft 5in Christian</p>
                           <h5>View Full Profile</h5>
                        </li>
                        <div class="clearfix"> </div>
                     </a>
                  </ul>
                  <ul class="profile_item">
                     <a href="view_profile.html">
                        <li class="profile_item-img">
                           <img src="images/p8.jpg" class="img-responsive" alt=""/>
                        </li>
                        <li class="profile_item-desc">
                           <h4>2458741</h4>
                           <p>29 Yrs, 5Ft 5in Christian</p>
                           <h5>View Full Profile</h5>
                        </li>
                        <div class="clearfix"> </div>
                     </a>
                  </ul>
               </div>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
      <?php 
         include_once('footer.php');
      ?>
   </body>
</html>

<script type="text/javascript">
            var controller = "ajax/get_caste";
            var base_url = "<?php echo base_url(); ?>";

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

    function get_state(primary_id)
    {       
        var strURL=base_url+"user_ajax/get_state"+"/"+primary_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("cmb_state").innerHTML=req.responseText;                       
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    function get_city(primary_id)
    {       
        var strURL=base_url+"user_ajax/get_city"+"/"+primary_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("cmb_city").innerHTML=req.responseText;                       
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    function get_edit_data(primary_id)
    {       
        var strURL=base_url+controller+"/"+primary_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("edit_div").innerHTML=req.responseText;                       
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    
</script>

