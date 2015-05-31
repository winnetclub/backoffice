<?php
include_once "header-open-fullwidth.php";

	     
						
							if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="register"))
							{
							include_once ABSPATH."/inc/winnet_member.class.php";
							$wm =new Winnet_Member();
						 
							$wm->basic_info_form();
							}
							else 	if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="forget_password"))
							{
							include_once ABSPATH."/inc/winnet_member.class.php";
							$wm =new Winnet_Member();
						 
							$wm->forget_password_form();
							}
							
							else 	if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="new_user_payment_method_selection"))
							{
							include_once ABSPATH."/inc/winnet_payment_details.class.php";
							$wp =new Winnet_Payment();
						 
							$wp->new_user_payment_method_selection_form();
							}
							
							
							
							else 	if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="new_user_send_to_paypal"))
							{
							include_once ABSPATH."/inc/winnet_paypal.class.php";
							$wp =new Winnet_Paypal();
						 
							$wp->send_to_paypal();
							}
							
								else 	if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="paypal_payment_success"))
							{
							include_once ABSPATH."/inc/winnet_paypal.class.php";
							$wp =new Winnet_Paypal();
						 
							$wp->paypal_payment_success();
							}
							
							
								else 	if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="paypal_payment_cancel"))
							{
							include_once ABSPATH."/inc/winnet_paypal.class.php";
							$wp =new Winnet_Paypal();
						 
							$wp->paypal_payment_cancel();
							}
							
								else 	if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="paypal_payment_ipn"))
							{
							include_once ABSPATH."/inc/winnet_paypal.class.php";
							$wp =new Winnet_Paypal();
						 
							$wp->paypal_payment_ipn();
							}
							
							
							else
							{
							include_once ABSPATH."/inc/winnet_member.class.php";
							$wm =new Winnet_Member();
						 
							$wm->login_form("member");
							}
							
							
							
							// process payment paypal start
							
							
							
							// process payment paypal end here
							
 
include_once "footer-open.php";
?>