<div>
    @include('extends.side-bar')
    <main class="lg:flex">
        @include('extends.aside')
        <!-- content -->
        <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
            <div class="flex flex-row justify-between items-center pt-2 pb-6">
                <h2 class="text-title-lg">Candidature pour la formation : <b><span class="text-green-500">{{ $designation }} {{ $intitule }}</span></b></h2>
            </div>
            <div id="sorted-layout" class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6">
                <div class="sm:col-span-2">
                    <!-- card -->
                    <div class="px-6 py-8 flex flex-col gap-6 rounded-xl bg-white dark:bg-gray-900">
                        <!-- detail info -->
                        <div class="grid grid-cols-2 sm:grid-cols-3  gap-6 text-gray-500">
                            <div class="flex flex-col gap-1">
                                <p class="text-title-sm flex flex-row items-center gap-2">
                                    <i class="material-symbols-outlined">folder</i> Dossier</p>
                                <h5 class="text-body-md text-gray-600 dark:text-gray-400">{{ $num }}</h5>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-title-sm flex flex-row items-center gap-2">
                                    <i class="material-symbols-outlined">event</i> Date</p>
                                <h5 class="text-body-md text-gray-600 dark:text-gray-400">{{ $date }}</h5>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-title-sm flex flex-row items-center gap-2">
                                    <i class="material-symbols-outlined">calendar_clock</i> Durée</p>
                                <h5 class="text-body-md text-gray-600 dark:text-gray-400">{{ $duree }}</h5>
                            </div>
                        </div>
                        <hr class="h-0 border-b-1 border-gray-200 dark:border-gray-700">
                        <!-- team -->
                        <div class="flex flex-col gap-2">
                            <h3 class="text-title-md font-bold text-gray-800 dark:text-gray-200"><span class="text-red-500">{{ $documents->count() }}</span> Document(s) à déposer</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="tableth">
                                            <th style="text-align: left">Nom du document</th>
                                            <th>Statut</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($documents as $doc)

                                        <tr class="tabletr">
                                            <td>{{ $doc->libelle }} (<span class="text-red-300">{{ $doc->obligation }}</span>)</td>
                                            <td style="text-align: center">
                                                @if($doc->etat == 0)
                                                    <span class='text-red-500'>Manquant</span>
                                                @elseif( $doc->etat == 1)
                                                    <span class='text-green-500'>En cours de validation</span>
                                                @elseif($doc->etat == 2)
                                                    <span class='text-red-500'>Fichier incorrect</span>
                                                @else
                                                    <span class='text-green-500'>Validé le {{ \Carbon\Carbon::parse($doc->updated_at)->format('d-m-Y') }}</span>
                                                @endif
                                            </td>
                                            <td style="text-align: center">
                                                @if($doc->etat == 0)
                                                    <a type="button" wire:click="openModal({{ $doc->id }})"><i class="fa fa-plus"></i> Ajouter</a>
                                                @elseif( $doc->etat == 1)
                                                    <svg class="flex-shrink-0 inline w-6 h-6 me-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                                    </svg>
                                                @else
                                                    <a type="button" wire:click="editModal({{ $doc->id }})"><i class="fa fa-edit"></i> Modifier</a>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr class="h-0 border-b-1 border-gray-200 dark:border-gray-700">
                        <div class="flex flex-row justify-content-center">
                            @if($demande->avance > 0 && $demande->avance < 3 )
                            <button wire:click="addNotif()" class="btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-green-300 text-primary-900 dark:bg-secondary-700 dark:text-secondary-100">
                                <span class="material-symbols-outlined">done</span>
                                <span class="hidden lg:inline">Envoyer pour validation</span>
                            </button>
                            @elseif($demande->avance == 3)
                            <button  class="btn-tonal relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium hover:shadow bg-yellow-300 text-yellow-900 dark:bg-yellow-700 dark:text-yellow-100">
                                <span class="material-symbols-outlined">
                                    hourglass_top
                                    </span>
                                <span class="hidden lg:inline">En attente délibération</span>
                            </button>
                            @elseif ($demande->avance == 4 && $demande->status == 4)
                            <div id="alert_b" class="show [&.show]:flex hidden justify-between items-center relative bg-red-50 text-red-700 px-6 py-8 rounded w-full">
                                <div>
                                  <div class="flex flex-row justify-between">
                                    <h3 class="text-title-lg font-bold mb-2">Désolé !</h3>
                              
                                    <button type="button" data-close="#alert_b">
                                      <span class="text-2xl"></span>
                                    </button>
                                  </div>
                                  <p>Votre demande a été refusé</p>
                                  <p class="mb-6 mr-6 text-body-lg">
                                    <u><b>Motif :</b></u> <br>
                                    {{ $demande->motif}}
                                </p>
                                </div>
                              </div>
                            @else
                            <div id="alert_b" class="show [&.show]:flex hidden justify-between items-center relative bg-green-50 text-green-700 px-6 py-8 rounded">
                                <div>
                                  <div class="flex flex-row justify-between">
                                    <h3 class="text-title-lg font-bold mb-2">Bravo !</h3>
                              
                                    <button type="button" data-close="#alert_b">
                                      <span class="text-2xl"></span>
                                    </button>
                                  </div>
                                  <p class="mb-6 mr-6 text-body-lg">
                                    Votre demande de préinscription a été accepté. Nous vous prions de vouloir bien 
                                    téléchargé votre lettre de demande d'admission et se présenter à notre siège afin de finaliser votre inscription.
                                  </p>
                              
                                  <a href="{{ route('lettre-admission',['numero' => $numero]) }}" target="_blank" class="btn relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-8 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-error-600 text-white dark:bg-error-200 dark:text-error-800">
                                    <span class="material-symbols-outlined">
                                        download
                                        </span>
                                    Télécharger la lettre d'admission
                                    </a>
                                </div>
                              </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <!-- card -->
                    <div class="py-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                        <div class="px-6 flex flex-row gap-2 items-center justify-between pb-3">
                            <h3 class="text-title-md text-gray-800 dark:text-gray-200">{{ $this->avancementTxt() }}</h3>
                            <span class="text-title-md text-gray-800 dark:text-gray-200">{{ $this->avancement() }}%</span>
                        </div>
                        <div class="relative py-3 px-6">
                            <!-- linear progress -->
                            <div class="flex bg-gray-100 dark:bg-gray-700 rounded overflow-hidden h-2">
                                <div class="flex {{ ($this->avancementTxt() == "Dossier refusé" ? 'bg-red-600 dark:bg-red-200' : 'bg-green-600 dark:bg-green-200') }}" style="width: {{ $this->avancement() }}%;"></div>
                            </div>
                        </div>

                    </div>

                    <!-- card -->
                    <div class="py-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
                        <div class="px-6 flex flex-row gap-2 items-center justify-between pb-3">
                            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Notifications</h3>
                        </div>
                        <div class="relative">
                            <div class="h-40 overflow-y-auto scrollbars show pl-6 pr-6">
                                <ul class="relative border-l border-gray-200 dark:border-gray-700">
                                    @foreach($notifications as $notif)
                                    <li class="mb-4 ml-4">
                                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                                        <time datetime="2023-06-12 20:00" class="mb-1 label-sm text-gray-400 dark:text-gray-500">{{ Carbon\Carbon::parse($notif->created_at)->format('d-m-Y h:m:s') }}</time>
                                        <h3 class="tracking-wide {{ ($notif->statut == 0 ? "text-yellow-500" : "text-green-500") }} font-semibold">{{ $notif->titre }}</h3>
                                        <p class="body-md text-gray-500">{{ $notif->contentEtu }}</p>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <div id="dialog_a" class="[&.show_.backDialog]:opacity-60 [&.show]:opacity-100 [&.show]:h-full  [&.show]:inset-0 [&.show_.backDialog]:inset-0 duration-[400ms] ease-[cubic-bezier(0, 0, 1)] opacity-0 w-full h-0 z-50 overflow-auto fixed left-0 top-0 flex items-center justify-center {{ ($isFormOpen==true) ? 'show' : '' }}">
        <div data-close="#dialog_a" class="backDialog z-40 overflow-auto fixed bg-black"></div>

        <!-- dialogs -->
        <div class="z-50 flex flex-col w-11/12 sm:w-[480px] h-auto bg-surface-100 dark:bg-surfacedark-100 rounded-[28px]">
            <div class="flex flex-col gap-4 justify-start py-6">
                <div class="flex justify-between items-center px-6">
                    <h3 class="text-title-lg leading-7 font-normal text-gray-900 dark:text-gray-100">
                        {{ ($editModalOpen) ? "Changer ou remplacer le document" : "Ajouter un nouveau document" }}
                    </h3>
                    <!-- close -->
                    <div data-close="#dialog_a" class="material-symbols-outlined cursor-pointer">close</div>
                </div>

                <!-- Form -->
                <form class="flex flex-col gap-4 py-2 px-6 md:max-h-[45vw] overflow-auto scrollbars show">
                    {{--<div class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            Si vous devez télécharger plus de deux fichier, merci d'utiliser ce lien :
                            <a class="text-red-600" href="https://www.ilovepdf.com/fr/fusionner_pdf" target="_blank">www.ilovepdf.com/fr/fusionner_pdf</a> pour fusionner les documents avant de les téléchargés
                        </div>
                    </div>--}}
                    @if($editModalOpen)


                        <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex items-center justify-between mb-4">
                                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Fichier actuellement disponible</h5>
                            </div>
                            <div class="flow-root">
                                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <span class="w-8 h-8 rounded-full" aria-label="{{ $libelle }}" data-microtip-position="right" role="tooltip">
                                                    <i class="fa fa-3x fa-file"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1 min-w-0 ms-4">
                                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white textCoupe">
                                                   {{ $libelle }}
                                                </p>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                <a style="cursor: pointer;" type="button" wire:click="download({{ $idNiv }})" aria-label="Télécharger le document" data-microtip-position="left" role="tooltip"><i class="fa fa-download"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    @endif
                    <div class="relative z-0">
                        <input type="file" accept="application/pdf" aria-label="deal1" wire:model="file" id="deal1" class="w-full h-14 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder="2023-2024"  required>

                        <label for="deal1" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-7 scale-75 top-4 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-7 peer-focus:bg-surface-300 dark:peer-focus:bg-surfacedark-300 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Document</label>
                    </div>
                    <div class="text-red-800 text-xs">@error('file') {{ $message }} @enderror</div>
                    <div class="relative">
                        <button wire:click.prevent="store()" class="btn w-full relative flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                            <span class="material-symbols-outlined">add</span><span class="ml-1 compact-hide">
                                 {{ ($editModalOpen) ? " Remplacer le fichier" : "Ajouter un fichier" }}
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@push('styles')
    <style>
        .tableth th{
            font-weight: normal;
            color: #8e9199;
            font-size: 12px;
        }
        .tabletr td {
            padding: 10px 0px;
            font-size: 14px;
            color: black;
        }
        .tabletr td a{
            color: #0000cc;
            cursor: pointer;
        }
        .tabletr td a:hover{
            color: #5e5ed8;
            cursor: pointer;
        }
        .textCoupe{
            width: 140px;
            padding: 0;
            overflow: hidden;
            position: relative;
            display: inline-block;
            margin: 0 5px 0 5px;
            text-align: center;
            text-decoration: none;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
@endpush