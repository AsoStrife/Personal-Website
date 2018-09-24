<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('inc/head');?>
	
	<?php $this->load->view('inc/header'); ?>
	
	<div class="wrapper container">
		<!-- Bio -->
		<section id="about-section" class="about-section skills-section contact-section section">
			<h1 class="section-title">Live Twitch</h1>

			<div class="row">
				<div class="item col-lg-9 col-md-12">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe src="https://player.twitch.tv/?channel=asostrife" frameborder="0" allowfullscreen="true" scrolling="no" ></iframe>
					</div>
					<p>	
						<a href="https://www.twitch.tv/asostrife?tt_content=text_link&tt_medium=live_embed">Guarda il video live di AsoStrife su www.twitch.tv</a>
					</p>
				</div> <!-- ./ item col -md-12 -->
				<div class="item col-lg-3 col-md-12">
					<div class="embed-responsive embed-responsive-16by9" style="height: 426px">
						<iframe src="https://www.twitch.tv/embed/asostrife/chat" frameborder="0" scrolling="no" height="500"></iframe>
					</div>
				</div>
			</div> <!-- ./ row -->

		</section>
		
	</div><!--//wrapper-->
	
<?php $this->load->view('inc/footer');?>


