<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/wow.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">TaskLister</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if($this->uri->segment(1) == "projects" or $this->uri->segment(2) == "register"): ?>
          <li><a href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a></li>
          <?php if($this->session->userdata('logged_in')): ?>
            <li class="active"><a href="<?php echo base_url(); ?>projects">Projects<span class="sr-only">(current)</span></a></li>
          <?php else: ?>
            <li class="active"><a href="<?php echo base_url(); ?>users/register">Register<span class="sr-only">(current)</span></a></li>	
          <?php endif; ?>
        <?php else: ?>
          <li class="active"><a href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a></li>
          <?php if($this->session->userdata('logged_in')): ?>
            <li><a href="<?php echo base_url(); ?>projects">Projects<span class="sr-only">(current)</span></a></li>
          <?php else: ?>
            <li><a href="<?php echo base_url(); ?>users/register">Register<span class="sr-only">(current)</span></a></li> 
          <?php endif; ?>
        <?php endif; ?>  
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <?php if($this->session->userdata('logged_in')): ?>
            <li><a href="<?php echo base_url(); ?>"> <strong> <?php echo $this->session->userdata('username'); ?> </strong> </a></li>
            <li><a class="btn btn-danger btn-nav" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
        <?php endif; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 



	<div class="container-fluid">
		<div class="col-xs-3">
			<?php $this->load->view('users/login_view'); ?>
		</div>
		<div class="col-xs-9">
			<?php $this->load->view($main_view); ?>
		</div>
	</div>

<div class="footer">
  <p>Project TaskLister &copy 2020 Tauseef Ansari</p>
</div>

</body>
</html>