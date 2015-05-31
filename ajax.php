<?php
include_once "protect.php";
include_once "load.php";
if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="invoice_detail"))
							{
							include_once ABSPATH."/inc/winnet_invoice.class.php";
							$wi =new Winnet_Invoice();
							 
							$wi->invoice_detail($_REQUEST['invoice_id']);
}
 
?>