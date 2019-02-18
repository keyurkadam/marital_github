<div class="foot-top">
	<div class="container">
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h5>follow us on</h5>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a target="_blank" href="<?php echo $facebook_url; ?>"><i class="facebok"> </i></a></li>
						<li><a target="_blank" href="<?php echo $twitter_url; ?>"><i class="twiter"> </i></a></li>
						<li><a target="_blank" href="<?php echo $google_plus_url; ?>"><i class="goog"> </i></a></li>
						<li><a target="_blank" href="<?php echo $instagram_url; ?>"><i class="be"> </i></a></li>
						<li><a target="_blank" href="<?php echo $pinterest_url; ?>"><i class="pp"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
			</li>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 s-c">
			<div class="stay">
						<!--<div class="stay-left">
							<form>
								<input type="text" placeholder="Enter your email to join our newsletter" required="">
							</form>
						</div>
						<div class="btn-1">
							<form>
								<input type="submit" style="background:#007a37" value="join">
							</form>
						</div>-->
							<div class="clearfix"> </div>
			</div>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 cust">
			<h4>CUSTOMER CARE</h4>
				<li><a href="#">Help Center</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="buy.html">How To Buy</a></li>
				<li><a href="#">Delivery</a></li>
		</div>
		<div class="col-md-2 abt">
			<h4>ABOUT US</h4>
				<li><a href="#">Our Stories</a></li>
				<li><a href="#">Press</a></li>
				<li><a href="#">Career</a></li>
				<li><a href="contact.html">Contact</a></li>
		</div>
		<div class="col-md-2 myac">
			<h4>MY ACCOUNT</h4>
				<li><a href="<?php echo base_url(); ?>user/register">Register</a></li>
				<li><a href="<?php echo base_url(); ?>user/cart">My Cart</a></li>
				<li><a href="<?php echo base_url(); ?>user/order">Order History</a></li>
		</div>
		<div class="col-md-5 our-st">
			<div class="our-left">
				<h4>OUR STORES</h4>
			</div>
			<!--<div class="our-left1">
				<div class="cr_btn">
					<a href="#">SOLO</a>
				</div>
			</div>
			<div class="our-left1">
				<div class="cr_btn1">
					<a href="#">BOGOR</a>
				</div>
			</div>-->
			<div class="clearfix"> </div>
				<li><i class="add"> </i><?php echo $settings_address; ?></li>
				<li><i class="phone"> </i><?php echo $settings_phone; ?></li>
				<li><a href="mailto:<?php echo $settings_email; ?>"><i class="mail"> </i><?php echo $settings_email; ?></a></li>
			
		</div>
		<div class="clearfix"> </div>
			<!--<p>Copyrights © 2015 Gretong. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>-->
			<p>Copyrights © 2017 Gajanand Sarees All rights reserved | Developed by <a href="http://www.gouptechnologies.com" target="_blank">GoUp Technologies</a>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>

<script type="text/javascript">
            var controller = "user_ajax/add_to_cart";
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

    function add_to_cart(add_action,volume_id)
    {       
        var strURL=base_url+controller+"/"+add_action+"/"+volume_id;
        //alert(strURL);
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("simpleCart_quantity").innerHTML=req.responseText;                       
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    function wishlist_add(action,id)
    {       
        var strURL=base_url+"user_ajax/wishlist_add"+"/"+action+"/"+id;
        //alert(strURL);
        //alert("Added");
        //alert(strURL);
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        //document.getElementById("simpleCart_quantity").innerHTML=req.responseText;                       
                        if(req.responseText=="1")
                        {
                        	window.location=base_url+"user/register";
                        }
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    function change_currency(currency)
    {
    	var strURL=base_url+"user_ajax/change_currency"+"/"+currency;
    	//alert(strURL);
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    	//alert(req.responseText);                      
                        //document.getElementById("simpleCart_quantity").innerHTML=req.responseText;                       
                        //alert(req.responseText);
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


<!-- FLY TO CART -->

<!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
<!-- original working
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
-->
<script  src="<?php echo base_url(); ?>template/user/js/jquery-ui.min.js"></script>
    <script  src="<?php echo base_url(); ?>template/fly/index.js"></script>
<!-- FLY TO CART END -->

<style type="text/css">
.catalogue_name
{
	text-shadow: 0 0 3px #000000, 0 0 5px #000000;
	position: absolute;
	bottom: 98px;
	left: 42px;
	text-align: center;
}
.catalogue_price
{

	text-shadow: 0 0 3px #000000, 0 0 5px #000000;
	position: absolute;
	bottom: 68px;
	left: 42px;
	text-align: center;
}
.whole_cart
{
	cursor:pointer;
	position: absolute;
	bottom: 32px;
	left: 42px;
	text-align: center;text-transform: capitalize;
	display: inline-block;
	padding: 6px 16px;
	font-size: 0.8725em;
	font-weight: 300;
	color: #f9f9f9;
	border: 1px solid #f9f9f9;
	background: none;
	/*background: #ff6978;*/
	background: #b3261f;
	/*border: 1px solid #ff6978;*/
	border: 1px solid #b3261f;*/
	
	text-decoration: none;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;cursor:pointer
}
.whole_cart:hover
{
	text-decoration: none;
	background: #ff6978;
	border: 1px solid #ff6978;
	border: 1px solid #f9f9f9;
	background: #007a37;
	color:white;
}
</style>

<style type="text/css">
.home_cart_btn
{
	text-transform: capitalize;
display: inline-block;
padding: 6px 16px;
font-size: 0.8725em;
font-weight: 300;
color: #f9f9f9;
border: 1px solid #f9f9f9;
background: none;
background: #b3261f;
border: 1px solid #b3261f;
text-decoration: none;
-webkit-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;cursor:pointer;
/*background: url('../template/user/images/art.png') no-repeat 0px 1px;*/
}
.home_cart_btn:hover{
	text-decoration: none;
	background: #007a37;
	color: #f9f9f9;
	border: 1px solid #f9f9f9;
}
</style>

<style type="text/css">
    .fix{
    position:fixed;
    bottom:10%;
    left:0%;
    }
    .item
    {
    	height:560px;
    }
</style>
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
	?>
	<a target="_blank" href="https://api.whatsapp.com/send?phone=918238923571"  data-action="share/whatsapp/share" >
		<img src="<?php echo base_url(); ?>template/user/images/whatsapp.png" width="48px"  class="fix"/>
	</a>
	<?php
}
else
{
	?>
	<a target="_blank" href="https://web.whatsapp.com/send?phone=918238923571"  data-action="share/whatsapp/share" >
		<img src="<?php echo base_url(); ?>template/user/images/whatsapp.png" width="48px"  class="fix"/>
	</a>
	<?php

}
?>



 <!--<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->
 <img src="<?php echo base_url(); ?>template/user/images/top.png" onclick="topFunction()" id="myBtn" title="Go to top" width="45px">
 <style type="text/css">
 #myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    /*background-color: red; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 4px; /* Some padding */
    border-radius: 50px; /* Rounded corners */
}

#myBtn:hover {
    /*background-color: #555; /* Add a dark-grey background on hover */
    background-color: #b3261f; /* Add a dark-grey background on hover */
}
 </style>
<script type="text/javascript">
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 
</script>

<style type="text/css">
	body
	{
		background-image: url('<?php echo base_url(); ?>files/user/back.png');background-repeat: repeat;
	}
	.arriv-middle
	{
		/*border: 1px solid #e9e9e9;margin-right:5px;*/
		border: 1px solid #e9e9e9;
		max-width:385px;
	}
</style>
