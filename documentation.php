<?php
/*
Template Name: Page
*/
?>
<?php get_header(); ?>

<section id="page">
<section class="grid">
	<section class="grid2-1">
		<aside>
			<?php get_template_part('loop_page'); ?>
		</aside>
		<aside>
			<?php get_sidebar(); ?>
		</aside>
	</section>
</section>
</section>
	
<?php	get_footer(); ?>