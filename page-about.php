<?php /* Template Name: About */ ?>
<?php get_header(); ?>
	<div class="about">
		<div class="about__header">
			<div class="container">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
		<div class="about__content container">
			<div class="row">
				<div class="col--half about__image">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/trudy.jpg" alt="Trudy">
					<!-- <div class="home--image-overlay" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/subtle-dots.png')"></div> -->
				</div>
				<div class="col--half about__bio">
					<h3>Trudy</h3>
					<h6>Full Stack Developer</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam culpa ipsum dolorum sint dignissimos ab tempore a nostrum minima, quisquam, deleniti pariatur sunt adipisci. At consequuntur saepe tempora velit. Voluptatum ad consectetur, quia eius unde eligendi, rem porro hic perspiciatis quidem dolor blanditiis expedita veritatis. Facere modi nemo voluptatem rerum!</p>
				</div>
			</div>
			<div class="row">
				<div class="col--half about__bio">
					<h3>Jordan</h3>
					<h6>Front-End Developer</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam culpa ipsum dolorum sint dignissimos ab tempore a nostrum minima, quisquam, deleniti pariatur sunt adipisci. At consequuntur saepe tempora velit. Voluptatum ad consectetur, quia eius unde eligendi, rem porro hic perspiciatis quidem dolor blanditiis expedita veritatis. Facere modi nemo voluptatem rerum!</p>
				</div>
				<div class="col--half about__image about__image--jordan">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/jordan.png" alt="Jordan">
					<!-- <div class="home--image-overlay" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/subtle-dots.png')"></div> -->
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>