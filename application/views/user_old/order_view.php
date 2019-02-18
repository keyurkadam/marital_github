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
			 
		 <div class="col-md-12 cart-items">
		 <?php 
		 $this->db->order_by("order_id", "asc");
		 $this->db->join("tbl_agent","tbl_order.order_agent=tbl_agent.agent_id","left outer");
       	 $order_list_res=$this->db->get_where('tbl_order',array("user_id"=>$_SESSION["user_id"]));
        	      
		 ?>
			 <h1>My Orders (<?php echo $order_list_res->num_rows(); ?>)</h1>
			 <table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Invoice No.</th>
			        <th>Name</th>
			        <th>Agent</th>
			        <th>Amount</th>
			        <th>Transporter</th>
			        <th>Status</th>
			      </tr>
			    </thead>
			    <tbody>
			      <?php 
			      foreach($order_list_res->result() as $order_list_row)
        	      {
        	      	?>
        	      	<tr>
        	      		<td width="10%"><a style='text-decoration:underline' href='<?php echo base_url(); ?>user/order_full/<?php echo $order_list_row->order_id; ?>'><?php echo $order_list_row->order_id; ?></a></td>
        	      		<td><?php echo $order_list_row->order_name; ?></td>
        	      		<td><?php echo $order_list_row->agent_name; ?></td>
        	      		<td><?php echo $order_list_row->order_amount; ?></td>
        	      		<td><?php echo $order_list_row->order_transport; ?></td>
        	      		<td><?php echo $order_list_row->order_status; ?></td>
        	      	</tr>
        	      	<?php
        	      }
			      ?>
			    </tbody>
			  </table>
			 <?php 
			if(isset($msg))
			{
				echo $msg;
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

