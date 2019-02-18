<?php 
session_start();
mysql_connect("localhost","root","");
mysql_select_db("vimaladb");

$name="Sandip Shirawala";

$date ="10/10/2017";
$agent = "Amit Patel";
$transporter="Anjani Couriers";

?>
<style type="text/css">

body
{
	color:#e52b2e;
	
}
#billtable td
{
	border-left:0.5px solid #e52b2e;
	border-right:0.5px solid #e52b2e;
	border-bottom:1px solid #e52b2e;
	padding-left:5px;
}
</style>

<center>
<table style="border:2px solid #e52b2e" width="100%">

	<tr>
		<td>
			<center>
				<table width="100%">
					<tr>
						<td align="left"><strong>Subject to SURAT Jurisdiction</strong></td>
						<td><strong>ORDER FORM</strong></td>
						<td align="right"><strong>Ph:2335489,2322841<br>Mobile : 93747 13270</strong></td>
					</tr>
				</table>
			</center>
		</td>
	</tr>
	<tr>
		<td>
			<center><img src='logo/logo.jpg' width="262px"><strong><label style="font-size:30px">PRINTS Pvt. Ltd.</label></strong></center>
		</td>

	</tr>
	<tr>
		<td >
			<center><strong>O-1266,Surat Textile Market, Ring Road, Surat - 395002</strong></center>
		</td>
	</tr>
	<tr>
		<td style="border:2px solid #e52b2e;">
			<table width="100%">
				<tr>
					<td>
						<table>
							<tr>
								<td><strong>To M/s,</strong>
								</td>
								<td>	
									<table>
										<tr>
											<td><label style='text-decoration:underline;'><?php echo $name; ?></label>______________________________________________________________________
											</td>
										</tr>
										<tr>
											<td>____________________________________________________________________________________
											</td>
										</tr>
										<tr>
											<td>____________________________________________________________________________________
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
					<td>
						<table>
							<tr>
								<td><strong>Date</strong></td>
								<td style="text-decoration:underline"><?php echo $date; ?></td>
							</tr>
							<tr>
								<td><strong>Agent</strong></td>
								<td style="text-decoration:underline"><?php echo $agent; ?></td>
							</tr>
							<tr>
								<td><strong>Trans.</strong></td>
								<td style="text-decoration:underline"><?php echo $transporter; ?></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<table style="width:100%" cellspacing="0" cellpadding="0" id="billtable">
				<tr style="color:white;background-color:#e52b2e">
					<th><center>Sr. No.</center></th>
					<th><center>Quality</center></th>
					<th><center>Quantity</center></th>
					<th><center>Rate (Rs.)</center></th>
					<th><center>Total</center></th>
					<th><center>Remarks</center></th>
				</tr>
				<?php 
				//$sid = session_id();
				$sid = "q1vc8bgbaaun0bgstr9snuv4s4";
				$cart_query ="SELECT `tbl_cart`.`volume_product_id`,`tbl_cart`.`volume_id`,`tbl_cart`.`cart_qty`,
			 `tbl_volume`.`volume_name`,`tbl_volume`.`volume_image`,`tbl_volume`.`volume_price`,
			 `tbl_volume_product`.`volume_product_name`,`tbl_volume_product`.`volume_product_image`,`tbl_volume_product`.`volume_product_price`
			 FROM (`tbl_cart`)
LEFT OUTER JOIN `tbl_volume` ON `tbl_cart`.`volume_id` = `tbl_volume`.`volume_id`
LEFT OUTER JOIN `tbl_volume_product` ON `tbl_cart`.`volume_product_id` = `tbl_volume_product`.`volume_product_id`
WHERE `tbl_cart`.`cart_session` = '".$sid."'";
				//echo $cart_query;

				$resultset=mysql_query($cart_query);
				$i=1;
				while($row=mysql_fetch_assoc($resultset))
				{
					extract($row);
					?>
					<tr>
						<td width="5%"><?php echo $i; ?></td>
						<td>
							<?php 
							if($volume_id!=0)
			 				{
			 					echo $volume_name. " (Bale)";
			 				}
			 				else if($volume_product_id!=0)
			 				{
			 					echo "D. No - ".$volume_product_name;
			 				}
							?>
						</td>
						<td align="right" style="padding-right:5px"><?php echo $cart_qty; ?></td>
						<td align="right" style="padding-right:5px">
							<?php
							if($volume_id!=0)
			 				{
			 					echo $volume_price;
			 				}
			 				else if($volume_product_id!=0)
			 				{
			 					echo $volume_product_price;
			 				}
							?>
						</td>
						<td align="right" style="padding-right:5px"><?php
							if($volume_id!=0)
			 				{
			 					echo $volume_price*$cart_qty;
			 				}
			 				else if($volume_product_id!=0)
			 				{
			 					echo $volume_product_price*$cart_qty;
			 				}
							?>
						</td>
						<td></td>
					</tr>	
					<?php
					$i++;
				}
				if($i<=7)
				{
					for($cnt=$i;$cnt<=7;$cnt++)
					{
					?>
					<tr>
						<td width="5%">&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<?php
					}
				}
				?>
				<!--<tr>
					<td width="5%" ></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr><tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr><tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr><tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr><tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr><tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>-->

			</table>
		</td>
	</tr>
	<tr>
		<td>	
		<strong>NOTE</strong> : _____________________________________________________________________________________________________________
		</td>

	</tr>
	<tr>
		<td>	
		____________________________________________________________________________________________________________________
		</td>

	</tr>
	<tr>
		<td>	
		____________________________________________________________________________________________________________________
		</td>

	</tr>
	
	<tr>
		<td>
			<table>
				<tr>
					<td>
				<strong>TERMS & CONDITIONS : </strong> (1) The goods are despatched according to your orders. (2) Crossed Payee A/c. Bank-Drafts should sent in the payment of our  
					</td>
				</tr>
				<tr>
					<td>
						dues. be (3) The order is Subject to SURAT Juridiction only. (4) The terms under/which order was received are not have by reposed and are demand to be
			
					</td>
				</tr>
				<tr>
					<td>
						 accepted to you. (5) No rebate will be allowed at the time of clearing the account of remaining the amount. (6) Nothing in oral can revoke or modify any of terms
					</td>
				</tr>
				<tr>
					<td>
						
			
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<table>
				<tr>
					<td style="width:50%;padding-top:40px">
						<table>
							<tr>
								<td>
								--------------------------------------------------------------
								</td>
								
							</tr>
							<tr>
								<td>
								Buyer's Signature
								</td>
							</tr>
						</table>
					</td>
					<td style="width:50%;padding-left:200px;padding-top:40px" >
						<table>
							<tr>
								<td>
								--------------------------------------------------------------
								</td>
								
							</tr>
							<tr>
								<td>
								Booked By
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</center>