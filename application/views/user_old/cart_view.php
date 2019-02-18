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

<script src="<?php echo base_url(); ?>template/js/bootstrap.min.js"></script>

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

	<div class="check">	 
			 
		 <div class="col-md-9 cart-items">
			 <h1>My Shopping Bag (<?php echo $tot_cart_product; ?>)</h1>
			 <?php 
			if(isset($msg))
			{
				echo $msg;
			}
			?>
			 <?php 
			 /*$this->db->join('tbl_volume','tbl_cart.volume_id=tbl_volume.volume_id','left outer');
			 $this->db->join('tbl_volume_product','tbl_cart.volume_product_id=tbl_volume_product.volume_product_id','left outer');
			 
			 $cart_res=$this->db->get_where('tbl_carts',array('tbl_cart.cart_session'=>$sid));
			 */
			 $cart_query ="SELECT `tbl_cart`.`volume_product_id`,`tbl_cart`.`volume_id`,`tbl_cart`.`cart_qty`,
			 `tbl_volume`.`volume_name`,`tbl_volume`.`volume_image`,`tbl_volume`.`volume_price`,
			 `tbl_volume_product`.`volume_product_name`,`tbl_volume_product`.`volume_product_image`,`tbl_volume_product`.`volume_product_price`
			 FROM (`tbl_cart`)
LEFT OUTER JOIN `tbl_volume` ON `tbl_cart`.`volume_id` = `tbl_volume`.`volume_id`
LEFT OUTER JOIN `tbl_volume_product` ON `tbl_cart`.`volume_product_id` = `tbl_volume_product`.`volume_product_id`
WHERE `tbl_cart`.`cart_session` = '".$sid."'";
			
			$cart_res=$this->db->query($cart_query);
			 foreach($cart_res->result() as $cart_row)
			 {
			 	
			 	if($cart_row->volume_id!=0)
			 	{
			 		$vol_pro_res=$this->db->get_where('tbl_volume_product',array("volume_id"=>$cart_row->volume_id));
			 		$vol_pro_count=$vol_pro_res->num_rows();
			 	?>
				 <div class="cart-header">
					 <a href="<?php echo base_url(); ?>user/remove_cart/volume/<?php echo $cart_row->volume_id; ?>"><div class="close1"></div></a>
					 <div class="cart-sec simpleCart_shelfItem">
							<div class="cart-item cyc">
								 <img style="max-height:120px;max-width:80px" src="<?php echo base_url(); ?>files/admin/volume/thumb/<?php echo $cart_row->volume_image; ?>" class="img-responsive" alt=""/>
							</div>
						   <div class="cart-item-info">
							<h3><a href="#"><?php echo $cart_row->volume_name; ?> (Full Catalogue)</a> - <?php echo $vol_pro_count." Designs"; ?>
							<!--<span>Model No: 3578</span>--></h3>
							<ul class="qty">
								<!--<li><p>Size : 5</p></li>-->
								<li><p>Qty of Catalogue : <input type='text' value="<?php echo $cart_row->cart_qty; ?>" size="5" onblur="changeqty('volume','<?php echo $cart_row->volume_id; ?>',this.value)" ></p></li>
								<div class="delivery" style="float:right">
									 <p>Total Quantity : <?php echo ($vol_pro_count*$cart_row->cart_qty); ?></p>
									 <!--<span>Delivered in 2-3 bussiness days</span>
									 <div class="clearfix"></div>-->
						        </div>	
							</ul>
							<!--<span>Total Quantity : <?php echo ($vol_pro_count*$cart_row->cart_qty); ?></span>-->
							
							<!--<div class="delivery">
								 <p>Total Quantity : <?php echo ($vol_pro_count*$cart_row->cart_qty); ?></p>
								 <span>Delivered in 2-3 bussiness days</span>
								 <div class="clearfix"></div>
					        </div>	-->
						   </div>
						   <div class="clearfix"></div>
												
					  </div>
				 </div>
				 <?php
			 	}
			 	else if($cart_row->volume_product_id!=0)
			 	{
			 		$this->db->join('tbl_volume','tbl_volume_product.volume_id=tbl_volume.volume_id');
			 		$this->db->join('tbl_catalogue','tbl_volume.catalogue_id=tbl_catalogue.catalogue_id');
			 		
			 		$return_data_row = $this->db->get_where('tbl_volume_product',array("volume_product_id"=>$cart_row->volume_product_id))->result();

			 		$return_data_row[0]->catalogue_name;
			 		$return_data_row[0]->volume_name;

			 	?>
			 	<div class="cart-header">
					 <a href="<?php echo base_url(); ?>user/remove_cart/product/<?php echo $cart_row->volume_product_id; ?>"><div class="close1"></div></a>
					 <div class="cart-sec simpleCart_shelfItem">
							<div class="cart-item cyc">
								 <img style="max-height:120px;max-width:80px" src="<?php echo base_url(); ?>files/admin/product/thumb/<?php echo $cart_row->volume_product_image; ?>" class="img-responsive" alt=""/>
							</div>
						   <div class="cart-item-info">
							<h3><a href="#"><?php echo $cart_row->volume_product_name; ?></a>
							<!--<span>Model No: 3578</span>--></h3>
							<ul class="qty">
								<li><span>Catalogue : <?php echo $return_data_row[0]->catalogue_name; ?></span></li>
								<li><span>Volume : <?php echo $return_data_row[0]->volume_name; ?></span></li>
								<br>
								
								<li style="padding-top:7px"><p>Qty of Single Unit : <input type='text' value="<?php echo $cart_row->cart_qty; ?>" size="5"  onblur="changeqty('product','<?php echo $cart_row->volume_product_id; ?>',this.value)" ></p></li>
								<div class="delivery" style="float:right">
									 <p>Total Quantity : <?php echo $cart_row->cart_qty; ?></p>
									 <!--<span>Delivered in 2-3 bussiness days</span>
									 <div class="clearfix"></div>-->
						        </div>	
							</ul>
							<!--<span>Total Quantity : <?php echo ($vol_pro_count*$cart_row->cart_qty); ?></span>-->
							<!--
							<div class="delivery" style="float:right">
								 <p>Total Quantity : <?php echo $cart_row->cart_qty; ?></p>
								 <span>Delivered in 2-3 bussiness days</span>
								 <div class="clearfix"></div>
					        </div>	-->
						   </div>
						   <div class="clearfix"></div>
												
					  </div>
				 </div>
			 	
			 	<?php
			 	}
			 }
			 ?>
				<!--<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			 <div class="cart-header">
				 <div class="close1"> </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="<?php echo base_url(); ?>template/user/images/8.jpg" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
						<ul class="qty">
							<li><p>Size : 5</p></li>
							<li><p>Qty : 1</p></li>
						</ul>
						
							 <div class="delivery">
							 <p>Service Charges : Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>
			 <div class="cart-header2">
				 <div class="close2"> </div>
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="<?php echo base_url(); ?>template/user/images/11.jpg" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
						<ul class="qty">
							<li><p>Size : 5</p></li>
							<li><p>Qty : 1</p></li>
						</ul>
							 <div class="delivery">
							 <p>Service Charges : Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			  </div>	-->	
		 </div>
		 <div class="col-md-3 cart-total">
			 <a class="continue" style="background:#007a37"  href="<?php echo base_url(); ?>user">Continue to Shopping</a>
			 <!--<div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1">6200.00</span>
				 <span>Discount</span>
				 <span class="total1">---</span>
				 <span>Delivery Charges</span>
				 <span class="total1">150.00</span>
				 <div class="clearfix"></div>				 
			 </div>-->
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL UNIT</h4></li>	
			   <li class="last_price"><span><?php echo $tot_cart_product; ?></span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 <a class="order" style="background:#b3261f" href="#" data-toggle="modal" data-target="#myModal">Place Order</a>
			 <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

			 <!--<div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>-->
			</div>
		
			<div class="clearfix"> </div>
	 </div>
	 </div>

<?php 
include_once('footer.php');
?>
</body>
</html>
<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="border-bottom: 0px solid #e5e5e5;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Place Order</h4>
      </div>
      <div class="modal-body" style="padding: 0px 0px 0px 20px;">
        			<div class="contact-form">
			 	  	 	<!--<h2>Contact Us</h2>-->
			 	 	    <form method="post" action="<?php echo base_url(); ?>user/save_order">
			 	 	   	<div class="container col-lg-12">
			 	 	   	<br>
			 	 	    	<div class="col-lg-6">
						    	<div>
							    	<span><label>Name</label></span>
							    	<span><input name="txt_name" id="txt_name" type="text" class="textbox"></span>
							    	<input type="hidden" id="txt_user_id" name="txt_user_id" 
							    	<?php 
							    	if(isset($_SESSION["user_id"]))
							    	{
							    		echo 'value="'.$_SESSION["user_id"].'"';
							    	}

							    	?>
							    	>
							    </div>
							    <div>
							    	<span><label>GST No.</label></span>
							    	<span><input name="txt_gst_no" id="txt_gst_no" type="text" class="textbox"></span>
							    </div>
							    <div 
							    <?php if(!isset($_SESSION["user_id"]))
							    {
							    	echo "style='visibility:hidden;display:none'";
							    }
							    ?>
							    >
							    	<span><label>Agent</label></span>
							    	<span>
							    		<select class="textbox" id="cmb_agent" name="cmb_agent" style="font-family: 'Open Sans', sans-serif;
background: #FFFFFF;
border: 1px solid #E7E7E7;
color: rgba(85, 81, 81, 0.84);
padding: 8px;
display: block;
width: 96.3333%;
outline: none;
-webkit-appearance: none;
text-transform: capitalize;">
							    		<?php 
							    		$agent_res=$this->db->get("tbl_agent");
							    		foreach($agent_res->result() as $agent_row)
							    		{
							    			?>
							    			<option value="<?php echo $agent_row->agent_id; ?>"><?php echo $agent_row->agent_name; ?></option>
							    			<?php
							    		}
							    		?>
							    		</select>
							    	</span>
							    </div>
							    
							    <div>
							    	<span><label>Transport</label></span>
							    	<span><input name="txt_transport" id="txt_transport" type="text" class="textbox"></span>
							    </div>

							    <div>
							    	<span><label>Packaging</label></span>
							    	<span><label><input name="rdo_packaging" id="rdo_packaging" type="radio" value="Box" > Box</label></span>
							    	<span><label><input name="rdo_packaging" id="rdo_packaging" type="radio" value="Bag" > Bag</label></span>
							    
							    </div>
							    <div>
							    	<span><label>E-mail</label></span>
							    	<span><input name="txt_email" id="txt_email" type="text" class="textbox"></span>
							    </div>
							    <div>
							     	<span><label>Mobile</label></span>
							    	<span><input name="txt_mobile" id="txt_mobile" type="text" class="textbox"></span>
							    </div>
						    </div>
						    <div class="col-lg-6">
							    <div>
							    	<span><label>Address</label></span>
							    	<span><textarea name="txt_address" id="txt_address" > </textarea></span>
							    </div>
							    
							    <div>
							    	<span><label>Bank Details</label></span>
							    	<span>
							    		<?php 
							    		$cms_row=$this->db->get("tbl_cms")->result();
							    		echo $cms_row[0]->cms_bank_details;

							    		?>
							    	</span>
							    </div>
							    <div>
							    	<span><label>Remarks</label></span>
							    	<span><textarea name="txt_remarks" id="txt_remarks" > </textarea></span>
							    </div>
							   	
						  	</div>
						  	
						  	<div class="col-lg-12">
						  		<div>
							   		<span><input type="submit" class="" value="Place Order"></span>
							  	</div>
						  	</div>
						</div>
					    </form>
				    </div>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      </div>
    </div>

  </div>
</div>


<script type="text/javascript">
            var controller = "user_ajax/changeqty";
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

    function changeqty(action,id,qty)
    {       
        var strURL=base_url+controller+"/"+action+"/"+id+"/"+qty;
        //alert(strURL);
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                    //    document.getElementById("edit_div").innerHTML=req.responseText;                       
                    	location.reload();
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

