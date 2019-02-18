<?php 
class ajax extends CI_Controller
{
	public function get_interest($id)
	{
	    $edit_profile=$this->db->get_where("tbl_interest",array("interest_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_interest/edit/do_update/<?php echo $row->interest_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Interest</label>
	                    <input class="form-control" id="txt_interest" name="txt_interest" value="<?php echo $row->interest_name ;?>">
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 
	
	public function get_hobby($id)
	{
	    $edit_profile=$this->db->get_where("tbl_hobby",array("hobby_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_hobby/edit/do_update/<?php echo $row->hobby_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Hobby</label>
	                    <input class="form-control" id="txt_hobby_name" name="txt_hobby_name" value="<?php echo $row->hobby_name ;?>">
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 
	public function get_sms_provider($id)
	{
	    $edit_profile=$this->db->get_where("tbl_sms_provider",array("sms_provider_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_sms_provider/edit/do_update/<?php echo $row->sms_provider_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>SMS Provider Name</label>
	                    <input class="form-control" id="txt_sms_provider_name" name="txt_sms_provider_name" value="<?php echo $row->sms_provider_name ;?>">
	        </div>
	        <div class="form-group">
	                    <label>SMS Provider Url</label>
	                    <input class="form-control" id="txt_sms_provider_url" name="txt_sms_provider_url" value="<?php echo $row->sms_provider_url ;?>">
	        </div>
	        <div class="form-group">
	                    <label>User Name</label>
	                    <input class="form-control" id="txt_sms_provider_user" name="txt_sms_provider_user" value="<?php echo $row->sms_provider_user ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Password</label>
	                    <input class="form-control" id="txt_sms_provider_password" name="txt_sms_provider_password" value="<?php echo $row->sms_provider_password ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Status</label>
	                <?php 
	                $radio_array=array("Active","In-Active");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->sms_provider_status)
	                    {
	                        ?>
	                        <input type="radio" checked id="rdo_sms_provider_status" name="rdo_sms_provider_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="rdo_sms_provider_status" name="rdo_sms_provider_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 
	public function get_settings()
	{
	    $edit_profile=$this->db->get_where("tbl_settings");

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_settings/edit/do_update"  enctype="multipart/form-data">
	        <div class="control-group success">
	        			<div class="col-lg-6">
	        				
						    <div class="form-group">
						    
							  <label>Website Title </label>
							  	<input type="text" id="txt_title" name="txt_title" class="form-control" value="<?php echo $row->settings_website_title; ?>" >
							</div>
							
							<div class="form-group">
							  <label>Meta Keywords </label>
							  	<textarea id="txt_keyword" name="txt_keyword" class="form-control" ><?php echo $row->settings_meta_keywords; ?></textarea>
							</div>
							<div class="form-group">
							  <label>Meta Description </label>
							  
							 	<textarea id="txt_desc" name="txt_desc" class="form-control" ><?php echo $row->settings_meta_keywords; ?></textarea>
							 
							</div>
							<div  class="form-group">
							  <label>Website Name </label>
							  	<input type="text" id="txt_name" name="txt_name" class="form-control" value="<?php echo $row->settings_website_title; ?>" >
							  
							</div>
							
							<div  class="form-group">
							  <label>Currency Code </label>
							  	<input type="text" id="txt_code" name="txt_code" class="form-control" value="<?php echo $row->settings_currency_code; ?>" >
							  
							</div>
							<div class="form-group">
							  <label >Currency Symbol </label>
							  	<input type="text" id="txt_symbol" name="txt_symbol" class="form-control" value="<?php echo $row->settings_currency_symbol; ?>" >
							  
							</div>
							<div class="form-group">
							  <label class="control-label" for="typeahead">Address </label>
							  	<textarea id="txt_addr" name="txt_addr" class="form-control" ><?php echo $row->settings_address; ?></textarea>
							  
							</div>
							<div  class="form-group">
							  <label >Phone </label>
							  	<input type="text" id="txt_phone" name="txt_phone" class="form-control" value="<?php echo $row->settings_phone; ?>" >
							  
							</div>
							<div class="form-group">
							  <label >Fax </label>
							  	<input type="text" id="txt_fax" name="txt_fax" class="form-control" value="<?php echo $row->settings_fax; ?>" >
							  
							</div>
							<div class="form-group">
							  <label >Contact Email </label>
							  	<input type="text" id="txt_email" name="txt_email" class="form-control" value="<?php echo $row->settings_contact_email; ?>" >
							  
							</div>
							<div class="form-group">
							  <label >Map Address </label>
							 
								<input type="text" id="txt_map_addr" name="txt_map_addr" class="form-control" value="<?php echo $row->settings_map_address; ?>" >
							</div>
							<div class="form-group">
							  <label >Toll Free Number </label>
							 
								<input type="text" id="txt_toll_free" name="txt_toll_free" class="form-control" value="<?php echo $row->settings_toll_free; ?>" >
							 
							</div>
							<div class="form-group">
							  	<label >Minimum Single Piece Qty</label>
							  	  	<input class="form-control"  id="txt_single_min_qty" name="txt_single_min_qty" type="text"   value="<?php echo $row->settings_single_min_qty; ?>">
								  
							</div>

							<div class="form-group">
							  	<label >Minimum Total Piece Qty</label>
							  	  	<input class="form-control" id="txt_total_min_qty" name="txt_total_min_qty" type="text"   value="<?php echo $row->settings_total_min_qty; ?>">
								  
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
							  <label >Logo </label>
							  	<br>
							  	<img height='100px' src="<?php echo base_url().'files/admin/logo/'.$row->settings_logo; ?>" >
							  	<input type="file" id="img_logo" name="img_logo" >
							  
							</div>
							<div class="form-group">
							  <label>Small Logo </label>
							  	<br>
							  	<img height='100px' src="<?php echo base_url().'files/admin/logo/'.$row->settings_small_logo; ?>" >
								<input type="file" id="img_logo_small" name="img_logo_small"  >
							 
							</div>	
							<div class="form-group">
							  <label>Footer Logo </label>
							  	<br>
							  	<img height='100px' src="<?php echo base_url().'files/admin/logo/'.$row->settings_footer_logo; ?>" >
								<input type="file" id="img_logo_footer" name="img_logo_footer" >
							 
							</div>	
							<div class="form-group">
							  <label >Favicon</label>
							  <br>
							  	<img height='100px' src="<?php echo base_url().'files/admin/logo/'.$row->settings_favicon; ?>" >
								<input type="file" id="img_favicon" name="img_favicon" class="span6 typeahead"  >
							  
							</div>
							<div class="form-group">
							  <label >Facebook Url </label>
							  	<input type="text" id="txt_fb_url" name="txt_fb_url" class="form-control" value="<?php echo $row->facebook_url; ?>" >
							  
							</div>	
							<div class="form-group">
							  <label >Google+ Url</label>
							  	<input type="text" id="txt_google_url" name="txt_google_url" class="form-control" value="<?php echo $row->google_plus_url; ?>" >
							  
							</div>

							<div class="form-group">
							  <label >Twitter Url</label>
							  	<input type="text" id="txt_twitter_url" name="txt_twitter_url" class="form-control" value="<?php echo $row->twitter_url; ?>" >
							  
							</div>

							<div class="form-group">
							  <label >Pinterest Url</label>
							  	<input type="text" id="txt_linkedin_url" name="txt_linkedin_url" class="form-control" value="<?php echo $row->pinterest_url; ?>" >
							  
							</div>

							<div class="form-group">
							  <label >Instagram Url</label>
							  	<input type="text" id="txt_instagram_url" name="txt_instagram_url" class="form-control" value="<?php echo $row->instagram_url; ?>" >
							  
							</div>


							<div class="form-group">
							  	<label >Show Badges</label>
							  	  	<input id="inlineCheckbox1"  id="chk_show_badges" name="chk_show_badges" type="checkbox"  <?php if(trim($row->settings_show_badges)=="1"){echo " checked='checked'";}  ?> value="1">
								  
							</div>

							
						</div>
						<div class="col-lg-12">

							
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	        	</div>
	    </form>
	    <?php 
	        }
	    }
	} 

	public function get_cms()
	{
	    $edit_profile=$this->db->get("tbl_cms");

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_cms/edit/do_update"  enctype="multipart/form-data">
	    	<!-- <div class="col-lg-6"> -->

		        <div class="form-group">
		                    <label>About Us</label>
			                    <textarea class="form-control froalaeditor" id="txt_about_us" name="txt_about_us" rows="3"><?php echo $row->cms_about_us ;?></textarea>
		        </div>
		        <div class="form-group">
		                    <label>Privacy Policy</label>
		                    <textarea class="form-control froalaeditor" id="txt_privacy_policy" name="txt_privacy_policy" rows="3"><?php echo $row->cms_privacy_policy ;?></textarea>
		        </div>
		        <div class="form-group">
		                    <label>Copy Right</label>
		                    <textarea class="form-control froalaeditor" id="txt_copy_right" name="txt_copy_right" rows="3"><?php echo $row->cms_copyright ;?></textarea>
		        </div>
		        <div class="form-group">
		                    <label>Trade Mark</label>
		                    <textarea class="form-control froalaeditor" id="txt_trademark" name="txt_trademark" rows="3"><?php echo $row->cms_trade_mark ;?></textarea>
		        </div>
	        <!-- </div> -->
	        <!-- <div class="col-lg-6"> -->
		        <div class="form-group">
		                    <label>Terms & Conditions</label>
		                    <textarea class="form-control froalaeditor" id="txt_terms_conditions" name="txt_terms_conditions" rows="3"><?php echo $row->cms_terms_condition ;?></textarea>
		        </div>
		        <div class="form-group">
		                    <label>Contact Us</label>
		                    <textarea class="form-control froalaeditor" id="txt_contact_us" name="txt_contact_us" rows="3"><?php echo $row->cms_contact_us ;?></textarea>
		        </div>
		        <div class="form-group">
		                    <label>Help</label>
		                    <textarea class="form-control froalaeditor" id="txt_help" name="txt_help" rows="3"><?php echo $row->cms_help;?></textarea>
		        </div>
		        <div class="form-group">
		                    <label>FAQ</label>
		                    <textarea class="form-control froalaeditor" id="txt_faq" name="txt_faq" rows="3"><?php echo $row->cms_faq;?></textarea>
		        </div>
		        <div class="form-group">
		                    <label>Wedding Resources</label>
		                    <textarea class="form-control froalaeditor" id="txt_wedding_resources" name="txt_wedding_resources" rows="3"><?php echo $row->cms_wedding_resources;?></textarea>
		        </div>
		        <div class="form-group">
		                    <label>Disclaimer</label>
		                    <textarea class="form-control froalaeditor" id="txt_disclaimer" name="txt_disclaimer" rows="3"><?php echo $row->cms_disclaimer;?></textarea>
		        </div>
	        <!-- </div> -->
	        <div class="col-lg-12">
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	        </div>
	    </form>
	    <?php 
	        }
	    }
	}

	public function get_slider($id)
	{
	    $edit_profile=$this->db->get_where("tbl_slider",array("slider_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_slider/edit/do_update/<?php echo $row->slider_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Title</label>
	                    <input class="form-control" id="txt_slider_title" name="txt_slider_title" value="<?php echo $row->slider_title ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Slider Image</label><br><img src="<?php echo base_url(); ?>files/user/slider/<?php echo $row->slider_image; ?>" width="200px"><input type="file" id="img_slider" name="img_slider">
	        </div>
	        <div class="form-group">
	                    <label>Href</label>
	                    <input class="form-control" id="txt_slider_href" name="txt_slider_href" value="<?php echo $row->slider_href ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Order Number</label>
	                    <input class="form-control" id="txt_slider_order" name="txt_slider_order" value="<?php echo $row->slider_order ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Content</label>
	                    <input class="form-control" id="txt_slider_content" name="txt_slider_content" value="<?php echo $row->slider_content ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Position</label>
	                    <input class="form-control" id="txt_slider_position" name="txt_slider_position" value="<?php echo $row->slider_content_position ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Status</label>
	                <?php 
	                $radio_array=array("Active","In-Active");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->slider_status)
	                    {
	                        ?>
	                        <input type="radio" checked id="rdo_status" name="rdo_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="rdo_status" name="rdo_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	}

	public function get_religion($id)
	{
	    $edit_profile=$this->db->get_where("tbl_religion",array("religion_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_religion/edit/do_update/<?php echo $row->religion_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Religion Name</label>
	                    <input class="form-control" id="txt_religion_name" name="txt_religion_name" value="<?php echo $row->religion_name ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Sort Order</label>
	                    <input class="form-control" id="txt_religon_sort_order" name="txt_religon_sort_order" value="<?php echo $row->religion_sort_order ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Status</label>
	                <?php 
	                $radio_array=array("Active","In-Active");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->religion_status)
	                    {
	                        ?>
	                        <input type="radio" checked id="txt_religion_status" name="txt_religion_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="txt_religion_status" name="txt_religion_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	}  

	public function get_caste($id)
	{
	    $edit_profile=$this->db->get_where("tbl_caste",array("caste_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_caste/edit/do_update/<?php echo $row->caste_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Caste Name</label>
	                    <input class="form-control" id="txt_caste_name" name="txt_caste_name" value="<?php echo $row->caste_name ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Sort Order</label>
	                    <input class="form-control" id="txt_caste_sort_order" name="txt_caste_sort_order" value="<?php echo $row->caste_sort_order ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Status</label>
	                <?php 
	                $radio_array=array("Active","In-Active");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->caste_status)
	                    {
	                        ?>
	                        <input type="radio" checked id="rdo_caste_status" name="rdo_caste_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="rdo_caste_status" name="rdo_caste_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <div class="form-group">
	                    <label>Religion</label>
	                    <select class="form-control"  id="cmb_religion" name="cmb_religion">
	                    <?php 
	                    $select_res    = $this->db->get("tbl_religion");
	                    foreach($select_res->result() as $select_row)
	                    {
	                        if($select_row->religion_id == $row->religion_id)
	                        {
	                            echo "<option value=".$select_row->religion_id." selected>".$select_row->religion_name."</option>";
	                        }
	                        else
	                        {
	                            echo "<option value=".$select_row->religion_id.">".$select_row->religion_name."</option>";
	                        }
	                    }
	                    ?>
	                    </select>
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 

	public function get_country($id)
	{
	    $edit_profile=$this->db->get_where("tbl_country",array("country_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_country/edit/do_update/<?php echo $row->country_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Country Name</label>
	                    <input class="form-control" id="txt_country_name" name="txt_country_name" value="<?php echo $row->country_name ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Country Code</label>
	                    <input class="form-control" id="txt_country_code" name="txt_country_code" value="<?php echo $row->country_code ;?>">
	        </div>
	        <div class="form-group">
	                    <label>STD Code</label>
	                    <input class="form-control" id="txt_country_std_code" name="txt_country_std_code" value="<?php echo $row->country_std_code ;?>">
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 

	public function get_state($id)
	{
	    $edit_profile=$this->db->get_where("tbl_state",array("state_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_state/edit/do_update/<?php echo $row->state_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>State Name</label>
	                    <input class="form-control" id="txt_state_name" name="txt_state_name" value="<?php echo $row->state_name ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Country</label>
	                    <select class="form-control"  id="cmb_country" name="cmb_country">
	                    <?php 
	                    $select_res    = $this->db->get("tbl_country");
	                    foreach($select_res->result() as $select_row)
	                    {
	                        if($select_row->country_id == $row->country_id)
	                        {
	                            echo "<option value=".$select_row->country_id." selected>".$select_row->country_name."</option>";
	                        }
	                        else
	                        {
	                            echo "<option value=".$select_row->country_id.">".$select_row->country_name."</option>";
	                        }
	                    }
	                    ?>
	                    </select>
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 

	public function get_city($id)
	{
	    $edit_profile=$this->db->get_where("tbl_city",array("city_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_city/edit/do_update/<?php echo $row->city_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>City Name</label>
	                    <input class="form-control" id="txt_city_name" name="txt_city_name" value="<?php echo $row->city_name ;?>">
	        </div>
	        <div class="form-group">
	                    <label>State</label>
	                    <select class="form-control"  id="cmb_state" name="cmb_state">
	                    <?php 
	                    $select_res    = $this->db->get("tbl_state");
	                    foreach($select_res->result() as $select_row)
	                    {
	                        if($select_row->state_id == $row->state_id)
	                        {
	                            echo "<option value=".$select_row->state_id." selected>".$select_row->state_name."</option>";
	                        }
	                        else
	                        {
	                            echo "<option value=".$select_row->state_id.">".$select_row->state_name."</option>";
	                        }
	                    }
	                    ?>
	                    </select>
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 


	public function get_member_photo($id)
	{
	    $edit_profile=$this->db->get_where("tbl_member_photo",array("member_photo_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_member_photo/edit/do_update/<?php echo $row->member_photo_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Member Id</label>
	                    <select class="form-control"  id="cmb_member" name="cmb_member">
	                    <?php 
	                    $select_res    = $this->db->get("tbl_member");
	                    foreach($select_res->result() as $select_row)
	                    {
	                        if($select_row->member_id == $row->member_id)
	                        {
	                            echo "<option value=".$select_row->member_id." selected>".$select_row->member_name."</option>";
	                        }
	                        else
	                        {
	                            echo "<option value=".$select_row->member_id.">".$select_row->member_name."</option>";
	                        }
	                    }
	                    ?>
	                    </select>
	        </div>
	        <div class="form-group">
	                    <label>Photo 1</label><br><img src="<?php echo base_url(); ?>files/member/<?php echo $row->member_photo1; ?>" width="200px"><input type="file" id="img_photo1" name="img_photo1">
	        </div>
	        <div class="form-group">
	                    <label>Photo 1 Status</label>
	                <?php 
	                $radio_array=array("Approve","Decline");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->member_photo1_status)
	                    {
	                        ?>
	                        <input type="radio" checked id="rdo_photo1_status" name="rdo_photo1_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="rdo_photo1_status" name="rdo_photo1_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <div class="form-group">
	                    <label>Photo 2</label><br><img src="<?php echo base_url(); ?>files/member/<?php echo $row->member_photo2; ?>" width="200px"><input type="file" id="img_photo2" name="img_photo2">
	        </div>
	        <div class="form-group">
	                    <label>Photo 2 Status</label>
	                <?php 
	                $radio_array=array("Approve","Decline");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->member_photo2_status)
	                    {
	                        ?>
	                        <input type="radio" checked id="rdo_photo2_status" name="rdo_photo2_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="rdo_photo2_status" name="rdo_photo2_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <div class="form-group">
	                    <label>Photo 3</label><br><img src="<?php echo base_url(); ?>files/member/<?php echo $row->member_photo3; ?>" width="200px"><input type="file" id="img_photo3" name="img_photo3">
	        </div>
	        <div class="form-group">
	                    <label>Photo 3 Status</label>
	                <?php 
	                $radio_array=array("Approve","Decline");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->member_photo3_status)
	                    {
	                        ?>
	                        <input type="radio" checked id="rdo_photo3_status" name="rdo_photo3_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="rdo_photo3_status" name="rdo_photo3_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <div class="form-group">
	                    <label>Scanned Horoscope</label><br><img src="<?php echo base_url(); ?>files/member/<?php echo $row->member_scanned_horroscope; ?>" width="200px"><input type="file" id="img_scanned_horroscope" name="img_scanned_horroscope">
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 

	public function get_success_story($id)
	{
	    $edit_profile=$this->db->get_where("tbl_success_story",array("success_story_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_success_story/edit/do_update/<?php echo $row->success_story_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Bride Name</label>
	                    <input class="form-control" id="txt_bride_name" name="txt_bride_name" value="<?php echo $row->success_story_bride_name ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Bride Matrimonial ID</label>
	                    <input class="form-control" id="txt_bride_matrimonial_id" name="txt_bride_matrimonial_id" value="<?php echo $row->success_story_bride_matri_id ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Groom Name</label>
	                    <input class="form-control" id="txt_groom_name" name="txt_groom_name" value="<?php echo $row->success_story_groom_name ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Groom Matrimonial ID</label>
	                    <input class="form-control" id="txt_groom_matrimonial_id" name="txt_groom_matrimonial_id" value="<?php echo $row->success_story_groom_matri_id ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Wedding Date</label>
	                    <input class="form-control" id="txt_wedding_date" name="txt_wedding_date" value="<?php echo $row->success_story_wedding_date ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Mobile Number</label>
	                    <input class="form-control" id="txt_mobile_number" name="txt_mobile_number" value="<?php echo $row->success_story_mobile_number ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Contact Address</label>
	                    <textarea class="form-control" id="txt_contact_address" name="txt_contact_address" rows="3"><?php echo $row->success_story_contact_address ;?></textarea>
	        </div>
	        <div class="form-group">
	                    <label>Comments</label>
	                    <textarea class="form-control" id="txt_comments" name="txt_comments" rows="3"><?php echo $row->success_story_comments ;?></textarea>
	        </div>
	        <div class="form-group">
	                    <label>Wedding Photo</label><br><img src="<?php echo base_url(); ?>files/success_story/<?php echo $row->success_story_wedding_photo; ?>" width="200px"><input type="file" id="img_wedding_photo" name="img_wedding_photo">
	        </div>
	        <div class="form-group">
	                    <label>Status</label>
	                <?php 
	                $radio_array=array("Active","In-Active");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->success_story_status)
	                    {
	                        ?>
	                        <input type="radio" checked id="rdo_status" name="rdo_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="rdo_status" name="rdo_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 

	public function get_staff($id)
	{
	    $edit_profile=$this->db->get_where("tbl_staff",array("staff_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_staff/edit/do_update/<?php echo $row->staff_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Staff Name</label>
	                    <input class="form-control" id="txt_staff_name" name="txt_staff_name" value="<?php echo $row->staff_name ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Staff Username</label>
	                    <input class="form-control" id="txt_staff_username" name="txt_staff_username" value="<?php echo $row->staff_username ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Email</label>
	                    <input class="form-control" id="txt_staff_email" name="txt_staff_email" value="<?php echo $row->staff_email ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Password</label>
	                    <input class="form-control" id="txt_staff_password" name="txt_staff_password" value="<?php echo $row->staff_password ;?>">
	        </div>
	        <div class="form-group">
	                    <label>About Details</label>
	                    <textarea class="form-control" id="txt_staff_about" name="txt_staff_about" rows="3"><?php echo $row->staff_about ;?></textarea>
	        </div>
	        <div class="form-group">
	                    <label>Staff Status</label>
	                <?php 
	                $radio_array=array("Active","In-Active");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->staff_status)
	                    {
	                        ?>
	                        <input type="radio" checked id="rdo_staff_status" name="rdo_staff_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="rdo_staff_status" name="rdo_staff_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <div class="form-group">
	                    <label>Date of Join</label>
	                    <input class="form-control" id="txt_staff_doj" name="txt_staff_doj" value="<?php echo $row->staff_doj ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Last Login</label>
	                    <input class="form-control" id="txt_staff_last_login" name="txt_staff_last_login" value="<?php echo $row->staff_last_login_date ;?>">
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 

	public function get_mother_tongue($id)
	{
	    $edit_profile=$this->db->get_where("tbl_mother_tongue",array("mother_tongue_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_mother_tongue/edit/do_update/<?php echo $row->mother_tongue_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Mother Tongue</label>
	                    <input class="form-control" id="txt_mother_tongue" name="txt_mother_tongue" value="<?php echo $row->mother_tongue_name ;?>">
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 

	public function get_subscribe($id)
	{
	    $edit_profile=$this->db->get_where("tbl_subscribe",array("subscribe_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_subscribe/edit/do_update/<?php echo $row->subscribe_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Subscribe Name</label>
	                    <input class="form-control" id="txt_subscribe_name" name="txt_subscribe_name" value="<?php echo $row->subscribe_name ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Email</label>
	                    <input class="form-control" id="txt_subscribe_email" name="txt_subscribe_email" value="<?php echo $row->subscribe_email ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Phone</label>
	                    <input class="form-control" id="txt_subscribe_phone" name="txt_subscribe_phone" value="<?php echo $row->subscribe_phone ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Status</label>
	                <?php 
	                $radio_array=array("Subscribe","Unsubscribe");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->subscribe_status)
	                    {
	                        ?>
	                        <input type="radio" checked id="rdo_subscribe_status" name="rdo_subscribe_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="rdo_subscribe_status" name="rdo_subscribe_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <div class="form-group">
	                    <label>Member</label>
	                    <select class="form-control"  id="cmb_member" name="cmb_member">
	                    <?php 
	                    $select_res    = $this->db->get("tbl_member");
	                    foreach($select_res->result() as $select_row)
	                    {
	                        if($select_row->member_id == $row->member_id)
	                        {
	                            echo "<option value=".$select_row->member_id." selected>".$select_row->member_name."</option>";
	                        }
	                        else
	                        {
	                            echo "<option value=".$select_row->member_id.">".$select_row->member_name."</option>";
	                        }
	                    }
	                    ?>
	                    </select>
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 

	public function get_sub_email_campaign($id)
	{
	    $edit_profile=$this->db->get_where("tbl_subscribe_email_campaign",array("campaign_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_sub_email_campaign/edit/do_update/<?php echo $row->campaign_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Campaign Subject</label>
	                    <input class="form-control" id="txt_campaign_subject" name="txt_campaign_subject" value="<?php echo $row->campaign_subject ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Message</label>
	                    <textarea class="form-control" id="txt_campaign_message" name="txt_campaign_message" rows="3"><?php echo $row->campaign_message ;?></textarea>
	        </div>
	        <div class="form-group">
	                    <label>Status</label>
	                <?php 
	                $radio_array=array("Active","In-Active");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->campaign_status)
	                    {
	                        ?>
	                        <input type="radio" checked id="rdo_campaign_status" name="rdo_campaign_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="rdo_campaign_status" name="rdo_campaign_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <div class="form-group">
	                    <label>Dat</label>
	                    <input class="form-control" id="txt_campaigne_date" name="txt_campaigne_date" value="<?php echo $row->campaign_date_time ;?>">
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 

	public function get_subscribe_email($id)
	{
	    $edit_profile=$this->db->get_where("tbl_subscribe_email",array("subscribe_email_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_subscribe_email/edit/do_update/<?php echo $row->subscribe_email_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Campaign</label>
	                    <select class="form-control"  id="cmb_campaign" name="cmb_campaign">
	                    <?php 
	                    $select_res    = $this->db->get("tbl_subscribe_email_campaign");
	                    foreach($select_res->result() as $select_row)
	                    {
	                        if($select_row->campaign_id == $row->campaign_id)
	                        {
	                            echo "<option value=".$select_row->campaign_id." selected>".$select_row->campaign_subject."</option>";
	                        }
	                        else
	                        {
	                            echo "<option value=".$select_row->campaign_id.">".$select_row->campaign_subject."</option>";
	                        }
	                    }
	                    ?>
	                    </select>
	        </div>
	        <div class="form-group">
	                    <label>Member Id</label>
	                    <select class="form-control"  id="cmb_member" name="cmb_member">
	                    <?php 
	                    $select_res    = $this->db->get("tbl_member");
	                    foreach($select_res->result() as $select_row)
	                    {
	                        if($select_row->member_id == $row->member_id)
	                        {
	                            echo "<option value=".$select_row->member_id." selected>".$select_row->member_name."</option>";
	                        }
	                        else
	                        {
	                            echo "<option value=".$select_row->member_id.">".$select_row->member_name."</option>";
	                        }
	                    }
	                    ?>
	                    </select>
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 

	public function get_banner_ads($id)
	{
	    $edit_profile=$this->db->get_where("tbl_banner_ads",array("banner_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_banner_ads/edit/do_update/<?php echo $row->banner_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Banner Ad Place</label>
	                <?php 
	                $radio_array=array("Top", "Bottom", "Left", "Right", "Center");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->banner_place)
	                    {
	                        ?>
	                        <input type="radio" checked id="rdo_banner_place" name="rdo_banner_place" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="rdo_banner_place" name="rdo_banner_place" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <div class="form-group">
	                    <label>Href / Url</label>
	                    <input class="form-control" id="txt_banner_href" name="txt_banner_href" value="<?php echo $row->banner_href ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Start Date</label>
	                    <input class="form-control" id="txt_banner_start_date" name="txt_banner_start_date" value="<?php echo $row->banner_start_date ;?>">
	        </div>
	        <div class="form-group">
	                    <label>End Date</label>
	                    <input class="form-control" id="txt_banner_end_date" name="txt_banner_end_date" value="<?php echo $row->banner_end_date ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Banner Ad Image</label><br><img src="<?php echo base_url(); ?>files/banner_ad/<?php echo $row->banner_image; ?>" width="200px"><input type="file" id="img_banner_ad" name="img_banner_ad">
	        </div>
	        <div class="form-group">
	                    <label>Banner Amount</label>
	                    <input class="form-control" id="txt_banner_amount" name="txt_banner_amount" value="<?php echo $row->banner_amount ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Status</label>
	                <?php 
	                $radio_array=array("Active","In-Active");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->banner_status)
	                    {
	                        ?>
	                        <input type="radio" checked id="rdo_banner_status" name="rdo_banner_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="rdo_banner_status" name="rdo_banner_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	}

	public function get_plan($id)
	{
	    $edit_profile=$this->db->get_where("tbl_plan",array("plan_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_plan/edit/do_update/<?php echo $row->plan_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Plan Name</label>
	                    <input class="form-control" id="txt_plan_name" name="txt_plan_name" value="<?php echo $row->plan_name ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Profile View Limit</label>
	                    <input class="form-control" id="txt_plan_profile_view_limit" name="txt_plan_profile_view_limit" value="<?php echo $row->plan_profile_views ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Validity Days</label>
	                    <input class="form-control" id="txt_plan_validity_days" name="txt_plan_validity_days" value="<?php echo $row->plan_days_validity ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Amount</label>
	                    <input class="form-control" id="txt_plan_amount" name="txt_plan_amount" value="<?php echo $row->plan_amount ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Description</label>
	                    <textarea class="form-control" id="txt_plan_description" name="txt_plan_description" rows="3"><?php echo $row->plan_description ;?></textarea>
	        </div>
	        <div class="form-group">
	                    <label>Status</label>
	                <?php 
	                $radio_array=array("Active","In-Active");
	                for($i=0;$i<count($radio_array);$i++)
	                {
	                    
	                    if($radio_array[$i]==$row->plan_status)
	                    {
	                        ?>
	                        <input type="radio" checked id="rdo_plan_status" name="rdo_plan_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    else
	                    {
	                        ?>
	                        <input type="radio" id="rdo_plan_status" name="rdo_plan_status" value="<?php echo $radio_array[$i]; ?>"><?php echo $radio_array[$i]; ?>
	                        <?php
	                    }
	                    ?>
	                    <?php
	                }
	                ?>
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	} 

	public function get_member_plan($id)
	{
	    $edit_profile=$this->db->get_where("tbl_member_plan",array("member_plan_id"=>$id));

	    if(isset($edit_profile))
	    {
	        foreach($edit_profile->result() as $row)
	        {
	    ?>
	    <form role="form" method="post" action="<?php echo base_url(); ?>admin/manage_member_plan/edit/do_update/<?php echo $row->member_plan_id ;?>"  enctype="multipart/form-data">
	        <div class="form-group">
	                    <label>Member Id</label>
	                    <select class="form-control"  id="cmb_member" name="cmb_member">
	                    <?php 
	                    $select_res    = $this->db->get("tbl_member");
	                    foreach($select_res->result() as $select_row)
	                    {
	                        if($select_row->member_id == $row->member_id)
	                        {
	                            echo "<option value=".$select_row->member_id." selected>".$select_row->member_name."</option>";
	                        }
	                        else
	                        {
	                            echo "<option value=".$select_row->member_id.">".$select_row->member_name."</option>";
	                        }
	                    }
	                    ?>
	                    </select>
	        </div>
	        <div class="form-group">
	                    <label>Plan</label>
	                    <select class="form-control"  id="cmb_plan" name="cmb_plan">
	                    <?php 
	                    $select_res    = $this->db->get("tbl_plan");
	                    foreach($select_res->result() as $select_row)
	                    {
	                        if($select_row->plan_id == $row->plan_id)
	                        {
	                            echo "<option value=".$select_row->plan_id." selected>".$select_row->plan_name."</option>";
	                        }
	                        else
	                        {
	                            echo "<option value=".$select_row->plan_id.">".$select_row->plan_name."</option>";
	                        }
	                    }
	                    ?>
	                    </select>
	        </div>
	        <div class="form-group">
	                    <label>MemberPlan Start Date</label>
	                    <input class="form-control" id="txt_member_plan_start_date" name="txt_member_plan_start_date" value="<?php echo $row->member_plan_start_date ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Member Plan End Date</label>
	                    <input class="form-control" id="txt_member_plan_end_date" name="txt_member_plan_end_date" value="<?php echo $row->member_plan_end_date ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Member Plan Views</label>
	                    <input class="form-control" id="txt_member_plan_views" name="txt_member_plan_views" value="<?php echo $row->member_plan_views ;?>">
	        </div>
	        <div class="form-group">
	                    <label>Member Plan Status</label>
	                    <input class="form-control" id="txt_member_plan_status" name="txt_member_plan_status" value="<?php echo $row->member_plan_status ;?>">
	        </div>
	        <button type="submit" class="btn btn-success">Submit</button>
	        <button type="reset" class="btn btn-default">Reset</button>
	    </form>
	    <?php 
	        }
	    }
	}  


	 

	

	public function check_google()
	{
		$i=$_GET['data'];
		$this->db->select('*');
			$this->db->from('tbl_city');
			$this->db->like('city_name',$i);
			$resultset=$this->db->get();
			if($resultset->num_rows()>0)
			{
				foreach($resultset->result() as $row)
				{?>
					
				<label onclick="set_data('<?php echo $row->city_name; ?>')"><?php echo $row->city_name; ?></label>

					<br>
		<?php
				}
			}
	}


	
	  
}
?>