<style type="text/css">
	/*--top-brands--*/
#flexiselDemo1{
	display: none;
}
.nbs-flexisel-container {
	position: relative;
	max-width: 100%;
}
.nbs-flexisel-ul {
	position: relative;
	width: 9999px;
	margin: 0px;
	padding: 0px;
	list-style-type: none;
	text-align: center;
}
.nbs-flexisel-inner {
	overflow: hidden;
	margin: 0px auto;
}
.nbs-flexisel-item {
	float: left;
	margin:0;
	padding: 0 15px;
	position: relative;
	line-height: 0px;
}
.nbs-flexisel-item > img {
	cursor: pointer;
	position: relative;
	width:54%;
	margin:0 auto;
}

.nbs-flexisel-nav-left, .nbs-flexisel-nav-right {
    width: 25px;
    height: 40px;
    position: absolute;
    cursor: pointer;
    z-index: 100;
    margin-top: 0em;
}
.nbs-flexisel-nav-left {
    left: 0;
    background: url("<?php echo base_url(); ?>template/user/brand_slider/img-sprite.png") no-repeat 5px center;
    background-color:#007a37;
}
.nbs-flexisel-nav-right { 
	right: 0%;
    background: url("<?php echo base_url(); ?>template/user/brand_slider/img-sprite.png") no-repeat -20px center;
    background-color: #007a37;
}

/*--//top-brands--*/


</style>
<!-- css -->
<!--<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />-->
<!--// css -->
</head>


<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<!--<h3 style="color:#007a37;border-color:#007a37;margin-bottom:8px">Top Brands</h3>-->
			<!--<br>-->
			<div class="sliderfig" style="background:#ffffff;padding-top:15px;padding-bottom:10px;border:1px solid #e5e4e2">
				<ul id="flexiselDemo1" >		
					<?php 
					$logo_slider_res=$this->db->get("tbl_brand");
					foreach($logo_slider_res->result() as $logo_slider_row)
					{
						?>
						<a href="<?php echo base_url(); ?>user/volumes/brand/<?php echo $logo_slider_row->brand_id; ?>">
						<li>
							<!--<a href="<?php echo base_url(); ?>user/volumes/brand/<?php echo $logo_slider_row->brand_id; ?>">-->
							<img style="padding-top:20px;" src="<?php echo base_url(); ?>files/admin/brand/thumb/<?php echo $logo_slider_row->brand_logo; ?>" alt=" " class="img-responsive" />
							<!--</a>-->
						</li>
						</a>
						<?php
					}
					?>	
					
				</ul>
			</div>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="<?php echo base_url(); ?>template/user/js/jquery.flexisel.js"></script>
		</div>
	</div>
<!-- //top-brands -->