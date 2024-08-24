<section class="relative group">
    <div class="container">
        <div class="">
            <div class="swiper head-slider rounded-xl h-full">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper max-h-64 md:max-h-[480px]">
                    <!-- Slides -->
                    <?php
                        $arg= array(
                            'posts_per_page' => '3',
                            'post_status' => 'publish',
                            'category_name' => 'main-slider'
                        );

                        $query = new WP_Query($arg);
                        foreach($query->posts as $post){

                        
                    ?>
                    <div class="swiper-slide">
                        <img src="<?php get_the_post_thumbnail_url($post); ?>" alt=""
                            class="w-full h-64 md:h-[480px]">
                    </div>
                    <?php 
                        };
                    ?>

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