<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
		
	<title>Blog | Dashboard</title>
	
	 <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('public/admin/assets/images/favicon.png')?>">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="<?=base_url('public/admin/assets/extra-libs/multicheck/multicheck.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url('public/admin/dist/css/style.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/admin/dist/css/custom.css')?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
	
	<div id="main-wrapper">
		<?=$this->include('admin/partials/header'); ?>
	
		<!--<?//=$this->include('admin/partials/sidebar'); ?>-->
		<?= view_cell('\App\Libraries\Adminhtmlbuilder::generate_admin_sidebar') ?>
		<!--/.sidebar-->
		
		<div class="page-wrapper">
		
			<?=$this->renderSection('body') ?>
			

			<?=$this->include('admin/partials/footer'); ?>

		</div>	<!--/.main-->
	</div>	<!--/.main-->
	<script src="<?=base_url('public/admin/assets/libs/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url('public/admin/assets/libs/popper.js/dist/umd/popper.min.js')?>"></script>
    <script src="<?=base_url('public/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('public/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')?>"></script>
    <script src="<?=base_url('public/admin/assets/extra-libs/sparkline/sparkline.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?=base_url('public/admin/dist/js/waves.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url('public/admin/dist/js/sidebarmenu.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url('public/admin/dist/js/custom.min.js')?>"></script>
    <!--This page JavaScript -->
	
	<script src="<?=base_url('public/admin/js/jquery-1.11.1.min.js')?>"></script>
	<script src="<?=base_url('public/admin/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('public/admin/js/custom.js')?>"></script>
	<script src="<?=base_url('public/admin/assets/extra-libs/multicheck/datatable-checkbox-init.js')?>"></script>
	<script src="<?=base_url('public/admin/assets/extra-libs/multicheck/jquery.multicheck.js')?>"></script>
	<script src="<?=base_url('public/admin/assets/extra-libs/DataTables/datatables.min.js')?>"></script>
		
</body>
</html>
