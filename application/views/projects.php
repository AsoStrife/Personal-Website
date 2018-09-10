<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('inc/head');?>
	<?php $this->load->view('inc/header');?>

	<div class="wrapper container">
		<div class="wrapper container">
		<section id="projects" class="projects-section section">
			<h1 class="section-title">Projects</h1>

			<div class="timeline timeline-publications">
				
				<? foreach($projects as $project): ?>
					<div class="item">
						<div class="work-place">
							<h3 class="place"> <?=$project->name;?> </h3>
						</div>
						<div class="job-desc">
							<p><?=$project->description;?></p> 
							<div> <a href="<?=$project->url;?>" target="_blank"> <?=$project->url;?></a> </div>
						</div><!--//job-desc-->
					</div><!--//item-->
				<? endforeach;?>

			</div><!--//timeline-->

		</section><!--//section-->
		</div><!--//wrapper-->
	</div><!--//wrapper-->
	
<?php $this->load->view('inc/footer');?>


