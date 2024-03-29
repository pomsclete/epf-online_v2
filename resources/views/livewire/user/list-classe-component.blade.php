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
            <div class="p-6 flex flex-col rounded-xl [&amp;.active]:bg-primary-100 dark:[&amp;.active]:bg-primary-700 [&amp;.active_.progress-bg]:bg-green-500 [&amp;.active_.progress-frame]:bg-green-100 dark:[&amp;.active_.progress-frame]:bg-green-900 bg-white dark:bg-gray-900 dark:shadow-gray-50/10">
                <div class="flex flex-row gap-2 items-center justify-between mb-2">
                    <h3 class="text-title-md text-gray-800 dark:text-gray-200">{{ $rec->designation }}</h3>
                    <!-- action -->
                    <div class="relative">
                        <button data-type="dropdown" data-target="#dropdown-12" class="relative !inline-flex !items-center justify-center w-150 h-10 gap-x-2 p-2.5 rounded-[6.25rem] !text-[14px] tracking-[.00714em] text-center  bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400">
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
                        <span class="text-title-sm">Marketing</span>
                        <span class="text-title-sm">54%</span>
                    </div>
                    <!-- progress -->
                    <div class="progress-frame flex bg-surface-500 dark:bg-surfacedark-500 h-2 rounded overflow-hidden">
                        <div class="progress-bg flex bg-primary-500" style="width: 54%;"></div>
                    </div>

                    <div class="flex flex-row items-center justify-between pt-6">
                        <!-- asignment -->
                        <div class="relative">
                            <button wire:click="confirmed('{{ $rec->id }}')"
                                    wire:confirm.prompt="Voulez-vous vraiment supprimer?\n\nTaper CONFIRMER pour confirmer|CONFIRMER" class="fabs relative inline-flex flex-row items-center justify-center h-12 gap-x-2 py-4 px-6 rounded-xl overflow-hidden shadow-lg text-sm tracking-[.00714em] font-medium text-white bg-primary-500 dark:bg-primary-700 dark:text-primary-100">
                               <span class="material-symbols-outlined">
                                note_add
                                </span>
                                <span class="hidden md:inline-block">Faire une demande</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- load more -->
    <div class="flex justify-center pt-8 pb-4">
        <button class="btn-outline relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium border border-gray-500 text-primary-600 dark:border-gray-400 dark:text-primary-200">
            <span class="material-symbols-outlined">sync</span>
            Load more
        </button>
    </div>
</div>
