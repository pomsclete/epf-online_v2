<div>
    @include('extends.admin-side-bar')
    <main class="lg:flex">
        @include('extends.admin-aside')
        <!-- content -->
        <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
            <!-- heading -->
            <div class="flex flex-row justify-between items-center pt-2 pb-6">
                <h2 class="text-title-lg">Années scolaires</h2>

                <!-- action -->
                <div class="flex flex-row gap-3 items-center">
                    <!-- hidden action -->
                    <div id="hidden-act" class="opacity-0 [&amp;.show]:opacity-100 transition duration-400 ease-in-out flex flex-row gap-3 items-center">
                        <button class="relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400"><span aria-label="Export CSV" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">download</span></button>

                        <button class="relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium bg-surface-100 dark:bg-surfacedark-100 hover:bg-surface-300 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-300 dark:focus:bg-surfacedark-400"><span aria-label="Delete" data-microtip-position="top" role="tooltip" class="material-symbols-outlined">delete</span></button>
                    </div>

                    <!-- add new -->
                    <button data-type="dialogs" data-target="#dialog_a" class="btn relative flex flex-row items-center justify-center gap-x-2 py-2 px-4 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                        <span class="material-symbols-outlined">add</span>
                        Ajouter
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:gap-4 md:gap-6">
                <!-- card -->
                <div class="px-6 py-8 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                    <div class="relative overflow-auto scrollbars">
                        <!-- customers table -->
                        <table class="table-sorter table-bordered-bottom table-hover">
                            <thead>
                            <tr>

                                <th data-sortable="false">Libelle</th>
                                <th data-sortable="false">Date de création</th>
                                <th data-sortable="false">Dernieres modifcation</th>
                                <th data-sortable="false">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                 <tr class="[&amp;.selected]:!bg-primary-100 dark:[&amp;.selected]:!bg-primary-700 text-center">
                                     <td><a href="mailto:acme@example.com" target="_blank">acme@example.com</a></td>
                                     <td><a href="mailto:acme@example.com" target="_blank">acme@example.com</a></td>
                                    <td><a href="mailto:acme@example.com" target="_blank">acme@example.com</a></td>
                                    <td><a href="#" class="hover:text-primary-600 dark:hover:text-primary-200">edit</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
