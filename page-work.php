<?php /* Template Name: Work */ ?>
<?php get_header(); ?>
	<div class="work">
		<div class="work__header">
			<div class="container">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
		
		<div class="work__content">
		<?php $temp = $wp_query; $wp_query= null;
			$wp_query = new WP_Query(); $wp_query->query('cat=(2)&showposts=15' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<div class="container">
				<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
				<div class="row">
					<div class="col--half work__image home__image-container">
						<div class="home__image" style="background: url(<?php echo $src[0] ?>); background-size: cover; background-repeat: no-repeat; background-position: center;">
						</div>	
						<div class="home--image-overlay" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/img/subtle-dots.png')"></div> 
					</div>
					<div class="col--half work__description">
						<h4><?php the_title(); ?></h4>
						<p><?php echo get_the_excerpt(); ?></p>
					</div>
				</div>
			</div>
		<?php endwhile ?>
		</div>
	</div>
<?php get_footer(); ?>