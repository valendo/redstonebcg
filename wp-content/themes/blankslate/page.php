<?php get_header(); ?>
<div class="container">
  <div class="wrapper">
    <h2 class="title"><span><?php echo get_the_title(); ?></span></h2>
    <div class="content">
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>