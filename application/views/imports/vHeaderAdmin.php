<?php if ($this->session->userdata('userSession')) { ?>
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Admin ES</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/jcAssets/css/corecss.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/jcAssets/css/bootstrap-4.0.0-beta-dist/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/jcAssets/font-awesome-4.7.0/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/jcAssets/js/Chart.js')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/jcAssets/js/Chart.min.js')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/jcAssets/js/Chart.bundle.js')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/jcAssets/js/Chart.bundle.min.js')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/jcAssets/js/Chart.Bar.js')?>">
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js"></script>
  </head>

<?php } else {
        redirect('cLogin/userLogin');
    }
?>
