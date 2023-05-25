<?php

$prev_post = get_previous_post();
$next_post = get_next_post();
$post_id = isset($args['id']) ? $args['id'] : get_the_ID();

?>

<section class="site-section posts-navigation">
    <div class="nav-links">
        <div class="nav-previous">
            <?php if( $prev_post && $post_id != $prev_post->ID ) : ?>
                <a href="<?= get_permalink($prev_post->ID); ?>" rel="prev">
                    <span class="nav-subtitle"><?= esc_html__( 'Previous', 'exore' ) ?></span>
                    <span class="nav-title"><?= $prev_post->post_title; ?></span>
                </a>
            <?php endif; ?>
        </div>
        <div class="nav-next">
            <?php if( $next_post && $post_id != $next_post->ID ) : ?>
                <a href="<?= get_permalink($next_post->ID); ?>" rel="next">
                    <span class="nav-subtitle"><?= esc_html__( 'Next', 'exore' ) ?></span>
                    <span class="nav-title"><?= $next_post->post_title; ?></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
