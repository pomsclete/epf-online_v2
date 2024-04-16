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
                        <th data-sortable="false">Télephone</th>
                        <th data-sortable="false">Série & bac</th>
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
                                {{ $dem->telephone }}
                            </td>
                            <td>
                                {{ $dem->niveau.' '.$dem->serie }}
                            </td>
                            <td>
                                <a href="{{ route('traitement',['numero' => $dem->numero]) }}" wire:navigate class="btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-yellow-100 text-yellow-900 dark:bg-yellow-700 dark:text-yellow-100">
                                    <span class="material-symbols-outlined">visibility</span>
                                    Consulter
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">
                                <div class="flex items-center justify-center gap-2 relative bg-yellow-100 text-slate-700 p-4 rounded">
                                    <i class="material-symbols-outlined">info</i>
                                    <p class="text-center">AUCUNE <span>NOUVELLE DEMANDE</span> N'A ÉTÉ ENREGISTRÉ</p>
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
