<div>
    @include('extends.side-bar')
    <main class="lg:flex">
        @include('extends.aside')
        <!-- content -->
        <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
            <div class="flex flex-row justify-between items-center pt-2 pb-6">
                <h2 class="text-title-lg">Sales Automation System</h2>
            </div>
            <div id="sorted-layout" class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6">
                <div class="sm:col-span-2">
                    <!-- card -->
                    <div class="px-6 py-8 flex flex-col gap-6 rounded-xl bg-white dark:bg-gray-900">
                        <div class="relative text-body-lg text-gray-600 dark:text-gray-400">
                            <p>The Sales Automation System project aims to develop a comprehensive software solution that automates sales processes, improves efficiency, and enhances customer relationship management.</p>
                        </div>
                        <!-- detail info -->
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-gray-500">
                            <div class="flex flex-col gap-1">
                                <p class="text-title-sm flex flex-row items-center gap-2">
                                    <i class="material-symbols-outlined">event</i> Start</p>
                                <h5 class="text-body-md text-gray-600 dark:text-gray-400">Aug 23, 2023</h5>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-title-sm flex flex-row items-center gap-2">
                                    <i class="material-symbols-outlined">flag</i> Due Date</p>
                                <h5 class="text-body-md text-gray-600 dark:text-gray-400">Sep 23, 2023</h5>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-title-sm flex flex-row items-center gap-2">
                                    <i class="material-symbols-outlined">payments</i> Budget</p>
                                <h5 class="text-body-md text-gray-600 dark:text-gray-400">$100,000</h5>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-title-sm flex flex-row items-center gap-2">
                                    <i class="material-symbols-outlined">person</i> Owner</p>
                                <h5 class="text-body-md text-gray-600 dark:text-gray-400">Ari Budin</h5>
                            </div>
                        </div>
                        <hr class="h-0 border-b-1 border-gray-200 dark:border-gray-700">
                        <!-- team -->
                        <div class="flex flex-col gap-2">
                            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Assign to</h3>
                            <div class="flex flex-row justify-between">
                                <!-- asignment -->
                                <div class="relative">
                                    <a href="project-detail.html#">
                                        <img class="inline-block rounded-full shadow w-12 h-12 max-w-full bg-primary-600 dark:bg-primary-200 -me-4 border border-gray-500 transform hover:-translate-y-1" src="../src/img/avatar.png" alt="Image Description">
                                    </a>
                                    <a href="project-detail.html#">
                                        <img class="inline-block rounded-full shadow w-12 h-12 max-w-full bg-primary-600 dark:bg-primary-200 -me-4 border border-gray-500 transform hover:-translate-y-1" src="../src/img/avatar.png" alt="Image Description">
                                    </a>
                                    <a href="project-detail.html#">
                                        <img class="inline-block rounded-full shadow w-12 h-12 max-w-full bg-primary-600 dark:bg-primary-200 -me-4 border border-gray-500 transform hover:-translate-y-1" src="../src/img/avatar.png" alt="Image Description">
                                    </a>
                                    <a href="project-detail.html#">
                                        <img class="inline-block rounded-full shadow w-12 h-12 max-w-full bg-primary-600 dark:bg-primary-200 -me-4 border border-gray-500 transform hover:-translate-y-1" src="../src/img/avatar.png" alt="Image Description">
                                    </a>
                                    <a href="project-detail.html#">
                                        <img class="inline-block rounded-full shadow w-12 h-12 max-w-full bg-primary-600 dark:bg-primary-200 -me-4 border border-gray-500 transform hover:-translate-y-1" src="../src/img/avatar.png" alt="Image Description">
                                    </a>
                                    <a href="project-detail.html#">
                                        <img class="inline-block rounded-full shadow w-12 h-12 max-w-full bg-primary-600 dark:bg-primary-200 -me-4 border border-gray-500 transform hover:-translate-y-1" src="../src/img/avatar.png" alt="Image Description">
                                    </a>
                                </div>
                                <!-- invite -->
                                <button class="btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-secondary-100 text-primary-900 dark:bg-secondary-700 dark:text-secondary-100">
                                    <span class="material-symbols-outlined">add</span>
                                    <span class="hidden lg:inline">Invite</span>
                                </button>
                            </div>
                        </div>
                        <hr class="h-0 border-b-1 border-gray-200 dark:border-gray-700">

                        <!-- attach -->
                        <div class="flex flex-col gap-2">
                            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Attachments (4)</h3>
                            <!-- Attached Files -->
                            <div class="relative grid grid-cols-2 lg:grid-cols-4 gap-3">
                                <div class="relative [&amp;_.file-hover]:hover:absolute [&amp;_.file-hover]:hover:inset-0  [&amp;_.file-hover]:hover:!border-t-0 [&amp;_.file-hover]:hover:bg-surface-100 dark:[&amp;_.file-hover]:hover:bg-surfacedark-100 [&amp;_.file-hover-detail]:hover:!flex h-24 flex flex-col justify-between border border-gray-200 dark:border-gray-700 rounded">
                                    <!-- file icon -->
                                    <div class="py-4 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-gray-500 !text-3xl">draft</span>
                                    </div>

                                    <!-- file hover -->
                                    <div class="file-hover border-t border-gray-200 dark:border-gray-700 flex flex-col justify-between">
                                        <!-- file detail -->
                                        <div class="flex flex-col">
                                            <div class="relative inline-flex flex-row items-center justify-start gap-x-2 p-2 text-label-sm text-gray-600 dark:border-gray-400 dark:text-gray-400 overflow-hidden w-4/5 whitespace-nowrap text-ellipsis">
                                                <span class="material-symbols-outlined !text-base text-red-500">image</span>
                                                Photos.jpg
                                            </div>
                                            <span class="file-hover-detail hidden text-label-sm px-2">124kb</span>
                                        </div>
                                        <!-- download -->
                                        <div class="file-hover-detail hidden flex-row items-center gap-2 px-2 pb-2">
                                            <button class="p-1 bg-primary-600 dark:bg-primary-200 text-gray-100 dark:text-gray-900 rounded"><span aria-label="Download" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">download</span></button>
                                            <button class="p-1 bg-primary-600 dark:bg-primary-200 text-gray-100 dark:text-gray-900 rounded"><span aria-label="Add to drive" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">add_to_drive</span></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative [&amp;_.file-hover]:hover:absolute [&amp;_.file-hover]:hover:inset-0  [&amp;_.file-hover]:hover:!border-t-0 [&amp;_.file-hover]:hover:bg-surface-100 dark:[&amp;_.file-hover]:hover:bg-surfacedark-100 [&amp;_.file-hover-detail]:hover:!flex h-24 flex flex-col justify-between border border-gray-200 dark:border-gray-700 rounded">
                                    <!-- file icon -->
                                    <div class="py-4 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-gray-500 !text-3xl">draft</span>
                                    </div>

                                    <!-- file hover -->
                                    <div class="file-hover border-t border-gray-200 dark:border-gray-700 flex flex-col justify-between">
                                        <!-- file detail -->
                                        <div class="flex flex-col">
                                            <div class="relative inline-flex flex-row items-center justify-start gap-x-2 p-2 text-label-sm text-gray-600 dark:border-gray-400 dark:text-gray-400 overflow-hidden w-4/5 whitespace-nowrap text-ellipsis">
                                                <span class="material-symbols-outlined !text-base text-red-500">code</span>
                                                Landing-page.html
                                            </div>
                                            <span class="file-hover-detail hidden text-label-sm px-2">724kb</span>
                                        </div>
                                        <!-- download -->
                                        <div class="file-hover-detail hidden flex-row items-center gap-2 px-2 pb-2">
                                            <button class="p-1 bg-primary-600 dark:bg-primary-200 text-gray-100 dark:text-gray-900 rounded"><span aria-label="Download" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">download</span></button>
                                            <button class="p-1 bg-primary-600 dark:bg-primary-200 text-gray-100 dark:text-gray-900 rounded"><span aria-label="Add to drive" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">add_to_drive</span></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative [&amp;_.file-hover]:hover:absolute [&amp;_.file-hover]:hover:inset-0  [&amp;_.file-hover]:hover:!border-t-0 [&amp;_.file-hover]:hover:bg-surface-100 dark:[&amp;_.file-hover]:hover:bg-surfacedark-100 [&amp;_.file-hover-detail]:hover:!flex h-24 flex flex-col justify-between border border-gray-200 dark:border-gray-700 rounded">
                                    <!-- file icon -->
                                    <div class="py-4 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-gray-500 !text-3xl">draft</span>
                                    </div>

                                    <!-- file hover -->
                                    <div class="file-hover border-t border-gray-200 dark:border-gray-700 flex flex-col justify-between">
                                        <!-- file detail -->
                                        <div class="flex flex-col">
                                            <div class="relative inline-flex flex-row items-center justify-start gap-x-2 p-2 text-label-sm text-gray-600 dark:border-gray-400 dark:text-gray-400 overflow-hidden w-4/5 whitespace-nowrap text-ellipsis">
                                                <span class="material-symbols-outlined !text-base text-red-500">folder_zip</span>
                                                Project.zip
                                            </div>
                                            <span class="file-hover-detail hidden text-label-sm px-2">1,3mb</span>
                                        </div>
                                        <!-- download -->
                                        <div class="file-hover-detail hidden flex-row items-center gap-2 px-2 pb-2">
                                            <button class="p-1 bg-primary-600 dark:bg-primary-200 text-gray-100 dark:text-gray-900 rounded"><span aria-label="Download" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">download</span></button>
                                            <button class="p-1 bg-primary-600 dark:bg-primary-200 text-gray-100 dark:text-gray-900 rounded"><span aria-label="Add to drive" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">add_to_drive</span></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative [&amp;_.file-hover]:hover:absolute [&amp;_.file-hover]:hover:inset-0  [&amp;_.file-hover]:hover:!border-t-0 [&amp;_.file-hover]:hover:bg-surface-100 dark:[&amp;_.file-hover]:hover:bg-surfacedark-100 [&amp;_.file-hover-detail]:hover:!flex h-24 flex flex-col justify-between border border-gray-200 dark:border-gray-700 rounded">
                                    <!-- file icon -->
                                    <div class="py-4 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-gray-500 !text-3xl">draft</span>
                                    </div>

                                    <!-- file hover -->
                                    <div class="file-hover border-t border-gray-200 dark:border-gray-700 flex flex-col justify-between">
                                        <!-- file detail -->
                                        <div class="flex flex-col">
                                            <div class="relative inline-flex flex-row items-center justify-start gap-x-2 p-2 text-label-sm text-gray-600 dark:border-gray-400 dark:text-gray-400 overflow-hidden w-4/5 whitespace-nowrap text-ellipsis">
                                                <span class="material-symbols-outlined !text-base text-red-500">picture_as_pdf</span>
                                                New_Project.pdf
                                            </div>
                                            <span class="file-hover-detail hidden text-label-sm px-2">2,3mb</span>
                                        </div>
                                        <!-- download -->
                                        <div class="file-hover-detail hidden flex-row items-center gap-2 px-2 pb-2">
                                            <button class="p-1 bg-primary-600 dark:bg-primary-200 text-gray-100 dark:text-gray-900 rounded"><span aria-label="Download" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">download</span></button>
                                            <button class="p-1 bg-primary-600 dark:bg-primary-200 text-gray-100 dark:text-gray-900 rounded"><span aria-label="Add to drive" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">add_to_drive</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- comments -->
                        <div class="flex flex-col gap-2 py-4">
                            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Comments (8)</h3>
                            <!-- form -->
                            <div class="flex flex-row items-center gap-4 py-3">
                                <div class="relative grow z-0">
                                    <input type="text" aria-label="inputcom" name="inputcom" id="inputcom" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="">

                                    <label for="inputcom" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Write a comment...</label>
                                </div>

                                <button class="btn relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                                    Send
                                </button>
                            </div>
                            <!-- list comments -->
                            <ul>
                                <li>
                                    <div class="flex flex-start gap-3 py-2">
                                        <div class="w-10 h-10 flex-none rounded-full font-bold bg-primary-600 dark:bg-primary-200">
                                            <a href="project-detail.html#">
                                                <img src="../src/img/avatar.png" alt="avatar" class="w-10 h-10 rounded-full">
                                            </a>
                                        </div>
                                        <div class="relative p-3 flex flex-col rounded-r-lg rounded-tl-lg bg-surface-100 dark:bg-surfacedark-100">
                                            <a href="project-detail.html#" class="text-title-md text-gray-900 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-200 mb-0.5">James Rich <span class="text-body-sm text-gray-500">10 minutes ago</span></a>
                                            <p class="text-body-md text-gray-600 dark:text-gray-400">How many tasks will we do in this project?</p>
                                            <a href="project-detail.html#" class="text-label-md hover:text-primary-600 dark:hover:text-primary-200 hover:underline">Reply</a>
                                        </div>
                                    </div>
                                    <ul class="pl-12">
                                        <li>
                                            <div class="flex flex-start gap-3 py-2">
                                                <div class="w-10 h-10 flex-none rounded-full font-bold bg-primary-600 dark:bg-primary-200">
                                                    <a href="project-detail.html#">
                                                        <img src="../src/img/avatar.png" alt="avatar" class="w-10 h-10 rounded-full">
                                                    </a>
                                                </div>
                                                <div class="relative p-3 flex flex-col rounded-r-lg rounded-tl-lg bg-surface-100 dark:bg-surfacedark-100">
                                                    <a href="project-detail.html#" class="text-title-md text-gray-900 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-200 mb-0.5">Ari Budin <span class="text-body-sm text-gray-500">10 minutes ago</span></a>
                                                    <p class="text-body-md text-gray-600 dark:text-gray-400">Maybe 45 total tasks</p>
                                                    <a href="project-detail.html#" class="text-label-md hover:text-primary-600 dark:hover:text-primary-200 hover:underline">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex flex-start gap-3 py-2">
                                                <div class="w-10 h-10 flex-none rounded-full font-bold bg-primary-600 dark:bg-primary-200">
                                                    <a href="project-detail.html#">
                                                        <img src="../src/img/avatar.png" alt="avatar" class="w-10 h-10 rounded-full">
                                                    </a>
                                                </div>
                                                <div class="relative p-3 flex flex-col rounded-r-lg rounded-tl-lg bg-surface-100 dark:bg-surfacedark-100">
                                                    <a href="project-detail.html#" class="text-title-md text-gray-900 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-200 mb-0.5">James Rich <span class="text-body-sm text-gray-500">10 minutes ago</span></a>
                                                    <p class="text-body-md text-gray-600 dark:text-gray-400">Wow quite a lot!</p>
                                                    <a href="project-detail.html#" class="text-label-md hover:text-primary-600 dark:hover:text-primary-200 hover:underline">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="flex flex-start gap-3 py-2">
                                        <div class="w-10 h-10 flex-none rounded-full font-bold bg-primary-600 dark:bg-primary-200">
                                            <a href="project-detail.html#">
                                                <img src="../src/img/avatar.png" alt="avatar" class="w-10 h-10 rounded-full">
                                            </a>
                                        </div>
                                        <div class="relative p-3 flex flex-col rounded-r-lg rounded-tl-lg bg-surface-100 dark:bg-surfacedark-100">
                                            <a href="project-detail.html#" class="text-title-md text-gray-900 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-200 mb-0.5">Jesica tan <span class="text-body-sm text-gray-500">10 minutes ago</span></a>
                                            <p class="text-body-md text-gray-600 dark:text-gray-400">I have completed 3 tasks today</p>
                                            <a href="project-detail.html#" class="text-label-md hover:text-primary-600 dark:hover:text-primary-200 hover:underline">Reply</a>
                                        </div>
                                    </div>
                                    <ul class="pl-12">
                                        <li>
                                            <div class="flex flex-start gap-3 py-2">
                                                <div class="w-10 h-10 flex-none rounded-full font-bold bg-primary-600 dark:bg-primary-200">
                                                    <a href="project-detail.html#">
                                                        <img src="../src/img/avatar.png" alt="avatar" class="w-10 h-10 rounded-full">
                                                    </a>
                                                </div>
                                                <div class="relative p-3 flex flex-col rounded-r-lg rounded-tl-lg bg-surface-100 dark:bg-surfacedark-100">
                                                    <a href="project-detail.html#" class="text-title-md text-gray-900 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-200 mb-0.5">Ari Budin <span class="text-body-sm text-gray-500">10 minutes ago</span></a>
                                                    <p class="text-body-md text-gray-600 dark:text-gray-400">Good job</p>
                                                    <a href="project-detail.html#" class="text-label-md hover:text-primary-600 dark:hover:text-primary-200 hover:underline">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="flex flex-start gap-3 py-2">
                                        <div class="w-10 h-10 flex-none rounded-full font-bold bg-primary-600 dark:bg-primary-200">
                                            <a href="project-detail.html#">
                                                <img src="../src/img/avatar.png" alt="avatar" class="w-10 h-10 rounded-full">
                                            </a>
                                        </div>
                                        <div class="relative p-3 flex flex-col rounded-r-lg rounded-tl-lg bg-surface-100 dark:bg-surfacedark-100">
                                            <a href="project-detail.html#" class="text-title-md text-gray-900 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-200 mb-0.5">James Rich <span class="text-body-sm text-gray-500">10 minutes ago</span></a>
                                            <p class="text-body-md text-gray-600 dark:text-gray-400">Invite a few more members for marketing assignments</p>
                                            <a href="project-detail.html#" class="text-label-md hover:text-primary-600 dark:hover:text-primary-200 hover:underline">Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex flex-start gap-3 py-2">
                                        <div class="w-10 h-10 flex-none rounded-full font-bold bg-primary-600 dark:bg-primary-200">
                                            <a href="project-detail.html#">
                                                <img src="../src/img/avatar.png" alt="avatar" class="w-10 h-10 rounded-full">
                                            </a>
                                        </div>
                                        <div class="relative p-3 flex flex-col rounded-r-lg rounded-tl-lg bg-surface-100 dark:bg-surfacedark-100">
                                            <a href="project-detail.html#" class="text-title-md text-gray-900 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-200 mb-0.5">Daniel Sananta <span class="text-body-sm text-gray-500">10 minutes ago</span></a>
                                            <p class="text-body-md text-gray-600 dark:text-gray-400">What do you think about this design?</p>
                                            <div>
                                                <!-- file attach -->
                                                <a href="project-detail.html#" class="relative my-2 inline-flex flex-row items-center justify-start gap-x-2 px-2 py-1.5 text-label-sm rounded-full border border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400">
                                                    <span class="material-symbols-outlined !text-base text-red-500">image</span>
                                                    Photos.jpg
                                                </a>
                                            </div>
                                            <a href="project-detail.html#" class="text-label-md hover:text-primary-600 dark:hover:text-primary-200 hover:underline">Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex flex-start gap-3 py-2">
                                        <div class="w-10 h-10 flex-none rounded-full font-bold bg-primary-600 dark:bg-primary-200">
                                            <a href="project-detail.html#">
                                                <img src="../src/img/avatar.png" alt="avatar" class="w-10 h-10 rounded-full">
                                            </a>
                                        </div>
                                        <div class="relative p-3 flex flex-col rounded-r-lg rounded-tl-lg bg-surface-100 dark:bg-surfacedark-100">
                                            <a href="project-detail.html#" class="text-title-md text-gray-900 dark:text-gray-100 hover:text-primary-600 dark:hover:text-primary-200 mb-0.5">Daniel Sananta <span class="text-body-sm text-gray-500">10 minutes ago</span></a>
                                            <p class="text-body-md text-gray-600 dark:text-gray-400">I have a new design for a new website</p>
                                            <div class="flex max-sm:flex-col sm:flex-row items-center gap-2">
                                                <!-- file attach -->
                                                <a href="project-detail.html#" class="relative my-2 inline-flex flex-row items-center justify-start gap-x-2 px-2 py-1.5 text-label-sm rounded-full border border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400">
                                                    <span class="material-symbols-outlined !text-base text-red-500">code</span>
                                                    Landing-page.html
                                                </a>
                                                <a href="project-detail.html#" class="relative my-2 inline-flex flex-row items-center justify-start gap-x-2 px-2 py-1.5 text-label-sm rounded-full border border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400">
                                                    <span class="material-symbols-outlined !text-base text-red-500">folder_zip</span>
                                                    Project.zip
                                                </a>
                                                <a href="project-detail.html#" class="relative my-2 inline-flex flex-row items-center justify-start gap-x-2 px-2 py-1.5 text-label-sm rounded-full border border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400">
                                                    <span class="material-symbols-outlined !text-base text-red-500">picture_as_pdf</span>
                                                    New_project.pdf
                                                </a>
                                            </div>
                                            <a href="project-detail.html#" class="text-label-md hover:text-primary-600 dark:hover:text-primary-200 hover:underline">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <!-- card -->
                    <div class="py-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                        <div class="px-6 flex flex-row gap-2 items-center justify-between pb-3">
                            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Total Task (18/24)</h3>
                            <span class="text-title-md text-gray-800 dark:text-gray-200">89%</span>
                        </div>
                        <div class="relative py-3 px-6">
                            <!-- linear progress -->
                            <div class="flex bg-gray-100 dark:bg-gray-700 rounded overflow-hidden h-2">
                                <div class="flex bg-green-600 dark:bg-green-200" style="width: 89%;"></div>
                            </div>
                        </div>

                        <div class="relative">
                            <ul class="task-check h-72 body-md overflow-y-auto scrollbars show mb-6 px-6">
                                <li class="relative py-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="checked-1" value="1" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px] mr-4">
                                        <span>Send Email to Mr <span class="font-bold">Gabriel</span> at <span class="text-gray-500">18.00 pm</span></span>
                                    </label>
                                </li>
                                <li class="relative py-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="checked-1" value="1" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px] mr-4">
                                        <span>Call Mr <span class="font-bold">Theo Davis</span> at <span class="text-gray-500">16.00 pm</span></span>
                                    </label>
                                </li>
                                <li class="relative py-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="checked-1" value="1" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px] mr-4">
                                        <span>Meeting with Mr <span class="font-bold">Adreas Rose</span> at <span class="text-gray-500">15.00 am</span> in Zoom</span>
                                    </label>
                                </li>
                                <li class="relative py-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="checked-2" value="1" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px] mr-4" checked="">
                                        <span>Call Mr <span class="font-bold">Toni Anderson</span> at <span class="text-gray-500">12.00 am</span></span>
                                    </label>
                                </li>
                                <li class="relative py-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="checked-3" value="1" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px] mr-4" checked="">
                                        <span>Meeting with Mr <span class="font-bold">John Doe</span> at <span class="text-gray-500">12.00 am</span> in Zoom</span>
                                    </label>
                                </li>
                                <li class="relative py-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="checked-2" value="1" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px] mr-4" checked="">
                                        <span>Call Mr <span class="font-bold">Adreas Rose</span> at <span class="text-gray-500">12.00 am</span></span>
                                    </label>
                                </li>
                                <li class="relative py-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="checked-3" value="1" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px] mr-4" checked="">
                                        <span>Meeting with Mr <span class="font-bold">John Doe</span> at <span class="text-gray-500">12.00 am</span> in Zoom</span>
                                    </label>
                                </li>
                                <li class="relative py-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="checked-2" value="1" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px] mr-4" checked="">
                                        <span>Call Mrs <span class="font-bold">Jenifer Tan</span> at <span class="text-gray-500">12.00 am</span></span>
                                    </label>
                                </li>
                                <li class="relative py-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="checked-3" value="1" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px] mr-4" checked="">
                                        <span>Meeting with Mr <span class="font-bold">John Doe</span> at <span class="text-gray-500">12.00 am</span> in Zoom</span>
                                    </label>
                                </li>
                                <li class="relative py-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="checked-2" value="1" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px] mr-4" checked="">
                                        <span>Call Mr <span class="font-bold">Adreas</span> at <span class="text-gray-500">12.00 am</span></span>
                                    </label>
                                </li>
                                <li class="relative py-3">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="checked-3" value="1" class="w-[18px] h-[18px] flex-none accent-primary-600 hover:accent-primary-600 dark:accent-primary-200 dark:hover:accent-primary-200 rounded-[2px] mr-4" checked="">
                                        <span>Meeting with Mr <span class="font-bold">John Doe</span> at <span class="text-gray-500">12.00 am</span> in Zoom</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="py-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                        <div class="px-6 flex flex-row gap-2 items-center justify-between pb-3">
                            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Project Activities</h3>
                        </div>
                        <div class="relative">
                            <div class="h-72 overflow-y-auto scrollbars show pl-6 pr-6">
                                <ul class="relative border-l border-gray-200 dark:border-gray-700">
                                    <li class="mb-4 ml-4">
                                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                        <time datetime="2023-06-12 20:00" class="mb-1 label-sm text-gray-400 dark:text-gray-500">June 12</time>
                                        <h3 class="tracking-wide font-semibold">Conduct Stakeholder Interviews</h3>
                                        <p class="body-md text-gray-500">Schedule and conduct interviews with key stakeholders to gather requirements and understand their needs</p>
                                    </li>
                                    <li class="mb-4 ml-4">
                                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                        <time datetime="2023-06-12 20:00" class="mb-1 label-sm text-gray-400 dark:text-gray-500">June 12</time>
                                        <h3 class="tracking-wide font-semibold">Create System Wireframes</h3>
                                        <p class="body-md text-gray-500">Design the user interface wireframes to visualize the system's layout and functionality</p>
                                    </li>
                                    <li class="mb-4 ml-4">
                                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                        <time datetime="2023-06-12 20:00" class="mb-1 label-sm text-gray-400 dark:text-gray-500">June 12</time>
                                        <h3 class="tracking-wide font-semibold">Develop Database Schema</h3>
                                        <p class="body-md text-gray-500">Design and develop the database schema to store and manage sales-related data</p>
                                    </li>
                                    <li class="mb-4 ml-4">
                                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                        <time datetime="2023-06-12 20:00" class="mb-1 label-sm text-gray-400 dark:text-gray-500">June 12</time>
                                        <h3 class="tracking-wide font-semibold">Implement User Authentication</h3>
                                        <p class="body-md text-gray-500">Develop user authentication functionality to ensure secure access to the system</p>
                                    </li>
                                    <li class="mb-4 ml-4">
                                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                        <time datetime="2023-06-12 20:00" class="mb-1 label-sm text-gray-400 dark:text-gray-500">June 12</time>
                                        <h3 class="tracking-wide font-semibold">Build Dashboard Module</h3>
                                        <p class="body-md text-gray-500">Develop a dashboard module to provide an overview of sales performance and key metrics</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>