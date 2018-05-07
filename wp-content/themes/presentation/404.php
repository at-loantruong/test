
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="content">
            <section id="main-content" class="col-md-9 col-sm-9 col-xs-12">
                <?php
                _e('<h2>404 NOT FOUND</h2>', 'presentation');
                _e('<p>The article you were looking for was not found, but maybe try looking again!</p>', 'presentation');

                get_search_form();

                _e('<h3>Content categories</h3>', 'presentation');
                echo '<div class="404-catlist">';
                wp_list_categories(array('title_li' => ''));
                echo '</div>';

                _e('<h3>Tag Cloud</h3>', 'presentation');
                wp_tag_cloud();
                ?>
            </section>
            <section id="sidebar" class="col-md-3 col-sm-3 col-xs-12">
                <?php get_sidebar(); ?>
            </section>
        </div>
    </div><!--/.row-->
</div><!--/.container-->
<?php get_footer(); ?>
