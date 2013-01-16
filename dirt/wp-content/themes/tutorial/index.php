<?php get_header(); ?>
<div id="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post">
			<div class="post-meta-data"><?php the_category(', ');?></div>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>
<div id="sidebar">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
