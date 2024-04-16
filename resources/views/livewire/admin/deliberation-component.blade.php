<div>
    <div class="grid grid-cols-1 sm:gap-4 md:gap-6">
        <!-- card -->
        <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="relative overflow-auto scrollbars">
                <!-- customers table -->
                <table class="table-sorter table-bordered-bottom table-hover">
                    <thead>
                    <tr>
                        <th data-sortable="false">Prénom & nom</th>
                        <th data-sortable="false">Admission demandée</th>
                        <th data-sortable="false">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($demandes as $dem)
                        <tr class="[&amp;.selected]:!bg-primary-100 dark:[&amp;.selected]:!bg-primary-700" style="text-align: center">
                            <td>
                                {{ $dem->name }}
                            </td>
                            <td>
                                {{ $dem->designation.' '.$dem->intitule }}
                            </td>
                            <td>
                                @if(auth()->user()->role == 2)
                                <a href="{{ route('traitement',['numero' => $dem->numero]) }}" wire:navigate class="btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-blue-100 text-blue-900 dark:bg-blue-700 dark:text-blue-100">
                                    <span class="material-symbols-outlined">
                                        rule
                                        </span>
                                    Déliberer
                                </a>
                                @else 
                                <button wire:click = "notif()" class="btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-blue-100 text-blue-900 dark:bg-blue-700 dark:text-blue-100">
                                    <span class="material-symbols-outlined">
                                        rule
                                        </span>
                                    En attente
                                    </button>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                <div class="flex items-center gap-2 justify-center relative bg-blue-100 text-slate-700 p-4 rounded">
                                    <i class="material-symbols-outlined">info</i>
                                    <p class="text-center">AUCUNE <span>DEMANDE EN ATTENTE DE DELIBERATION</span> N'A ÉTÉ ENREGISTRÉ</p>
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
