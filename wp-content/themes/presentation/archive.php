<?php ?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="content">
            <section id="main-content">
                <h2>
                    <?php
                    if (is_tag()) :
                        printf(__('Posts Tagged: %1$s', 'presentation'), single_tag_title('', false));
                    elseif (is_category()) :
                        printf(__('Posts Categorized: %1$s', 'presentation'), single_cat_title('', false));
                    elseif (is_day()) :
                        printf(__('Daily Archives: %1$s', 'presentation'), get_the_time('l, F j, Y'));
                    elseif (is_month()) :
                        printf(__('Monthly Archives: %1$s', 'presentation'), get_the_time('F Y'));
                    elseif (is_year()) :
                        printf(__('Yearly Archives: %1$s', 'presentation'), get_the_time('Y'));
                    endif;
                    ?>
                </h2>
        </div>
        </section>
        <section id="sidebar">
            <?php get_sidebar(); ?>
        </section>
    </div>
</div><!--/.row-->
</div><!--/.container-->
<?php get_footer(); ?>
