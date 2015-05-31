<?php 
include_once "protect.php";
include_once "load.php";
 ?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>WinNetClub - All in your hands [<?php echo $_SESSION['user_name'] ; ?>] | Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="Susheel Kumar @ WinnetClub" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="/assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<style>

#user-btn p {
    height: 50px;
}
#user-btn {
    padding: 20px;
}

.refer_link
{
	  display: block;
    float: left;
    line-height: 46px;
	
  
}

.refer_link a 
{
color:white; 

}
</style>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="secure.php">
			<img width="50%" src="/assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a> <div class="refer_link"> <?php 
						include_once ABSPATH."/inc/winnet_member.class.php";
							$wm =new Winnet_Member();
							$wm->user_name=$_SESSION['user_name'];
						 $wm->refer_link(); 
						 $member_details= $wm->getmemberDetails();
					 
				 
						 ?></div>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				
				
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				
				
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
			
			
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
			
			
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				
				
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu page-sidebar-menu-light" data-keep-expanded="true" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
			<?php /*	<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li> */ ?>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
			<li class="sidebar-search-wrapper">
			
	<div id="user-btn">
  
 <p>
					<img alt="" class="img-circle" src="/assets/admin/layout/img/Chief.png" style="float:left">
			
   <span> <span style="color:white;font-size:22px">	Nick </span> <br>
          
			 	<a href="/secure.php?q=personal_info">
								<i class="icon-user"></i>  </a>
							
							
								<a href="/secure.php?q=logout">
								<i class="icon-key"></i>  </a> 
								
   </span>
  </p>

  
				</div>		

				
				
							
				</li>	
					

		 
				
				
				
				
				<li>
					<a href="/secure.php">
					<i class="icon-basket"></i>
					<span class="title">Dashboard</span>
					<span class="arrow "></span>
					</a>
					 
				</li>
				
				<li>
					<a href="/secure.php?q=vouchers">
					<i class="icon-basket"></i>
					<span class="title">Store</span>
					<span class="arrow "></span>
					</a>
					 
				</li>
				
				<li>
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title">Voucher Central</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="secure.php?q=voucher_central">
							<i class="icon-home"></i>
							Voucher Central</a>
						</li>
						 
					</ul>
				</li>
				
				
				
				<li>
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title">My System</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="secure.php?q=binary">
							<i class="icon-home"></i>
							Binary</a>
						</li>
						 <li>
							<a href="secure.php?q=unilevel">
							<i class="icon-home"></i>
							Unilevel</a>
						</li>
					</ul>
				</li>
				
				
				 <li>
						<a href="javascript:;">
						<i class="icon-puzzle"></i>
						<span class="title">Advertising</span>
						<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="secure.php?q=view_advertising">
							View 	Advertising</a>
							</li>
							<li>
								<a href="secure.php?q=history">
								History</a>
							</li>
							 
						</ul>
					</li>
					
						<li>
						<a href="javascript:;">
						<i class="icon-puzzle "></i>
						<span class="title">Reports	</span>
						<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="secure.php?q=pv_report">
							Volume Points History</a>
							</li>
						 
							 <li>
								<a href="secure.php?q=sells_income">
							Income by Sells</a>
							</li>
						</ul>
					</li>
					
					
					<li>
						<a href="javascript:;">
						<i class="icon-settings"></i>
						<span class="title">Financial </span>
						<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="secure.php?q=balance">
								My Balance</a>
							</li>
							<li>
								<a href="secure.php?q=request_withdraw">
								Request Withdraw </a>
							</li>
							<li>
								<a href="secure.php?q=invoices">
							Invoice Manager</a>
							</li>
							
							
						</ul>
					</li>
					
					
					
					<li>
						<a href="javascript:;">
						<i class="icon-briefcase"></i>
						<span class="title">Support</span>
						<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="http://backoffice.winnetclub.ec/helpdesk/">
								Tickets</a>
							</li>
						
						
						</ul>
					</li>
					
					
					
					<li>
						<a href="javascript:;">
						<i class="icon-briefcase"></i>
						<span class="title">Configuration</span>
						<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="secure.php?q=personal_info">
								Personal Info</a>
							</li>
							<li>
								<a href="secure.php?q=payment_details">
								Payment Details</a>
							</li>
							 <li>
								<a href="secure.php?q=marketing_strategy">
								 Marketing Strategy</a>
							</li>
							 
						</ul>
					</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	
	
	
		<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">