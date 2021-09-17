<?php get_header(); ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>
        <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h2>
        <div>
            <?php _themename_post_meta(); ?>
        </div>
        <div>
            <?php the_excerpt(); ?>
        </div>
        <?php _themename_readmore_link(); ?>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
    <?php do_action( '_themename_after_pagination' ); ?>
<?php else: ?>
    <p><?php echo apply_filters('_themename_no_posts_text', esc_html_e('Sorry, no posts matched your criteria.', '_themename')); ?></p>
<?php endif; ?>
<?php
    $city = 'Minsk  ==^__^==';
    echo esc_html( "Your city is ", '_themename' ) . $city ."<br>";
    printf(
        /* translators: %s is the city name */
        esc_html( "Your city is %s", '_themename' ),
        $city
    );
?>
<?php get_footer(); ?>