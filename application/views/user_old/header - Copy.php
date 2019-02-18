<?php 
$settings_logo=$facebook_url=$google_plus_url=$twitter_url=$pinterest_url=$instagram_url=$settings_address=$settings_phone=$settings_email="";
$settings_res = $this->db->get("tbl_settings");

foreach($settings_res->result() as $setting_row)
{
    $settings_logo=$setting_row->settings_logo;
    $facebook_url=$setting_row->facebook_url;
    $google_plus_url=$setting_row->google_plus_url;
    $twitter_url=$setting_row->twitter_url;
    $pinterest_url=$setting_row->pinterest_url;
    $instagram_url=$setting_row->instagram_url;
    $min_single_qty=$setting_row->settings_single_min_qty;
    $min_total_qty=$setting_row->settings_total_min_qty;
    $settings_address=$setting_row->settings_address;
    $settings_phone=$setting_row->settings_phone;
    $settings_email=$setting_row->settings_contact_email;
}


$sid=session_id();
$cart_res=$this->db->get_where('tbl_cart',array('cart_session'=>$sid));
$tot_cart_product = 0 ;
foreach($cart_res->result() as $cart_row)
{
	if($cart_row->volume_id!=0)
	{
		$volume_product_count_res=$this->db->get_where('tbl_volume_product',array("volume_id"=>$cart_row->volume_id));
		$volume_products = $volume_product_count_res->num_rows();
		$tot_cart_product =$tot_cart_product+($volume_products*$cart_row->cart_qty);
		
	}
	if($cart_row->volume_product_id!=0)
	{
		$tot_cart_product=$tot_cart_product+$cart_row->cart_qty;
	}
}

//echo "Total product is :".$tot_cart_product;
?>
<div class="container">
	<div class="header">
	<div class="head-t">
		<div class="logo">
			<a href="<?php echo base_url(); ?>user">
			<!--<img src="<?php echo base_url(); ?>template/user/images/logo.png" class="img-responsive" alt=""/>-->
			<img src="<?php echo base_url(); ?>files/admin/logo/<?php echo $settings_logo; ?>" class="img-responsive" alt=""/>
			
			</a>

		</div>
		<div class="logo" style="padding-left:220px;margin-top:0px">
			<span style="display: block;
			
padding: 2px 14px;
border: 1px solid #007a37;
font-weight: 400">
<a target="_blank" style="color:#007a37;text-decoration:none" href="https://web.whatsapp.com/send?phone=918238923571"  data-action="share/whatsapp/share" >
<img src="<?php echo base_url(); ?>template/user/images/whatsapp.png" style="margin-bottom:4px" width="23px"/>
			+91-8238923571</a></span>
			<select onchange="change_currency(this.value)" style="margin: 5px 0;
font-family: 'Open Sans', sans-serif;
padding: 8px 16px;
outline: none;
color: #5a5a5a;
background: #ffffff;
border: 1px solid #5a5a5a;
width: 100%;
line-height: 1.5em;
position: relative;
font-size: 0.8725em;
-webkit-appearance: none;
text-transform: capitalize;">
				<option value="AUD"
				<?php if($_SESSION["currency_tag"]=="AUD")
					{
						echo "selected='selected'";
					}
				?>>AUD - &dollar;</option>
				<option value="GBP"
				<?php if($_SESSION["currency_tag"]=="GBP")
					{
						echo "selected='selected'";
					}
				?>>GBP - &pound;</option>
				<option value="CAD"
				<?php if($_SESSION["currency_tag"]=="CAD")
					{
						echo "selected='selected'";
					}
				?>>CAD - &dollar;</option>
				<option value="EUR"
				<?php if($_SESSION["currency_tag"]=="EUR")
					{
						echo "selected='selected'";
					}
				?>>EUR - &euro; </option>
				<option value="INR"
				<?php if($_SESSION["currency_tag"]=="INR")
					{
						echo "selected='selected'";
					}
				?>>INR - &#8360; </option>
				<option value="SGD"
				<?php if($_SESSION["currency_tag"]=="SGD")
					{
						echo "selected='selected'";
					}
				?>>SGD - &dollar;</option>
				<option value="USD"
				<?php if($_SESSION["currency_tag"]=="USD")
					{
						echo "selected='selected'";
					}
				?>>USD - &dollar;</option>
			</select>
			<?php //echo $_SESSION["currency_tag"]; ?>
			<?php //echo $_SESSION["exchange_rate"]; ?>
		</div>

		<!-- start header_right -->
		<div class="header_right">

			<div class="rgt-bottom">
				<?php 
				if(isset($_SESSION["user_email"]))
				{
					?>
					<div class="log">
						<div class="login" >
							<div id="loginContainer"><a href="<?php echo base_url(); ?>login/log_out"><span>Log Out</span></a>
							</div>
						</div>
					</div>
					<!--<div class="reg" style="padding-left:5px">
						<a href="register.html">My Account</a>
					</div>-->
					<div class="log">
						<div class="login" >
							<div id="loginContainer"><a href="#" id="loginButton"><span>Account</span></a>
							    <div id="loginBox">                
							    	<ul>
							    		<form id="loginForm" action="<?php echo base_url(); ?>login/login_check" method="post">
							            <li>
							    			<a href='<?php echo base_url(); ?>user/order'>My Orders</a>
							    		</li>
							    		<li>
							    			<a href='<?php echo base_url(); ?>user/wishlist'>Wishlist</a>
							    		</li>
							    		<li>
							    			<a href='<?php echo base_url(); ?>user/edit_profile'>Edit Profile</a>
							    		</li>
							    		<li>
							    			<a href='<?php echo base_url(); ?>user/changepwd'>Change Password</a>
							    		</li>
							    		</form>
							    	</ul>
							    </div>
							</div>
						</div>
					</div>
					<?php
				}
				else
				{
					?>
					<div class="log">
						<div class="login" >
							<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
							    <div id="loginBox">                
							        <form id="loginForm" action="<?php echo base_url(); ?>login/login_check" method="post">
							                <fieldset id="body">
							                	<fieldset>
							                          <label for="email">Email Address</label>
							                          <input type="text" name="txt_email" id="txt_email">
							                    </fieldset>
							                    <fieldset>
							                            <label for="password">Password</label>
							                            <input type="password" name="txt_password" id="txt_password">
							                     </fieldset>
							                    <input type="submit" id="login"  style="background:#007a37" value="Sign in">
							                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
							            	</fieldset>
							            <span><a href="#">Forgot your password?</a></span>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="reg">
						<a href="<?php echo base_url(); ?>user/register">REGISTER</a>
					</div>
					<?php
				}
				?>
			<div class="cart box_1">
				<!--<a href="checkout.html">
					<h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
				</a>-->
				<a href="<?php echo base_url(); ?>user/cart">
					<!--<h3>(<span id="simpleCart_quantity" class=""><?php echo $tot_cart_product; ?></span> items in Cart)<img src="images/bag.png" alt=""></h3>-->
					
					<h3>&nbsp;&nbsp;(<span style="color: #000000;
margin-right: 0px;
padding: 8px 14px;
background: url(<?php echo base_url(); ?>template/user/images/bag1.png) no-repeat 0px 2px;
-webkit-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;" class="shopping-cart"></span><span  id="simpleCart_quantity" ><?php echo $tot_cart_product; ?></span> items)<img src="images/bag.png" alt=""></h3>
				</a>	
				<!--<p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>-->
				<div class="clearfix"> </div>
			</div>
			<div class="create_btn">
				<a href="<?php echo base_url(); ?>user/cart" style="background-color:#007a37">CHECKOUT</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!--<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="search...">
				<input type="submit" value="">
			</form>
		</div>-->
		<!--<div class="clearfix"> </div>-->
		</div>
		<!--<div class="clearfix"> </div>-->
	</div>
		<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color11" href="<?php echo base_url(); ?>user">Home</a></li>
			<li class="grid"><a class="color11" href="<?php echo base_url(); ?>user/volumes/new_arrival">New Arrivals</a>
				
			<!--<li class="grid"><a class="color2" href="#">New Arrivals</a>-->
			<!--<li class="grid"><a class="color11" href="#">New Arrivals</a>

				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    			</div>
			</li>-->

			<?php 
			$category_res=$this->db->get_where('tbl_category',array('category_status'=>'Active'));
			foreach($category_res->result() as $category_row)
			{
				?>
				<!--<li class="grid"><a class="color6" href="#"><?php echo $category_row->category_name; ?></a>-->
				<li class="grid"><a class="color11" href="<?php echo base_url(); ?>user/catalogues/<?php echo $category_row->category_id; ?>"><?php echo $category_row->category_name; ?></a>
				<div class="megapanel">
					<div class="row">
						<?php 
						$catalogue_res=$this->db->get_where('tbl_catalogue',array('category_id'=>$category_row->category_id,'catalogue_status'=>'Active'));
						foreach($catalogue_res->result() as $catalogue_row)
						{
							?>
								<div class="col1">
									<div class="h_nav">
										<h4><a href='<?php echo base_url(); ?>user/volumes/<?php echo $catalogue_row->catalogue_id; ?>'><?php echo $catalogue_row->catalogue_name; ?></a></h4>
										<ul>
											<?php 
											$volume_res=$this->db->get_where('tbl_volume',array('catalogue_id'=>$catalogue_row->catalogue_id,'volume_status'=>'Active'));
											foreach($volume_res->result() as $volume_row)
											{
												?>
													<li><a href="<?php echo base_url(); ?>user/products/<?php echo $volume_row->volume_id; ?>"><?php echo $volume_row->volume_name; ?></a></li>
												<?php
											}
											?>
										</ul>	
									</div>							
								</div>
							<?php
						}
						?>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    			</div>
			</li>
				<?php
			}
			?>
			<li class="grid"><a class="color11">Brands</a>

				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<!--<h4>Clothing</h4>-->
								<ul>
								<?php 
								$brand_menu_list=$this->db->get("tbl_brand");
								$i=0;
								foreach ($brand_menu_list->result() as $brand_menu_row) 
								{
									if($i%5==0 && $i!=0)
									{
										echo '</ul></div></div>';
										echo '<div class="col1"><div class="h_nav"><ul>';

									}
									?>
									<li><a href="<?php echo base_url(); ?>user/volumes/brand/<?php echo $brand_menu_row->brand_id; ?>"><?php echo $brand_menu_row->brand_name; ?></a></li>
									<?php
									$i++;
								}
								?>
								</ul>	
							</div>							
						</div>
						
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    			</div>
			</li>
			<li class="grid"><a class="color11" href="#">About Us</a></li>
			<li class="grid"><a class="color11" href="<?php echo base_url(); ?>user/contact">Contact Us</a></li>
				
			<!--<li class="grid"><a class="color2" href="#">new arrivals</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			<li><a class="color4" href="#">TUXEDO</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
				<li><a class="color5" href="#">SWEATER</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color6" href="#">SHOES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color7" href="#">GLASSES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color8" href="#">T-SHIRT</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color9" href="#">WATCHES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>-->
		 </ul> 
	</div>
</div>

<style type="text/css">
#loginBox ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 90px;
    background-color: #f1f1f1;
}

#loginBox li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
#loginBox li a:hover {
    background-color: #555;
    color: white;
}
</style>