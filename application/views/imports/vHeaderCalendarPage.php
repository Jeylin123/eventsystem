<?php if ($this->session->userdata('userSession')) { ?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Event System | Calendar</title>
  
    <script src="<?php echo base_url('assets/jsKyleAssets/jquery.js')?>" rel="stylesheet" /> </script>
    <link href="<?php echo base_url('assets/cssKyleAssets/bootstrap.min.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/cssKyleAssets/fullcalendar.css')?>" rel="stylesheet" />

    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    #calendar {
        max-width: 800px;
    }
    .col-centered{
        float: none;
        margin: 0 auto;
    }
    </style>

</head>

<?php } else {
        redirect('cLogin/userLogin');
    }
?>
