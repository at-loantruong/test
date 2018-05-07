
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="content">
            <section id="main-content" class="col-md-9 col-sm-9 col-xs-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('content', get_post_format()); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php get_template_part('content', 'none'); ?>
                <?php endif; ?>
            </section>
            <section id="sidebar" class="col-md-3 col-sm-3 col-xs-12">
                <?php get_sidebar(); ?>
            </section>
        </div>
    </div><!--/.row-->
</div><!--/.container-->
<?php get_footer(); ?>
