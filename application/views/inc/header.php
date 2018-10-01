<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Header -->
	<header class="header">
		<div class="top-bar container-fluid">
			<div class="actions">
				<a class="btn d-none d-md-inline-block" href="<?=$this->andreacorriga->get('social', 'telegram');?>"><i class="fas fa-paper-plane" aria-hidden="true"></i> Telegram</a>
				<a class="btn" href="https://cv.andreacorriga.com"><i class="fas fa-download" aria-hidden="true"></i> Curriculum Vitae </a>
			</div><!--//actions-->
			<ul class="social list-inline">
				<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'facebook');?>" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'twitter');?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'instagram');?>" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'github');?>" target="_blank"><i class="fab fa-github-alt" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'linkedin');?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'telegram');?>" target="_blank"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'twitch');?>" target="_blank"><i class="fab fa-twitch" aria-hidden="true"></i></a></li>
			</ul><!--//social-->
		</div><!--//top-bar-->

		<div class="intro">
			<div class="container text-center">
				<img class="profile-image rounded-circle" src="<?=$this->andreacorriga->get('img', 'profile');?>" alt="Andrea Corriga photo" title="andrea-corriga-img-profile">
				<h1 class="name"> <?=$this->andreacorriga->get('main', 'full_name');?> </h1>
				<div class="title"> <?=$this->andreacorriga->get('main', 'slogan');?> </div>
				<!-- <div class="profile"> </div> profile-->
			</div><!--//container-->
		</div><!--//intro-->

		<div class="contact-info d-none d-md-block">
			<div class="container text-center">
				<ul class="list-inline">
					<li class="email list-inline-item"><i class="fas fa-envelope"></i><a href="mailto:<?=$this->andreacorriga->get('main', 'email');?>"> <?=$this->andreacorriga->get('main', 'email');?></a></li>
					<li class="website list-inline-item"><i class="fas fa-globe"></i> @<?=$this->andreacorriga->get('main', 'username');?> </li>
				</ul>
			</div><!--//container-->
		</div><!--//contact-info-->
		
		<!-- ./ old classes: d-none d-md-block -->
		<div class="page-nav-space-holder">
			<div id="page-nav-wrapper" class="page-nav-wrapper text-center">

				<div class="container d-none d-xl-block d-lg-block d-md-block">
					<ul id="page-nav" class="nav page-nav list-inline">
						<li class="nav-item"><a class="nav-link" href="<?=base_url();?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?=base_url('works');?>">Work Experiences</a></li>
						<li class="nav-item"><a class="nav-link" href="<?=base_url('education');?>">Education</a></li>
						<li class="nav-item"><a class="nav-link" href="<?=base_url('publications');?>">Publications</a></li>
						<li class="nav-item"><a class="nav-link" href="<?=base_url('projects');?>">Projects</a></li>
						<li class="nav-item"><a class="nav-link" href="<?=base_url('social/twitch');?>">Live Twitch</a></li>

					</ul><!--//page-nav-->
				</div>

				<nav class="navbar navbar-expand-lg navbar-dark d-block d-sm-none d-sm-block d-md-none">
					<a class="navbar-brand" href="#"></a>
					<button class="btn d-md-inline-block btn-block" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>  Show Menu
					</button>
					<div class="collapse navbar-collapse" id="navbarText">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item"><a class="nav-link" href="<?=base_url();?>">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="<?=base_url('works');?>">Work Experiences</a></li>
							<li class="nav-item"><a class="nav-link" href="<?=base_url('education');?>">Education</a></li>
							<li class="nav-item"><a class="nav-link" href="<?=base_url('publications');?>">Publications</a></li>
							<li class="nav-item"><a class="nav-link" href="<?=base_url('projects');?>">Projects</a></li>
							<li class="nav-item"><a class="nav-link" href="<?=base_url('social/twitch');?>">Live Twitch</a></li>
						</ul>
					</div>
				</nav>
			</div><!--//page-nav-wrapper-->
		</div>
	</header><!--//header-->