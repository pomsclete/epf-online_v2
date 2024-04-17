<div>
    @include('extends.side-bar')
    <main class="lg:flex">
        @include('extends.aside')
        <!-- content -->
        <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">

            <div class="grid grid-cols-1 gap-4 md:gap-6">
                <!-- card -->
                <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                  <div class="relative text-base tracking-[0.5px] text-gray-600 dark:text-gray-400">
                    <h1 class="text-display-sm md:text-display-md text-gray-800 dark:text-gray-200 mb-1">Support</h1>
                    <p class="mb-4 leading-8">Bienvenue sur notre page d'assistance pour EPF Online. Si vous rencontrez des bugs ou des problèmes techniques lors de l'utilisation de notre application, nous apprécions vos commentaires.</p>
                    <p class="mb-4 leading-8">Veuillez signaler tout problème que vous rencontrez, ainsi que les détails pertinents, sur notre e-mail. Nous nous efforçons d'améliorer continuellement nos produits et comptons sur les commentaires des utilisateurs pour améliorer l'expérience.</p>
                    <p class="mb-4 leading-5">Vous pouvez nous contacter à tous moment via les canneaux suivants</p>
        
                    <div class="flex flex-row gap-3 mt-2">
                      <span class="material-symbols-outlined">mail</span>
                      <span class="compact-title"><a href="mailto:support@epf.africa" class="text-amber-700 hover:text-amber-500">support@epf.africa</a></span>
                    </div>
                    <div class="flex flex-row gap-3 mt-3">
                        <span class="material-symbols-outlined">phone</span>
                        <span class="compact-title"><a href="tel:+221782957373" class="text-amber-700 hover:text-amber-500">+221 78 295 73 73</span>
                      </div>
                  </div>
                </div>
              </div>
        </div>
    </main>

</div>