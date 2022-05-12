<div class="page-header navbar navbar-fixed-top">
   <div class="page-header-inner ">
      <!-- logo start -->
      <div class="page-logo">
         <a href="<?php echo base_url('staff'); ?>">
             <img src="<?php echo base_url(); ?>assets/img/logo.png" style="width: 190px; margin-left: -20px;">
          </a>
      </div>
      <!-- logo end -->
      <ul class="nav navbar-nav navbar-left in">
         <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
      </ul>
      <!-- start mobile menu -->
      <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
         data-target=".navbar-collapse">
      <span></span>
      </a>
      <!-- end mobile menu -->
      <!-- start header menu -->
      <div class="top-menu">
         <ul class="nav navbar-nav pull-right">
            <li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
            <li class="dropdown dropdown-user">
               <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true">
               <img alt="" class="img-circle " src="<?php echo base_url(); ?>assets/img/dp.jpg" />
               <span class="username username-hide-on-mobile"> <?php echo $this->session->userdata('staffname'); ?> </span>
               <i class="fa fa-angle-down"></i>
               </a>
               <ul class="dropdown-menu dropdown-menu-default">
                  <li>
                     <a href="user_profile.html">
                     <i class="icon-user"></i> Profile </a>
                  </li>
                  <!--<li>
                     <a href="#">
                     <i class="icon-settings"></i> Settings
                     </a>
                  </li>
                  <li>
                     <a href="#">
                     <i class="icon-directions"></i> Help
                     </a>
                  </li>
                  <li class="divider"> </li>
                  <li>
                     <a href="lock_screen.html">
                     <i class="icon-lock"></i> Lock
                     </a>
                  </li>-->
                  <li>
                     <a href="<?php echo base_url('staff/logout'); ?>">
                     <i class="icon-logout"></i> Log Out </a>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </div>
</div>