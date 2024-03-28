<div>
    <div id="dialog_new"  class="[&amp;.show_.backDialog]:opacity-60 [&amp;.show]:opacity-100 [&amp;.show]:h-full [&amp;.show_.backDialog]:block [&amp;.show_.backDialog]:inset-0 [&amp;.show]:inset-0 duration-[400ms] ease-[cubic-bezier(0, 0, 0, 1)] opacity-0 w-full h-0 z-50 overflow-auto fixed left-0 top-0 flex items-center justify-center {{ ($modalDoc==true) ? 'show' : '' }}">
        <!-- dialogs -->
        <div class="z-50 flex flex-col w-11/12 sm:w-[480px] h-auto bg-white dark:bg-gray-900 rounded-[28px]">
            <div class="flex flex-col gap-4 justify-start px-6 pt-8 pb-0">
                <div class="flex flex-row items-center justify-between">
                    <h3 class="text-title-lg text-gray-900 dark:text-gray-100">Informations supplémentaires</h3>
                    <!-- close -->
                </div>
                <div class="relative flex flex-col gap-4">
                    <!-- title -->
                    <div class="relative z-0">
                        <input wire:model="telephone" type="text" aria-label="project_" name="project_" id="project_" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " value="">
                        <label for="project_" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Téléphone</label>
                    </div>
                    <div class="text-red-800 text-xs">@error('telephone') {{ $message }} @enderror</div>
                        <!-- select outline -->
                        <div class="relative z-0 w-full">
                            <select wire:model="niveau" id="examplexs" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200">
                                <option selected="">Niveau</option>
                                <option value="1">Seconde</option>
                                <option value="2">Première</option>
                                <option value="3">Terminale</option>
                            </select>
                        </div>
                        <div class="text-red-800 text-xs">@error('niveau') {{ $message }} @enderror</div>
                        <!-- task -->
                        <div class="relative z-0 w-full">
                            <select wire:model="serie" id="examplexs" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200">
                                <option selected="">Série du Bac</option>
                                <option value="Littéraire">Littéraire</option>
                                <option value="Scientifique">Scientifique</option>
                                <option value="Technique">Technique</option>
                            </select>
                        </div>
                        <div class="text-red-800 text-xs">@error('serie') {{ $message }} @enderror</div>
                    </div>

                <!-- textarea -->
                <div class="relative z-0">
                    <textarea wire:model="adresse" class="w-full h-32 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" " id="exampleTextarea1" rows="3"></textarea>
                    <label for="exampleTextarea1" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Adresse/Pays</label>
                </div>
                <div class="text-red-800 text-xs">@error('adresse') {{ $message }} @enderror</div>

            </div>
            <div class="flex flex-row justify-end gap-2 px-8 py-8">
                <button wire:click.prevent="store()" class="w-full btn relative flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                    Enregistrer
                </button>
            </div>
        </div>
    </div>
</div>
