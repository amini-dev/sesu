<!-- Sidebar in mobile screen -->
<div id=" mobile__sidebar" class="mobile__sidebar hidden md:hidden relative z-30">
    <!-- Mobile sidebar overlay -->
    <div id="mobile__sidebar-Bg" class="fixed z-0 inset-0 bg-slate-400 bg-opacity-75 transition-opacity"></div>
    <!-- End mobile sidebar overlay -->
    <div id="mobile__sidebar-nav" class="pointer-events-none fixed inset-y-0 -right-full flex w-full xs:w-3/4 sm:w-2/4">
        <!-- Slide-over panel, show/hide based on slide-over state. -->
        <div class="pointer-events-auto relative w-screen">
            <!-- Close button, show/hide based on slide-over state. -->
            <div class="flex h-full flex-col overflow-y-scroll bg-white py-4 dark:bg-dark-800 dark:text-slate-400">
                <div class="flex justify-between items-center px-4 ">
                    <img class="bg-white h-12" src="<?= get_template_directory_uri(); ?>/images/logo-dark.png" alt="">
                    <div class="flex gap-x-3">
                        <!-- Theme switcher in mobile mode -->
                        <div
                            class="mobile__theme-switcher bg-gray-100 text-slate-500 p-3 rounded-full dark:bg-white/5 dark:text-white">
                            <!-- sun icon -->
                            <svg fill="currentColor" class="w-6 h-6 hidden dark:inline-block" viewBox="0 0 16 16">
                                <path
                                    d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
                            </svg>
                            <!-- moon icon -->
                            <svg fill="currentColor" class="w-6 h-6 dark:hidden" viewBox="0 0 16 16">
                                <path
                                    d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278M4.858 1.311A7.27 7.27 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.32 7.32 0 0 0 5.205-2.162q-.506.063-1.029.063c-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286" />
                            </svg>
                        </div>
                        <!-- End theme switcher in mobile mode -->
                        <div id="mobile__sidebar__close-btn"
                            class="bg-gray-100 text-slate-500 p-3 rounded-full dark:bg-white/5 dark:text-white">
                            <svg fill="currentColor" class="x-6 h-6" viewBox="0 0 16 16">
                                <path
                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="relative mt-6 flex-1 px-4 ">
                    <!-- Your content -->
                    <div class="space-y-5">
                        <form action="#">
                            <div class="flex items-center relative">
                                <input type="text"
                                    class="form-input w-full h-10 !ring-0 !ring-offset-0 bg-secondary border border-border focus:border-border rounded-xl text-sm text-foreground pr-10"
                                    placeholder="دنبال چی میگردی؟">
                                <span class="absolute right-3 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                            d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>
                        </form>
                        <div class="h-px bg-border"></div>

                        <ul class="flex flex-col space-y-1">
                            <li x-data="{ open: false }">
                                <button
                                    class="w-full flex items-center gap-x-2 relative transition-all hover:text-foreground py-2 text-muted"
                                    x-bind:class="open ? 'text-foreground' : 'text-muted'" x-on:click="open = !open">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                            d="M3 9a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 9Zm0 6.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-semibold text-xs">
                                        آموزش
                                    </span>
                                    <span class="absolute left-3" x-bind:class="open ? 'rotate-180' : ''">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>
                                </button>
                                <ul class="flex flex-col relative before:content-[''] before:absolute before:inset-y-3 before:right-3 before:w-px before:bg-zinc-200 dark:before:bg-slate-400 py-3 pr-5"
                                    x-show="open" style="display: none;">

                                    <li>
                                        <a href="#"
                                            class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                            <span
                                                class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                            <span class="font-medium text-xs">
                                                خدمات آموزشی
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                            <span
                                                class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                            <span class="font-medium text-xs">
                                                برنامه ریزی و ارزیابی آموزشی
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                            <span
                                                class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                            <span class="font-medium text-xs">
                                                امور آزمون و پذیرش
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li x-data="{ open: false }">
                                <button type="button"
                                    class="w-full flex items-center gap-x-2 relative transition-all hover:text-foreground py-2 text-muted"
                                    x-bind:class="open ? 'text-foreground' : 'text-muted'" x-on:click="open = !open">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                            d="M3 9a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 9Zm0 6.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-semibold text-xs">
                                        پژوهش
                                    </span>
                                    <span class="absolute left-3" x-bind:class="open ? 'rotate-180' : ''">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>
                                </button>
                                <ul class="flex flex-col relative before:content-[''] before:absolute before:inset-y-3 before:right-3 before:w-px before:bg-zinc-200 dark:before:bg-slate-400 py-3 pr-5"
                                    x-show="open" style="display: none;">

                                    <li>
                                        <a href="#"
                                            class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                            <span
                                                class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                            <span class="font-medium text-xs">
                                                معاونت پژوهشی
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                            <span
                                                class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                            <span class="font-medium text-xs">
                                                آزمایشگاه مرکزی
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                            <span
                                                class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                            <span class="font-medium text-xs">
                                                سامانه های پژوهشی
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                            <span
                                                class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                            <span class="font-medium text-xs">
                                                مرکز نشر آثار علمی
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li x-data="{ open: false }">
                                <button type="button"
                                    class="w-full flex items-center gap-x-2 relative transition-all hover:text-foreground py-2 text-muted"
                                    x-bind:class="open ? 'text-foreground' : 'text-muted'" x-on:click="open = !open">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                            d="M3 9a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 9Zm0 6.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-semibold text-xs">دسته بندی گروه های آموزشی</span>
                                    <span class="absolute left-3" x-bind:class="open ? 'rotate-180' : ''">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>
                                </button>
                                <ul class="flex flex-col relative before:content-[''] before:absolute before:inset-y-3 before:right-3 before:w-px before:bg-zinc-200 dark:before:bg-slate-400 py-3 pr-5"
                                    x-show="open" style="display: none;">
                                    <li x-data="{ openChild: false }">
                                        <button type="button"
                                            class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3"
                                            x-on:click="openChild = !openChild">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4"
                                                x-bind:class="openChild ? '-rotate-45' : ''">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15.75 19.5 8.25 12l7.5-7.5"></path>
                                            </svg>
                                            <span class="font-medium text-xs">
                                                گروه مهندسی
                                            </span>
                                        </button>
                                        <ul class="flex flex-col relative before:content-[''] before:absolute before:inset-y-3 before:right-3 before:w-px before:bg-zinc-200 dark:before:bg-slate-400 py-3 pr-5"
                                            x-show="openChild" style="display: none;">
                                            <li>
                                                <a href="#"
                                                    class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                                    <span
                                                        class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                                    <span class="font-medium text-xs">
                                                        مهندسی عمران
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                                    <span
                                                        class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                                    <span class="font-medium text-xs">
                                                        مهندسی معماري
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                                    <span
                                                        class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                                    <span class="font-medium text-xs">
                                                        مهندسی نفت
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                                    <span
                                                        class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                                    <span class="font-medium text-xs">...</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                            <span
                                                class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                            <span class="font-medium text-xs">
                                                گروه پزشکی
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                            <span
                                                class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                            <span class="font-medium text-xs">
                                                معارف اسلامی
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-slate-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                            <span
                                                class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                            <span class="font-medium text-xs">...</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"
                                    class="w-full flex items-center gap-x-2 relative text-muted transition-all hover:text-foreground py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z">
                                        </path>
                                    </svg>
                                    <span class="font-semibold text-xs">پرسش و پاسخ</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="w-full flex items-center gap-x-2 relative text-muted transition-all hover:text-foreground py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                                        </path>
                                    </svg>
                                    <span class="font-semibold text-xs">ارسال مقاله</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="px-4 mt-6">
                    <div class="flex items-baseline justify-between text-sm">
                        <h1 class="px-2 py-1 bg-red-200 rounded-xl ml-2 shadow-lg dark:text-black">
                            دانشگاه شهید امینی
                        </h1>
                        <div class="md:block relative" x-data="{lang: false}">
                            <div x-on:click="lang = !lang"
                                class="bg-red-200 py-1 space-x-4 px-3 pl-7 text-sm rounded-xl dark:text-black"> فارسی -
                                fa </div>
                            <ul class="absolute -top-20 left-0 rounded-xl bg-red-200 min-w-28 text-sm dark:text-black"
                                x-show="lang" x-transition.origin.bottom @click.outside="lang=false">
                                <li
                                    class="p-2 hover:text-blue-600 dark:hover:text-blue-600 transition-all duration-200 ease-linear hover:mr-2">
                                    <a href="#">
                                        فارسی - fa
                                    </a></li>
                                <li
                                    class="p-2 hover:text-blue-600 dark:hover:text-blue-600 transition-all duration-200 ease-linear hover:mr-2">
                                    <a href="#">
                                        انگلیسی - en
                                    </a></li>
                            </ul>
                            <svg class="absolute top-1 left-1 text-black pointer-events-none h-4 w-4"
                                viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <!-- <span class="text-xs text-center">
                        نسخه : ۱.۰۰
                    </span> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End sidebar in mobile screen -->
    <header class="fixed top-0 z-20 w-full">
        <div class="container mt-2">
            <div
                class="flex gap-2 items-center justify-between p-3 shadow-primary rounded-xl bg-white/90 relative z-20 backdrop-blur-lg border-b border-slate-200 w-full dark:border-slate-800 dark:bg-dark-800">
                <div class="md:hidden">
                    <button id="sidebar-btn" class="text-2xl dark:text-slate-400">
                        <i class="fa-regular fa-bars"></i>
                    </button>
                </div>
                <div>
                    <img src="<?= get_template_directory_uri(); ?>/images/logo-dark.png" alt="logo" class="w-12 bg-white">
                </div>
                <div class="hidden md:block">
                    <input type="text" placeholder="جست و جو ..."
                        class="bg-slate-200 placeholder-slate-800 py-3 px-4 text-xs rounded-xl border-none outline-none w-24 md:w-80" />
                </div>
                <div class="flex gap-4 items-center">
                    <!-- Theme switcher in mobile mode -->
                    <div
                        class="mobile__theme-switcher hidden md:block bg-gray-100 text-slate-500 p-3 rounded-full dark:bg-white/5 dark:text-white">
                        <!-- sun icon -->
                        <svg fill="currentColor" class="w-6 h-6 hidden dark:inline-block" viewBox="0 0 16 16">
                            <path
                                d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
                        </svg>
                        <!-- moon icon -->
                        <svg fill="currentColor" class="w-6 h-6 dark:hidden" viewBox="0 0 16 16">
                            <path
                                d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278M4.858 1.311A7.27 7.27 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.32 7.32 0 0 0 5.205-2.162q-.506.063-1.029.063c-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286" />
                        </svg>
                    </div>
                    <!-- End theme switcher in mobile mode -->

                    <!-- sign up / login in mobile mode -->
                    <div class="md:hidden bg-gray-100 text-slate-500 rounded-full dark:bg-white/5 dark:text-white">
                        <!-- sign up / login icon -->
                        <a class="block p-3 rounded-full" href="#">
                            <svg fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                                <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                                <path
                                    d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z" />
                            </svg>
                        </a>
                    </div>
                    <!-- End sign up / login in mobile mode -->

                    <div class="hidden md:block relative" x-data="{lang: false}">
                        <div x-on:click="lang = !lang"
                            class="bg-slate-200 py-3 space-x-4 px-3 pl-7 text-xs rounded-xl"> فارسی - fa </div>
                        <ul class="absolute top-10 rounded-xl bg-slate-200 min-w-28 text-sm" x-show="lang"
                            x-transition.origin.top @click.outside="lang=false">
                            <li
                                class="p-2 hover:text-blue-600 dark:hover:text-blue-600 transition-all duration-200 ease-linear hover:mr-2">
                                <a href="#">
                                    فارسی - fa
                                </a></li>
                            <li
                                class="p-2 hover:text-blue-600 dark:hover:text-blue-600 transition-all duration-200 ease-linear hover:mr-2">
                                <a href="#">
                                    انگلیسی - en
                                </a></li>
                        </ul>
                        <svg class="absolute top-1 left-2 pointer-events-none h-4 w-4" viewBox="0 0 16 16"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="hidden md:flex">
                        <a href="#"
                            class="flex items-center gap-2 bg-slate-200 text-slate-800 pl-6 py-3 px-3 text-xs rounded-xl">
                            <span>ورود</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                                <path fill-rule="evenodd"
                                    d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="flex items-center gap-2 bg-blue-600 hover:bg-blue-500 transition-all text-white -mr-5 py-3 px-3 text-xs rounded-xl">
                            <span>ثبت نام</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-add" viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                <path
                                    d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="second-navbar hidden md:flex gap-2 items-center justify-between p-3 shadow-primary rounded-xl bg-white/80 relative z-10 pt-5 -mt-2 backdrop-blur-lg border-b border-slate-200 mx-8 transition-all duration-300 dark:border-slate-800 dark:bg-dark-800">

                <ul class="hidden md:flex gap-x-6 text-xs lg:text-base dark:text-slate-200">
                    <li class="relative group">
                        <a href="#"
                            class="flex items-center gap-x-1 h-full group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors  ">
                            آموزش
                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                            </svg>
                        </a>
                        <!-- Show When Hover - Submenu -->
                        <div
                            class="invisible opacity-0 group-hover:visible group-hover:opacity-100 absolute right-0 top-full pt-7 transition-all z-10">
                            <div
                                class="flex flex-col gap-y-4 no-scrollbar text-xs dark:text-slate-400 w-64 bg-white dark:bg-dark-800 p-4 border-y-4 border-blue-500 dark:border-x-0 dark:border-blue-500 shadow-sm dark:shadow-none rounded-xl">
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    ثبت نام
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    پذیرش
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    انتقالی
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    امتحانات
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="relative group">
                        <a href="#"
                            class="flex items-center gap-x-1 h-full group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors  ">
                            پژوهش
                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                            </svg>
                        </a>
                        <!-- Show When Hover - Submenu -->
                        <div
                            class="invisible opacity-0 group-hover:visible group-hover:opacity-100 absolute right-0 top-full pt-7 transition-all z-10">
                            <div
                                class="flex flex-col gap-y-4 no-scrollbar text-xs dark:text-slate-400 w-64 bg-white dark:bg-dark-800 p-4 border-y-4 border-blue-500 dark:border-x-0 dark:border-blue-500 shadow-sm dark:shadow-none rounded-xl">
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    معاونت پژوهش و فناوری
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    موسسه انتشارات
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    سامانه مدیریت رویداد های علمی و پژوهشی
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    کتابخانه مرکزی، مرکز اسناد و تامین منابع علمی
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="relative group">
                        <a href="#"
                            class="flex items-center gap-x-1 h-full group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors  ">
                            معاونت ها
                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                            </svg>
                        </a>
                        <!-- Show When Hover - Submenu -->
                        <div
                            class="invisible opacity-0 group-hover:visible group-hover:opacity-100 absolute right-0 top-full pt-7 transition-all z-10">
                            <div
                                class="flex flex-col gap-y-4 no-scrollbar text-xs dark:text-slate-400 w-64 bg-white dark:bg-dark-800 p-4 border-y-4 border-blue-500 dark:border-x-0 dark:border-blue-500 shadow-sm dark:shadow-none rounded-xl">
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    معاونت برنامه ریزی و توسعه منابع
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    معاونت بین الملل
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    معاونت پژوهش و فناوری
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    معاونت فرهنگی و اجتماعی
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="relative group">
                        <a href="#"
                            class="flex items-center gap-x-1 h-full group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors  ">
                            دانشکده ها
                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                            </svg>
                        </a>
                        <!-- Show When Hover - Submenu -->
                        <div
                            class="invisible opacity-0 group-hover:visible group-hover:opacity-100 absolute right-0 top-full pt-7 transition-all z-10">
                            <div
                                class="flex flex-col gap-y-4 no-scrollbar text-xs dark:text-slate-400 w-64 bg-white dark:bg-dark-800 p-4 border-y-4 border-blue-500 dark:border-x-0 dark:border-blue-500 shadow-sm dark:shadow-none rounded-xl">
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    ادبیات و علوم انسانی
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    الهیات و ادیان
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    حقوق
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    اقتصاد و علوم سیاسی
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    علوم تربیتی و روان شناسی
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    معماری و شهر سازی
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    علوم ریاضی
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    مهندسی و علوم کامپیوتر
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="relative group">
                        <a href="#"
                            class="flex items-center gap-x-1 h-full group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors  ">
                            پزوهشکده ها
                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                            </svg>
                        </a>
                        <!-- Show When Hover - Submenu -->
                        <div
                            class="invisible opacity-0 group-hover:visible group-hover:opacity-100 absolute right-0 top-full pt-7 transition-all z-10">
                            <div
                                class="flex flex-col gap-y-4 no-scrollbar text-xs dark:text-slate-400 w-64 bg-white dark:bg-dark-800 p-4 border-y-4 border-blue-500 dark:border-x-0 dark:border-blue-500 shadow-sm dark:shadow-none rounded-xl">
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    پژوهشکده مطالعات میان رشته ای قرآن
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    پژوهشکده خانواده
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    پژوهشکده علوم شناختی و مغز
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    پژوهشکده فضای سایبری
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="relative group">
                        <a href="#"
                            class="flex items-center gap-x-1 h-full group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors  ">
                            زندگی در دانشگاه
                            <svg fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                            </svg>
                        </a>
                        <!-- Show When Hover - Submenu -->
                        <div
                            class="invisible opacity-0 group-hover:visible group-hover:opacity-100 absolute right-0 top-full pt-7 transition-all z-10">
                            <div
                                class="flex flex-col gap-y-4 no-scrollbar text-xs dark:text-slate-400 w-64 bg-white dark:bg-dark-800 p-4 border-y-4 border-blue-500 dark:border-x-0 dark:border-blue-500 shadow-sm dark:shadow-none rounded-xl">
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    مرکز تربیت بدنی
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    بهداشت و درمان
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    خوابگاه ها
                                </a>
                                <a href="#"
                                    class="hover:text-blue-600 dark:hover:text-blue-400 transition-all duration-200 ease-linear hover:mr-2">
                                    رفاهی دانشجویان بین الملل
                                </a>
                            </div>
                        </div>
                    </li>

                </ul>

                <div class="flex gap-4 items-center">

                </div>
            </div>
        </div>
    </header>