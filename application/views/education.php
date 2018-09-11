<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('inc/head');?>
	
	<?php $this->load->view('inc/header'); ?>
	
	<div class="wrapper container">		
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
							<div class="desc"> 
								<?=$edu->description;?> 
								<? if($edu->vote != null): ?> <p> (<?=$edu->vote;?>/<?=$edu->vote_max;?>) <? endif; ?> </p> 
							</div>
						</div><!--//item-inner-->
					</div><!--//item-->
				<? endforeach; ?>
				
			</div><!--//row-->
		</section><!--//section-->
				

	</div><!--//wrapper-->
	
<?php $this->load->view('inc/footer');?>


