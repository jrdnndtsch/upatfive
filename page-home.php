<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div id="home">
	<header class="home__header">
		<p>this is where the animated logo will go...</p>
	</header>

	<div class="home__what-we-do">
		<div class="container">
			<h2>What We Do</h2>
			<div class="row">
				<div class="col--half home__web">
					<img src="" alt="">
					<h4>Website Development</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae repellat optio dolorum non, nihil ab facilis, voluptas ducimus nemo obcaecati earum! Ratione quasi modi laborum blanditiis, dolorem et unde animi.</p>
				</div>
				<div class="col--half home__app">
					<img src="" alt="">
					<h4>Web Applications</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat molestias distinctio illum consectetur vero dignissimos id itaque, repudiandae repellendus dolore quo, labore minima facere cupiditate.</p>
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
				<div class="col-half home__image" style="background: url(<?php echo $src[0] ?>)">	
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
			<div class="col-half home__image" style="background: url(<?php echo $src[0] ?>)"></div>	
			</div>
		</div>
	<?php endwhile ?>
	
	<div class="home__contact">
		<div class="container">
			<h2>Get In Touch</h2>
			<div class="row">
				<div class="col-half">
					<p class="attn">We love to work with new poeple. Sometimes we are friendly, so if you like sometimes friendly people maybe we can work together</p>
				</div>
				<div class="col-half">
					<p>Let us know about what your project is and then we will chat about it and figure out some more stuff. Then we can start working on it and it will be swell.</p>
				</div>
			</div>
		</div>
	</div>
</div>	

<?php get_footer(); ?>
