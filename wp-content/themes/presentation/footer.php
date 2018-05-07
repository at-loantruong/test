<footer id="footer">
    <div class="footer-widget-area">
        <div class="container">
            <div class="row">
                <?php
                $the_widget_args = array(
                    'before_widget' => '<div class="widget">',
                    'after_widget' => '</div>',
                    'before_title' => '<div class="widget-title"><h5>',
                    'after_title' => '</h5></div>',
                );
                ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <?php
                    if (is_active_sidebar('footer-sidebar-1')) :
                        dynamic_sidebar('footer-sidebar-1');
                    elseif (current_user_can('edit_theme_options')) :
                        the_widget('WP_Widget_Text', 'title=' . __('Footer 1', 'presentation') . '&text=<ul><li><a href="' . esc_url('#') . '" title="' . __('Pricing', 'presentation') . '">' . __('Pricing', 'presentation') . '</a></li><li><a href="' . esc_url('#') . '" title="' . __('Terms', 'presentation') . '">' . __('Terms', 'presentation') . '</a></li><li><a href="' . esc_url('#') . '" title="' . __('Affiliates', 'presentation') . '">' . __('Affiliates', 'presentation') . '</a></li><li><a href="' . esc_url('#') . '" title="' . __('Blog', 'presentation') . '">' . __('Blog', 'presentation') . '</a></li></ul>', $the_widget_args);
                    endif;
                    ?>
                </div><!--/.col-sm-3-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <?php
                    if (is_active_sidebar('footer-sidebar-2')) :
                        dynamic_sidebar('footer-sidebar-2');
                    elseif (current_user_can('edit_theme_options')) :
                        the_widget('WP_Widget_Text', 'title=' . __('Footer 2', 'presentation') . '&text=<ul><li><a href="' . esc_url('#') . '" title="' . __('Pricing', 'presentation') . '">' . __('Pricing', 'presentation') . '</a></li><li><a href="' . esc_url('#') . '" title="' . __('Terms', 'presentation') . '">' . __('Terms', 'presentation') . '</a></li><li><a href="' . esc_url('#') . '" title="' . __('Affiliates', 'presentation') . '">' . __('Affiliates', 'presentation') . '</a></li><li><a href="' . esc_url('#') . '" title="' . __('Blog', 'presentation') . '">' . __('Blog', 'presentation') . '</a></li></ul>', $the_widget_args);
                    endif;
                    ?>
                </div><!--/.col-sm-3-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <?php
                    if (is_active_sidebar('footer-sidebar-3')) :
                        dynamic_sidebar('footer-sidebar-3');
                    elseif (current_user_can('edit_theme_options')) :
                        the_widget('WP_Widget_Text', 'title=' . __('Footer 3', 'presentation') . '&text=<ul><li><a href="' . esc_url('#') . '" title="' . __('Documentation', 'presentation') . '">' . __('Documentation', 'presentation') . '</a></li><li><a href="' . esc_url('#') . '" title="' . __('FAQs', 'presentation') . '">' . __('FAQs', 'presentation') . '</a></li><li><a href="' . esc_url('#') . '" title="' . __('Forums', 'illdy') . '">' . __('Forums', 'presentation') . '</a></li><li><a href="' . esc_url('#') . '" title="' . __('Contact', 'presentation') . '">' . __('Contact', 'presentation') . '</a></li></ul>', $the_widget_args);
                    endif;
                    ?>
                </div><!--/.col-sm-3-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <?php
                    if (is_active_sidebar('footer-sidebar-4')) :
                        dynamic_sidebar('footer-sidebar-4');
                    elseif (current_user_can('edit_theme_options')) :
                        the_widget('WP_Widget_Text', 'title=' . __('Footer 4', 'presentation') . '&text=<ul><li><a href="' . esc_url('#') . '" title="' . __('Documentation', 'presentation') . '">' . __('Documentation', 'presentation') . '</a></li><li><a href="' . esc_url('#') . '" title="' . __('FAQs', 'presentation') . '">' . __('FAQs', 'presentation') . '</a></li><li><a href="' . esc_url('#') . '" title="' . __('Forums', 'illdy') . '">' . __('Forums', 'presentation') . '</a></li><li><a href="' . esc_url('#') . '" title="' . __('Contact', 'presentation') . '">' . __('Contact', 'presentation') . '</a></li></ul>', $the_widget_args);
                    endif;
                    ?>
                </div><!--/.col-sm-3-->
            </div><!--/.row-->
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="col-md-12">
                <p>
                    © <?php echo date('Y'); ?> <?php bloginfo('sitename'); ?>.
                    <?php _e('All rights reserved', 'presentation'); ?>.
                    <?php _e('This website is proundly to use WordPress', 'presenation');?>
                </p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body> <!--end body-->
</html> <!--end html -->