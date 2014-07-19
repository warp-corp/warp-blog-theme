<?php
/**
 * Basic article loop
 * 
 */
?>

<?php if (have_posts()) : ?>
  
  <?php query_posts('category_name=edito'); /* ne lister QUE les Edito */ ?>
  <?php while(have_posts()) : the_post(); ?>
    <section id="edito">
      <div class="annonce_content">
      <?php the_content(); ?>
      </div>
    </section>
  <?php endwhile; ?>
  
  <?php query_posts('category_name=');  /* clear : TOUTES les catégories */ ?>
  <?php rewind_posts(); ?>
  
  <?php while (have_posts()) : the_post(); ?>
    <?php if (!in_category('Édito')) : ?>
      <div class="post">
        <div class="post-content">
        	<section class="grid">
        		<section class="grid1-3">
        			<aside>
                <div class="thumb">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('thumbnail'); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/no-thumb.png" alt="">
                <?php endif; ?>
                </div>
              </aside>
        			<aside>
        				 <h3 class="post-title">
  				        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  				      </h3>
  				      <div class="hide-phone">
        					<?php the_excerpt(); ?>
        				</div>
        				<ul class="unstyled man pan post-info">
  			          <li class="inbl mrs"><i class="fa fa-clock-o"></i> <?php the_date(); ?></li>
  			          <li class="inbl"><i class="fa fa-comment"></i> <?php echo get_comments_number(); ?></li>
  			        </ul>
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