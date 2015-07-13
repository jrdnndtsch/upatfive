<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div id="home">
	<header class="home__header">
		<div class="container">
			<h2 class= "header__title">we are awake earlier than you</h2>
		</div>
	</header>

	<div class="home__what-we-do home__content-block">
		<div class="container">
			<h3>What We Do</h3>
			<div class="row">
				<div class="col-half home__web">
					<p class= "attn">We build web based sites and applications</p>
				</div>
				<div class="col-half home__app">
					<p class="contain">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat molestias distinctio illum consectetur vero dignissimos id itaque, repudiandae repellendus dolore quo, labore minima facere cupiditate.</p>
				</div>
			</div>	
		</div>
	</div>

	<?php $temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query(array('category__and'=>array(2,3)));
	while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div class="home__work">
			<div class="row">
				<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
				<div class="col-half home__image-container">
					<div class="home__image" style="background: url(<?php echo $src[0] ?>); background-size: cover; background-repeat: no-repeat; background-position: center;">
					</div>	
					<div class="home--image-overlay" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/subtle-dots.png')"></div>
				</div>
				<div class="col-half home__content">
					<div class="contain-content--right">
						<h4><?php the_title(); ?></h4>
						<p><?php echo get_the_excerpt(); ?></p>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile ?>	

	<?php $temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('cat=(4)&showposts=1' . '&paged='.$paged);
	while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div class="home__blog">
			<div class="row">
			<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
			<div class="col-half home__content">
				<div class="contain-content--left">
					<h4><?php the_title(); ?></h4>
					<p><?php echo get_the_excerpt(); ?></p>
				</div>
			</div>
			<div class="col-half home__image-container">
				<div class="home__image" style="background: url(<?php echo $src[0] ?>); background-size: cover; background-repeat: no-repeat; background-position: center;">
				</div>	
				<div class="home--image-overlay" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/subtle-dots.png')"></div>
			</div>
			</div>
		</div>
	<?php endwhile ?>
	
	<div class="home__contact home__content-block">
		<div class="container">
			<h3>Get In Touch</h3>
			<div class="row">
				<div class="col-half">
					<p class="attn">We would love to work together</p>
				</div>
				<div class="col-half">
					<p class="contain">Let us know about what your project is and then we will chat about it and figure out some more stuff. Then we can start working on it and it will be swell.</p>
					<button class="button">Contact Us</button>
				</div>
			</div>
		</div>
	</div>
</div>	

<?php get_footer(); ?>
