<div>
    @include('extends.admin-side-bar')
    <main class="lg:flex">
        @include('extends.admin-aside')
        <!-- content -->
        <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
            <!-- heading -->
            <div class="flex flex-row justify-between items-center pt-2 pb-6">
                <h2 class="text-title-lg">Admissions</h2>
            </div>
            {{-- --}}
            <div class="max-sm:flex gap-4 sm:grid sm:grid-cols-4 md:gap-6 mb-4 md:mb-6 max-sm:-mx-4 max-sm:px-4 overflow-auto [&amp;::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
                <!-- small card -->
                <div class="{{ ($etat == 'en-cours' || $etat == 'deliberation' || $etat == 'finalise') ? 'bg-white' : 'bg-yellow-100' }}  p-6 max-sm:w-60 max-sm:flex-shrink-0 flex flex-col justify-between rounded-xl  dark:bg-gray-900 overflow-hidden">
                    <!-- title -->
                    <div class="flex flex-row justify-between items-center mb-3">
                        <h3 class="text-title-md text-gray-800 dark:text-gray-200">Nouvelles demandes</h3>
                    </div>
                    <div class="relative flex items-center justify-between">
                        <h4 class="text-display-sm text-gray-800 dark:text-gray-200">12.5K</h4>
                        <a href="{{ route('admin.admission') }}" wire:navigate class="cursor text-label-lg flex items-center gap-1 px-2 py-2 rounded-full text-yellow-800 dark:text-yellow-100 bg-yellow-300 dark:bg-yellow-800">
                          <span class="material-symbols-outlined !text-sm">visibility</span>CONSULTER
                        </a>
                    </div>
                </div>
                <!-- small card -->
                <div class="{{ ($etat == 'en-cours') ? 'bg-red-100' : 'bg-white' }} p-6 max-sm:w-60 max-sm:flex-shrink-0 flex flex-col justify-between rounded-xl  dark:bg-gray-900 overflow-hidden">
                    <!-- title -->
                    <div class="flex flex-row justify-between items-center mb-3">
                        <h3 class="text-title-md text-gray-800 dark:text-gray-200">En cours de traitement</h3>
                    </div>
                    <div class="relative flex items-center justify-between">
                        <h4 class="text-display-sm text-gray-800 dark:text-gray-200">11K</h4>
                        <a href="{{ route('admin.admission',['etat' => 'en-cours']) }}"  wire:navigate class="cursor text-label-lg flex items-center gap-1 px-2 py-2 rounded-full text-error-800 dark:text-error-100 bg-error-300 dark:bg-error-800">
              <span class="material-symbols-outlined !text-sm">visibility</span>CONSULTER
            </a>
                    </div>
                </div>
                <!-- small card -->
                <div class="{{ ($etat == 'deliberation') ? 'bg-blue-100' : 'bg-white' }} p-6 max-sm:w-60 max-sm:flex-shrink-0 flex flex-col justify-between rounded-xl  dark:bg-gray-900 overflow-hidden">
                    <!-- title -->
                    <div class="flex flex-row justify-between items-center mb-3">
                        <h3 class="text-title-md text-gray-800 dark:text-gray-200">En attente délibération</h3>
                    </div>
                    <div class="relative flex items-center justify-between">
                        <h4 class="text-display-sm text-gray-800 dark:text-gray-200">115%</h4>
                        <a href="{{ route('admin.admission',['etat' => 'deliberation']) }}"  wire:navigate class=" text-label-lg flex items-center gap-1 px-2 py-2 rounded-full text-blue-800 dark:text-blue-100 bg-blue-300 dark:bg-blue-800">
              <span class="material-symbols-outlined !text-sm">visibility</span>CONSULTER
            </a>
                    </div>
                </div>
                <!-- small card -->
                <div class="{{ ($etat == 'finalise') ? 'bg-green-100' : 'bg-white' }} p-6 max-sm:w-60 max-sm:flex-shrink-0 flex flex-col justify-between rounded-xl  dark:bg-gray-900 overflow-hidden">
                    <!-- title -->
                    <div class="flex flex-row justify-between items-center mb-3">
                        <h3 class="text-title-md text-gray-800 dark:text-gray-200">Dossiers finalisés</h3>
                    </div>
                    <div class="relative flex items-center justify-between">
                        <h4 class="text-display-sm text-gray-800 dark:text-gray-200">3.5K</h4>
                        <a href="{{ route('admin.admission',['etat' => 'finalise']) }}" wire:navigate class="cursor text-label-lg flex items-center gap-1 px-2 py-2 rounded-full text-green-800 dark:text-green-200 bg-green-300 dark:bg-green-800">
              <span class="material-symbols-outlined !text-sm">visibility</span>CONSULTER
            </a>
                    </div>
                </div>
            </div>
            {{-- --}}
            @livewire($profile)

        </div>
    </main>

</div>
@push('styles')
    <style>
        .cursor{
            cursor: pointer;
        }
    </style>
@endpush