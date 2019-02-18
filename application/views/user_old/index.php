<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Gajanand Sarees</title>
<?php 
include_once('head_file.php');
?>
</head>
<!--<body style="background-image: url('files/user/back.png');background-repeat: repeat;">-->
<body>
<!-- header_top -->
<?php 
include_once('header_top.php');
?>
<!-- header -->
<div class="header_bg">
<?php 
//include_once('header.php');
include_once('slider_view.php');
?>
<!-- top-brands -->
		
<div class="special">
	<div class="container" style="padding-top:0px">
		<?php 
		include_once('brand_slider_view.php');
		?>
	</div>
</div>
<!-- //top-brands -->
<!-- Slider div starts here -->
<?php 
include_once('slider_view.php');
?>
	
<style type="text/css">
</style>
<!-- Slider div ends here -->
</div>



<div class="arriv">


	<div class="container">


		<div class="arriv-las">
		<?php 
		$i=1;
		$volume_featured_res = $this->db->get_where('tbl_volume',array('volume_featured'=>'Yes'));
		foreach($volume_featured_res->result() as $volume_featured_row)
		{
			if($i==1)
			{
				?>
				<div class="col-md-4 arriv-middle item">
					<a href="<?php echo base_url(); ?>user/products/<?php echo $volume_featured_row->volume_id; ?>">
						<img src="<?php echo base_url(); ?>files/admin/volume/<?php echo $volume_featured_row->volume_image; ?>" class="img-responsive" alt="" style="height:500px">
					</a>
					<h3 class="catalogue_name"><?php echo $volume_featured_row->volume_name; ?></h3>
					<h3 style="font-size:20px" class="catalogue_price">
						<!--Rs.<?php //echo $volume_featured_row->volume_price; ?>-->
						<?php echo $_SESSION["currency_symbol"]; ?> 
						<?php 
							$volume_price = ($volume_featured_row->volume_price)*$_SESSION["exchange_rate"]; 
							echo round($volume_price,0);
						?>
					</h3>
					
					<a class="add-to-cart whole_cart"  onclick="add_to_cart('volume',<?php echo $volume_featured_row->volume_id; ?>);">Add Catalogue to Cart</a>
					<a onclick="wishlist_add('volume',<?php echo $volume_featured_row->volume_id; ?>)"  class="whole_cart" style="margin-left:180px">Love It</a>
					        
				</div>
				
				<!--<div class="col-md-4 arriv-middle">
					<img src="<?php echo base_url(); ?>files/admin/volume/thumb/<?php echo $volume_featured_row->volume_image; ?>" class="img-responsive" alt="" style="height:500px">
					<div class="arriv-info3">
						<h3 style="text-shadow: 0 0 3px #000000, 0 0 5px #000000;"><?php echo $volume_featured_row->volume_name; ?></h3>
						<div class="crt-btn">
							<a href="<?php echo base_url(); ?>user/products/<?php echo $volume_featured_row->volume_id; ?>">CHECK NOW</a>
							<a onclick="wishlist_add('volume',<?php echo $volume_featured_row->volume_id; ?>)"  class="home_cart_btn">Love It</a>
					        
						</div>
					</div>
				</div>-->
				<?php
			}
			else if($i==2)
			{
				?>
				<div class="col-md-4 arriv-middle item" style="border: 1px solid #e9e9e9;margin-right:5px">
					<a href="<?php echo base_url(); ?>user/products/<?php echo $volume_featured_row->volume_id; ?>">
						<img src="<?php echo base_url(); ?>files/admin/volume/<?php echo $volume_featured_row->volume_image; ?>" class="img-responsive" alt="" style="height:500px">
					</a>
					<h3 class="catalogue_name"><?php echo $volume_featured_row->volume_name; ?></h3>
					<h3 style="font-size:20px" class="catalogue_price">
					<!--Rs.<?php //echo $volume_featured_row->volume_price; ?>-->
					<?php echo $_SESSION["currency_symbol"]; ?> 
						<?php 
							$volume_price = ($volume_featured_row->volume_price)*$_SESSION["exchange_rate"]; 
							echo round($volume_price,0);
						?>
					</h3>
					
					<a class="add-to-cart whole_cart"  onclick="add_to_cart('volume',<?php echo $volume_featured_row->volume_id; ?>);">Add Catalogue to Cart</a>
					<a onclick="wishlist_add('volume',<?php echo $volume_featured_row->volume_id; ?>)"  class="whole_cart" style="margin-left:180px">Love It</a>
					        
				</div>
				<!--<div class="col-md-4 arriv-middle">
					<img src="<?php echo base_url(); ?>files/admin/volume/thumb/<?php echo $volume_featured_row->volume_image; ?>" class="img-responsive" alt="" style="height:500px">
					<div class="arriv-info3">
						<h3 style="text-shadow: 0 0 3px #000000, 0 0 5px #000000;"><?php echo $volume_featured_row->volume_name; ?></h3>
						<div class="crt-btn">
							<a href="<?php echo base_url(); ?>user/products/<?php echo $volume_featured_row->volume_id; ?>">CHECK NOW</a>
							<a onclick="wishlist_add('volume',<?php echo $volume_featured_row->volume_id; ?>)"  class="home_cart_btn">Love It</a>
					        
						</div>
					</div>
				</div>-->
				<?php
			}
			else if($i==3)
			{
				?>
				<div class="col-md-4 arriv-middle item" style="border: 1px solid #e9e9e9;margin-right:5px">
					<a href="<?php echo base_url(); ?>user/products/<?php echo $volume_featured_row->volume_id; ?>">
						<img src="<?php echo base_url(); ?>files/admin/volume/<?php echo $volume_featured_row->volume_image; ?>" class="img-responsive" alt="" style="height:500px">
					</a>
					<h3 class="catalogue_name"><?php echo $volume_featured_row->volume_name; ?></h3>
					<h3 style="font-size:20px" class="catalogue_price">
					<?php echo $_SESSION["currency_symbol"]; ?> 
						<?php 
							$volume_price = ($volume_featured_row->volume_price)*$_SESSION["exchange_rate"]; 
							echo round($volume_price,0);
						?>
					<!--Rs.<?php //echo $volume_featured_row->volume_price; ?>-->
					</h3>
					
					<a class="add-to-cart whole_cart"  onclick="add_to_cart('volume',<?php echo $volume_featured_row->volume_id; ?>);">Add Catalogue to Cart</a>
					<a onclick="wishlist_add('volume',<?php echo $volume_featured_row->volume_id; ?>)"  class="whole_cart" style="margin-left:180px">Love It</a>
					        
				</div>
				<!--<div class="col-md-4 arriv-middle">
					<img src="<?php echo base_url(); ?>files/admin/volume/thumb/<?php echo $volume_featured_row->volume_image; ?>" class="img-responsive" alt="" style="height:500px">
					<div class="arriv-info3">
						<h3 style="text-shadow: 0 0 3px #000000, 0 0 5px #000000;"><?php echo $volume_featured_row->volume_name; ?></h3>
						<div class="crt-btn">
							<a href="<?php echo base_url(); ?>user/products/<?php echo $volume_featured_row->volume_id; ?>">CHECK NOW</a>
							<a onclick="wishlist_add('volume',<?php echo $volume_featured_row->volume_id; ?>)"  class="home_cart_btn">Love It</a>
					        
						</div>
					</div>
				</div>-->
				<div class="clearfix"> </div><br>
				<?php
				$i=0;
			}
			$i++;
		}
		?>
		</div>

			
			
			
		
	</div>
</div>
<div class="special">
	<div class="container">
		<h3 style="color:#007a37;border-color:#007a37">Special Offers</h3>
		<div class="specia-top">
			<ul class="grid_2">
				<?php 
				$volume_product_res = $this->db->get("tbl_volume_product");
				$cnt=0;
				foreach($volume_product_res->result() as $volume_product_row)
				{
					if($cnt%4==0 && $cnt!=0)
					{

					?>
					<div class="clearfix"> </div>
					</ul>
					<br>
					<ul class="grid_2">
					<?php
					}
					?>
					<!--<li >
						<a href="details.html">
						<img src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $volume_product_row->volume_product_image; ?>" class="img-responsive" alt="" style="padding: 1em 0;border: 1px solid #e9e9e9" height="515px"></a>
						<div class="special-info grid_1 simpleCart_shelfItem">
							<h5><?php echo $volume_product_row->volume_product_name; ?></h5>
							<div class="crt-btn">
								<center><a href="details.html" style="margin-top:10px">Add to Inquiry</a></center>
							</div>
						</div>
					</li>-->
					<li >
						<center>
							<div class="item special-info grid_1 simpleCart_shelfItem" >
					            <a href="<?php echo base_url(); ?>user/product_full/<?php echo $volume_product_row->volume_product_id; ?>">
						<!--<img src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $volume_product_row->volume_product_image; ?>" class="img-responsive" alt="" style="padding: 1em 0;border: 1px solid #e9e9e9" height="515px">-->
						<img src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $volume_product_row->volume_product_image; ?>" class="img-responsive" alt="" style="padding: 1em 0;border: 1px solid #e9e9e9;max-height:400px">
						</a> <h5>D. No. <?php echo $volume_product_row->volume_product_name; ?></h5>
							

					            <?php
					            /*
							if(isset($_SESSION["user_id"]))
							{
								?>
								<div class="item_add"><span class="item_price"><h6>ONLY Rs. <?php echo $volume_product_row->volume_product_price; ?></h6></span></div>
								<?php
							}
							else
							{
								?>
								<br>
								<?php
							}
							*/
							?>
								<div class="item_add"><span class="item_price">
								<!--<h6>Rs. <?php echo $volume_product_row->volume_product_price; ?></h6>-->
								<h6><!--Rs.-->
								<?php echo $_SESSION["currency_symbol"]; ?> 
								<?php 
								$price = ($volume_product_row->volume_product_price)*$_SESSION["exchange_rate"]; 
								echo round($price,0);
								?></h6>
								</span></div>
								<a class="add-to-cart home_cart_btn" type="button"  onclick="add_to_cart('product',<?php echo $volume_product_row->volume_product_id; ?>);" >Add to cart</a>
								<!--<a href="<?php echo base_url(); ?>user/wishlist_add/volume_product/<?php echo $volume_product_row->volume_product_id; ?>" class="home_cart_btn">Love It</a>-->
								<a onclick="wishlist_add('volume_product',<?php echo $volume_product_row->volume_product_id; ?>)"  class="home_cart_btn">Love It</a>
					        </div>
						</center>
						<!--<a href="<?php echo base_url(); ?>user/product_full/<?php echo $volume_product_row->volume_product_id; ?>">
						<img src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $volume_product_row->volume_product_image; ?>" class="img-responsive" alt="" style="padding: 1em 0;border: 1px solid #e9e9e9" height="515px">
						</a>
						<div class="special-info grid_1 simpleCart_shelfItem">
							<h5>D. No. <?php echo $volume_product_row->volume_product_name; ?></h5>
							<?php
							if(isset($_SESSION["user_id"]))
							{
								?>
								<div class="item_add"><span class="item_price"><h6>ONLY Rs. <?php echo $volume_product_row->volume_product_price; ?></h6></span></div>
								<?php
							}
							?>
							<div class="crt-btn">
									<a onclick="add_to_cart('product',<?php echo $volume_product_row->volume_product_id; ?>);" style="margin-top:10px;cursor:pointer">Add To Cart</a>

								
							</div>
						</div>-->
					</li>

					<?php
					$cnt++;
				}
				?>
				<!--<li>
						<a href="details.html"><img src="<?php echo base_url(); ?>template/user/images/8.jpg" class="img-responsive" alt=""></a>
						<div class="special-info grid_1 simpleCart_shelfItem">
							<h5>Lorem ipsum dolor</h5>
							<div class="item_add"><span class="item_price"><h6>ONLY $40.00</h6></span></div>
							<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
						</div>
				</li>
				<li>
						<a href="details.html"><img src="<?php echo base_url(); ?>template/user/images/9.jpg" class="img-responsive" alt=""></a>
						<div class="special-info grid_1 simpleCart_shelfItem">
							<h5>Consectetur adipis</h5>
							<div class="item_add"><span class="item_price"><h6>ONLY $60.00</h6></span></div>
							<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					</div>
				</li>
				<li>
						<a href="details.html"><img src="<?php echo base_url(); ?>template/user/images/10.jpg" class="img-responsive" alt=""></a>
						<div class="special-info grid_1 simpleCart_shelfItem">
							<h5>Commodo consequat</h5>
							<div class="item_add"><span class="item_price"><h6>ONLY $14.00</h6></span></div>
							<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					</div>
				</li>
				<li>
						<a href="details.html"><img src="<?php echo base_url(); ?>template/user/images/11.jpg" class="img-responsive" alt=""></a>
						<div class="special-info grid_1 simpleCart_shelfItem">
							<h5>Voluptate velit</h5>
							<div class="item_add"><span class="item_price"><h6>ONLY $37.00</h6></span></div>
							<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
						</div>
				</li>-->
				<div class="clearfix"> </div>
			</ul>
		</div>
	</div>
	<!-- top-brands -->
	<?php 
	include_once('brand_slider_view.php');
	?>
	<!-- //top-brands -->
</div>

<?php 
include_once('footer.php');
?>
</body>
</html>

