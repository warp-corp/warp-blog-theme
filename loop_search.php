<?php
/**
 * Basic search article loop
 * 
 */
?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php if (is_page()) : ?>
    <div class="post">
      <div class="post-content">
      	<section class="grid">
      		<section class="grid1-3">
      			<aside><div class="thumb"><?php the_post_thumbnail('thumbnail'); ?></div></aside>
      			<aside>
      				 <h3 class="post-title">
				        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				      </h3>
      				<?php the_excerpt(); ?>
      				<p class="post-info">
				        <i class="fa fa-clock-o"></i>	<?php the_date(); ?>
				      </p>
      			</aside>
      		</section>
      	</section> 
      </div> 
    </div>
    <?php endif; ?>
  <?php endwhile; ?>
<?php else : ?>
  <p class="nothing">
    Il n'y a pas de Post à afficher !
  </p>
<?php endif; ?>