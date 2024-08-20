
    
    <?php get_template_part('parts/headers/main/header'); ?>

    <main class="dark:bg-dark-850 z-10 pt-24">
        <!-- Hero slider section -->
        <section class="relative group">
            <div class="container">
                <div class="">
                    <div class="swiper head-slider rounded-xl h-full">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper max-h-64 md:max-h-[480px]">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri(); ?>/images/001.jpg" alt="" class="w-full h-64 md:h-[480px]">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri(); ?>/images/002.jpg" alt="" class="w-full h-64 md:h-[480px]">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?= get_template_directory_uri(); ?>/images/003.jpg" alt="" class="w-full h-64 md:h-[480px]">
                            </div>
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
        <!-- End hero slider section -->

        <!-- Introduce section -->
        <section class="-mt-12 relative z-10 hidden lg:block">
            <div class="container">
                <div class="flex flex-row justify-around">
                    <div class="flex flex-row items-stretch">
                        <a href="#" class="flex items-center h-full text-3xl bg-blue-600 text-white p-4 rounded-r-xl">
                            <svg fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                                <path
                                    d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                <path
                                    d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                            </svg>
                        </a>
                        <h3
                            class="flex flex-col gap-y-2 text-sm text-slate-200 p-4 pr-2 bg-gradient-to-tl from-blue-600 from-50% to-slate-300 rounded-l-xl">
                            <a href="#" class="w-fit px-2 py-1 rounded-xl text-slate-800 bg-white text-sm"> گروه آموزشی
                            </a>
                            <a href="#"> گروه های آموزشی و رشته های تحصیلی </a>
                        </h3>
                    </div>
                    <div class="flex flex-row items-stretch">
                        <a href="#" class="flex items-center h-full text-3xl bg-blue-600 text-white p-4 rounded-r-xl">
                            <svg fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                                <path
                                    d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z" />
                                <path
                                    d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z" />
                            </svg>
                        </a>
                        <h3
                            class="flex flex-col gap-y-2 text-sm text-slate-200 p-4 pr-2 bg-gradient-to-tl from-blue-600 from-50% to-slate-300 rounded-l-xl">
                            <a href="#" class="w-fit px-2 py-1 rounded-xl text-slate-800 bg-white text-sm"> بخش های
                                مختلف </a>
                            <a href="#"> آشنایی با بخش های مختلف دانشگاه </a>
                        </h3>
                    </div>
                    <div class="flex flex-row items-stretch">
                        <a href="#" class="flex items-center h-full text-3xl bg-blue-600 text-white p-4 rounded-r-xl">
                            <svg fill="currentColor" class="w-8 h-8" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                <path
                                    d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                                <path
                                    d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                            </svg>
                        </a>
                        <h3
                            class="flex flex-col gap-y-2 text-sm text-slate-200 p-4 pr-2 bg-gradient-to-tl from-blue-600 from-50% to-slate-300 rounded-l-xl">
                            <a href="#" class="w-fit px-2 py-1 rounded-xl text-slate-800 bg-white text-sm"> جذب و پذیرش
                            </a>
                            <a href="#"> نحوه پذیرش و زمان ثبت نام </a>
                        </h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Introduce section -->

        <!-- News section -->
        <section class="mt-10">
            <!-- News section header -->
            <div class="container">
                <div
                    class="flex items-center justify-between bg-gradient-to-l from-blue-200 to-transparent p-4 sm:pr-5 rounded-xl">
                    <div class="flex items-baseline sm:gap-x-3">
                        <div class="flex items-center gap-1">
                            <span class="hidden sm:inline-block w-2 h-2 bg-blue-500 rounded-full"></span>
                            <span class="hidden sm:inline-block w-3 h-3 bg-blue-500 rounded-full"></span>
                        </div>
                        <h2 class="text-2xl font-bold">اخبار</h2>
                    </div>
                    <a href="#" class="flex items-center group">
                        <span
                            class="rounded-xl leading-9 px-3 -ml-4 group-hover:-ml-3 transition-all bg-white z-10 text-sm">آرشیو
                            اخبار</span>
                        <i
                            class="fa-solid fa-arrow-left-to-arc text-white leading-9 pl-3 pr-6 bg-blue-500 group-hover:bg-blue-300 transition-all rounded-tl-xl rounded-bl-xl"></i>
                    </a>
                </div>
            </div>
            <!-- News section body -->
            <div class="container">
                <div class="mt-6 rounded-xl bg-gradient-to-br from-transparent from-60% to-blue-200 dark:to-dark-900">
                    <!-- Start news slider -->
                    <div class="swiper news-slider p-5">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/004.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۷</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۲۵ تیر ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                سومین دوره آموزشی فرهنگی دانشجویان بین المللی برگزار شد
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">دانشجويان گرامي ميتوانند براي مشاهده كتابهاي خريداري
                                                شده از
                                                سي و
                                                پنجمين نمايشگاه بين المللي كتاب تهران سال 1403 به كتابخانه مركزي مراجعه
                                                نمايند.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/003.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۹</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۳۱ تیر ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                روش های که میتوانید وارد المپیاد بازی های رایانه ای شوید
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">دانشجويان گرامي ميتوانند براي مشاهده كتابهاي خريداري
                                                شده از
                                                سي و
                                                پنجمين نمايشگاه بين المللي كتاب تهران سال 1403 به كتابخانه مركزي مراجعه
                                                نمايند.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/005.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۳</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۱۸ مرداد ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                برج نوآوری پارک علم و فناوری دانشگاه شهید بهشتی به نام شهید رئیسی
                                                نامگذاری شد
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">
                                                مراسم بزرگداشت جهلین روز شهادت آیت الله سیدابرهیم رئیسی، رئیس جمهور و
                                                یارانش با حضور
                                                جمع کثیری از دانشگاهیان شهید بهشتی، شنبه نهم تیر 1403 برگزار شد.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/001.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۵</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۳۱ تیر ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                روش های که میتوانید وارد المپیاد بازی های رایانه ای شوید
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">دانشجويان گرامي ميتوانند براي مشاهده كتابهاي خريداري
                                                شده از
                                                سي و
                                                پنجمين نمايشگاه بين المللي كتاب تهران سال 1403 به كتابخانه مركزي مراجعه
                                                نمايند.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/003.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۹</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۳۱ تیر ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                روش های که میتوانید وارد المپیاد بازی های رایانه ای شوید
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">دانشجويان گرامي ميتوانند براي مشاهده كتابهاي خريداري
                                                شده از
                                                سي و
                                                پنجمين نمايشگاه بين المللي كتاب تهران سال 1403 به كتابخانه مركزي مراجعه
                                                نمايند.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>
                    <!-- End news slider -->





                </div>
            </div>
        </section>
        <!-- End news section -->

        <!-- Announcement section -->
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
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/001.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۵</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۳۱ تیر ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                روش های که میتوانید وارد المپیاد بازی های رایانه ای شوید
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border-b dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">دانشجويان گرامي ميتوانند براي مشاهده كتابهاي خريداري
                                                شده از
                                                سي و
                                                پنجمين نمايشگاه بين المللي كتاب تهران سال 1403 به كتابخانه مركزي مراجعه
                                                نمايند.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/005.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۳</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۱۸ مرداد ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                برج نوآوری پارک علم و فناوری دانشگاه شهید بهشتی به نام شهید رئیسی
                                                نامگذاری شد
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">
                                                مراسم بزرگداشت جهلین روز شهادت آیت الله سیدابرهیم رئیسی، رئیس جمهور و
                                                یارانش با حضور
                                                جمع کثیری از دانشگاهیان شهید بهشتی، شنبه نهم تیر 1403 برگزار شد.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/003.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۹</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۳۱ تیر ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                روش های که میتوانید وارد المپیاد بازی های رایانه ای شوید
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">دانشجويان گرامي ميتوانند براي مشاهده كتابهاي خريداري
                                                شده از
                                                سي و
                                                پنجمين نمايشگاه بين المللي كتاب تهران سال 1403 به كتابخانه مركزي مراجعه
                                                نمايند.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/004.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۷</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۲۵ تیر ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                سومین دوره آموزشی فرهنگی دانشجویان بین المللی برگزار شد
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">دانشجويان گرامي ميتوانند براي مشاهده كتابهاي خريداري
                                                شده از
                                                سي و
                                                پنجمين نمايشگاه بين المللي كتاب تهران سال 1403 به كتابخانه مركزي مراجعه
                                                نمايند.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/005.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۳</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۱۸ مرداد ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                برج نوآوری پارک علم و فناوری دانشگاه شهید بهشتی به نام شهید رئیسی
                                                نامگذاری شد
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">
                                                مراسم بزرگداشت جهلین روز شهادت آیت الله سیدابرهیم رئیسی، رئیس جمهور و
                                                یارانش با حضور
                                                جمع کثیری از دانشگاهیان شهید بهشتی، شنبه نهم تیر 1403 برگزار شد.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>

                </div>
            </div>
        </section>
        <!-- End announcement section -->


        <!-- News section -->
        <section class="mt-10">
            <!-- News section header -->
            <div class="container">
                <div
                    class="flex items-center justify-between bg-gradient-to-l from-blue-200 to-transparent p-4 sm:pr-5 rounded-xl">
                    <div class="flex items-baseline sm:gap-x-3">
                        <div class="flex items-center gap-1">
                            <span class="hidden sm:inline-block w-2 h-2 bg-blue-500 rounded-full"></span>
                            <span class="hidden sm:inline-block w-3 h-3 bg-blue-500 rounded-full"></span>
                        </div>
                        <h2 class="text-2xl font-bold">اخبار</h2>
                    </div>
                    <a href="#" class="flex items-center group">
                        <span
                            class="rounded-xl leading-9 px-3 -ml-4 group-hover:-ml-3 transition-all bg-white z-10 text-sm">آرشیو
                            اخبار</span>
                        <i
                            class="fa-solid fa-arrow-left-to-arc text-white leading-9 pl-3 pr-6 bg-blue-500 group-hover:bg-blue-300 transition-all rounded-tl-xl rounded-bl-xl"></i>
                    </a>
                </div>
            </div>
            <!-- News section body -->
            <div class="container">
                <div class="mt-6 rounded-xl bg-gradient-to-br from-transparent from-60% to-blue-200 dark:to-dark-900">
                    <!-- Start news slider -->
                    <div class="swiper news-slider p-5">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/004.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۷</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۲۵ تیر ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                سومین دوره آموزشی فرهنگی دانشجویان بین المللی برگزار شد
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">دانشجويان گرامي ميتوانند براي مشاهده كتابهاي خريداري
                                                شده از
                                                سي و
                                                پنجمين نمايشگاه بين المللي كتاب تهران سال 1403 به كتابخانه مركزي مراجعه
                                                نمايند.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/003.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۹</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۳۱ تیر ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                روش های که میتوانید وارد المپیاد بازی های رایانه ای شوید
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">دانشجويان گرامي ميتوانند براي مشاهده كتابهاي خريداري
                                                شده از
                                                سي و
                                                پنجمين نمايشگاه بين المللي كتاب تهران سال 1403 به كتابخانه مركزي مراجعه
                                                نمايند.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/005.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۳</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۱۸ مرداد ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                برج نوآوری پارک علم و فناوری دانشگاه شهید بهشتی به نام شهید رئیسی
                                                نامگذاری شد
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">
                                                مراسم بزرگداشت جهلین روز شهادت آیت الله سیدابرهیم رئیسی، رئیس جمهور و
                                                یارانش با حضور
                                                جمع کثیری از دانشگاهیان شهید بهشتی، شنبه نهم تیر 1403 برگزار شد.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/001.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۵</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۳۱ تیر ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                روش های که میتوانید وارد المپیاد بازی های رایانه ای شوید
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">دانشجويان گرامي ميتوانند براي مشاهده كتابهاي خريداري
                                                شده از
                                                سي و
                                                پنجمين نمايشگاه بين المللي كتاب تهران سال 1403 به كتابخانه مركزي مراجعه
                                                نمايند.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-4 shadow-primary rounded-2xl dark:bg-dark-800">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="<?= get_template_directory_uri(); ?>/images/announcement/003.jpg" alt=""
                                                class="w-full h-[180px] rounded-xl">
                                        </a>
                                        <div
                                            class="flex flex-col items-center w-fit shadow-lg p-3 gap-2 bg-white text-sm rounded-xl absolute left-5 -bottom-1/4">
                                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                <path
                                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span>۹</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center w-fit shadow-primary text-slate-600 text-sm rounded-lg px-4 py-2 gap-2 mt-3 dark:bg-white">
                                        <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                            <path
                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                        </svg>
                                        <span>۳۱ تیر ۱۴۰۳</span>
                                    </div>
                                    <div class="mt-3">
                                        <h3 class="line-clamp-2 dark:text-slate-200">
                                            <a href="#">
                                                روش های که میتوانید وارد المپیاد بازی های رایانه ای شوید
                                            </a>
                                        </h3>
                                        <span
                                            class="inline-block w-full border dark:border-slate-300 dark:border-opacity-10"></span>
                                        <div class="text-slate-600 text-sm/6 dark:text-slate-400">
                                            <p class="line-clamp-3">دانشجويان گرامي ميتوانند براي مشاهده كتابهاي خريداري
                                                شده از
                                                سي و
                                                پنجمين نمايشگاه بين المللي كتاب تهران سال 1403 به كتابخانه مركزي مراجعه
                                                نمايند.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>
                    <!-- End news slider -->





                </div>
            </div>
        </section>
        <!-- End news section -->

        <!-- Educatoin groups section -->
        <section class="mt-10">
            <div>
                <div class="flex flex-col items-center pt-10">
                    <h3
                        class="flex items-center justify-center text-slate-900 dark:text-slate-200 font-bold text-2xl gap-x-4">
                        <span class="bg-red-500 align-middle inline-block h-1 w-8 md:w-10 rounded-xl"> &nbsp; &nbsp;
                            &nbsp;</span>
                        گروه های آموزشی
                        <span class="bg-red-500 align-middle inline-block h-1 w-8 md:w-10 rounded-xl"> &nbsp; &nbsp;
                            &nbsp;</span>
                    </h3>
                    <p class="text-slate-700 dark:text-slate-400">
                        Educational groups
                    </p>
                </div>
                <div class="mt-10">
                    <div class="container">
                        <div class="swiper education-group-slider rounded-xl relative">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="flex justify-center">
                                        <div
                                            class="bg-gradient-to-br from-transparent to-red-200 rounded-xl dark:bg-dark-800 dark:bg-none">
                                            <div class="w-full p-4">
                                                <a href="#"
                                                    class="inline-block h-48 overflow-hidden rounded-xl shadow-lg"><img
                                                        class="w-full h-full transform transition duration-300 hover:scale-110"
                                                        src="<?= get_template_directory_uri(); ?>/images/education-group/architect-400x300.jpg.webp"
                                                        alt=""></a>
                                            </div>
                                            <div class="px-4 pb-4">
                                                <h3>
                                                    <a href="#"
                                                        class="flex items-center p-1 bg-white rounded-xl shadow-lg">
                                                        <span class="px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg">
                                                            نام گروه :
                                                        </span>
                                                        مهندسی معماری
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex justify-center">
                                        <div
                                            class="bg-gradient-to-br from-transparent to-red-200 rounded-xl dark:bg-dark-800 dark:bg-none">
                                            <div class="w-full p-4">
                                                <a href="#"
                                                    class="inline-block h-48 overflow-hidden rounded-xl shadow-lg"><img
                                                        class="w-full h-full transform transition duration-300 hover:scale-110"
                                                        src="<?= get_template_directory_uri(); ?>/images/education-group/islamic-history-400x300.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="px-4 pb-4">
                                                <h3>
                                                    <a href="#"
                                                        class="flex items-center p-1 bg-white rounded-xl shadow-lg">
                                                        <span class="px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg">
                                                            نام گروه :
                                                        </span>
                                                        تاریخ اسلام
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex justify-center">
                                        <div
                                            class="bg-gradient-to-br from-transparent to-red-200 rounded-xl dark:bg-dark-800 dark:bg-none">
                                            <div class="w-full p-4">
                                                <a href="#"
                                                    class="inline-block h-48 overflow-hidden rounded-xl shadow-lg"><img
                                                        class="w-full h-full transform transition duration-300 hover:scale-110"
                                                        src="<?= get_template_directory_uri(); ?>/images/education-group/civilengineer-400x300.webp"
                                                        alt=""></a>
                                            </div>
                                            <div class="px-4 pb-4">
                                                <h3>
                                                    <a href="#"
                                                        class="flex items-center p-1 bg-white rounded-xl shadow-lg">
                                                        <span class="px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg">
                                                            نام گروه :
                                                        </span>
                                                        مهندسی عمران
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex justify-center">
                                        <div
                                            class="bg-gradient-to-br from-transparent to-red-200 rounded-xl dark:bg-dark-800 dark:bg-none">
                                            <div class="w-full p-4">
                                                <a href="#"
                                                    class="inline-block h-48 overflow-hidden rounded-xl shadow-lg"><img
                                                        class="w-full h-full transform transition duration-300 hover:scale-110"
                                                        src="<?= get_template_directory_uri(); ?>/images/education-group/gavel-with-books-old-wooden-desk-400x300.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="px-4 pb-4">
                                                <h3>
                                                    <a href="#"
                                                        class="flex items-center p-1 bg-white rounded-xl shadow-lg">
                                                        <span class="px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg">
                                                            نام گروه :
                                                        </span>
                                                        حقوق جزا و جرم شناسی
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex justify-center">
                                        <div
                                            class="bg-gradient-to-br from-transparent to-red-200 rounded-xl dark:bg-dark-800 dark:bg-none">
                                            <div class="w-full p-4">
                                                <a href="#"
                                                    class="inline-block h-48 overflow-hidden rounded-xl shadow-lg"><img
                                                        class="w-full h-full transform transition duration-300 hover:scale-110"
                                                        src="<?= get_template_directory_uri(); ?>/images/education-group/front-view-plant-growing-from-golden-coins-400x300.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="px-4 pb-4">
                                                <h3>
                                                    <a href="#"
                                                        class="flex items-center p-1 bg-white rounded-xl shadow-lg">
                                                        <span class="px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg">
                                                            نام گروه :
                                                        </span>
                                                        علوم اقتصادی
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <!-- <div class="flex justify-between items-center w-full h-full z-10 absolute top-0">
                                <div class="educ-button-prev"><i class="fa-regular fa-chevron-right"></i></div>
                                <div class="educ-button-next"><i class="fa-regular fa-chevron-left"></i></div>
                            </div> -->
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- End education groups section -->

        <!-- Educational calendar section -->
        <section class="mt-10">
            <div class="container">

                <div class="flex flex-col items-center pt-10">
                    <h3
                        class="flex items-center justify-center text-slate-900 dark:text-slate-200 font-bold text-2xl gap-x-2 sm:gap-x-4">
                        <span class="bg-blue-600 align-middle inline-block h-1 w-6 sm:w-10 rounded-xl"> &nbsp; &nbsp;
                            &nbsp;</span>
                        تقویم آموزشی
                        <span class="bg-blue-600 align-middle inline-block h-1 w-6 sm:w-10 rounded-xl"> &nbsp; &nbsp;
                            &nbsp;</span>
                    </h3>
                    <p class="text-slate-700 dark:text-slate-400">
                        Educational calendar
                    </p>
                </div>

                <div
                    class="swiper educational-calendar-slider mt-10 rounded-xl bg-gradient-to-r from-transparent to-blue-200 dark:to-dark-900">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper pt-10">
                        <!-- Slides -->
                        <div class="swiper-slide pb-10">
                            <div class="flex flex-col items-center gap-y-4">
                                <div class="flex flex-col items-center gap-y-2 dark:text-slate-400">
                                    <span>
                                        ۱۰ - ۲۰
                                    </span>
                                    <span>
                                        شهریور ماه ۱۴۰۳
                                    </span>
                                </div>
                                <div class="relative">
                                    <div class="w-5 h-5 border-4 bg-white border-blue-500 rounded-full">
                                    </div>
                                    <span
                                        class="block absolute top-2 right-4 -z-10 0 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
                                </div>
                                <div>
                                    <a class="font-medium px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg"
                                        href="#">انتخاب واحد</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide pb-10">
                            <div class="flex flex-col items-center gap-y-4">
                                <div class="flex flex-col items-center gap-y-2 dark:text-slate-400">
                                    <span>
                                        ۱۳
                                    </span>
                                    <span>
                                        شهریور ماه ۱۴۰۳
                                    </span>
                                </div>
                                <div class="relative">
                                    <div class="w-5 h-5 border-4 bg-white border-blue-500 rounded-full relative">
                                    </div>
                                    <span
                                        class="block -z-10 absolute top-2 right-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
                                    <span
                                        class="block -z-10 absolute top-2 left-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
                                </div>
                                <div>
                                    <a class="font-medium px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg" href="#">
                                        شروع کلاس ها
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide pb-10">
                            <div class="flex flex-col items-center gap-y-4">
                                <div class="flex flex-col items-center gap-y-2 dark:text-slate-400">
                                    <span>
                                        ۱ - ۷
                                    </span>
                                    <span>
                                        مهر ماه ۱۴۰۳
                                    </span>
                                </div>
                                <div class="relative">
                                    <div class="w-5 h-5 border-4 bg-white border-blue-500 rounded-full relative">
                                    </div>
                                    <span
                                        class="block -z-10 absolute top-2 right-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
                                    <span
                                        class="block -z-10 absolute top-2 left-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
                                </div>
                                <div>
                                    <a class="font-medium px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg" href="#">
                                        حذف و اضافه
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide pb-10">
                            <div class="flex flex-col items-center gap-y-4">
                                <div class="flex flex-col items-center gap-y-2 dark:text-slate-400">
                                    <span>
                                        ۳۰
                                    </span>
                                    <span>
                                        آذر ماه ۱۴۰۳
                                    </span>
                                </div>
                                <div class="relative">
                                    <div class="w-5 h-5 border-4 bg-white border-blue-500 rounded-full relative">
                                    </div>
                                    <span
                                        class="block -z-10 absolute top-2 right-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
                                    <span
                                        class="block -z-10 absolute top-2 left-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
                                </div>
                                <div>
                                    <a class="font-medium px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg" href="#">
                                        پایان کلاس ها
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide pb-10">
                            <div class="flex flex-col items-center gap-y-4">
                                <div class="flex flex-col items-center gap-y-2 dark:text-slate-400">
                                    <span>
                                        ۲۵ - ۳۰
                                    </span>
                                    <span>
                                        دی و بهمن ماه ۱۴۰۳
                                    </span>
                                </div>
                                <div class="relative">
                                    <div class="w-5 h-5 border-4 bg-white border-blue-500 rounded-full relative">
                                    </div>
                                    <span
                                        class="block -z-10 absolute top-2 left-4 h-1 w-28 xs:w-40 md:w-28 lg:w-40 bg-blue-500"></span>
                                </div>
                                <div>
                                    <a class="font-medium px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg" href="#">
                                        شروع امتحانات
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <!-- <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> -->

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>


            </div>
        </section>
        <!-- End Educational calendar section -->

        <!-- Study section -->
        <section class="mt-20">
            <div class="container">
                <div class="flex flex-col items-center pt-10">
                    <h3
                        class="flex items-center justify-center text-slate-900 dark:text-slate-200 font-bold text-2xl gap-x-2 sm:gap-x-4">
                        <span class="bg-blue-600 align-middle inline-block h-1 w-6 sm:w-10 rounded-xl"> &nbsp; &nbsp;
                            &nbsp;</span>
                        چرا ما را انتخاب کنید؟
                        <span class="bg-blue-600 align-middle inline-block h-1 w-6 sm:w-10 rounded-xl"> &nbsp; &nbsp;
                            &nbsp;</span>
                    </h3>
                    <p class="text-slate-700 dark:text-slate-400">
                        Why us?
                    </p>
                </div>
                <div
                    class="grid grid-cols-1 md:grid-cols-2 mt-10 gap-y-16 sm:gap-10 px-8 py-16 rounded-xl bg-gradient-to-r from-transparent to-red-200 dark:to-dark-900">
                    <div>
                        <h4 class="text-lg font-bold mb-4 dark:text-slate-200">
                            از گوشه و کنار جهان برای آموختن
                        </h4>
                        <p class="text-slate-600 dark:text-slate-400">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در
                            شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها
                            شناخت بیشتری را برای طراحان رایانه ای علی
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-6 text-slate-600 dark:text-slate-400">
                        <div class="flex flex-row items-center">
                            <a href="#"
                                class="flex items-center text-2xl bg-blue-600 text-white px-3 pt-4 pb-3 rounded-b-md rounded-t-[100%]">
                                <i class="fa-light fa-books"></i>
                            </a>
                            <p class="flex flex-col justify-end pr-3">
                                <span>۴۶۲</span>
                                <span>رشته تحصیلی</span>
                            </p>
                        </div>
                        <div class="flex flex-row items-center">
                            <a href="#"
                                class="flex items-center text-2xl bg-blue-600 text-white px-3 pt-4 pb-3 rounded-b-md rounded-t-[100%]">
                                <i class="fa-light fa-screen-users"></i>
                            </a>
                            <p class="flex flex-col justify-end pr-3">
                                <span>۱۰۳۴۶</span>
                                <span>دانشجو</span>
                            </p>
                        </div>
                        <div class="flex flex-row items-center">
                            <a href="#"
                                class="flex items-center text-2xl bg-blue-600 text-white px-3 pt-4 pb-3 rounded-b-md rounded-t-[100%]">
                                <i class="fa-light fa-brain"></i>
                            </a>
                            <p class="flex flex-col justify-end pr-3">
                                <span>۱۷۴۹۰</span>
                                <span>مقالات ISI</span>
                            </p>
                        </div>
                        <div class="flex flex-row items-center">
                            <a href="#"
                                class="flex items-center text-2xl bg-blue-600 text-white px-3 pt-4 pb-3 rounded-b-md rounded-t-[100%]">
                                <i class="fa-light fa-graduation-cap"></i>
                            </a>
                            <p class="flex flex-col justify-end pr-3">
                                <span>۱۰۰۴۳۵۲</span>
                                <span>دانش آموخته</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End study section -->
    </main>

    <?php get_template_part('parts/footers/main/footer'); ?>