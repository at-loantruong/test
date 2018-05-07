<?php get_header(); ?>
<div class="row">
  <section class="col-md-9 col-sm-9 col-xs-12">
      <div class="main-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile; ?>
        <?php else : ?>
          <?php get_template_part('content', 'none'); ?>
        <?php endif; ?>
      </div>
  </section>
  <section class="col-md-3 col-sm-3 col-xs-12">
      <div class="sidebar">
        <?php get_sidebar(); ?>
      </div>
  </section>
  </div><!--/.row-->
<?php get_footer(); ?>

