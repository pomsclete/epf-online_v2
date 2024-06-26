<div>
    <div class="flex flex-row justify-between items-center pt-2 pb-6">
        <h2 class="text-title-lg"><b>Nos Formations par niveau</b></h2>

        <div class="flex flex-row items-center gap-4">
            <!-- Action -->
            <div class="hidden sm:flex flex-row items-center gap-2">
                <button data-type="toggle" data-target="#sorted-layout" class="material-symbols-outlined relative !inline-flex !items-center justify-center w-10 h-10 gap-x-2 py-2 px-4 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400 ml-auto">grid_view</button>

                <button data-close="#sorted-layout" class="material-symbols-outlined relative !inline-flex !items-center justify-center w-10 h-10 gap-x-2 py-2 px-4 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400 ml-auto">view_list</button>
            </div>

        </div>
    </div>
    <!-- end header -->
  <!-- end menu-->
    <div id="sorted-layout" class="show grid grid-cols-1 sm:[&amp;.show]:grid-cols-2 lg:[&amp;.show]:grid-cols-3 gap-4 md:gap-6">
        @foreach($records as $rec)
        <div>
            <!-- card -->
            <div class="{{ ($this->verif($rec->id) != 0) ? 'active' : '' }} p-6 flex flex-col rounded-xl [&amp;.active]:bg-primary-100 dark:[&amp;.active]:bg-primary-700 [&amp;.active_.progress-bg]:bg-green-500 [&amp;.active_.progress-frame]:bg-green-100 dark:[&amp;.active_.progress-frame]:bg-green-900 bg-white dark:bg-gray-900 dark:shadow-gray-50/10">
                <div class="flex flex-row gap-2 items-center justify-between mb-2">
                    <h3 class="text-title-md text-gray-800 dark:text-gray-200">{{ $rec->designation }}</h3>
                    <!-- action -->
                    <div class="relative">
                        <button wire:click="openModalAdd({{ $rec->id }})" class="relative !inline-flex !items-center justify-center w-150 h-10 gap-x-2 p-2.5 rounded-[6.25rem] !text-[14px] tracking-[.00714em] text-center  bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400">
                            Plus de détails</button>
                      </div>
                </div>
                <div class="relative">
                    <p class="text-body-lg text-gray-600 dark:text-gray-400"><b>{{ $rec->intitule }}</b></p>
                    <!-- statistic -->
                    <div class="flex flex-row items-center gap-4 py-4">
                        <div aria-label="Fichiers" data-microtip-position="top" role="tooltip" class="flex flex-row items-center gap-1">
                            <button class="relative !inline-flex !items-center justify-center w-10 h-10 gap-x-2 p-2.5 rounded-[6.25rem] !text-[20px] tracking-[.00714em] text-center font-medium bg-surface-200 dark:bg-surfacedark-200 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400 material-symbols-outlined">task</button>
                            <span class="text-label-md">{{ $annee->annee_scolaire }}</span>
                        </div>
                    </div>



                    <!-- category -->
                    <div class="flex flex-row justify-between items-center mb-2">
                        <span class="text-title-sm">{{ $this->avancementTxt($rec->id) }}</span>
                        <span class="text-title-sm">{{ $this->avancement($rec->id) }}%</span>
                    </div>
                    <!-- progress -->
                    <div class="progress-frame flex bg-surface-500 dark:bg-surfacedark-500 h-2 rounded overflow-hidden">
                        <div class="progress-bg flex bg-primary-500" style="width: {{ $this->avancement($rec->id) }}%;"></div>
                    </div>

                    <div class="flex flex-row items-center justify-between pt-6">
                        <!-- asignment   -->
                        <div class="relative">
                            @if($this->verif($rec->id) == 0)
                            <button wire:click="confirmed('{{ $rec->id }}')"
                                    wire:confirm.prompt="Voulez-vous vraiment supprimer?\n\nTaper CONFIRMER pour confirmer|CONFIRMER"
                                    class="fabs relative inline-flex flex-row items-center justify-center h-12 gap-x-2 py-4 px-6 rounded-xl overflow-hidden shadow-lg text-sm tracking-[.00714em] font-medium text-white bg-primary-500 dark:bg-primary-700 dark:text-primary-100">
                               <span class="material-symbols-outlined">
                                note_add
                                </span>
                                <span class="hidden md:inline-block">Faire une demande</span>
                            </button>
                            @else
                                <a href="{{ route('dossier',['numero' => $this->verif($rec->id)]) }}" wire:navigate
                                        class="fabs relative inline-flex flex-row items-center justify-center h-12 gap-x-2 py-4 px-6 rounded-xl overflow-hidden shadow-lg text-sm tracking-[.00714em] font-medium text-black bg-green-200 dark:bg-surfacedark-100 dark:text-primary-100">
                               <span class="material-symbols-outlined">
                                eye_tracking
                                </span>
                                    <span class="hidden md:inline-block">Suivre mon dossier</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- load more
    <div class="flex justify-center pt-8 pb-4">
        <button class="btn-outline relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium border border-gray-500 text-primary-600 dark:border-gray-400 dark:text-primary-200">
            <span class="material-symbols-outlined">sync</span>
            Load more
        </button>
    </div>-->

    <!-- fullscreen dialogs -->
    <div id="dialog_xb" class="[&.show]:opacity-100 [&.show]:h-full [&.show]:inset-0 [&.show_.dialog]:flex [&.show_.dialog]:inset-0 opacity-0 w-full h-0 z-50 overflow-auto fixed left-0 top-0 flex items-center justify-center {{ ($modalDoc==true) ? 'show' : '' }}" >
        <div class="backDialog opacity-0"></div>
        <!-- dialogs -->
        <div class="dialog hidden z-50 flex-col gap-2 fixed bg-neutral-10 dark:bg-neutral-900">
            <!-- header -->
            <div class="min-h-[56px] flex flex-row items-center gap-4 px-4 pt-6">
                <h3 class="text-title-lg flex flex-grow"><b>Programme de formation : <span class="text-green-500">{{ $designation }} {{ $intitule }}</span></b> </h3>

                <button data-close="#dialog_xb" class="relative flex flex-row items-center justify-center gap-x-2 py-2.5 px-4 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium text-primary-600 hover:bg-surface-200 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-200 dark:focus:bg-surfacedark-400">
                    <span class="material-symbols-outlined">close</span>
                    Fermer
                </button>
            </div>
            <!-- body -->
            <div class="relative text-body-lg px-8 md:px-20 py-4 overflow-y-scroll scrollbars">
                <div class="flex flex justify-center py-4 ">
                    <div class="grid grid-cols-1 gap-4">
                            <div class="relative desc z-0">
                                <h2 class="py-3 font-bold">Description</h2>
                                {!!  $description  !!}
                                <h2 class="py-2 font-bold">5 raisons de suivre cette formation</h2>
                                {!!  $raison  !!}
                                <h2 class="py-2 font-bold">Conditions d'admission</h2>
                                {!!  $condition  !!}
                                <h2 class="py-2 font-bold">Durée de la formation</h2>
                                <b class="px-2 text-green-500">{!!  $duree  !!}</b>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div  wire:loading.delay.long wire:target="confirmed">
        <div id="loading" class ='fixed top-0 left-0 z-50 block w-full h-full bg-white opacity-75'>
            <span class="relative block w-0 h-0 mx-auto my-0 opacity-75 top-1/2">
                <svg class="w-20 h-20 mr-3 -ml-1 text-red-500 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </span>
        </div>
    </div>



</div>
@push('styles')
    <style>
        .desc ul {
            list-style-type: circle;
            padding-left: 25px;
        }
    </style>
@endpush