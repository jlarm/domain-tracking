<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Card -->
                    <div class="relative group bg-white border border-gray-200 -mt-px first:mt-0 first:rounded-t-xl last:rounded-b-xl dark:bg-neutral-900 dark:border-neutral-700">
                        <a class="group p-3 flex items-center gap-x-4 group-first:rounded-t-xl group-last:rounded-b-xl hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                            <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
                                <img class="w-12 h-8" src="../../assets/img/pro/files-previews/img1.jpg" alt="Image Description">
                            </div>

                            <div class="grow pe-12">
                                <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Analytics
                                </p>
                                <ul class="mt-1 text-xs text-gray-500 dark:text-neutral-500">
                                    <li class="inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        Edited a minute ago
                                    </li>
                                    <li class="hidden sm:inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        15kb
                                    </li>
                                </ul>
                            </div>
                        </a>

                        <!-- More Dropdown -->
                        <div class="absolute top-3 end-3">
                            <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                                <button id="hs-pro-fdl1" type="button" class="sm:p-1.5 sm:ps-3 size-7 sm:w-auto sm:h-auto inline-flex justify-center items-center gap-x-1 rounded-lg border border-gray-200 bg-white text-xs text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    <span class="hidden sm:inline-block">More</span>
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                                </button>

                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:shadow-[0_10px_40px_10px_rgba(0,0,0,0.2)] dark:bg-neutral-800" aria-labelledby="hs-pro-fdl1">
                                    <div class="p-1">
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-detm">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                            Edit file
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                            Add to favorites
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="5" x="2" y="4" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/></svg>
                                            Archive file
                                        </button>

                                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-red-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-red-500 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-dtlam">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                            Delete file
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End More Dropdown -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="relative group bg-white border border-gray-200 -mt-px first:mt-0 first:rounded-t-xl last:rounded-b-xl dark:bg-neutral-900 dark:border-neutral-700">
                        <a class="group p-3 flex items-center gap-x-4 group-first:rounded-t-xl group-last:rounded-b-xl hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                            <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
                                <img class="w-12 h-8" src="../../assets/img/pro/files-previews/img2.jpg" alt="Image Description">
                            </div>

                            <div class="grow pe-12">
                                <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    User Profile
                                </p>
                                <ul class="mt-1 text-xs text-gray-500 dark:text-neutral-500">
                                    <li class="inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        Edited 1 hour ago
                                    </li>
                                    <li class="hidden sm:inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        412kb
                                    </li>
                                </ul>
                            </div>
                        </a>

                        <!-- More Dropdown -->
                        <div class="absolute top-3 end-3">
                            <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                                <button id="hs-pro-fdl2" type="button" class="sm:p-1.5 sm:ps-3 size-7 sm:w-auto sm:h-auto inline-flex justify-center items-center gap-x-1 rounded-lg border border-gray-200 bg-white text-xs text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    <span class="hidden sm:inline-block">More</span>
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                                </button>

                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:shadow-[0_10px_40px_10px_rgba(0,0,0,0.2)] dark:bg-neutral-800" aria-labelledby="hs-pro-fdl2">
                                    <div class="p-1">
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-detm">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                            Edit file
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                            Add to favorites
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="5" x="2" y="4" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/></svg>
                                            Archive file
                                        </button>

                                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-red-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-red-500 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-dtlam">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                            Delete file
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End More Dropdown -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="relative group bg-white border border-gray-200 -mt-px first:mt-0 first:rounded-t-xl last:rounded-b-xl dark:bg-neutral-900 dark:border-neutral-700">
                        <a class="group p-3 flex items-center gap-x-4 group-first:rounded-t-xl group-last:rounded-b-xl hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                            <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
                                <img class="w-12 h-8" src="../../assets/img/pro/files-previews/img3.jpg" alt="Image Description">
                            </div>

                            <div class="grow pe-12">
                                <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Payment
                                </p>
                                <ul class="mt-1 text-xs text-gray-500 dark:text-neutral-500">
                                    <li class="inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        Edited 1 day ago
                                    </li>
                                    <li class="hidden sm:inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        2mb
                                    </li>
                                </ul>
                            </div>
                        </a>

                        <!-- More Dropdown -->
                        <div class="absolute top-3 end-3">
                            <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                                <button id="hs-pro-fdl3" type="button" class="sm:p-1.5 sm:ps-3 size-7 sm:w-auto sm:h-auto inline-flex justify-center items-center gap-x-1 rounded-lg border border-gray-200 bg-white text-xs text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    <span class="hidden sm:inline-block">More</span>
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                                </button>

                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:shadow-[0_10px_40px_10px_rgba(0,0,0,0.2)] dark:bg-neutral-800" aria-labelledby="hs-pro-fdl3">
                                    <div class="p-1">
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-detm">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                            Edit file
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                            Add to favorites
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="5" x="2" y="4" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/></svg>
                                            Archive file
                                        </button>

                                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-red-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-red-500 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-dtlam">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                            Delete file
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End More Dropdown -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="relative group bg-white border border-gray-200 -mt-px first:mt-0 first:rounded-t-xl last:rounded-b-xl dark:bg-neutral-900 dark:border-neutral-700">
                        <a class="group p-3 flex items-center gap-x-4 group-first:rounded-t-xl group-last:rounded-b-xl hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                            <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
                                <img class="w-12 h-8" src="../../assets/img/pro/files-previews/img4.jpg" alt="Image Description">
                            </div>

                            <div class="grow pe-12">
                                <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Employee Attendance
                                </p>
                                <ul class="mt-1 text-xs text-gray-500 dark:text-neutral-500">
                                    <li class="inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        Edited 1 week ago
                                    </li>
                                    <li class="hidden sm:inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        20kb
                                    </li>
                                </ul>
                            </div>
                        </a>

                        <!-- More Dropdown -->
                        <div class="absolute top-3 end-3">
                            <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                                <button id="hs-pro-fdl4" type="button" class="sm:p-1.5 sm:ps-3 size-7 sm:w-auto sm:h-auto inline-flex justify-center items-center gap-x-1 rounded-lg border border-gray-200 bg-white text-xs text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    <span class="hidden sm:inline-block">More</span>
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                                </button>

                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:shadow-[0_10px_40px_10px_rgba(0,0,0,0.2)] dark:bg-neutral-800" aria-labelledby="hs-pro-fdl4">
                                    <div class="p-1">
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-detm">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                            Edit file
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                            Add to favorites
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="5" x="2" y="4" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/></svg>
                                            Archive file
                                        </button>

                                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-red-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-red-500 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-dtlam">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                            Delete file
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End More Dropdown -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="relative group bg-white border border-gray-200 -mt-px first:mt-0 first:rounded-t-xl last:rounded-b-xl dark:bg-neutral-900 dark:border-neutral-700">
                        <a class="group p-3 flex items-center gap-x-4 group-first:rounded-t-xl group-last:rounded-b-xl hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                            <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
                                <img class="w-12 h-8" src="../../assets/img/pro/files-previews/img5.jpg" alt="Image Description">
                            </div>

                            <div class="grow pe-12">
                                <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Examples
                                </p>
                                <ul class="mt-1 text-xs text-gray-500 dark:text-neutral-500">
                                    <li class="inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        Edited 1 week ago
                                    </li>
                                    <li class="hidden sm:inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        36kb
                                    </li>
                                </ul>
                            </div>
                        </a>

                        <!-- More Dropdown -->
                        <div class="absolute top-3 end-3">
                            <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                                <button id="hs-pro-fdl5" type="button" class="sm:p-1.5 sm:ps-3 size-7 sm:w-auto sm:h-auto inline-flex justify-center items-center gap-x-1 rounded-lg border border-gray-200 bg-white text-xs text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    <span class="hidden sm:inline-block">More</span>
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                                </button>

                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:shadow-[0_10px_40px_10px_rgba(0,0,0,0.2)] dark:bg-neutral-800" aria-labelledby="hs-pro-fdl5">
                                    <div class="p-1">
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-detm">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                            Edit file
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                            Add to favorites
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="5" x="2" y="4" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/></svg>
                                            Archive file
                                        </button>

                                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-red-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-red-500 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-dtlam">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                            Delete file
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End More Dropdown -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="relative group bg-white border border-gray-200 -mt-px first:mt-0 first:rounded-t-xl last:rounded-b-xl dark:bg-neutral-900 dark:border-neutral-700">
                        <a class="group p-3 flex items-center gap-x-4 group-first:rounded-t-xl group-last:rounded-b-xl hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                            <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
                                <img class="w-12 h-8" src="../../assets/img/pro/files-previews/img6.jpg" alt="Image Description">
                            </div>

                            <div class="grow pe-12">
                                <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Dashboard
                                </p>
                                <ul class="mt-1 text-xs text-gray-500 dark:text-neutral-500">
                                    <li class="inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        Edited 2 weeks ago
                                    </li>
                                    <li class="hidden sm:inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        3mb
                                    </li>
                                </ul>
                            </div>
                        </a>

                        <!-- More Dropdown -->
                        <div class="absolute top-3 end-3">
                            <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                                <button id="hs-pro-fdl6" type="button" class="sm:p-1.5 sm:ps-3 size-7 sm:w-auto sm:h-auto inline-flex justify-center items-center gap-x-1 rounded-lg border border-gray-200 bg-white text-xs text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    <span class="hidden sm:inline-block">More</span>
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                                </button>

                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:shadow-[0_10px_40px_10px_rgba(0,0,0,0.2)] dark:bg-neutral-800" aria-labelledby="hs-pro-fdl6">
                                    <div class="p-1">
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-detm">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                            Edit file
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                            Add to favorites
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="5" x="2" y="4" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/></svg>
                                            Archive file
                                        </button>

                                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-red-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-red-500 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-dtlam">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                            Delete file
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End More Dropdown -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="relative group bg-white border border-gray-200 -mt-px first:mt-0 first:rounded-t-xl last:rounded-b-xl dark:bg-neutral-900 dark:border-neutral-700">
                        <a class="group p-3 flex items-center gap-x-4 group-first:rounded-t-xl group-last:rounded-b-xl hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                            <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
                                <img class="w-12 h-8" src="../../assets/img/pro/files-previews/img7.jpg" alt="Image Description">
                            </div>

                            <div class="grow pe-12">
                                <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Welcome Page
                                </p>
                                <ul class="mt-1 text-xs text-gray-500 dark:text-neutral-500">
                                    <li class="inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        Edited 2 weeks ago
                                    </li>
                                    <li class="hidden sm:inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        149kb
                                    </li>
                                </ul>
                            </div>
                        </a>

                        <!-- More Dropdown -->
                        <div class="absolute top-3 end-3">
                            <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                                <button id="hs-pro-fdl7" type="button" class="sm:p-1.5 sm:ps-3 size-7 sm:w-auto sm:h-auto inline-flex justify-center items-center gap-x-1 rounded-lg border border-gray-200 bg-white text-xs text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    <span class="hidden sm:inline-block">More</span>
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                                </button>

                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:shadow-[0_10px_40px_10px_rgba(0,0,0,0.2)] dark:bg-neutral-800" aria-labelledby="hs-pro-fdl7">
                                    <div class="p-1">
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-detm">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                            Edit file
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                            Add to favorites
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="5" x="2" y="4" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/></svg>
                                            Archive file
                                        </button>

                                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-red-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-red-500 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-dtlam">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                            Delete file
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End More Dropdown -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="relative group bg-white border border-gray-200 -mt-px first:mt-0 first:rounded-t-xl last:rounded-b-xl dark:bg-neutral-900 dark:border-neutral-700">
                        <a class="group p-3 flex items-center gap-x-4 group-first:rounded-t-xl group-last:rounded-b-xl hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                            <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
                                <img class="w-12 h-8" src="../../assets/img/pro/files-previews/img8.jpg" alt="Image Description">
                            </div>

                            <div class="grow pe-12">
                                <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Plan & Billing
                                </p>
                                <ul class="mt-1 text-xs text-gray-500 dark:text-neutral-500">
                                    <li class="inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        Edited 3 months ago
                                    </li>
                                    <li class="hidden sm:inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        223kb
                                    </li>
                                </ul>
                            </div>
                        </a>

                        <!-- More Dropdown -->
                        <div class="absolute top-3 end-3">
                            <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                                <button id="hs-pro-fdl8" type="button" class="sm:p-1.5 sm:ps-3 size-7 sm:w-auto sm:h-auto inline-flex justify-center items-center gap-x-1 rounded-lg border border-gray-200 bg-white text-xs text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    <span class="hidden sm:inline-block">More</span>
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                                </button>

                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:shadow-[0_10px_40px_10px_rgba(0,0,0,0.2)] dark:bg-neutral-800" aria-labelledby="hs-pro-fdl8">
                                    <div class="p-1">
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-detm">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                            Edit file
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                            Add to favorites
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="5" x="2" y="4" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/></svg>
                                            Archive file
                                        </button>

                                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-red-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-red-500 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-dtlam">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                            Delete file
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End More Dropdown -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="relative group bg-white border border-gray-200 -mt-px first:mt-0 first:rounded-t-xl last:rounded-b-xl dark:bg-neutral-900 dark:border-neutral-700">
                        <a class="group p-3 flex items-center gap-x-4 group-first:rounded-t-xl group-last:rounded-b-xl hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                            <div class="p-3 bg-gray-100 border border-gray-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
                                <img class="w-12 h-8" src="../../assets/img/pro/files-previews/img9.jpg" alt="Image Description">
                            </div>

                            <div class="grow pe-12">
                                <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Users
                                </p>
                                <ul class="mt-1 text-xs text-gray-500 dark:text-neutral-500">
                                    <li class="inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        Edited 4 months ago
                                    </li>
                                    <li class="hidden sm:inline-block relative pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2 before:-translate-y-1/2 before:w-px before:h-3 before:bg-gray-300 before:rounded-full dark:before:bg-neutral-600">
                                        4mb
                                    </li>
                                </ul>
                            </div>
                        </a>

                        <!-- More Dropdown -->
                        <div class="absolute top-3 end-3">
                            <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                                <button id="hs-pro-fdl9" type="button" class="sm:p-1.5 sm:ps-3 size-7 sm:w-auto sm:h-auto inline-flex justify-center items-center gap-x-1 rounded-lg border border-gray-200 bg-white text-xs text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    <span class="hidden sm:inline-block">More</span>
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
                                </button>

                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] dark:shadow-[0_10px_40px_10px_rgba(0,0,0,0.2)] dark:bg-neutral-800" aria-labelledby="hs-pro-fdl9">
                                    <div class="p-1">
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-detm">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                            Edit file
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                            Add to favorites
                                        </button>
                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="5" x="2" y="4" rx="2"/><path d="M4 9v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9"/><path d="M10 13h4"/></svg>
                                            Archive file
                                        </button>

                                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-red-600 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-red-500 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-dtlam">
                                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                            Delete file
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End More Dropdown -->
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
