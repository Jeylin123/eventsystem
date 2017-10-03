<?php if ($this->session->userdata('userSession')) { ?>
<!doctype html>
<html lang="en">
<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
<body>
	    <div class="sidebar">
	    	<div class="sidebar-wrapper">
				<ul class="nav">
				  <li id = "dash">
	                    <a href="<?php echo site_url();?>/cLogin/viewDashBoard">
	                         <i class="material-icons"></i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>

	                <li id = "admin">
	                   <a href="<?php echo site_url();?>/admin/cAdmin">
	                         <i class="fa fa-users"></i>
			        			Admin
			        	</a>
	                </li>

	                <li id = "cal">
	                     <a href="<?php echo site_url();?>/calendar/cCalendar">
	                        <i class="fa fa-book "></i>
	                        Calendar
	                    </a>
	                </li>
	                <li id = "fin">
	                    <a href="<?php echo site_url();?>/finance/cFinance">
	                       <i class="fa fa-location-arrow"></i>
	                        Finance
	                    </a>
	                </li>
	                <li id = "rep">
	                    <a href="<?php echo site_url();?>/reports/cReports">
	                       <i class="fa fa-location-arrow"></i>
	                        Report
	                    </a>
	                </li>
					<li id = "sec">
	                    <a href="<?php echo site_url();?>/security/cSecurity">
	                       <i class="fa fa-location-arrow"></i>
	                        Security
	                    </a>
	                </li>
					<li id = "user">
	                    <a href="<?php echo site_url();?>/user/cUser">
	                       <i class="fa fa-location-arrow"></i>
	                        User
	                    </a>
	                </li>
	                <li id = "user">
	                    <a href="<?php echo site_url();?>/cLogin/userLogout">
	                       <i class="fa fa-location-arrow"></i>
	                        Logout
	                    </a>
	                </li>


	            </ul>
	    	</div>
		</div>


	 <?php } else {
		redirect('cLogin/userLogin');
	}
?>