<?php if ($this->session->userdata('userSession')) { ?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Event System | Home page</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link href="<?php echo base_url('assets/nikkiAssets/css/normalize.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/css/font-awesome.min.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/css/fontello.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/fonts/icon-7-stroke/css/helper.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/css/animate.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/css/bootstrap-select.min.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/css/icheck.min_all.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/css/price-range.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/css/owl.carousel.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/css/owl.theme.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/css/owl.transitions.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/css/style.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/css/normalize.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/nikkiAssets/css/responsive.css')?>" rel="stylesheet" />
</head>

<?php } else {
        redirect('cLogin/userLogin');
    }
?>
