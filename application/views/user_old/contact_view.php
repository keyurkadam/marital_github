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
<div class="main">
<div class="contact">				
					<div class="contact_info">
						<h2>get in touch</h2>
			    	 		<div class="map">
					   			<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424396.3176723366!2d150.92243255000002!3d-33.7969235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1430912648478" width="100%" height="250" frameborder="0" style="border:0"></iframe>-->
					   			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.9834126032997!2d72.84020841493539!3d21.192817885909825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e50f9421f6b%3A0x12e079f59262e3c6!2sShree+Vankar+Textile+Market!5e0!3m2!1sen!2sin!4v1513745532478" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					   		</div>
      				</div>
				  <div class="contact-form">
			 	  	 	<h2>Contact Us</h2>
			 	 	    <form method="post" action="#">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Mobile</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Subject</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="" value="Submit us"></span>
						  </div>
					    </form>
				    </div>
  				<div class="clearfix"></div>		
			  </div>
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

