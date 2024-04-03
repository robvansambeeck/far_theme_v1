<div class="block block-txt-right">
    <div class="block-inner container">
        <div class="bg">
            <?php
            $image = get_field('block_tekst_rechts_achtergrond');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="col col-txt">
            <div class="inner">
                <?php the_field('block_tekst_rechts_tekstvlak'); ?>
            </div>
        </div>
    </div>
</div>