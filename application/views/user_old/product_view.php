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
		<div style="float:left">
			<div class="crt-btn">
				<a style="cursor:pointer" href="<?php echo base_url(); ?>user/download_images/<?php echo $volu_id; ?>">Download All Images</a>
			</div>
						
		</div>
		<div style="float:right">
			<div class="crt-btn">
							<!--<a href="<?php echo base_url(); ?>user/add_to_cart/volume/<?php echo $volu_id; ?>">Add Whole Catalogue To Cart</a>-->
								
							<a style="cursor:pointer"  onclick="add_to_cart('volume',<?php echo $volu_id; ?>);">Add Whole Catalogue To Cart</a>
						</div>
		</div>


		<?php 
		$volume_product_res = $this->db->get_where("tbl_volume_product",array("volume_product_status"=>'Active',"volume_id"=>$volu_id));
				$total_volume_products = $volume_product_res->num_rows();

		$records_per_page=4;
		$this->db->limit($records_per_page);
		$volume_product_res2 = $this->db->get_where("tbl_volume_product",array("volume_product_status"=>'Active',"volume_id"=>$volu_id));

				
		?>
		<!--<h3><?php echo $volu_name; ?><label style="font-size:16px"><?php echo "2 Design(s)"; ?></label></h3>-->
		<center><h3 style="font-family: 'Playfair Display', serif;
font-size: 1.5em;
border: 1px solid #007a37;
text-align: center;
padding: 0.5em;
margin: 0 auto;
width: 50%;
color: #007a37;"><?php echo $volu_name; ?></h3><label  style="font-size:15px" ?><?php echo $total_volume_products; ?> Design(s) </center>

			<div class="specia-top" id="page_div">
				<ul class="grid_2">
					<?php 
					
					$cnt=0;
					foreach($volume_product_res2->result() as $volume_product_row)
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
							<center>
								<div class="item special-info grid_1 simpleCart_shelfItem">
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
									<div class="item_add"><span class="item_price"><h6>
									<!--Rs. <?php //echo $volume_product_row->volume_product_price; ?>-->
									<?php echo $_SESSION["currency_symbol"]; ?> 
										<?php 
											$product_price = ($volume_product_row->volume_product_price)*$_SESSION["exchange_rate"]; 
											echo round($product_price,0);
									?>
									</h6></span></div>
						            <a class="add-to-cart home_cart_btn" type="button" onclick="add_to_cart('product',<?php echo $volume_product_row->volume_product_id; ?>);" >Add to cart</a>
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
</div>

<?php 
include_once('footer.php');
?>
</body>
</html>
<input type="hidden" id='txt_page_no' name='txt_page_no' value="0">
<input type="hidden" id='txt_flag' name='txt_flag' value="0">
<script>
$(window).scroll(function() {
   //if($(window).scrollTop() + $(window).height() > $(document).height()-20) {
   	if($(window).scrollTop() + $(window).height() > $(document).height()-1) {
       //alert("near bottom!");
       	if(document.getElementById('txt_flag').value=="0")
    	{
	       var starting_position=parseInt(document.getElementById('txt_page_no').value)+4;
	       document.getElementById('txt_page_no').value=starting_position;
	       get_more_product(<?php echo $volu_id; ?>,starting_position);
	   	}

   }
});
		</script>


		<script type="text/javascript">
            
    

    function get_more_product(volume_id,starting_position)
    {   
    	if(document.getElementById('txt_flag').value=="0")
    	{    
	        var strURL=base_url+"user_ajax/get_more_product"+"/"+volume_id+"/"+starting_position;
	        //alert(strURL);
	        var req = getXMLHTTP();
	        if (req) {
	            req.onreadystatechange = function() {
	                if (req.readyState == 4) {
	                    // only if "OK"
	                    if (req.status == 200) {
	                    	//alert(req.responseText);   
	                    	if(req.responseText.trim()=="")
	                    	{
	                    		document.getElementById("txt_flag").value="1";
	                    	}     
	                    	document.getElementById("page_div").innerHTML=document.getElementById("page_div").innerHTML+req.responseText;                       
	                    } else {
	                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
	                    }
	                }               
	            }           
	            req.open("GET", strURL, true);
	            req.send(null);
	            
	        }
	   	}
    }

    
</script>