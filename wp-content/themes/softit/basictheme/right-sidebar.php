<?php 

/*
Template Name: Right Sidebar
*/
get_header(); ?>
<style>.sidebar-area{
	border-left: 1px solid #CCCCCC;
	box-sizing: border-box;
}</style>
<div class="contentBox">
	<div class="innerBox">
		<div class="content-area">
			<?php while(have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>

				<p><?php the_content(); ?></p>
			<?php endwhile; ?>
		</div>

		<div class="sidebar-area">
			<?php dynamic_sidebar('right-sidebar'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>