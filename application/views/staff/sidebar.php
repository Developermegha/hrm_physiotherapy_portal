
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<!--<img src="" class="img-circle user-img-circle"
											alt="User Image" />-->
									</div>
									<div class="pull-left info">
										<p> <?php echo $this->session->userdata('staffname'); ?> </p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url('')?>staff/profile" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Profile</span> <span class="arrow"></span>
								</a>
                               
							</li> 
							<li class="nav-item <?php if(!empty($notice_sidebar)){ echo "active open"; }?>">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">notes</i>
									<span class="title">Notices</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?php echo base_url(); ?>staff/all_notice_general" class="nav-link "> <span class="title">General
												Notice</span>
										</a>
									</li>
									<!-- <li class="nav-item">
										<a href="<?php echo base_url(); ?>staff/all_notice_specific" class="nav-link "> <span class="title">Specific
												Notice</span>
										</a>
									</li>									 -->
								</ul>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url()?>staff/payroll" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title"> Payroll Management </span> <span class="arrow"></span>
								</a>
                               
							</li> 
							<li class="nav-item">
								<a href="<?php echo base_url()?>staff/all_leave" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Leave Management </span> <span class="arrow"></span>
								</a>
                               
							</li> 
							
						</ul>
					</div>
				</div>
			</div>