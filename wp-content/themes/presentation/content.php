<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php presentation_thumbnail('thumbnail'); ?>
    </div>
    <header class="entry-header">
        <?php presentation_entry_header(); ?>
        <?php presentation_entry_meta() ?>
    </header>
    <div class="entry-content">
        <?php presentation_entry_content(); ?>
        <?php ( is_single() ? presentation_entry_tag() : '' ); ?>
    </div>
</article>

