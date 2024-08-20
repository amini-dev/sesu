
    
    <?php get_template_part('parts/headers/main/header'); ?>

    <main class="dark:bg-dark-850 z-10 pt-24">
        <!-- Hero slider section -->
        <?php get_template_part('templates/main/hero-slider') ?>
        <!-- End hero slider section -->

        <!-- Introduce section -->
        <?php get_template_part('templates/main/introduce') ?>
        <!-- End Introduce section -->

        <!-- News section -->
        <?php get_template_part('templates/main/news') ?>
        <!-- End news section -->

        <!-- Announcement section -->
        <?php get_template_part('templates/main/announcement') ?>
        <!-- End announcement section -->


        <!-- Events section -->
        <?php get_template_part('templates/main/events') ?>
        <!-- End events section -->

        <!-- Education groups section -->
        <?php get_template_part('templates/main/education-groups') ?>
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