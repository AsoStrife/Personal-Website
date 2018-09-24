<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<title> <?=$this->andreacorriga->get('main', 'title');?> </title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?=$this->andreacorriga->get('main', 'description');?>">
	<meta name="author" content="<?=$this->andreacorriga->get('main', 'author');?>">	
	<meta name="keywords" lang="<?=$this->andreacorriga->get('main', 'language');?>" content="<?=$this->andreacorriga->get('main', 'keywords');?>">
	<meta name="robots" content="<?=$this->andreacorriga->get('main', 'robots');?>" />
	<meta name="language" content="<?=$this->andreacorriga->get('main', 'language');?>" />
    <meta name="rating" content="<?=$this->andreacorriga->get('main', 'rating');?>" />

    <link rel="sitemap" href="/sitemap.xml" type="application/xml" />

    <!--Facebook OpenGraph-->
    <meta property="fb:app_id" content="<?=$this->andreacorriga->get('facebook_open_graph', 'app_id');?>" />
    <meta property="og:type" content="<?=$this->andreacorriga->get('facebook_open_graph', 'type');?>" />
    <meta property="og:url" content="<?=$this->andreacorriga->get('facebook_open_graph', 'url');?>" />
    <meta property="og:title" content="<?=$this->andreacorriga->get('facebook_open_graph', 'title');?>" />
    <meta property="og:image" content="<?=$this->andreacorriga->get('facebook_open_graph', 'image');?>" />
    <meta property="og:description" content="<?=$this->andreacorriga->get('facebook_open_graph', 'description');?>" />

    <!-- favicon -->
	<link rel="icon" href="<?=$this->andreacorriga->get('img', 'favicon');?>">
	<link rel="apple-touch-icon" href="<?=$this->andreacorriga->get('img', 'favicon_72x72');?>" sizes="72x72" />
	<link rel="apple-touch-icon" href="<?=$this->andreacorriga->get('img', 'favicon_114x114');?>" sizes="114x114" />
	<link rel="shortcut icon" href="<?=$this->andreacorriga->get('img', 'favicon');?>" />
	<link rel="image_src" href="<?=$this->andreacorriga->get('img', 'profile');?>" />

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- FontAwesome JS-->
	<script type="text/javascript" src="<?=base_url('js/fontawesome-all.min.js');?>"></script>
	<!-- Global CSS -->
	<link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css');?>">
	<link id="theme-style" rel="stylesheet" href="<?=base_url('css/custom.css');?>">

	<link rel="canonical" href="<?=base_url('');?>"/>

	<!-- Analytics -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-35279277-2']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})(); 
	</script>

</head> 

