<section class="relative group">
    <div class="container">
        <div class="">
            <div class="swiper head-slider rounded-xl h-full">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper max-h-64 md:max-h-[480px]">
                    <!-- Slides -->
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'main-slider',
                        'order' => 'DESC',
                        'posts_per_page' => 4,
                        'post_status' => 'publish'
                    );

                    $query = new WP_Query($args);
                    
                    if ($query->have_posts()) {
                        while($query->have_posts()){
                            $query->the_post(  );
                            
                        
                        ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(  ))); ?>" alt="<?php the_title(  ) ?>" class="w-full h-64 md:h-[480px]">
                        </div>
                        
                            <?php }} ?>
                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>
        </div>
    </div>
</section>