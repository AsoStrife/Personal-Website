<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('inc/head');?>
	
	<?php $this->load->view('inc/header'); ?>
	
	<div class="wrapper container">
		<!-- Work Experiences -->
		<section id="experiences-section" class="experiences-section section">
			<h2 class="section-title">Work Experiences</h2>
			<div class="timeline">
				
				<div class="item">
					<div class="work-place">
						<h3 class="place"> Microsoft Student Partner </h3>
						<div class="location d-none d-sm-block"><i class="fas fa-map-marker-alt mr-1"></i> Cagliari </div>
					</div>
					<div class="job-meta">
						<div class="title"> Evangelist </div>
						<div class="time"> From July 2015 to July 2018 </div>
					</div><!--//job-meta-->
					<div class="job-desc">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p> 
					</div><!--//job-desc-->
				</div><!--//item-->

				<div class="item">
					<div class="work-place">
						<h3 class="place"> Internship at CICT </h3>
						<div class="location d-none d-sm-block"><i class="fas fa-map-marker-alt mr-1"></i> Cagiari </div>
					</div>
					<div class="job-meta">
						<div class="title"> Software Developer </div>
						<div class="time"> From March to June 2016 </div>
					</div><!--//job-meta-->
					<div class="job-desc">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p> 
					</div><!--//job-desc-->
				</div><!--//item-->
				
				
				
				<div class="item">
					<div class="work-place">
						<h3 class="place"> Freelancer &amp; Webmaster </h3>
						<div class="location d-none d-sm-block"><i class="fas fa-map-marker-alt mr-1"></i> Cagliari </div>
					</div>
					<div class="job-meta">
						<div class="title">Founder &amp; Lead Developer</div>
						<div class="time">2011 - <?= date('Y'); ?> </div>
					</div><!--//job-meta-->
					<div class="job-desc">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p> 
					</div><!--//job-desc-->
				</div><!--//item-->
				
			</div><!--//timeline-->
		</section><!--//section-->
		
		<!-- Education -->
		<section id="education-section" class="education-section section">
			<h2 class="section-title">Education</h2>
			<div class="row">
				<div class="item col-12 col-md-4">
					<div class="item-inner">
						<h3 class="degree">High School Graduation</h3>
						<div class="education-body">
							Technical Institute Michele Giua 
						</div><!--//education-body-->
						<div class="time">2007 - 2012</div>
						<div class="desc">
							Design of computer systems, project management, business organization, development of web applications in PHP with MySQL database and web application development with Code Igniter Framework.
						</div>
					</div><!--//item-inner-->
				</div><!--//item-->
				<div class="item col-12 col-md-4">
					<div class="item-inner">
						<h3 class="degree">Bachelor Degree</h3>
						<div class="education-body">
							University of Cagliari
						</div><!--//education-body-->
						<div class="time">2013 - 2016</div>
						<div class="desc">
							Focused on: Programming languages, Operating System, Algorithms and Data Structures, Computer Networks, Microprocessor Architecture, Object Oriented Programming, Database, Software Engineering.
						</div>
					</div><!--//item-inner-->
				</div><!--//item-->
				<div class="item col-12 col-md-4">
					<div class="item-inner">
						<h3 class="degree">Master's Degree</h3>
						<div class="education-body">
							University of Cagliari
						</div><!--//education-body-->
						<div class="time">2016 - 2018</div>
						<div class="desc">
							Focused on: Image Analysis Processing, Cisco Certifications, Computer Vision, Big Data (Spark), Data Mining, Decision Science. 
						</div>
					</div><!--//item-inner-->
				</div><!--//item-->
				
			</div><!--//row-->
		</section><!--//section-->
		
		<!-- Skills -->
		<section id="skills-section" class="skills-section section text-center">
			<h2 class="section-title">Skills</h2>
			<div class="other-skills">
				<div class="misc-skills">
					<span class="skill-tag">Html5</span>
					<span class="skill-tag">Css3</span>
					<span class="skill-tag">Sass</span>
					<span class="skill-tag">Less</span>
					<span class="skill-tag">Git</span>
					<br>
					<span class="skill-tag">PHP</span>
					<span class="skill-tag">C</span>
					<span class="skill-tag">C++</span>
					<span class="skill-tag">Java</span>
					<span class="skill-tag">Python</span>
					<br>
					<span class="skill-tag">Javascript</span>
				</div>
			</div><!--//other-skills-->
		</section><!--//skills-section-->
		
		<!-- Contact -->
		<section id="contact-section" class="contact-section section">
			<h2 class="section-title">Get in Touch</h2>
			<div class="intro">
				<img class="profile-image" src="img/profile-image.png" alt="Andrea Corriga photo">
				<div class="dialog">
					<p>I'm currently taking on freelance work. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
					<p><strong>I can help with the following:</strong></p>
					<ul class="list-unstyled service-list">
						<li><i class="fas fa-check" aria-hidden="true"></i> Back-End Development with PHP (Codeigniter), Java or Python</li>
						<li><i class="fas fa-check" aria-hidden="true"></i> Front-End Development with Bootstrap &amp; Javascript</li>
						<li><i class="fas fa-check" aria-hidden="true"></i> Multiplatform App with Framework 7 </li>
						<li><i class="fas fa-check" aria-hidden="true"></i> Telegram Bot </li>
					</ul>
					<p>Drop me a line at <a href="mailto:me@andreacorriga.com">me@andreacorriga.com</a></p>
					<ul class="social list-inline">
						<li class="list-inline-item"><a href="https://facebook.com/AsoStrife" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/AsoStrife" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://instagram.com/AsoStrife" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://github.com/AsoStrife" target="_blank"><i class="fab fa-github-alt" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://goo.gl/ub5sBV" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://t.me/AsoStrife" target="_blank"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
					</ul><!--//social-->
				</div><!--//diaplog-->
			</div><!--//intro-->
		</section><!--//section-->	
	</div><!--//wrapper-->
	
<?php $this->load->view('inc/footer');?>


