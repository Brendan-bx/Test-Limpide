<div class="card">
    <?php echo get_the_post_thumbnail(); ?>

    <p><strong><?php echo get_the_title(); ?></strong></p>

    <p><?php echo get_the_excerpt(); ?></p>

    <a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo __('Read more', 'limpide'); ?></a>
</div>
