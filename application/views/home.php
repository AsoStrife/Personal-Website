<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('inc/head');?>
	
	<?php $this->load->view('inc/header'); ?>
	
	<div class="wrapper container">
		<!-- Bio -->
		<section id="experiences-section" class="experiences-section section">
			<h1 class="section-title">About me</h1>
		</section>

		<!-- Work Experiences -->
		<section id="experiences-section" class="experiences-section section">
			<h1 class="section-title">Work Experiences</h1>
			<div class="timeline">
				
				<? foreach($work_experiences as $we): ?>
					<div class="item">
						<div class="work-place">
							<h3 class="place"> <?=$we->job_name;?> </h3>
							<div class="location d-none d-sm-block"><i class="fas fa-map-marker-alt mr-1"></i> <?=$we->location;?> </div>
						</div>
						<div class="job-meta">
							<div class="title"> <?=$we->role;?> </div>
							<div class="time"> <?=$we->duration;?> </div>
						</div><!--//job-meta-->
						<div class="job-desc">
							<p><?=$we->description;?></p> 
						</div><!--//job-desc-->
					</div><!--//item-->
				<? endforeach; ?>
				
			</div><!--//timeline-->
		</section><!--//section-->
		
		<!-- Education -->
		<section id="education-section" class="education-section section">
			<h1 class="section-title">Education</h1>
			<div class="row">

				<? foreach($education as $edu): ?>
					<div class="item col-12 col-md-4">
						<div class="item-inner">
							<h3 class="degree"> <?=$edu->graduate;?> </h3>
							<div class="education-body"> <?=$edu->school;?> </div> 
							<div class="time"> <?=$edu->duration;?> </div>
							<div class="desc"> <?=$edu->description;?> <p>(<?=$edu->vote;?>/<?=$edu->vote_max;?>) </p> </div>
						</div><!--//item-inner-->
					</div><!--//item-->
				<? endforeach; ?>
				
			</div><!--//row-->
		</section><!--//section-->
		
		<!-- Skills -->
		<section id="skills-section" class="skills-section section text-center">
			<h1 class="section-title">Skills</h1>
			<div class="other-skills">
				<div class="misc-skills">
					<? foreach($skills as $skill): ?>
						<span class="skill-tag"> <?=$skill->name;?> </span>
					<? endforeach; ?>
				</div>
			</div><!--//other-skills-->
		</section><!--//skills-section-->
		
		<!-- Contact -->
		<section id="contact-section" class="contact-section section">
			<h1 class="section-title">Get in Touch</h1>
			<div class="intro">
				<img class="profile-image" src="img/profile/profile-image.png" alt="Andrea Corriga photo">
				<div class="dialog">
					<p>I'm currently taking on freelance work. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
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
					</ul><!--//social-->
				</div><!--//diaplog-->
			</div><!--//intro-->
		</section><!--//section-->	
	</div><!--//wrapper-->
	
<?php $this->load->view('inc/footer');?>


