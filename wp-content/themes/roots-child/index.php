<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>


<div class="container">
<div class="row">
  <div class="dv-article">
      <?php while (have_posts()) : the_post(); ?>
          <div class="span4 dv-article-card">
            <article <?php post_class(); ?>>
               <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail('dv-thumb-350');
                } ?>
             <header>
              <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <?php //get_template_part('templates/entry-meta'); ?>
             </header>
    
             <div class="entry-summary">
                <?php the_excerpt(); ?>
              </div>
            
            </article>
          </div>


          <?php //get_template_part('templates/content', get_post_format()); ?>
  
        <?php endwhile; ?>
</div>
 </div>
</div>



<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
