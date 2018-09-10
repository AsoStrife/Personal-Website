<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('inc/head');?>
	<?php $this->load->view('inc/header');?>

	<div class="wrapper container">
		<section id="experiences-section" class="experiences-section section">
			<h1 class="section-title">Publications</h1>
			<div class="timeline timeline-publications">
				
				<? foreach($publications as $publication): ?>
					<div class="item">
						<div class="work-place">
							<h3 class="place"> <?=$publication->title;?> </h3>
						</div>
						<div class="job-desc">
							<p><?=$publication->description;?></p> 
							<div> <a href="<?=$publication->url;?>" target="_blank"> <?=$publication->url;?></a> </div>
							<div> <?=$publication->string_date;?> </div>
						</div><!--//job-desc-->
					</div><!--//item-->
				<? endforeach;?>

			</div><!--//timeline-->
		</section><!--//section-->
	</div><!--//wrapper-->
	

<?php $this->load->view('inc/footer');?>


