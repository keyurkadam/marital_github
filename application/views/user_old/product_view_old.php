<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Vimala Prints Pvt. Ltd.</title>
<?php 
include_once('head_file.php');
?>
</head>
<body>
<!-- header_top -->
<?php 
include_once('header_top.php');
?>
<!-- header -->
<div class="header_bg">
<?php 
include_once('header.php');
?>
<!-- Slider div starts here -->
<?php 
//include_once('slider_view.php');
?>
<!-- Slider div ends here -->
</div>




<div class="special">
	<div class="container">
		<div style="float:right">
			<div class="crt-btn">
							<!--<a href="<?php echo base_url(); ?>user/add_to_cart/volume/<?php echo $volu_id; ?>">Add Whole Catalogue To Cart</a>-->
							<a style="cursor:pointer" onclick="add_to_cart('volume',<?php echo $volu_id; ?>);">Add Whole Catalogue To Cart</a>
						</div>
		</div>
		<?php 
		$volume_product_res = $this->db->get_where("tbl_volume_product",array("volume_product_status"=>'Active',"volume_id"=>$volu_id));
				$total_volume_products = $volume_product_res->num_rows();
				
		?>
		<!--<h3><?php echo $volu_name; ?><label style="font-size:16px"><?php echo "2 Design(s)"; ?></label></h3>-->
		<center><h3 style="font-family: 'Playfair Display', serif;
font-size: 1.5em;
border: 1px solid #e5e4e2;
text-align: center;
padding: 0.5em;
margin: 0 auto;
width: 50%;
color: #3f3d3d;"><?php echo $volu_name; ?></h3><label  style="font-size:15px" ?><?php echo $total_volume_products; ?> Design(s) </center>
		
		<div class="specia-top">
			<ul class="grid_2">
				<?php 
				
				$cnt=0;
				foreach($volume_product_res->result() as $volume_product_row)
				{
					if($cnt%4==0)
					{

					?>
					<div class="clearfix"> </div>
					</ul>
					<br>
					<ul class="grid_2">
					<?php
					}
					?>
					<li >
						<a href="<?php echo base_url(); ?>user/product_full/<?php echo $volume_product_row->volume_product_id; ?>">
						<img src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $volume_product_row->volume_product_image; ?>" class="img-responsive" alt="" style="padding: 1em 0;border: 1px solid #e9e9e9" height="515px"></a>
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
							<!--<div class="item_add"><span class="item_price"><a href="#">Add to Inquiry</a></span></div>-->
							<div class="crt-btn">
								<center>
									<!--<a href="<?php echo base_url(); ?>user/add_to_cart/product/<?php echo $volume_product_row->volume_product_id; ?>" style="margin-top:10px">Add To Cart</a>-->
									<a  onclick="add_to_cart('product',<?php echo $volume_product_row->volume_product_id; ?>);" style="margin-top:10px;cursor:pointer">Add To Cart</a>
								</center>
							</div>
							<!--<div class="crt-btn">
								<center><a href="<?php echo base_url(); ?>user/product_full/<?php echo $volume_product_row->volume_product_id; ?>" style="margin-top:10px">View Large</a></center>
							</div>-->
						</div>
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
</div>

<?php 
include_once('footer.php');
?>
</body>
</html>

