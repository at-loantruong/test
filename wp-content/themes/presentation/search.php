<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="content">
            <section id="main-content">
                <div class="search-info">
                    <?php
                    $search_query = new WP_Query('s=' . $s . '&showposts=-1');
                    $search_keyword = wp_specialchars($s, 1);
                    $search_count = $search_query->post_count;
                    // var_dump( $search_query );
                    printf(__('Search results for <strong>%1$s
                        </strong>. We found <strong>%2$s</strong>
                         articles for you.', 'presentation'),
                          $search_keyword, $search_count);
                    ?>
                </div>
            </section>
            <section id="sidebar">
                <?php get_sidebar(); ?>
            </section>
        </div>
    </div><!--/.row-->
</div><!--/.container-->
<?php get_footer(); ?>