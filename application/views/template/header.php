<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?= $title ?></title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="<?= base_url('assets/ui/') ?>css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="<?= base_url('assets/ui/') ?>css/font-awesome.min.css" rel="stylesheet">
		
		
		<?php 
			foreach ($css as $link)
				echo '<link href="' . base_url('assets/ui/') . 'css/style-'.$link.'.css" rel="stylesheet">';
		?>
				
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	<body>