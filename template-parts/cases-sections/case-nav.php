<?php

$prev_post = get_previous_post();
$next_post = get_next_post();

$next_post_class_container = "";

if ( !$prev_post ) {
    $next_post_class_container = " prev-next-posts__container--right justify-content-end";
}

?>

<div class="prev-next-posts">

    <div class="prev-next-posts__container<?php echo $next_post_class_container; ?>">
        <?php if( $prev_post ) : ?>
            <div class="prev-next-posts__left prev-next-posts__items">
                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-next-posts__item  prev-next-posts__item--left">
                    <?php
                    $prev_post_case_info = get_field_object('case_information', $prev_post->ID);
                    ?>
                    <span class="prevnext-link-item__title"><?php echo $prev_post->post_title; ?></span>
                    <?php if ( $prev_post_case_info["value"]["type"] != "" ) : ?>
                        <span class="prevnext-link-item__subtitle"><?php echo $prev_post_case_info["value"]["type"] ?></span>
                    <?php endif; ?>
                </a><!-- .prev-next-posts__leftitem -->
            </div><!-- .prev-next-posts__left -->
        <?php endif;

        if ( $next_post ) :
            ?>
            <div class="prev-next-posts__right prev-next-posts__items">
                <a href="<?php echo get_permalink($next_post->ID); ?>" class="prev-next-posts__item prev-next-posts__item--right">
                    <span class="prevnext-link-item__title"><?php echo $next_post->post_title; ?></span>
                    <?php
                    $next_post_case_info = get_field_object('case_information', $next_post->ID);
                    ?>
                    <?php if ( $next_post_case_info["value"]["type"] != "" ) : ?>
                        <span class="prevnext-link-item__subtitle"><?php echo $next_post_case_info["value"]["type"] ?></span>
                    <?php endif; ?>
                </a><!-- .prev-next-posts__leftitem -->
            </div><!-- .prev-next-posts__left -->
        <?php endif; ?>
    </div><!-- .prev-next-posts__container -->

</div><!-- .prev-next-posts -->
