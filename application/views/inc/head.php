<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<title> <?=$this->andreacorriga->get_title();?> </title>
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
    <meta property="og:title" content="<?=$this->andreacorriga->get_title();?>" />
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
	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
	<!-- FontAwesome JS-->
	<script type="text/javascript" src="<?=base_url('js/fontawesome-all.min.js');?>"></script>
	<!-- Global CSS -->
	<link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css');?>">
	<link id="theme-style" rel="stylesheet" href="<?=base_url('css/custom.css');?>">

	<link rel="canonical" href="<?=base_url('');?>"/>

	<!-- Analytics -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126308165-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-126308165-1');
	</script>


</head> 

