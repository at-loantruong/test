<?php ?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="content">
            <section id="main-content">
                <div class="author-box">
                    <?php
                    echo '<div class="author-avatar">' . get_avatar(get_the_author_meta('ID')) . '</div>';
                    printf('<h3>' . __('Posts by %1$s', 'presentation') . '</h3>', get_the_author());
                    echo '<p>' . get_the_author_meta('presentation') . '</p>';
                    if (get_the_author_meta('user_url')) : printf(__('<a href="%1$s" title="Visit to %2$s website">Visit to my website</a>', 'presentation'), get_the_author_meta('user_url'), get_the_author());
                    endif;
                    ?></div>
            </section>
            <section id="sidebar">
                <?php get_sidebar(); ?>
            </section>
        </div>
    </div><!--/.row-->
</div><!--/.container-->
<?php get_footer(); ?>
