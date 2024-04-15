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
                            <p><strong>Adresse :</strong><span class="ml-2">{{ $adresse }}</span></p>
                            <p><strong>Dépôt :</strong><span class="ml-2">
                                    <span class="inline-flex items-center h-6 px-3 text-label-md text-yellow-700 dark:text-yellow-200 bg-yellow-100 dark:bg-opacity-20 rounded-full">{{ \Carbon\Carbon::parse($date)->format('d/m/Y h:m:s') }}</span></span></p>
                        </div>
                    </div>

                    <!-- card -->
                    <div class="p-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                        @if($statusDem == 1)
                        <button wire:click="sendDelib()" class="btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-green-300 text-primary-900 dark:bg-blue-700 dark:text-blue-100">
                                <span class="material-symbols-outlined">done</span>
                                <span class="hidden lg:inline">Envoyer pour délibération</span>
                            </button>
                            @elseif ($statusDem == 3 )
                            @if(auth()->user()->role == 2)
                            <button wire:click="addNotif()" class="btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-green-300 text-green-900 dark:bg-green-700 dark:text-green-100">
                                <span class="material-symbols-outlined">done</span>
                                <span class="hidden lg:inline">Validé la demande</span>
                            </button>
                            <button wire:click="addNotif()" class=" mt-2 btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-red-300 text-red-900 dark:bg-red-700 dark:text-red-100">
                                <span class="material-symbols-outlined">
                                    dangerous
                                    </span>
                                <span class="hidden lg:inline">Refusé la demande</span>
                            </button>
                            @else
                            <button class="btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-yellow-300 text-yellow-900 dark:bg-yellow-700 dark:text-yellow-100">
                                <span class="material-symbols-outlined">
                                    hourglass_top
                                    </span>
                                <span class="hidden lg:inline">En attente déliberation</span>
                            </button>
                            @endif
                            @elseif ($statusDem == 4)
                            <button wire:click="addNotif()" class="btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-green-300 text-primary-900 dark:bg-blue-700 dark:text-blue-100">
                                <span class="material-symbols-outlined">
                                    block
                                    </span>
                                <span class="hidden lg:inline">Demande refusée</span>
                            </button>
                            @else
                            <button wire:click="addNotif()" class="btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-green-300 text-primary-900 dark:bg-blue-700 dark:text-blue-100">
                                <span class="material-symbols-outlined">
                                    file_download_done
                                    </span>
                                <span class="hidden lg:inline">Demande validée</span>
                            </button>
                            @endif
                            
                            
                    </div>
                </div>

                <div class="md:col-span-2 flex flex-col gap-6">
                    <!-- new story -->
                    <div class="flex flex-col rounded-xl bg-white dark:bg-gray-900" wire:ignore>
                        <div class="px-4 pt-6 pb-4 flex flex-col gap-2" >
                            <!-- user -->
                            <div class="py-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                                <div class="px-6 flex flex-row gap-2 items-center justify-between pb-3">
                                    <h3 class="text-title-md text-gray-800 dark:text-gray-200"><b><span class="text-green-500">{{ $designation }} {{ $intitule }}</span></b></h3>
                                    <span class="text-title-md text-gray-800 dark:text-gray-200" >{{ $this->avancement() }}% - etape: {{ $this->avancementTxt() }}</span>
                                </div>
                                <div class="relative py-3 px-6">
                                    <!-- linear progress -->
                                    <div class="flex bg-gray-100 dark:bg-gray-700 rounded overflow-hidden h-2">
                                        <div class="flex {{ ($this->avancementTxt() == "Dossier refusé" ? 'bg-red-600 dark:bg-red-200' : 'bg-green-600 dark:bg-green-200') }}" style="width: {{ $this->avancement() }}%;"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-3 py-6">
                    @forelse($documents as $doc)
                    <div class="w-full  h-auto rounded-xl bg-gray-100 dark:bg-gray-700 flex flex-col">
                        <!-- header -->
                        <div class="flex flex-row justify-between items-center py-3 px-4">
                            <div class="flex flex-row items-center gap-4">
                                <div class="w-10 h-10 flex items-center justify-center rounded-full title-md font-bold bg-primary-600 text-white">D</div>
                                <div class="flex flex-col">
                                    <h3 class="title-md text-gray-900 dark:text-gray-100">
                                        @if($doc->etat == 0)
                                            <span class='text-red-500'>Non déposé</span>
                                        @elseif( $doc->etat == 1)
                                            <span class='text-green-500'>En attente de validation</span>
                                        @elseif($doc->etat == 2)
                                            <span class='text-red-500'>Fichier incorrect</span>
                                        @else
                                            <span class='text-green-500'>Validé le {{ \Carbon\Carbon::parse($doc->updated_at)->format('d-m-Y') }}</span>
                                        @endif
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- image -->
                        <img src="{{ asset('admin/src/img/media/media.png') }}" alt="title image" class="max-w-full w-full">
                        <!-- content -->
                        <div class="p-4 flex flex-col gap-4">
                            <p class="text-body-md">{{ $doc->libelle }}</p>
                            <div class="flex flex-row justify-end items-center gap-3">
                                @if($doc->etat != 0)
                                <button wire:click="editModal({{ $doc->id }})" class="btn-outline relative flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-full text-sm tracking-[.00714em] font-medium border border-gray-500 text-primary-600 dark:border-gray-400 dark:text-primary-200">
                                    Consulter
                                </button>

                                @else
                                    <button disabled class="btn relative flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-full hover:shadow-md text-sm tracking-[.00714em] font-medium bg-gray-400 text-black dark:bg-primary-200 dark:text-primary-800">
                                        En attente dépôt
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- fullscreen dialogs -->
    <div id="dialog_xb" class="[&.show]:opacity-100 [&.show]:h-full [&.show]:inset-0 [&.show_.dialog]:flex [&.show_.dialog]:inset-0 opacity-0 w-full h-0 z-50 overflow-auto fixed left-0 top-0 flex items-center justify-center {{ ($isFormOpen==true) ? 'show' : '' }}" >
        <div class="backDialog opacity-0"></div>
        <!-- dialogs -->
        <div class="dialog hidden z-50 flex-col gap-2 fixed bg-neutral-10 dark:bg-neutral-900">
            <!-- header -->
            <div class="min-h-[56px] flex flex-row items-center gap-4 px-4 pt-6">
                <h3 class="text-title-lg flex flex-grow"><b>Consulter le document déposé</b> </h3>

                <button data-close="#dialog_xb"  class="relative flex flex-row items-center justify-center gap-x-2 py-2.5 px-4 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium text-primary-600 hover:bg-surface-200 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-200 dark:focus:bg-surfacedark-400">
                    <span class="material-symbols-outlined">close</span>
                    Fermer
                </button>
            </div>
            <!-- body -->
            <div class="relative text-body-lg px-8 md:px-20 py-4 overflow-y-scroll scrollbars flex justify-center">
                    <div class="flex flex-col p-4 mb-4 relative">
                        <div class="p-4 flex-wrap rounded flex gap-4 items-center mb-6">
                            @if($etat == 3)
                                <button wire:click="store(3)" class="btn-outline relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium border border-green-500 text-green-600 dark:border-green-400 dark:text-green-200">
                                <span class="material-symbols-outlined">
                                    check_circle
                                    </span>Le document a été accepté
                                </button>
                            @elseif($etat == 2)
                                <button disabled class="btn-outline relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium border border-red-500 text-red-600 dark:border-red-400 dark:text-red-200">
                                <span class="material-symbols-outlined">
                                report
                                </span>
                                    Document marqué non conforme
                                </button>
                            @else
                                <button wire:click="store(3)" x-on:click="$wire.$refresh()" class="btn-outline relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium border border-green-500 text-green-600 dark:border-green-400 dark:text-green-200">
                                <span class="material-symbols-outlined">
                                    check_circle
                                    </span>Accepter le document
                                </button>
                                <button wire:click="store(2)" x-on:click="$wire.$refresh()" class="btn-outline relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium border border-red-500 text-red-600 dark:border-red-400 dark:text-red-200">
                                <span class="material-symbols-outlined">
                                report
                                </span>
                                    Marquer non conforme
                                </button>
                            @endif
                        </div>
                    </div>
                    <div class="w-1/2 flex p-4 items-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 relative">
                        <object width="100%" class="containe" data="{{ asset('storage/candidat/'.$docum) }}"></object>
                    </div>
            </div>
        </div>
    </div>


    <div id="dialog_a" class="[&.show_.backDialog]:opacity-60 [&.show]:opacity-100 [&.show]:h-full [&.show]:inset-0 [&.show_.backDialog]:inset-0 duration-[400ms] ease-[cubic-bezier(0, 0, 1)] opacity-0 w-full h-0 z-50 overflow-auto fixed left-0 top-0 flex items-center justify-center {{ ($isFormOpenD==true) ? 'show' : '' }}">
        <div data-close="#dialog_a" class="backDialog z-40 overflow-auto fixed bg-black"></div>

        <!-- dialogs -->
        <div class="z-50 flex flex-col w-11/12 sm:w-[480px] h-auto bg-surface-100 dark:bg-surfacedark-100 rounded-[28px]">
            <div class="flex flex-col gap-4 justify-start py-6">
                <div class="flex justify-between items-center px-6">
                    <h3 class="text-title-lg leading-7 font-normal text-gray-900 dark:text-gray-100">
                        {{ ($editModalOpen) ? "Modifier l'année scolaire" : "Ajouter une année scolaire" }}

                    </h3>

                    <!-- close -->
                    <div data-close="#dialog_a" class="material-symbols-outlined cursor-pointer">close</div>
                </div>

                <!-- Form -->
                <form class="flex flex-col gap-4 py-2 px-6 md:max-h-[45vw] overflow-auto scrollbars show">
                    <div class="relative z-0">
                        <input type="text" aria-label="deal1" wire:model="annee_scolaire" id="deal1" class="w-full h-14 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder="2023-2024"  required>

                        <label for="deal1" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-7 scale-75 top-4 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7 peer-focus:bg-surface-300 dark:peer-focus:bg-surfacedark-300 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Année scolaire</label>
                    </div>
                    <div class="text-red-800 text-xs">@error('annee_scolaire') {{ $message }} @enderror</div>
                    <div class="relative">
                        <button wire:click.prevent="store()" class="btn w-full relative flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                            <span class="material-symbols-outlined">add</span><span class="ml-1 compact-hide">
                                 {{ ($editModalOpen) ? "Mettre à jour" : " Ajouter une année" }}
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

        /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    .containe{
        height:150px;
    }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    .containe{
        height:250px;
    }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
    .containe{
        height:350px;
    }
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    .containe{
        height:450px;
    }
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
    .containe{
        height:650px;
    }
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