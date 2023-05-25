<section class="site-section section--gap-l">
    <div class="container">
        <?php the_posts_pagination([
            'prev_text' => __('Previous', 'exore'),
            'next_text' => __('Next', 'exore'),
            'screen_reader_text' => __('Posts navigation', 'exore'),
            'class' => 'pagination',
        ]); ?>
    </div>
</section>
