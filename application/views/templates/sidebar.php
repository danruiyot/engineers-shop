<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
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
<div class="row">
	<div class="col-3">

<div class="">
	<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('/') ?>">
			<div class="sidebar-brand-icon rotate-n-15">
				<i class="fas fa-setting"></i>
			</div>
			<div class="sidebar-brand-text mx-3">Engineers shop</div>
		</a>

		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo site_url('dashboard') ?>">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Dashboard</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Interface
		</div>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
				<i class="fas fa-fw fa-user"></i>
				<span>Vendors</span>
			</a>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="<?php echo base_url(); ?>home/">Vendor List</a>
					<a class="collapse-item" href="<?php echo base_url(); ?>home/create">Vendor Entry</a>
				</div>
			</div>
		</li>


		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
				<i class="fas fa-fw fa-users"></i>
				<span>Employees</span>
			</a>
			<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="<?php echo base_url(); ?>employee/view">All employees List</a>
					<a class="collapse-item" href="<?php echo base_url(); ?>employee/create">employeee Entry</a>
				</div>
			</div>
		</li>


		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
				<i class="fas fa-fw fa-user"></i>
				<span>Contact Person</span>
			</a>
			<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="<?php echo base_url(); ?>contact/view">Contact persons List</a>
					<a class="collapse-item" href="<?php echo base_url(); ?>contact/create">Contact persons Entry</a>
				</div>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
				<i class="fas fa-fw fa-user"></i>
				<span>Customer</span>
			</a>
			<div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="<?php echo base_url(); ?>customer/view">Customer List</a>
					<a class="collapse-item" href="<?php echo base_url(); ?>customer/create">Customer Entry</a>
				</div>
			</div>
		</li>


		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
				<i class="fas fa-fw fa-user"></i>
				<span>Enquiry</span>
			</a>
			<div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<a class="collapse-item" href="<?php echo base_url(); ?>enquiry">Enquiry List</a>
					<a class="collapse-item" href="<?php echo base_url(); ?>enquiry/create">Enquiry Entry</a>
				</div>
			</div>
		</li>
		<!-- Nav Item - Utilities Collapse Menu -->


		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Enquiry Processing
		</div>
	<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(); ?>enquiry/approve">
				<i class="fas fa-fw fa-check"></i>
				<span>Enquiry Approval</span></a>
		</li>
		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
				<i class="fas fa-fw fa-folder"></i>
				<span>Actions</span>
			</a>
			<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Enquiry Forwarding:</h6>
					<a class="collapse-item" href="<?php echo base_url(); ?>forwarding/">To Customers</a>
					</div>
			</div>
		</li>

		<!-- Nav Item - Charts -->
	


		<!-- Nav Item - Tables -->
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url(); ?>quatation/">
				<i class="fas fa-fw fa-table"></i>
				<span>Quotations</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">

		<?php if ($this->session->userdata('userId')): ?>

				<li class="nav-item"><a class="nav-link" href="<?php echo site_url('auth/logout');?>">Sign Out</a></li>

		<?php endif;?>		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

	</ul>
</div>
	</div>

<div class="col-8">
<br>
<br>

