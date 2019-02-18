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
<link rel="stylesheet" href="<?php echo base_url(); ?>template/user/css/etalage.css">
<script src="<?php echo base_url(); ?>template/user/js/jquery.etalage.min.js"></script>

		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

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



<div class="container">
<div class="women_main">
	<!-- start content -->
			<?php 
			foreach($product_data_res->result() as $product_data_row)
			{
				?>
				<div class="row single">
					<div class="col-md-9 det">
					  <div class="single_left">
						<div class="grid images_3_of_2">
							<ul id="etalage">
								<li>
									<a href="optionallink.html">
										<img class="etalage_thumb_image" src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $product_data_row->volume_product_image; ?>" class="img-responsive" />
										<img class="etalage_source_image" src="<?php echo base_url(); ?>files/admin/product/<?php echo $product_data_row->volume_product_image; ?>" class="img-responsive" title="" />
									</a>
								</li>
								<?php 
								$extra_image_res=$this->db->get_where('tbl_volume_product_image',array("volume_product_id"=>$product_data_row->volume_product_id));
								foreach ($extra_image_res->result() as $extra_image_row) 
								{
									# code...
									?>
									<li>
									<a href="optionallink.html">
										<img class="etalage_thumb_image" src="<?php echo base_url(); ?>files/admin/product/med/<?php echo $extra_image_row->volume_product_image; ?>" class="img-responsive" />
										<img class="etalage_source_image" src="<?php echo base_url(); ?>files/admin/product/<?php echo $extra_image_row->volume_product_image; ?>" class="img-responsive" title="" />
									</a>
									</li>
									<?php
								}
								?>
								<!--<li>
									<img class="etalage_thumb_image" src="<?php echo base_url(); ?>template/user/images/d2.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="<?php echo base_url(); ?>template/user/images/d2.jpg" class="img-responsive" title="" />
								</li>
								<li>
									<img class="etalage_thumb_image" src="<?php echo base_url(); ?>template/user/images/d3.jpg" class="img-responsive"  />
									<img class="etalage_source_image" src="<?php echo base_url(); ?>template/user/images/d3.jpg"class="img-responsive"  />
								</li>
							    <li>
									<img class="etalage_thumb_image" src="<?php echo base_url(); ?>template/user/images/d4.jpg" class="img-responsive"  />
									<img class="etalage_source_image" src="<?php echo base_url(); ?>template/user/images/d4.jpg"class="img-responsive"  />
								</li>-->
							</ul>
							 <div class="clearfix"></div>		
					  </div>
					  <div class="desc1 span_3_of_2">
						<h3><?php echo $product_data_row->volume_product_name; ?></h3>
						<span class="brand">Fabric: <a href="#"><?php echo $product_data_row->volume_product_fabric; ?></a></span>

						<br>
						<span class="code">Product Code: Product 11</span>
						<!--<p>when an unknown printer took a galley of type and scrambled it to make</p>-->
							<div class="price">
								<span class="text">Price:</span>
								<span class="price-new">$110.00</span><span class="price-old">$100.00</span> 
								<span class="price-tax">Ex Tax: $90.00</span><br>
								<span class="points"><small>Price in reward points: 400</small></span><br>
							</div>
						<!--<div class="det_nav1">
							<h4>Select a size :</h4>
								<div class=" sky-form col col-4">
									<ul>
										<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L</label></li>
										<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>S</label></li>
										<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>M</label></li>
										<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>XL</label></li>
									</ul>
								</div>
						</div>-->
						<div class="btn_form">
							<!--<a href="checkout.html">Add To Cart</a>-->
							<a class="add-to-cart home_cart_btn" type="button"  onclick="add_to_cart('product',<?php echo $product_data_row->volume_product_id; ?>);" >Add to cart</a>
								
						</div>
						<!--<a href="#"><span>login to save in wishlist </span></a>-->
						
				   	 </div>
	          	    <div class="clearfix"></div>
	          	   </div>
	          	    <div class="single-bottom1">
						<h6>Details</h6>
						<p class="prod-desc">
							<?php echo $product_data_row->volume_product_description; ?>
						</p>
					</div>
					<!--<div class="single-bottom2">
						<h6>Related Products</h6>
							<div class="product">
							   <div class="product-desc">
									<div class="product-img">
			                           <img src="images/w8.jpg" class="img-responsive " alt=""/>
			                       </div>
			                       <div class="prod1-desc">
			                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
			                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
								   </div>
								  <div class="clearfix"></div>
						      </div>
							  <div class="product_price">
									<span class="price-access">$597.51</span>								
									<button class="button1"><span>Add to cart</span></button>
			                  </div>
							 <div class="clearfix"></div>
					     </div>
					     <div class="product">
							   <div class="product-desc">
									<div class="product-img">
			                           <img src="images/w10.jpg" class="img-responsive " alt=""/>
			                       </div>
			                       <div class="prod1-desc">
			                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
			                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
								   </div>
								   <div class="clearfix"></div>
						      </div>
							  <div class="product_price">
									<span class="price-access">$597.51</span>								
									<button class="button1"><span>Add to cart</span></button>
			                  </div>
							 <div class="clearfix"></div>
					     </div>
			   	  	</div>-->
		       	</div>
				<?php 
			}
			?>	
	<!--<div class="col-md-3">
	  <div class="w_sidebar">
		<div class="w_nav1">
			<h4>All</h4>
			<ul>
				<li><a href="women.html">women</a></li>
				<li><a href="#">new arrivals</a></li>
				<li><a href="#">trends</a></li>
				<li><a href="#">boys</a></li>
				<li><a href="#">girls</a></li>
				<li><a href="#">sale</a></li>
			</ul>	
		</div>
		<h3>filter by</h3>
		<section  class="sky-form">
					<h4>catogories</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>kurtas</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>kutis</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>churidar kurta</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>salwar</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>printed sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>	
							</div>
						</div>
		</section>
		<section  class="sky-form">
					<h4>brand</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>vishud</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>amari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>																								
							</div>
						</div>
		</section>
		<section class="sky-form">
			<h4>colour</h4>
			<ul class="w_nav2">
				<li><a class="color1" href="#"></a></li>
				<li><a class="color2" href="#"></a></li>
				<li><a class="color3" href="#"></a></li>
				<li><a class="color4" href="#"></a></li>
				<li><a class="color5" href="#"></a></li>
				<li><a class="color6" href="#"></a></li>
				<li><a class="color7" href="#"></a></li>
				<li><a class="color8" href="#"></a></li>
				<li><a class="color9" href="#"></a></li>
				<li><a class="color10" href="#"></a></li>
				<li><a class="color12" href="#"></a></li>
				<li><a class="color13" href="#"></a></li>
				<li><a class="color14" href="#"></a></li>
				<li><a class="color15" href="#"></a></li>
				<li><a class="color5" href="#"></a></li>
				<li><a class="color6" href="#"></a></li>
				<li><a class="color7" href="#"></a></li>
				<li><a class="color8" href="#"></a></li>
				<li><a class="color9" href="#"></a></li>
				<li><a class="color10" href="#"></a></li>
			</ul>
		</section>
		<section class="sky-form">
						<h4>discount</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
							</div>
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
							</div>
						</div>						
		</section>
	</div>-->
   </div>
		   <div class="clearfix"></div>		
	  </div>
	<!-- end content -->
</div>
</div>
<?php 
include_once('footer.php');
?>
</body>
</html>

