<?php require ("header.php"); ?>
					

<?php
if(!isset($_REQUEST['q']))
							{

?>							<!-- BEGIN DASHBOARD STATS -->
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light blue-soft" href="#">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								 1349
							</div>
							<div class="desc">
								 New Feedbacks
							</div>
						</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light red-soft" href="#">
						<div class="visual">
							<i class="fa fa-trophy"></i>
						</div>
						<div class="details">
							<div class="number">
								 12,5M$
							</div>
							<div class="desc">
								 Total Profit
							</div>
						</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light green-soft" href="#">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								 549
							</div>
							<div class="desc">
								 New Orders
							</div>
						</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light purple-soft" href="#">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number">
								 +89%
							</div>
							<div class="desc">
								 Brand Popularity
							</div>
						</div>
						</a>
					</div>
				</div>
				<!-- END DASHBOARD STATS -->
				<div class="clearfix">
				</div>
				
				
				<div class="row">
					<div class="col-md-6 col-sm-6">
						
						
					<?php 
					 global $notification;
			 					$notification->print_top_timline_block($_SESSION['user_name'],10);
					
					?>
						
						
					</div>
					<div class="col-md-6 col-sm-6">
						 <?php 
				 
			$notification->print_top_notification_block($_SESSION['user_name'],10);
					
					?>
					</div>
				</div>
				<?php
				}
				
				?>
				 
							<?php 
							
							
                            
							if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="personal_info"))
							{
							include_once ABSPATH."/inc/winnet_member.class.php";
							$wm =new Winnet_Member();
							$wm->user_name=$_SESSION['user_name'];
							$wm->portfolio_tabs();
							}
							
							else if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="feed"))
							{
							include_once ABSPATH."/inc/winnet_notification.class.php";
							$wn=new Winnet_Notification();
							$wn->print_Details_Feed($_REQUEST['id']);
					 
							}
							
							
							
							else if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="cart"))
							{	
							 echo "<img src='assets/global/img/custom/loading-new.gif' />";
							include_once ABSPATH."/inc/winnet_invoice.class.php";
							$wi =new Winnet_Invoice();
							
							$wi-> generate_invoice($_REQUEST['voucher_id'],$_SESSION['user_name']) ;
							
							// print_r ($_REQUEST);  
						 	echo "<meta http-equiv='refresh' content='0; url=admin.php?q=invoices' />";
							}
							
							else if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="checkout"))
							{	
							  print_r ($_REQUEST);;
							 
							 //echo "<img src='assets/global/img/custom/loading-new.gif' />";
							
							include_once ABSPATH."/inc/winnet_invoice.class.php";
							$wi =new Winnet_Invoice();
							
							include_once ABSPATH."/inc/winnet_member.class.php";
							$wm =new Winnet_Member();
						
						    if($wm->verify_master_password($_SESSION['user_name'],$_REQUEST['master_password']))
							{
							$wi->generate_voucher($_REQUEST) ;
							echo "<meta http-equiv='refresh' content='0; url=admin.php?q=voucher_central#' />";
							}
							else
							{
						 	echo "<img src='assets/global/img/custom/loading-new.gif' />";
							echo "<script>alert('Either your master password is not set yet or it is incorrect. Please set your master password'); </script>";
						 	echo "<meta http-equiv='refresh' content='0; url=admin.php?q=invoices' />";
							}



		
							
							}
							else if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="invoices"))
							{	
							include_once ABSPATH."/inc/winnet_invoice.class.php";
							$wi =new Winnet_Invoice();
							$wi->print_invoices($_SESSION['user_name']);
							//print_r ($_REQUEST);  
							}
							
							
							else	if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="transaction"))
							{
							include_once ABSPATH."/inc/winnet_transaction.class.php";
							$wm =new Winnet_Transaction();
							
							$wm->print_transactions();
							}
							else	if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="voucher_central"))
							{
							include_once ABSPATH."/inc/winnet_voucher.class.php";
							$wv =new Winnet_Voucher();
							
							$wv->print_purchased_voucher();
							}
							
							else	if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="volume_points_history"))
							{
							include_once ABSPATH."/inc/winnet_transaction.class.php";
							$wm =new Winnet_Transaction();
							
							$wm->print_transactions($_SESSION['user_name']);
							}
							else	if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="binary"))
							{
							include_once ABSPATH."/inc/winnet_system.class.php";
							$wm =new Winnet_System();
							
							$member_id=isset($_REQUEST['member_id'])?$_REQUEST['member_id']:"WCN10000000001";
						  
							$wm->print_binary_tree($member_id);
                             
							}
							
							
							else	if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="asign_to_tree"))
							{
							include_once ABSPATH."/inc/winnet_system.class.php";
							$ws =new Winnet_System();
							 
						  
							 $ws->print_Asign_Form($_SESSION['user_name']) ;
                             
							
							 
							}
							
							else if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="register"))
							{
							include_once ABSPATH."/inc/winnet_member.class.php";
							$wm =new Winnet_Member();
							
							$wm->basic_info_form();
							}
							else if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="payment_details"))
							{
							include_once ABSPATH."/inc/winnet_payment_details.class.php";
							$wp =new Winnet_Payment();
							$wp->user_name=$_SESSION['user_name'];
							$wp->payment_details_tabs();
							}
							
							else if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="request_withdraw"))
							{
							include_once ABSPATH."/inc/winnet_payment_details.class.php";
							$wp =new Winnet_Payment();
							$wp->user_name=$_SESSION['user_name'];
							$wp->widthdraw_form();
							}
							
							else if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="process_widthdraw"))
							{
								include_once ABSPATH."/inc/winnet_payment_details.class.php";
							$wp =new Winnet_Payment();
							$wp->user_name=$_SESSION['user_name'];
							$wp->submit_withdraw($_REQUEST);
							 
							 
							
							}
							
							
							
							else if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="vouchers"))
							{
							include_once ABSPATH."/inc/winnet_voucher.class.php";
							$wv=new Winnet_Voucher();
							$wv->voucher_tabs();
							}
							
							else if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="timeline"))
							{
							include_once ABSPATH."/inc/winnet_notification.class.php";
							$wn=new Winnet_Notification();
							$wn->show_feed_timeline($_SESSION['user_name']);
					 
							}
							
							
								
							
							
							
							else if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="notifications"))
							{
							include_once ABSPATH."/inc/winnet_notification.class.php";
							$wn=new Winnet_Notification();
							$wn->print_notifications($_SESSION['user_name']);
							}
							
							else if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="logout"))
							{	
							ob_start() ;
							//session_start(); //to ensure you are using same session
							session_destroy(); //destroy the session
							echo "<meta http-equiv='refresh' content='0; url=index.php?q=login' />";
							}

							else if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="view_advertising"))
							{	
							 echo "<img src='assets/global/img/custom/loading-new.gif' />";
							  
						 	echo "<meta http-equiv='refresh' content='0; url=http://globocupon.com/adds/' />";
							}
							
							
							else
							{
								 
					  
							}
							 
							?>
							
					 
<?php include "footer.php";  ?>