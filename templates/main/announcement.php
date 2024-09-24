<section class="mt-10">
            <!-- Announcement section header -->
            <div class="container">
                <div
                    class="flex items-center justify-between bg-gradient-to-l from-red-200 to-transparent p-4 sm:pr-5 rounded-xl">
                    <div class="flex items-center sm:gap-x-3">
                        <div class="flex items-center gap-1">
                            <span class="hidden sm:inline-block w-2 h-2 bg-red-500 rounded-full"></span>
                            <span class="hidden sm:inline-block w-3 h-3 bg-red-500 rounded-full"></span>
                        </div>
                        <h2 class="text-xl/normal sm:text-2xl/normal font-bold">اطلاعیه ها</h2>
                    </div>
                    <a href="#" class="flex items-center group">
                        <span
                            class="rounded-xl leading-9 px-3 -ml-4 group-hover:-ml-3 transition-all bg-white z-10 text-sm">آرشیو
                            اطلاعیه ها</span>
                        <i
                            class="fa-solid fa-arrow-left-to-arc text-white leading-9 pl-3 pr-6 bg-red-500 group-hover:bg-red-300 transition-all rounded-tl-xl rounded-bl-xl"></i>
                    </a>
                </div>
            </div>
            <!-- Announcement section body -->
            <div class="container">
                <div class="mt-6 rounded-xl bg-gradient-to-br from-transparent from-60% to-red-200 dark:to-dark-900">
                    <!-- Announcement Slider main container -->
                    <div class="swiper announcement-slider p-5">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'category_name' => 'announcements',
                                'posts_per_page' => 8,
                                'post_status' => 'publish',
                                'order' => 'DESC'
                            );

                            $query = new WP_Query($args);

                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();

                                    ?>
                                    <div class="swiper-slide">
                                        <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                            <div class="relative">
                                                <a href="<?php echo esc_url(get_permalink()) ?>">
                                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt=""
                                                         class="w-full h-[180px] rounded-xl">
                                                </a>
                                                <div
                                                        class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24"
                                                         width="24" height="24">
                                                        <path d="M15.5 12a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"></path>
                                                        <path
                                                                d="M12 3.5c3.432 0 6.124 1.534 8.054 3.241 1.926 1.703 3.132 3.61 3.616 4.46a1.6 1.6 0 0 1 0 1.598c-.484.85-1.69 2.757-3.616 4.461-1.929 1.706-4.622 3.24-8.054 3.24-3.432 0-6.124-1.534-8.054-3.24C2.02 15.558.814 13.65.33 12.8a1.6 1.6 0 0 1 0-1.598c.484-.85 1.69-2.757 3.616-4.462C5.875 5.034 8.568 3.5 12 3.5ZM1.633 11.945a.115.115 0 0 0-.017.055c.001.02.006.039.017.056.441.774 1.551 2.527 3.307 4.08C6.691 17.685 9.045 19 12 19c2.955 0 5.31-1.315 7.06-2.864 1.756-1.553 2.866-3.306 3.307-4.08a.111.111 0 0 0 .017-.056.111.111 0 0 0-.017-.056c-.441-.773-1.551-2.527-3.307-4.08C17.309 6.315 14.955 5 12 5 9.045 5 6.69 6.314 4.94 7.865c-1.756 1.552-2.866 3.306-3.307 4.08Z">
                                                        </path>
                                                    </svg>
                                                    <span>
                                                <?php pvc_post_views(); ?>
                                            </span>
                                                </div>
                                            </div>
                                            <div
                                                    class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                                <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                    <path
                                                            d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                                </svg>
                                                <span>
                                            <?php echo get_the_date('Y-m-d'); ?>
                                        </span>
                                            </div>
                                            <div class="mt-3">
                                                <h3 class="line-clamp-2 dark:text-slate-200">
                                                    <a href="<?php echo esc_url(get_permalink()); ?>">
                                                        <?php echo esc_html(get_the_excerpt()); ?>
                                                    </a>
                                                </h3>
                                                <span
                                                        class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                                <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                                    <p class="line-clamp-3">
                                                        <?php esc_html(the_content()); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>

                </div>
            </div>
        </section>