<div>
    @include('extends.admin-side-bar')
    <main class="lg:flex">
        @include('extends.admin-aside')
        <!-- content -->
        <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
            <!-- heading -->
            <div class="flex flex-row justify-between items-center pt-2 pb-6 pl-3">
                <a href="{{ route('admin.classe') }}" wire:navigate class="btn-outline relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium border border-gray-500 text-primary-600 dark:border-gray-400 dark:text-primary-200">
                    <span class="material-symbols-outlined">menu_open</span>
                    Retourner aux classes
                </a>
            </div>

            <livewire:admin.add-doc-classe-component :classe="$classe"/>
        </div>
    </main>

</div>
