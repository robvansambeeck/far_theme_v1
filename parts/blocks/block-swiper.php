<div class="block block-swiper">
    <div class="block-inner container">
        <div class="swiper blockSwiper">
            <div class="swiper-wrapper">
                <?php
                $images = get_field('block_swiper');
                if ($images) :
                ?>
                    <?php foreach ($images as $image) : ?>

                        <div class="swiper-slide">
                            <img class="logo" src="<?php echo esc_url($image['sizes']['large']); ?>" />
                        </div>

                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
            <!-- <div class="swiper-button-next">
                <i class="fa-sharp fa-regular fa-chevron-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="fa-sharp fa-regular fa-chevron-left"></i>
            </div> -->
            <div class="swiper-pagination-normal"></div>
        </div>
    </div>

</div>