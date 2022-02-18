<?php
/**
 * Template Name: Home page
 */

get_header(); ?>

<?php get_template_part('global-templates/hero'); ?>

    <div class="custom-container">
        <div class="row mt-7 mb-8">

            <?php

            $loop = new WP_Query([
                'post_type' => 'post',
                'post__in' => get_option('sticky_posts'),
            ]); ?>
            <?php if ($loop->have_posts()) :
                while ($loop->have_posts()) :
                    $loop->the_post(); ?>

                    <div class="col-12 col-md-6">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', ['class' => 'w-100 w-md-auto']); ?></a>
                        <p class="post_author my-2 opacity-50"><?php the_author(); ?></p>
                        <h3 class="post_title text-primary fw-bold"><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <p class="opacity-50 mt-2 mb-4">4 min read</p>
                        <?php the_tags(''); ?>
                    </div>


                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
        </div>
    </div>

    <div class="custom-container">
        <h2 class="text-center mb-11">Did you hear?</h2>

        <div class="row row-cols-1 row-cols-md-3 g-8 mb-12">

            <?php

            $loop = new WP_Query([
                'post_type' => 'post',
                'post__not_in' => get_option('sticky_posts'),
            ]); ?>
            <?php if ($loop->have_posts()) :
                while ($loop->have_posts()) :
                    $loop->the_post(); ?>

                    <div class="col-12 col-md-4">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', ['class' => 'w-100 w-md-auto']); ?></a>
                        <p class="post_author my-2 opacity-50"><?php the_author(); ?></p>
                        <h3 class="post_title text-primary fw-bold"><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <p class="opacity-50 mt-2 mb-4">4 min read</p>
                        <?php the_tags(''); ?>
                    </div>


                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>
    </div>

    <div class="custom-container">
        <div class="row form_bottom justify-content-center mb-14">

            <svg width="50" height="20" viewBox="0 0 50 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_91_226)">
                    <path d="M38.4869 19.2983C43.8159 19.2983 48.136 14.9782 48.136 9.64914C48.136 4.32007 43.8159 0 38.4869 0C33.1578 0 28.8377 4.32007 28.8377 9.64914C28.8377 14.9782 33.1578 19.2983 38.4869 19.2983Z"
                          fill="#0273BF"/>
                    <path d="M11.5132 19.2983C16.8422 19.2983 21.1623 14.9782 21.1623 9.64914C21.1623 4.32007 16.8422 0 11.5132 0C6.1841 0 1.86404 4.32007 1.86404 9.64914C1.86404 14.9782 6.1841 19.2983 11.5132 19.2983Z"
                          fill="#0273BF"/>
                    <path d="M19.682 11.8422C19.682 11.8422 21.3816 7.56592 24.7807 7.56592C28.8377 7.56592 30.318 11.8422 30.318 11.8422"
                          stroke="#0273BF" stroke-width="2" stroke-miterlimit="10"/>
                    <path d="M50 9.64893H47.4781" stroke="#0273BF" stroke-width="2" stroke-miterlimit="10"/>
                    <path d="M2.52193 9.64893H0" stroke="#0273BF" stroke-width="2" stroke-miterlimit="10"/>
                </g>
                <defs>
                    <clipPath id="clip0_91_226">
                        <rect width="50" height="19.2983" fill="white"/>
                    </clipPath>
                </defs>
            </svg>

            <p class="text-center text-primary my-13">you liked what you read?</p>

            <div class="subscribe_form_wrapper w-100 mw-50 text-center">
                <?php echo do_shortcode('[contact-form-7 id="85" title="Subscribe bottom"]'); ?>
            </div>

            <p class="text-center mb-0 mt-13">subscribe to our news letter to find out about yes yes </p>

        </div>
    </div>
<?php get_footer();