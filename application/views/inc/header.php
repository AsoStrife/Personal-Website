<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Header -->
	<header class="header">
		<div class="top-bar container-fluid">
			<div class="actions">
				<a class="btn d-none d-md-inline-block" href="<?=$this->andreacorriga->get('social', 'telegram');?>"><i class="fas fa-paper-plane" aria-hidden="true"></i> Telegram</a>
				<!--<a class="btn" href="#"><i class="fas fa-download" aria-hidden="true"></i> Curriculum Vitae </a>-->
			</div><!--//actions-->
			<ul class="social list-inline">
				<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'facebook');?>" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'twitter');?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'instagram');?>" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'github');?>" target="_blank"><i class="fab fa-github-alt" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'linkedin');?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'telegram');?>" target="_blank"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
			</ul><!--//social-->
		</div><!--//top-bar-->

		<div class="intro">
			<div class="container text-center">
				<img class="profile-image" src="img/profile/profile-image.png" alt="Andrea Corriga photo">
				<h1 class="name"> <?=$this->andreacorriga->get('main', 'full_name');?> </h1>
				<div class="title"> <?=$this->andreacorriga->get('main', 'slogan');?> </div>
				<!-- <div class="profile"> </div> profile-->
			</div><!--//container-->
		</div><!--//intro-->

		<div class="contact-info">
			<div class="container text-center">
				<ul class="list-inline">
					<li class="email list-inline-item"><i class="fas fa-envelope"></i><a href="mailto:<?=$this->andreacorriga->get('main', 'email');?>"> <?=$this->andreacorriga->get('main', 'email');?></a></li>
					<li class="website list-inline-item"><i class="fas fa-globe"></i><a href="#" target="_blank"> @<?=$this->andreacorriga->get('main', 'username');?> </a></li>
				</ul>
			</div><!--//container-->
		</div><!--//contact-info-->
		
		<div class="page-nav-space-holder d-none d-md-block">
			<div id="page-nav-wrapper" class="page-nav-wrapper text-center">
				<div class="container">
					<ul id="page-nav" class="nav page-nav list-inline">
						<li class="nav-item"><a class="nav-link" href="<?=base_url();?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?=base_url('publications');?>">Publications</a></li>
						<li class="nav-item"><a class="nav-link" href="<?=base_url('projects');?>">Projects</a></li>
					</ul><!--//page-nav-->
				</div>
			</div><!--//page-nav-wrapper-->
		</div>
	</header><!--//header-->