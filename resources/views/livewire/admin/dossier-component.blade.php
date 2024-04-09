<div>
    @include('extends.admin-side-bar')
    <main class="lg:flex">
        @include('extends.admin-aside')
        <!-- content -->
        <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
            <!-- heading -->
            <div class="flex flex-row justify-between items-center pt-2 pb-6">
                <h2 class="text-title-lg">Dossier</h2>
            </div>

            <!-- content 1 -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 mb-4 md:mb-6">
                <div class="col-span-1 flex flex-col gap-6">
                    <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg shadow-gray-100/10 dark:shadow-gray-700/10 overflow-hidden">
                        <!-- cover -->
                        <div class="overflow-hidden">
                            <div class="group h-36 overflow-hidden relative">
                                <img src="{{ asset('admin/src/img/cover/cover.jpg') }}" alt="cover image" class="w-full">
                            </div>

                            <div class="flex justify-center -mt-10 relative">
                                <img src="{{ asset('admin/src/img/cover/user.png') }}" alt="avatar" class="rounded-full w-24 h-24 bg-primary-600 text-white dark:bg-primary-200 dark:text-neutral-900 border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-4 pb-6 pt-2">
                                <h3 class="text-title-lg text-gray-900 dark:text-gray-100 mb-1">{{ $name }}</h3>
                                <p class="text-body-md text-gray-600 dark:text-gray-400">{{ $niveau.' '.$serie }}</p>
                            </div>
                        </div>
                        <!-- information -->
                        <div class="text-body-md flex flex-col gap-1 px-6 pb-6">
                            <p><strong>Téléphone :</strong><span class="ml-2">{{ $telephone }}</span></p>
                            <p><strong>Email :</strong><span class="ml-2">{{ $email }}</span></p>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="p-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                        <div class="flex flex-row gap-2 items-center justify-between pb-3">
                            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Gallery</h3>
                        </div>
                        <div class="relative grid grid-cols-3 gap-2">
                            <a href="../src/img/gallery/gal1.jpg" data-glightbox="title: Photo title; description: This i photo description" class="glightbox3 overflow-hidden" data-gallery="gallery1">
                                <img class="hover:scale-150 transition duration-400" src="../src/img/gallery/gal1.jpg" alt="gallery image">
                            </a>
                            <a href="../src/img/gallery/gal2.jpg" data-glightbox="title: Photo title; description: This i photo description" class="glightbox3 overflow-hidden" data-gallery="gallery1">
                                <img class="hover:scale-150 transition duration-400" src="../src/img/gallery/gal2.jpg" alt="gallery image">
                            </a>
                            <a href="../src/img/gallery/gal3.jpg" data-glightbox="title: Photo title; description: This i photo description" class="glightbox3 overflow-hidden" data-gallery="gallery1">
                                <img class="hover:scale-150 transition duration-400" src="../src/img/gallery/gal3.jpg" alt="gallery image">
                            </a>
                            <a href="../src/img/gallery/gal4.jpg" data-glightbox="title: Photo title; description: This i photo description" class="glightbox3 overflow-hidden" data-gallery="gallery1">
                                <img class="hover:scale-150 transition duration-400" src="../src/img/gallery/gal4.jpg" alt="gallery image">
                            </a>
                            <a href="../src/img/gallery/gal5.jpg" data-glightbox="title: Photo title; description: This i photo description" class="glightbox3 overflow-hidden" data-gallery="gallery1">
                                <img class="hover:scale-150 transition duration-400" src="../src/img/gallery/gal5.jpg" alt="gallery image">
                            </a>
                            <a href="../src/img/gallery/gal6.jpg" data-glightbox="title: Photo title; description: This i photo description" class="glightbox3 overflow-hidden" data-gallery="gallery1">
                                <img class="hover:scale-150 transition duration-400" src="../src/img/gallery/gal6.jpg" alt="gallery image">
                            </a>
                            <a href="../src/img/gallery/gal7.jpg" data-glightbox="title: Photo title; description: This i photo description" class="glightbox3 overflow-hidden" data-gallery="gallery1">
                                <img class="hover:scale-150 transition duration-400" src="../src/img/gallery/gal7.jpg" alt="gallery image">
                            </a>
                            <a href="../src/img/gallery/gal8.jpg" data-glightbox="title: Photo title; description: This i photo description" class="glightbox3 overflow-hidden" data-gallery="gallery1">
                                <img class="hover:scale-150 transition duration-400" src="../src/img/gallery/gal8.jpg" alt="gallery image">
                            </a>
                            <a href="../src/img/gallery/gal9.jpg" data-glightbox="title: Photo title; description: This i photo description" class="glightbox3 overflow-hidden" data-gallery="gallery1">
                                <img class="hover:scale-150 transition duration-400" src="../src/img/gallery/gal9.jpg" alt="gallery image">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-2 flex flex-col gap-6">
                    <!-- new story -->
                    <div class="flex flex-col rounded-xl bg-white dark:bg-gray-900">
                        <div class="px-4 pt-6 pb-4 flex flex-col gap-2">
                            <!-- user -->
                            <div class="w-full flex flex-row gap-3">
                                <div class="w-10 h-10 flex-none rounded-full bg-primary-600 dark:bg-primary-200">
                                    <a href="profile.html#">
                                        <img src="../src/img/avatar.png" alt="avatar" class="w-10 h-10 rounded-full flex-none">
                                    </a>
                                </div>
                                <div data-type="dialogs" data-target="#dialog_xa" class="relative flex flex-col w-full gap-2">
                                    <input type="search" placeholder="Write your story..." class="relative grow block w-full h-12 rounded-full bg-surface-200 dark:bg-surfacedark-200 py-2 px-4 ring-0 focus:outline-none">
                                    <!-- more story -->
                                    <div class="flex flex-row items-center text-body-sm md:text-body-md">
                                        <button class="p-2 flex flex-row items-center gap-2">
                                            <span class="material-symbols-outlined text-pink-500">image</span>
                                            <span>Photo</span>
                                        </button>
                                        <button class="p-2 flex flex-row items-center gap-2">
                                            <span class="material-symbols-outlined text-green-500">videocam</span>
                                            <span>Video</span>
                                        </button>
                                        <button class="p-2 flex flex-row items-center gap-2">
                                            <span class="material-symbols-outlined text-yellow-500">add_reaction</span>
                                            <span>Emotion</span>
                                        </button>
                                    </div>
                                    <div class="absolute inset-0"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- card story -->
                    <div class="flex flex-col rounded-xl bg-white dark:bg-gray-900">
                        <!-- story -->
                        <div class="relative text-body-lg text-gray-600 dark:text-gray-400 px-4 pb-4">
                            <p>Spent the weekend diving into the world of Tailwind CSS and Material Design 3. Can't wait to implement all the cool features in my projects.</p>
                        </div>
                        <!-- info -->
                        <div class="flex flex-row gap-1 items-center px-2 md:px-4 py-2">


                            <!-- comment -->
                            <button data-type="dialogs" data-target="#dialog_comment" class="relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:bg-surface-200 dark:hover:bg-surfacedark-200">
                                <span class="material-symbols-outlined">chat</span>
                                <span>24</span><span class="hidden md:inline">Comment</span>
                            </button>

                            <!-- share -->
                            <button class="relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:bg-surface-200 dark:hover:bg-surfacedark-200">
                                <span class="material-symbols-outlined">chat</span>
                                Share
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <div id="dialog_a" class="[&.show_.backDialog]:opacity-60 [&.show]:opacity-100 [&.show]:h-full  [&.show]:inset-0 [&.show_.backDialog]:inset-0 duration-[400ms] ease-[cubic-bezier(0, 0, 1)] opacity-0 w-full h-0 z-50 overflow-auto fixed left-0 top-0 flex items-center justify-center {{ ($isFormOpen==true) ? 'show' : '' }}">
        <div data-close="#dialog_a" class="backDialog z-40 overflow-auto fixed bg-black"></div>

        <!-- dialogs -->
        <div class="z-50 flex flex-col w-11/12 sm:w-[480px] h-auto bg-surface-100 dark:bg-surfacedark-100 rounded-[28px]">
            <div class="flex flex-col gap-4 justify-start py-6">
                <div class="flex justify-between items-center px-6">
                    <h3 class="text-title-lg leading-7 font-normal text-gray-900 dark:text-gray-100">
                        {{ ($editModalOpen) ? "Changer ou remplacer le document" : "Ajouter un nouveau document" }}
                    </h3>
                    <!-- close -->
                    <div data-close="#dialog_a" class="material-symbols-outlined cursor-pointer">close</div>
                </div>

                <!-- Form -->
                <form class="flex flex-col gap-4 py-2 px-6 md:max-h-[45vw] overflow-auto scrollbars show">
                    <div class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            Si vous devez télécharger plus de deux fichier, merci d'utiliser ce lien :
                            <a class="text-red-600" href="https://www.ilovepdf.com/fr/fusionner_pdf" target="_blank">www.ilovepdf.com/fr/fusionner_pdf</a> pour fusionner les documents avant de les téléchargés
                        </div>
                    </div>
                    @if($editModalOpen)


                        <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex items-center justify-between mb-4">
                                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Fichier actuellement disponible</h5>
                            </div>
                            <div class="flow-root">
                                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <span class="w-8 h-8 rounded-full" aria-label="{{ $libelle }}" data-microtip-position="right" role="tooltip">
                                                    <i class="fa fa-3x fa-file"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1 min-w-0 ms-4">
                                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white textCoupe">
                                                    {{ $libelle }}
                                                </p>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                <a style="cursor: pointer;" type="button" wire:click="download({{ $idNiv }})" aria-label="Télécharger le document" data-microtip-position="left" role="tooltip"><i class="fa fa-download"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    @endif
                    <div class="relative z-0">
                        <input type="file" aria-label="deal1" wire:model="file" id="deal1" class="w-full h-14 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder="2023-2024"  required>

                        <label for="deal1" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-7 scale-75 top-4 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7 peer-focus:bg-surface-300 dark:peer-focus:bg-surfacedark-300 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Document</label>
                    </div>
                    <div class="text-red-800 text-xs">@error('file') {{ $message }} @enderror</div>
                    <div class="relative">
                        <button wire:click.prevent="store()" class="btn w-full relative flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                            <span class="material-symbols-outlined">add</span><span class="ml-1 compact-hide">
                                 {{ ($editModalOpen) ? " Remplacer le fichier" : "Ajouter un fichier" }}
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@push('styles')
    <style>
        .tableth th{
            font-weight: normal;
            color: #8e9199;
            font-size: 12px;
        }
        .tabletr td {
            padding: 10px 0px;
            font-size: 14px;
            color: black;
        }
        .tabletr td a{
            color: #0000cc;
            cursor: pointer;
        }
        .tabletr td a:hover{
            color: #5e5ed8;
            cursor: pointer;
        }
        .textCoupe{
            width: 140px;
            padding: 0;
            overflow: hidden;
            position: relative;
            display: inline-block;
            margin: 0 5px 0 5px;
            text-align: center;
            text-decoration: none;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
@endpush