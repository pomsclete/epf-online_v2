<div>
    <div class="flex flex justify-center py-4 ">
        <div class="grid grid-cols-6 gap-4">
            <div class="col-start-1 col-end-3">
                <!-- select outline -->
                <div class="relative z-0">
                    <select wire:model="document" id="examplexs2" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200">
                        <option selected="">Merci de sélectionner un document</option>
                            @foreach($documents as $doc)
                                <option value="{{ $doc->id }}">{{ $doc->libelle }}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="col-start-3 col-end-5">
                <div class="relative z-0">
                    <select wire:model="statut" id="examplexs2" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200">
                        <option selected="">Sélectionner le statut du document</option>
                        <option value="0">Obligatoire</option>
                        <option value="1">Non obligatoire</option>
                    </select>
                </div>
            </div>
            <div>
                <button wire:click.prevent="store()" class="btn relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                    <span class="material-symbols-outlined">add</span>
                    Ajouter le document
                </button>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:gap-4 md:gap-6 pt-4">
        <div class="relative overflow-auto scrollbars">
            <!-- customers table -->
            <table class="table-sorter table-bordered-bottom table-hover">
                <thead>
                <tr>

                    <th style="font-weight: bold" >Documents</th>
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
                            @if($de->obligation == 0)
                                <span class="text-red-500 text-md">Obligatoire</span>
                            @else
                                <span class="text-red-500 text-md">Non obligatoire</span>
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
