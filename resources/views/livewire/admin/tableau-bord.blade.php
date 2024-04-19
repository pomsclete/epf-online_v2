<div>
    @include('extends.admin-side-bar')
    <main class="lg:flex">
        @include('extends.admin-aside')
        <!-- content -->
        <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
            <!-- heading -->
            <div class="flex flex-row justify-between items-center pt-2 pb-6">
                <h2 class="text-title-lg">Tableau de bord</h2>
                <!-- filter -->
                <div class="btn-segmented inline-flex flex-row items-center">
                  <div class="segmented-item [&amp;.active]:bg-secondary-100 dark:[&amp;.active]:bg-secondary-700 h-8 btn-outline relative inline-flex flex-row items-center justify-center gap-x-2 py-2 px-4 text-sm tracking-[.00714em] font-medium border border-gray-500 text-primary-600 dark:border-gray-400 dark:text-primary-200 active">
                    <input id="check7" type="radio" name="radios" class="z-10 opacity-0 absolute inset-0" value="1" checked="">
                    <label class="flex items-center gap-3" for="check7">
                      {{ $this->getAnnee()->annee_scolaire }}
                    </label>
                  </div>
                </div>
            </div>
            <!-- contain1 -->
            <div class="sm:grid sm:grid-cols-2 sm:gap-4 md:gap-6">
                <!-- card -->
                <div class="py-8 px-6 md:order-2 flex flex-col rounded-xl bg-white dark:bg-gray-900 mb-4 md:mb-6">
                  <div class="flex flex-row gap-2 items-center justify-between pb-3">
                    <h3 class="text-title-md text-gray-800 dark:text-gray-200">Notifications</h3>
                  </div>
                  <table class="table-bordered-bottom text-body-md">
                    <tbody class="text-body-sm">
                      <tr>
                        <td>
                            <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-yellow-100 dark:bg-yellow-900 rounded-full">0</div>
                          </td>
                        <td>
                          <span class="text-left">nouvelle(s) demande(s) en attente</span>
                        </td>
                        <td>
                            <a href="{{ route('admin.admission.new')}}" wire:navigate class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-yellow-100 dark:bg-yellow-900 rounded-full">Consulter</a>
                          </td>
                      </tr>
                      <tr>
                        <td>
                            <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-blue-100 dark:bg-blue-900 rounded-full">0</div>
                          </td>
                        <td>
                          <span class="text-left">demande(s) en cours de traitements</span>
                        </td>
                        <td>
                            <a href="{{ route('admin.admission.cours')}}" wire:navigate class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-blue-100 dark:bg-blue-900 rounded-full">Consulter</a>
                          </td>
                      </tr>
                      <tr>
                        <td>
                            <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-green-100 dark:bg-green-900 rounded-full">0</div>
                          </td>
                        <td>
                          <span class="text-left">demande(s) en attente de délibération</span>
                        </td>
                        <td>
                            <a href="{{ route('admin.admission.delib')}}" wire:navigate class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-green-100 dark:bg-green-900 rounded-full">Consulter</a>
                          </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
        
                <div class="max-sm:flex gap-4 sm:grid sm:grid-cols-2 md:gap-6 mb-4 md:mb-6 max-sm:-mx-4 max-sm:px-4 overflow-auto [&amp;::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
                  <!-- card -->
                  <div class="max-sm:w-60 max-sm:flex-shrink-0 py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                    <div class="flex flex-row gap-2 items-center justify-between pb-3">
                      <h3 class="text-title-md text-gray-800 dark:text-gray-200">En cours</h3>
                    </div>
                    <div class="relative flex justify-between items-center">
                      <div class="bg-red-50 dark:bg-red-900 relative !inline-flex items-center justify-center w-16 h-16 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium">
                        <span class="material-symbols-outlined !text-3xl text-red-600 dark:text-red-400">person_search</span>
                      </div>
                      <h3 class="text-headline-md text-center">{{ $this->getStatDemand(1,$this->getAnnee()->id) }}</h3>
                    </div>
                  </div>
                  <!-- card -->
                  <div class="max-sm:w-60 max-sm:flex-shrink-0 py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                    <div class="flex flex-row gap-2 items-center justify-between pb-3">
                      <h3 class="text-title-md text-gray-800 dark:text-gray-200">Délibérations</h3>
                    </div>
                    <div class="relative flex justify-between items-center">
                      <div class="bg-yellow-50 dark:bg-yellow-900 relative !inline-flex items-center justify-center w-16 h-16 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium">
                        <span class="material-symbols-outlined !text-3xl text-yellow-600 dark:text-yellow-400">how_to_reg</span>
                      </div>
                      <h3 class="text-headline-md text-center">{{ $this->getStatDemand(3,$this->getAnnee()->id) }}</h3>
                    </div>
                  </div>
                  <!-- card -->
                  <div class="max-sm:w-60 max-sm:flex-shrink-0 py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                    <div class="flex flex-row gap-2 items-center justify-between pb-3">
                      <h3 class="text-title-md text-gray-800 dark:text-gray-200">Refusées</h3>
                    </div>
                    <div class="relative flex justify-between items-center">
                      <div class="bg-primary-50 dark:bg-primary-900 relative !inline-flex items-center justify-center w-16 h-16 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium">
                        <span class="material-symbols-outlined !text-3xl text-primary-600 dark:text-primary-400">folder_limited</span>
                      </div>
                      <h3 class="text-headline-md text-center">{{ $this->getStatDemand(4,$this->getAnnee()->id) }}</h3>
                    </div>
                  </div>
                  <!-- card -->
                  <div class="max-sm:w-60 max-sm:flex-shrink-0 py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                    <div class="flex flex-row gap-2 items-center justify-between pb-3">
                      <h3 class="text-title-md text-gray-800 dark:text-gray-200">Acceptées</h3>
                    </div>
                    <div class="relative flex justify-between items-center">
                      <div class="bg-green-50 dark:bg-green-900 relative !inline-flex items-center justify-center w-16 h-16 gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium">
                        <span class="material-symbols-outlined !text-3xl text-green-600 dark:text-green-400">handshake</span>
                      </div>
                      <h3 class="text-headline-md text-center">{{ $this->getStatDemand(5,$this->getAnnee()->id) }}</h3>
                    </div>
                  </div>
                </div>
              </div>
            <!-- end contain2 -->
            <div class="grid grid-cols-1 gap-4 md:gap-6">
                <!-- card -->
                <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                    <p class="text-body-lg">Insert your content in here</p>
                </div>
            </div>
        </div>
    </main>

</div>

