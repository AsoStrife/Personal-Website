<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('inc/head');?>
	<?php $this->load->view('inc/header');?>

	<div class="wrapper container">
		<!-- Work Experiences -->
		<section id="experiences-section" class="experiences-section section">
			<h1 class="section-title">Work Experiences</h1>
			<div class="timeline">
				
				<? foreach($work_experiences as $we): ?>
					<div class="item">
						<div class="work-place">
							<h3 class="place" style="margin-bottom:0;"> <?=$we->job_name;?> </h3>
							<h4 class="place"> <small> <?=$we->society;?> </small> </h4>
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
	

<?php $this->load->view('inc/footer');?>


