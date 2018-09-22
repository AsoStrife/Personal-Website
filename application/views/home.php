<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('inc/head');?>
	
	<?php $this->load->view('inc/header'); ?>
	
	<div class="wrapper container">
		<!-- Bio -->
		<section id="about-section" class="about-section skills-section contact-section section">
			<h1 class="section-title">About me</h1>

			<div class="row">
				<div class="item col-lg-9 col-md-12">
					<p> Hello World! Welcome to my personal page. <br> I'm Andrea Corriga (obviously) currently live in Assemini (CA), Italy. </p>
					<p> I work in Web Development, front-end and back-end.</p>
					<p> I've tried to make my first website at 8 years old with poor results, it was a terrible Pokémon website with one background image (repeated x-y) and a simple text "Benvenuti sul più grande sito di pokemon del mondo!!" translated: "Welcome on the best pokemon website on the world!!" made with FrontPage 2003! Good times :) </p>
					<p> Currently my focus is Javascript with Framework7  ut before that I've worked on Web development with CodeIgniter Framework. </p>
			
					<p> When I'm not working I like to play guitar (rock and metal), go to cinema and collect Blu-ray films. Currently I have 85 Blu-ray and 10 DVD </p>
					
					<p><strong>I can help with the following:</strong></p>
					<ul class="list-unstyled service-list">
						<li><i class="fas fa-check" aria-hidden="true"></i> Back-End Development with PHP (Codeigniter), Java or Python</li>
						<li><i class="fas fa-check" aria-hidden="true"></i> Front-End Development with Bootstrap &amp; Javascript</li>
						<li><i class="fas fa-check" aria-hidden="true"></i> Multiplatform App with Framework 7 </li>
						<li><i class="fas fa-check" aria-hidden="true"></i> Telegram Bot </li>
					</ul>
					<p>Drop me a line at <a href="mailto:<?=$this->andreacorriga->get('main', 'email');?>"> <?=$this->andreacorriga->get('main', 'email');?> </a></p>
					<ul class="social list-inline">
						<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'facebook');?>" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'twitter');?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'instagram');?>" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'github');?>" target="_blank"><i class="fab fa-github-alt" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'linkedin');?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'telegram');?>" target="_blank"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="<?=$this->andreacorriga->get('social', 'twitch');?>" target="_blank"><i class="fab fa-twitch" aria-hidden="true"></i></a></li>
					</ul><!--//social-->
				</div> <!-- ./ item col -md-12 -->
				<div class="item col-lg-3 d-none d-lg-block">
					<img src="/img/profile/profile-image-asostrife-small.png" class="img-fluid">
				</div>
			</div> <!-- ./ row -->

			<div class="row d-none d-md-block">
				<div class="item col-md-12 text-center">
					<h1 class="section-title">Skills</h1>
					<div class="other-skills">
						<div class="misc-skills">
							
							<? foreach($skills as $skill): ?>
								<span class="skill-tag"> <?=$skill->name;?> </span>
							<? endforeach; ?>
						</div>
					</div><!--//other-skills-->
				</div> <!-- ./ item col -md-12 -->
			</div> <!-- ./ row -->

		</section>
		
	</div><!--//wrapper-->
	
<?php $this->load->view('inc/footer');?>


