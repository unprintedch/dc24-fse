<?php
/*
Template name: Test
*/
?>


<?php get_header(); ?>

<div class="container">

    <p class="font-body">test en body</p>    
    <p class="font-heading">test en heading</p>    


	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<?php endwhile; ?>
	<?php endif; ?>

</div>

<?php
get_footer();