<div class="block block-hero">
    <div class="block-inner">
        <div class="bg">
            <?php
            $image = get_field('block_hero_achtergrond');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="wrapper">
            <div class="col col-txt">
                <div class="inner">
                    <?php the_field('block_hero_tekstvlak'); ?>
                </div>
            </div>
        </div>
    </div>
</div>