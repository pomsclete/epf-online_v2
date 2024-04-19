<div>
 
  <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">

    <!-- HEADER -->
    <div class="flex flex-row justify-between items-center pt-2 pb-6">
        <h2 class="text-title-lg">Paramètrage</h2>
      </div>
    <!-- END HEADER -->
    <!-- Content -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 mb-4 md:mb-6">
        <div class="col-span-1 flex flex-col gap-6">
          <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg shadow-gray-100/10 dark:shadow-gray-700/10 overflow-hidden">
            <!-- cover -->
            <div class="overflow-hidden">
              <div class="group h-36 overflow-hidden relative">
                <img src="{{ asset('admin/src/img/cover/cover.jpg') }}" alt="cover image" class="w-full">
              </div>

              <div class="flex justify-center -mt-10 relative">
                <img src="../src/img/avatar.png" alt="avatar" class="rounded-full w-24 h-24 bg-primary-600 text-white dark:bg-primary-200 dark:text-neutral-900 border-solid border-white border-2 -mt-3">
              </div>
              <div class="text-center px-4 pb-6 pt-2">
                <h3 class="text-title-lg text-gray-900 dark:text-gray-100 mb-1">{{ $userAuth->name }}</h3>
                <p class="text-body-md text-gray-600 dark:text-gray-400">{{ $userAuth->niveau." ".$userAuth->serie }}</p>
              </div>
            </div>
            <!-- information -->
            <div class="text-body-md flex flex-col gap-1 px-6 pb-6">
              <p><strong>Télephone :</strong><span class="ml-2">{{ ($userAuth->telephone == null) ? "à rensigner" : $userAuth->telephone }}</span></p>
              <p><strong>Email :</strong><span class="ml-2">{{ ($userAuth->email == null) ? "à rensigner" : $userAuth->email }}</span></p>
              <p><strong>Adresse :</strong><span class="ml-2">{{ ($userAuth->adresse == null) ? "à rensigner" : $userAuth->adresse }}</span></p>
              <p><strong>Création :</strong><span class="ml-2"> <span class="inline-flex items-center h-6 px-3 text-label-md text-yellow-700 dark:text-yellow-200 bg-yellow-100 dark:bg-opacity-20 rounded-full">{{ \Carbon\Carbon::parse($userAuth->created_at)->format('d/m/Y h:m:s') }}</span></span></p>
            </div>
          </div>
        </div>

        <div class="md:col-span-2 flex flex-col gap-6">
          <!-- card -->
          <div class="p-6 bg-white dark:bg-gray-900 rounded-xl shadow-lg shadow-cyan-100/10 dark:shadow-cyan-700/10 h-full">
            <div class="relative">
              <div class="flex flex-row justify-between items-center pt-2 pb-6">
                <h2 class="text-title-lg">Modification mot de passe</h2>
              </div>
                <div class="flex flex-col gap-6">
                  @if (session('status'))
                  <div class="flex items-center gap-2 relative bg-red-50 text-red-700 p-4 rounded">
                    <i class="material-symbols-outlined">info</i>
                    <p>{{ session('status') }}</p>
                  </div>
                  @endif
                   <!-- input password outlined -->
                  <div class="relative z-0 [&.show_.off]:!block [&.show_.on]:!hidden">
                    <input type="password" wire:model="mdp_actuel" aria-label="currentpassword" name="inputpass" id="currentpassword" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="">

                    <label for="currentpassword" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-2.5 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">
                      Mot de passe actuel</label>

                    <div title="Show or hide password" onclick="passwordFunc()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 cursor-pointer">
                      <span class="material-symbols-outlined on">visibility</span>
                      <span class="material-symbols-outlined off !hidden">visibility_off</span>
                    </div>
                  </div>
                  <div class="text-red-800 text-xs">@error('mdp_actuel') {{ $message }} @enderror</div>
                 
                  <div class="relative z-0 [&.show_.off]:!block [&.show_.on]:!hidden">
                    <input type="password" wire:model="nouveau_mdp" aria-label="newpassword" name="inputpass" id="newpassword" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="">

                    <label for="newpassword" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-2.5 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">
                      Nouveau mot de passe</label>

                    <div title="Show or hide password" onclick="passwordFunc2()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 cursor-pointer">
                      <span class="material-symbols-outlined on">visibility</span>
                      <span class="material-symbols-outlined off !hidden">visibility_off</span>
                    </div>
                  </div>
                  <div class="text-red-800 text-xs">@error('nouveau_mdp') {{ $message }} @enderror</div>

                  <div class="relative z-0 [&.show_.off]:!block [&.show_.on]:!hidden">
                    <input type="password" wire:model="confirmer_mdp" aria-label="repassword" name="inputpass" id="repassword" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="">

                    <label for="repassword" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-2.5 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">
                      Confirmer mot de passe</label>

                    <div title="Show or hide password" onclick="passwordFunc3()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 cursor-pointer">
                      <span class="material-symbols-outlined on">visibility</span>
                      <span class="material-symbols-outlined off !hidden">visibility_off</span>
                    </div>
                  </div>
                  <div class="text-red-800 text-xs">@error('nouveau_mdp') {{ $message }} @enderror</div>
                  <button wire:click.prevent="updatePassword()" class="btn relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                    <span class="material-symbols-outlined">save</span>
                    Enregistrer les modification
                  </button>  
                </div>
            </div>
          </div>
        </div>
      </div>
    <!-- End Content -->

</div>

</div>

@push('scripts')
<script>
  function passwordFunc() {
    const x = document.getElementById("currentpassword");
    const parent = x.parentNode;
  
    if (x.type === "password") {
      x.type = "text";
      parent.classList.add("show");
    } else {
      x.type = "password";
      parent.classList.remove("show");
    }
  }
  function passwordFunc2() {
    const x = document.getElementById("newpassword");
    const parent = x.parentNode;
  
    if (x.type === "password") {
      x.type = "text";
      parent.classList.add("show");
    } else {
      x.type = "password";
      parent.classList.remove("show");
    }
  }
  function passwordFunc3() {
    const x = document.getElementById("repassword");
    const parent = x.parentNode;
  
    if (x.type === "password") {
      x.type = "text";
      parent.classList.add("show");
    } else {
      x.type = "password";
      parent.classList.remove("show");
    }
  }
  </script>
@endpush