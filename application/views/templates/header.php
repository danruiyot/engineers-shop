<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url();?>/assets/images/download.png"  style="max-width: 16px; max-height: 16px;">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/sb-admin-2.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbarSupportedContent">
	<a class="navbar-brand" href="#">Engineers shop</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<?php if ($this->session->userdata('userId')): ?>

		<ul class="navbar-nav">
			<?php if($this->session->userdata('level')==='1'):?>
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url('dashboard') ?>">Dashboard <span class="sr-only">(current)</span></a>
			</li>
			<?php elseif($this->session->userdata('level')==='2'):?>
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url('quatation') ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<!--ACCESS MENUS FOR AUTHOR-->
			<?php else:?>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Customers
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo base_url('customer/create') ?>">Add</a>
						<a class="dropdown-item" href="<?php echo base_url('customer/view') ?>">View list</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Enquiries
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo base_url('enquiry/create') ?>">Add</a>
						<a class="dropdown-item" href="<?php echo base_url('enquiry/') ?>">View list</a>
					</div>
				</li>
			<?php endif;?>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		</ul>

	</div>
	<ul class="nav navbar-nav navbar-right">
		<li><a class="nav-link" href="<?php echo site_url('auth/logout');?>">Sign Out</a></li>
	</ul>
	<?php endif;?>
</nav>
<br>
<div class="container">
<div>
