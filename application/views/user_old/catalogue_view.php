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
		<center>
		<!--<h3 style="font-family: 'Playfair Display', serif;
font-size: 1.5em;
border: 1px solid #e5e4e2;
text-align: center;
padding: 0.5em;
margin: 0 auto;
width: 21%;
color: #3f3d3d;">-->
<h3 style="font-family: 'Playfair Display', serif;
font-size: 1.5em;
border: 1px solid #007a37;
text-align: center;
padding: 0.5em;
margin: 0 auto;
width: 21%;
color: #007a37;"><?php echo $cat_name; ?> Catalogues</h3></center>
		<br>
		<div class="arriv-las" id="page_div">
		<?php 
		$i=1;

		$records_per_page=3;
		$this->db->limit($records_per_page);

		$catalogue_res = $this->db->get_where('tbl_catalogue',array('category_id'=>$cat_id,'catalogue_status'=>'Active'));
		foreach($catalogue_res->result() as $catalogue_row)
		{
			if($i==1)
			{
				?>
				<div class="col-md-4 arriv-middle">
					<a href="<?php echo base_url(); ?>user/volumes/<?php echo $catalogue_row->catalogue_id; ?>">
						<img src="<?php echo base_url(); ?>files/admin/catalogue/thumb/<?php echo $catalogue_row->catalogue_image; ?>" class="img-responsive" alt="" style="height:500px">
					</a>
					<div class="arriv-info3">
						<h3 style="text-shadow: 0 0 3px #000000, 0 0 5px #000000;"><?php echo $catalogue_row->catalogue_name; ?></h3>
						<div class="crt-btn">
							<a href="<?php echo base_url(); ?>user/volumes/<?php echo $catalogue_row->catalogue_id; ?>">CHECK CATALOG</a>
						</div>
					</div>
				</div>
				<?php
			}
			else if($i==2)
			{
				?>
				<div class="col-md-4 arriv-middle">
					<a href="<?php echo base_url(); ?>user/volumes/<?php echo $catalogue_row->catalogue_id; ?>">
						<img src="<?php echo base_url(); ?>files/admin/catalogue/thumb/<?php echo $catalogue_row->catalogue_image; ?>" class="img-responsive" alt="" style="height:500px">
					</a>
					<div class="arriv-info3">
						<h3 style="text-shadow: 0 0 3px #000000, 0 0 5px #000000;"><?php echo $catalogue_row->catalogue_name; ?></h3>
						<div class="crt-btn">
							<a href="<?php echo base_url(); ?>user/volumes/<?php echo $catalogue_row->catalogue_id; ?>">CHECK CATALOG</a>
						</div>
					</div>
				</div>
				<?php
			}
			else if($i==3)
			{
				?>
				<div class="col-md-4 arriv-middle">
					<a href="<?php echo base_url(); ?>user/volumes/<?php echo $catalogue_row->catalogue_id; ?>">
						<img src="<?php echo base_url(); ?>files/admin/catalogue/thumb/<?php echo $catalogue_row->catalogue_image; ?>" class="img-responsive" alt="" style="height:500px">
					</a>
					<div class="arriv-info3">
						<h3 style="text-shadow: 0 0 3px #000000, 0 0 5px #000000;"><?php echo $catalogue_row->catalogue_name; ?></h3>
						<div class="crt-btn">
							<a href="<?php echo base_url(); ?>user/volumes/<?php echo $catalogue_row->catalogue_id; ?>">CHECK CATALOG</a>
						</div>
					</div>
				</div>
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

	        get_more_catalogue(<?php echo $cat_id; ?>,starting_position);
	   	}

   }
});
		</script>


		<script type="text/javascript">
            
    

    function get_more_catalogue(category_id,starting_position)
    {   
    	if(document.getElementById('txt_flag').value=="0")
    	{    
	        var strURL=base_url+"user_ajax/get_more_catalogue"+"/"+category_id+"/"+starting_position;
	       // alert(strURL);
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

