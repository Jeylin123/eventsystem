<!doctype html>
<html lang="en">
	 <head> 
      <meta charset = "utf-8"> 
      <title>Event System</title> 
       
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>


	
	<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

<!-- Optional theme -->
<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
	
	<!-- FullCalendar -->


	<script  src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>
<<<<<<< HEAD
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.1/fullcalendar.js"></script>
<<<<<<< HEAD

=======
>>>>>>> c5bb28e71aac7e51fd034941efe2ddbe0bbb40dd
=======
	<script  src="<?php echo base_url(); ?>assets/js/fullcalendar.js"></script>
	
	<!-- Bootstrap Core CSS -->
    
	
	<!-- FullCalendar -->
	<link href="<?php echo base_url();?>assets/css/fullcalendar.css" rel="stylesheet" />
>>>>>>> parent of c5bb28e... Fixed by adding js and css from internet links
    
         
   </head>
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


	            </ul>
	    	</div>
		</div>


	 