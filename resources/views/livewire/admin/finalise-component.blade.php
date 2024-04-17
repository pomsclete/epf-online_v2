<div>

    <div>
        @include('extends.admin-side-bar')
        <main class="lg:flex">
            @include('extends.admin-aside')
            <!-- content -->
            <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
                <!-- heading -->
                <div class="flex flex-row justify-between items-center pt-2 pb-6">
                    <h2 class="text-title-lg">Demandes acceptés</h2>
                </div>
    
                <div class="grid grid-cols-1 sm:gap-4 md:gap-6">
                    <!-- card -->
                    <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                        <div class="relative overflow-auto scrollbars">
                            <!-- customers table -->
                            <table class="table-sorter table-bordered-bottom table-hover">
                                <thead>
                                <tr>
                                    <th data-sortable="false">Prénom & nom</th>
                                    <th data-sortable="false">Classes acceptés</th>
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
                                            <a href="{{ route('traitement',['numero' => $dem->numero]) }}" wire:navigate class="btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-green-100 text-green-900 dark:bg-green-700 dark:text-green-100">
                                                <span class="material-symbols-outlined">
                                                    file_download_done
                                                    </span>
                                                Voir la demande
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            <div class="flex justify-center items-center gap-2 relative bg-green-100 text-slate-700 p-4 rounded">
                                                <i class="material-symbols-outlined">info</i>
                                                <p class="text-center">AUCUNE <span>DEMANDE ACCEPTÉ</span> N'A ÉTÉ ENREGISTRÉ</p>
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
        </main>
    
    </div>
    
</div>
