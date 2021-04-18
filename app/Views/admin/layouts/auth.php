<!DOCTYPE html>

<html lang="en" dir="ltr">
	<!-- begin::Head -->
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Favicon icon -->
		<link rel="icon" type="image/png" sizes="16x16" href="<?=upload_url("site_logo.png") ?>">
		<title>Blog | Dashboard</title>

		<!-- Custom CSS -->
		<?php echo $template['css_files'] ?>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body>
		<!-- ============================================================== -->
		<!-- Main wrapper - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<div id="main-wrapper">
			<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
				<div class="auth-box bg-dark border-top border-secondary">
					<?=$template['body'] ?>
				</div>
			</div>
		</div>
		<?php echo $template['js_files']; ?>

	</body>
</html>