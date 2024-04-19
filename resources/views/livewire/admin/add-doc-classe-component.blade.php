<div>

    <div class="main-content flex-grow min-h-[100%] relative px-4 lg:pr-8 lg:pl-3">
        <!-- heading -->
        <div class="flex flex-row justify-between items-center pt-2 pb-6">
           <div>
            <div class="relative z-0">
                <select wire:model="document" id="examplexs2" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200">
                    <option selected="">Merci de sélectionner un document</option>
                        @foreach($documents as $doc)
                            <option value="{{ $doc->id }}">{{ $doc->libelle }}</option>
                        @endforeach
                </select>
            </div>
           </div>

           <div>
            <div class="relative z-0">
                <select wire:model="statut" id="examplexs2" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200">
                    <option selected="">Sélectionner le statut du document</option>
                    <option value="Obligatoire">Obligatoire</option>
                    <option value="A confirmer">A confirmer</option>
                </select>
            </div>
           </div>
            
            <!-- action -->
            <div class="flex flex-row gap-3 items-center">
                <!-- add new -->
                <div class="relative z-0">
                    <button wire:click.prevent="store()" class="btn relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                        <span class="material-symbols-outlined">add</span>
                        Ajouter le document
                    </button>
                  </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:gap-4 md:gap-6">
            <!-- card -->
            <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                <div class="pb-4 flex justify-center">
                    <button class="btn-elevated relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] shadow-lg text-md tracking-[.00714em] font-medium bg-surface-100 hover:bg-surface-200 focus:bg-surface-400 text-primary-600 dark:bg-surfacedark-100 dark:hover:bg-surfacedark-200 dark:focus:bg-surfacedark-400 dark:text-primary-200">
                        <span class="material-symbols-outlined">
                            folder_data
                            </span> Demandes en cours de traitement
                      </button>
                </div>
                <div class="relative overflow-auto scrollbars">
                    <!-- customers table -->
                    <table class="table-sorter table-bordered-bottom table-hover">
                        <thead>
                        <tr>
                            <th style="font-weight: bold">Documents</th>
                            <th style="font-weight: bold">Statut</th>
                            <th style="font-weight: bold">Etat</th>
                            <th style="font-weight: bold">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($docus as $de)
                             <tr class="[&amp;.selected]:!bg-primary-100 dark:[&amp;.selected]:!bg-primary-700 text-center">
                                 <td>{{ $de->libelle }}</td>
                                 <td>
                                    @if($de->obligation == "Obligatoire")
                                        <span class="text-red-500 text-md">Obligatoire</span>
                                    @else
                                        <span class="text-red-500 text-md">A confirmer</span>
                                    @endif
                                 </td>
                                <td>
                                    @if($de->etat == 0)
                                        <span class="items-center h-6 px-3 py-3 text-label-sm text-green-700 dark:text-green-200 bg-green-100 dark:bg-opacity-20 rounded-full">Active</span>
                                    @else
                                        <span class="items-center h-6 px-3 text-label-sm text-pink-700 dark:text-pink-200 bg-pink-100 dark:bg-opacity-20 rounded-full">Désactive</span>
                                    @endif
                                </td>
                                <td>
                                    <button wire:click="confirmed('{{ $de->id }}')"
                                        type="button"
                                        wire:confirm.prompt="Voulez-vous vraiment supprimer?\n\nTaper SUPPRIMER pour confirmer|SUPPRIMER"
                                        class="ms-3 font-medium text-red-600 dark:text-red-500 hover:underline">
                                                <span class="material-symbols-outlined">
                                                    delete
                                                    </span>
                                </button>
                                <button wire:click="actived('{{ $de->id }}')"
                                        type="button"
                                        class="ms-3 font-medium text-yellow-600 dark:text-green-500 hover:underline">
                                        <span class="material-symbols-outlined" aria-label="Activer/Désactiver" data-microtip-position="top" role="tooltip">
                                            power_settings_new
                                        </span>
                                </button>
                                </td>
                            </tr>
                        @empty
                        <tr class="[&amp;.selected]:!bg-primary-100 dark:[&amp;.selected]:!bg-primary-700 text-center">
                            <td colspan="4">
                                <div class="flex justify-center items-center">
                                    <span class="font-medium py-8 text-gray-400 text-xl">
                                        No data found...
                                    </span>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
    </div>
   
</div>