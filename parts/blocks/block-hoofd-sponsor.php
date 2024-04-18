<div class="block block-hoofdsponsor">
    <div class="block-inner container">
        <div class="block-content">
            <?php
            $images = get_field('logo_hoofdsponsor');
            if ($images) : ?>
                <?php foreach ($images as $image) : ?>
                    <div class="card-sponsor">
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>