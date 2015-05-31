<?php
include_once "load.php";


							if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="payment_pv"))
							{
							include_once ABSPATH."/inc/winnet_system.class.php";
							$wm =new Winnet_System();
						 
							$wm->process_payment_pv();
							}
							else
							{
							
							}
 
 
 
 ?>