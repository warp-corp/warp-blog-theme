<?php get_header(); ?>

<section id="page">
<section class="grid">
	<section class="grid2-1">
		<aside>
			<h2>
			 <?php 
			   $output = 'Résultat pour "<span class="terms_search">'. get_search_query() .'</span>"';
			   
			   echo $output;
			 ?>
			</h2>
			<?php get_template_part('loop_search'); ?>
		</aside>
		<aside>
			<?php get_sidebar(); ?>
		</aside>
	</section>
</section>
</section>
	
<?php	get_footer(); ?>