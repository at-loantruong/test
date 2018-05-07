<?php
define('THEME_URL', get_stylesheet_directory());

/**
  @ Set up features will be supported by the theme
 * */
if (!function_exists('presentation_theme_setup')) {

    function presentation_theme_setup() {
        /* Register post thumbnail */
        add_theme_support('post-thumbnails');
        /* Register post format */
        add_theme_support('post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
                )
        );
        /* Register custom background */
        $default_background = array(
            'default-color' => '#e8e8e8',
        );
        add_theme_support('custom-background', $default_background);
        /* Register Primary Menus */
        register_nav_menu('primary-menu', __('Primary Menu', 'presentation'));
    }

    add_action('init', 'presentation_theme_setup');
}
/* * @ Display menu * */
if (!function_exists('presentation_menu')) {

    function presentation_menu($slug) {
        $menu = array(
            'theme_location' => $slug,
            'container' => 'nav',
            'container_class' => $slug,
        );
        wp_nav_menu($menu);
    }

}
/* * @ Add widgets * */
if (!function_exists('presentation_widgets')) {
    add_action('widgets_init', 'presentation_widgets');

    function presentation_widgets() {
        // Page Sidebar
        register_sidebar(
                array(
                    'name' => __('Main Sidebar', 'presentation'),
                    'id' => 'page-sidebar',
                    'description' => __('The widgets added in this sidebar will appear on single pages.', 'presentation'),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<div class="widget-title"><h5>',
                    'after_title' => '</h5></div>',
                )
        );
        register_sidebar(
                array(
                    'name' => __('Header Top Left', 'presentation'),
                    'id' => 'header-top-left',
                    'description' => __('The widgets added in this sidebar will appear on header top left.', 'presentation'),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<div class="widget-title"><h5>',
                    'after_title' => '</h5></div>',
                )
        );

        register_sidebar(
                array(
                    'name' => __('Header Top Right', 'presentation'),
                    'id' => 'header-top-right',
                    'description' => __('The widgets added in this sidebar will appear on header top right.', 'presentation'),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<div class="widget-title"><h5>',
                    'after_title' => '</h5></div>',
                )
        );

        // Footer Sidebar 1
        register_sidebar(
                array(
                    'name' => __('Footer Sidebar 1', 'presentation'),
                    'id' => 'footer-sidebar-1',
                    'description' => __('The widgets added in this sidebar will appear in first block from footer.', 'presentation'),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<div class="widget-title"><h5>',
                    'after_title' => '</h5></div>',
                )
        );

        // Footer Sidebar 2
        register_sidebar(
                array(
                    'name' => __('Footer Sidebar 2', 'presentation'),
                    'id' => 'footer-sidebar-2',
                    'description' => __('The widgets added in this sidebar will appear in second block from footer.', 'presentation'),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<div class="widget-title"><h5>',
                    'after_title' => '</h5></div>',
                )
        );

        // Footer Sidebar 3
        register_sidebar(
                array(
                    'name' => __('Footer Sidebar 3', 'presentation'),
                    'id' => 'footer-sidebar-3',
                    'description' => __('The widgets added in this sidebar will appear in third block from footer.', 'presentation'),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<div class="widget-title"><h5>',
                    'after_title' => '</h5></div>',
                )
        );

        // Footer Sidebar 4
        register_sidebar(
                array(
                    'name' => __('Footer Sidebar 4', 'presentation'),
                    'id' => 'footer-sidebar-4',
                    'description' => __('The widgets added in this sidebar will appear in fourth block from footer.', 'presentation'),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<div class="widget-title"><h5>',
                    'after_title' => '</h5></div>',
                )
        );
    }

}
/**
  @ Function display thumbnail post.
  @ Image thumbnail not display in single page
  @ It's will display in single if post format is Image
 * */
if (!function_exists('presentation_thumbnail')) {

    function presentation_thumbnail($size) {

        if (!is_single() && has_post_thumbnail() 
            && !post_password_required()
            || has_post_format('image')) :
            ?>
            <figure class="post-thumbnail"><?php the_post_thumbnail($size); ?></figure><?php
        endif;
    }

}
/**
  @ Display title.entry-header
 * */
if (!function_exists('presentation_entry_header')) {

    function presentation_entry_header() {
        if (is_single()) :
            ?>
            <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"
                 title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
                </a>
            </h1>
        <?php else : ?>
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark" 
                    title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
                </a>
            </h2><?php
        endif;
    }
}
/**
  @ Display post info (Post Meta)
 * */
if (!function_exists('presentation_entry_meta')) {

    function presentation_entry_meta() {
        if (!is_page()) :
            echo '<div class="entry-meta">';

            // Display author, category and date
            printf(__('<span class="author">Posted by %1$s</span>', 'presentation'), get_the_author());

            printf(__('<span class="date-published"> at %1$s</span>', 'presentation'), get_the_date());

            printf(__('<span class="category"> in %1$s</span>', 'presentation'), get_the_category_list(', '));

            // Display comment
            if (comments_open()) :
                echo ' <span class="meta-reply">';
                comments_popup_link(
                        __('Leave a comment', 'presentation'), __('One comment',
                         'presentation'), __('% comments', 'presentation'), 
                        __('Read all comments', 'presentation')
                );
                echo '</span>';
            endif;
            echo '</div>';
        endif;
    }

}
/**
  @ Display content post type
  @ Display short contnet in home page (the_excerpt)
  @ Display all content post in single page (the_content)
 * */
if (!function_exists('presentation_entry_content')) {

    function presentation_entry_content() {

        if (!is_single()) :
            the_excerpt();
        else :
            the_content();

            /*
             *display paging in post type
             */
            $link_pages = array(
                'before' => __('<p>Page:', 'presentation'),
                'after' => '</p>',
                'nextpagelink' => __('Next page', 'presentation'),
                'previouspagelink' => __('Previous page', 'presentation')
            );
            wp_link_pages($link_pages);
        endif;
    }

}
/*
 * Add Read More to excerpt
 */
function presentation_readmore() {
    return '...<a class="read-more" href="' . get_permalink(get_the_ID()) . '">' . __('Read More', 'presentation') . '</a>';
}
add_filter('excerpt_more', 'presentation_readmore');
/**
  @ Display tag  post
 * */
if (!function_exists('presentation_entry_tag')) {

    function presentation_entry_tag() {
        if (has_tag()) :
            echo '<div class="entry-tag">';
            printf(__('Tagged in %1$s', 'presentation'), get_the_tag_list('', ', '));
            echo '</div>';
        endif;
    }
}

if (!function_exists('presentation_enqueue_stylesheets')) {
    add_action('wp_enqueue_scripts', 'presentation_enqueue_stylesheets');

    function presentation_enqueue_stylesheets() {
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '3.3.6', 'all');
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css', array(), '4.5.0', 'all');
        wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '', 'all');
    }
}
if (!function_exists('presentation_enqueue_javascripts')) {
    add_action('wp_enqueue_scripts', 'presentation_enqueue_javascripts');

    function presentation_enqueue_javascripts() {
        wp_enqueue_script('illdy-bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.6', true);
    }

}