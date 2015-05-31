<?php require ("header.php"); ?>

				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
					 
						<!-- Begin: life time stats -->
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-basket font-green-sharp"></i>
									<span class="caption-subject font-green-sharp bold uppercase">Order Listing</span>
									<span class="caption-helper">manage orders...</span>
								</div>
								<div class="actions">
									
									
									<div class="btn-group">
										<a class="btn btn-default btn-circle" href="#" data-toggle="dropdown">
										<i class="fa fa-share"></i>
										<span class="hidden-480">
										Tools </span>
										<i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="#">
												Export to Excel </a>
											</li>
											<li>
												<a href="#">
												Export to CSV </a>
											</li>
											<li>
												<a href="#">
												Export to XML </a>
											</li>
										 
											 
										</ul>
									</div>
								</div>
							</div>
							
							<?php 
							
							
                            if(isset($_REQUEST['q'])&& ($_REQUEST['q']=="register"))
							{
							include_once ABSPATH."/inc/winnet_member.class.php";
							$wm =new Winnet_Member();
							
							$wm->basic_info_form( );
							}
							 
							?>
							
							
							
						 
							
							
							
							
							
						</div>
						<!-- End: life time stats -->
					</div>
				</div>
<?php include "footer.php";  ?>