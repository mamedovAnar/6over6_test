<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper bg-secondary" id="wrapper-footer">

    <div class="<?php echo esc_attr($container); ?>">

        <div class="row">

            <div class="col-md-12">

                <footer class="site-footer" id="colophon">

                    <div class="row justify-content-between">

                        <div class="site-info col-12 col-md-4 text-center text-md-start order-last order-md-first">
                            <?php if (!has_custom_logo()) { ?>

                                <?php if (is_front_page() && is_home()) : ?>

                                    <h1 class="navbar-brand mb-0"><a rel="home"
                                                                     href="<?php echo esc_url(home_url('/')); ?>"
                                                                     itemprop="url"><?php bloginfo('name'); ?></a></h1>

                                <?php else : ?>

                                    <a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                                       itemprop="url"><?php bloginfo('name'); ?></a>

                                <?php endif; ?>

                                <?php
                            } else {
                               echo wp_get_attachment_image(get_theme_mod( 'custom_logo' ), 'small_logo', '', ["class" => "custom-footer-logo"]);
                            }
                            ?>

                            <p class="footer_logo_description mt-3 text-white small">All rights reserved © <?php bloginfo('name'); ?></p>
                        </div><!-- .site-info -->

                        <div class="col-12 col-md-8 p-3 p-sm-0 ">
                            <?php wp_nav_menu([
                                'theme_location' => 'footer',
                                'menu_class' => 'footer_menu d-flex p-0 justify-content-around order-first order-md-last',
                            ]); ?>
                        </div>

                    </div>

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

