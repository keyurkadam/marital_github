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


<div class="arriv">
	<div class="container">
	<br>
		<center><h3 style="font-family: 'Playfair Display', serif;
font-size: 1.5em;
border: 1px solid #007a37;
text-align: center;
padding: 0.5em;
margin: 0 auto;
width: 50%;
color: #007a37;">
		<?php 
		if($volume_by=="new_arrival")
		{
			echo "New Arrival"; 	
		}
		elseif($volume_by=="brand")
		{
			
			$brand_name_res=$this->db->get_where('tbl_brand',array('brand_id'=>$br_id));
			$brand_name_row=$brand_name_res->result();
			echo $brand_name_row[0]->brand_name." Brand";
		}
		else
		{
			echo $catal_name; 
		}
		?> Catalogues</h3></center>
		<br>
		<div class="arriv-las" id="page_div">
		<?php 
		$i=1;

		$records_per_page=3;
        $this->db->limit($records_per_page);

		if($volume_by=="new_arrival")
		{
			$volume_res = $this->db->get_where('tbl_volume',array('volume_new_arrival'=>'Yes'));
		}
		elseif($volume_by=="brand")
		{
			$volume_res = $this->db->get_where('tbl_volume',array('brand_id'=>$br_id,'volume_status'=>'Active'));
		}
		else
		{
			$volume_res = $this->db->get_where('tbl_volume',array('catalogue_id'=>$catal_id,'volume_status'=>'Active'));
		}
		?>
		<?php 

		foreach($volume_res->result() as $volume_row)
		{
			?>
			<?php
			if($i==1)
			{
				?>
				<div class="col-md-4 arriv-middle item">
					<a href="<?php echo base_url(); ?>user/products/<?php echo $volume_row->volume_id; ?>">
						<img src="<?php echo base_url(); ?>files/admin/volume/<?php echo $volume_row->volume_image; ?>" class="img-responsive" alt="" style="height:500px">
					</a>
					<h3 class="catalogue_name"><?php echo $volume_row->volume_name; ?></h3>
					<h3 style="font-size:20px" class="catalogue_price">
					<!--Rs.<?php //echo $volume_row->volume_price; ?>-->
					<?php echo $_SESSION["currency_symbol"]; ?> 
						<?php 
							$volume_price = ($volume_row->volume_price)*$_SESSION["exchange_rate"]; 
							echo round($volume_price,0);
					?>
					</h3>
					
					<a class="add-to-cart whole_cart"  onclick="add_to_cart('volume',<?php echo $volume_row->volume_id; ?>);">Add Catalogue to Cart</a>
					<a onclick="wishlist_add('volume',<?php echo $volume_row->volume_id; ?>)"  class="whole_cart" style="margin-left:220px">Love It</a>
					        
				</div>
				<?php
			}
			else if($i==2)
			{
				?>
				<div class="col-md-4 arriv-middle item">
					<a href="<?php echo base_url(); ?>user/products/<?php echo $volume_row->volume_id; ?>">
						<img src="<?php echo base_url(); ?>files/admin/volume/<?php echo $volume_row->volume_image; ?>" class="img-responsive" alt="" style="height:500px">
					</a>
					<h3 class="catalogue_name"><?php echo $volume_row->volume_name; ?></h3>
					<h3 style="font-size:20px" class="catalogue_price">
					<!--Rs.<?php //echo $volume_row->volume_price; ?>-->
					<?php echo $_SESSION["currency_symbol"]; ?> 
						<?php 
							$volume_price = ($volume_row->volume_price)*$_SESSION["exchange_rate"]; 
							echo round($volume_price,0);
					?>
					</h3>
					<a class="add-to-cart whole_cart"  onclick="add_to_cart('volume',<?php echo $volume_row->volume_id; ?>);">Add Catalogue to Cart</a>
					<a onclick="wishlist_add('volume',<?php echo $volume_row->volume_id; ?>)"  class="whole_cart" style="margin-left:220px">Love It</a>
					
				</div>
				<?php
			}
			else if($i==3)
			{
				?>
				<div class="col-md-4 arriv-middle item">
					<a href="<?php echo base_url(); ?>user/products/<?php echo $volume_row->volume_id; ?>">
						<img src="<?php echo base_url(); ?>files/admin/volume/<?php echo $volume_row->volume_image; ?>" class="img-responsive" alt="" style="height:500px">
					</a>
					<h3 class="catalogue_name"><?php echo $volume_row->volume_name; ?></h3>
					<h3 style="font-size:20px" class="catalogue_price">
					<!--Rs.<?php //echo $volume_row->volume_price; ?>-->
					<?php echo $_SESSION["currency_symbol"]; ?> 
						<?php 
							$volume_price = ($volume_row->volume_price)*$_SESSION["exchange_rate"]; 
							echo round($volume_price,0);
					?>
					</h3>
					<a class="add-to-cart whole_cart"  onclick="add_to_cart('volume',<?php echo $volume_row->volume_id; ?>);">Add Catalogue to Cart</a>
					<a onclick="wishlist_add('volume',<?php echo $volume_row->volume_id; ?>)"  class="whole_cart" style="margin-left:220px">Love It</a>
					
				</div>
				<div class="clearfix"> </div><br>
				<?php
				$i=0;
			}
			?>
			<?php 
			$i++;
		}
		?>
		</div>

			
			
			
		
	</div>
</div>
<br>

<?php 
include_once('footer.php');
?>
</body>
</html>

<input type="hidden" id='txt_page_no' name='txt_page_no' value="0">
<input type="hidden" id='txt_flag' name='txt_flag' value="0">
<script>
//alert("helo");
$(window).scroll(function() {

   //if($(window).scrollTop() + $(window).height() > $(document).height()-20) {
   	if($(window).scrollTop() + $(window).height() > $(document).height()-1) {
       //alert("near bottom!");
       	if(document.getElementById('txt_flag').value=="0")
    	{
	       var starting_position=parseInt(document.getElementById('txt_page_no').value)+3;
	       document.getElementById('txt_page_no').value=starting_position;

	        get_more_volume(<?php if(isset($catal_id))
	        	{
	        		echo $catal_id;
	        	}
	        	else
	        	{	
	        		echo "0"; 
	    		} 
	    		?>,starting_position);
	   	}

   }
});
		</script>


		<script type="text/javascript">
            
    

    function get_more_volume(catalogue_id,starting_position)
    {   
    	if(document.getElementById('txt_flag').value=="0")
    	{    
	        var strURL=base_url+"user_ajax/get_more_volume"+"/"+catalogue_id+"/"+starting_position+"/"+"<?php echo $volume_by; ?>"+"/"+"<?php echo $br_id; ?>";
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




