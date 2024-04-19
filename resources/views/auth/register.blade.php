@extends('layouts.app')

@section('content')
    <div class="flex flex-col md:flex-row bg-white dark:bg-black rounded-lg md:rounded-xl oveflow-hidden">
        <div class="flex-shrink max-w-full order-2 md:order-1 w-full md:w-1/2 lg:w-1/3 px-6 py-8 md:px-12 md:py-12 h-full min-h-[90vh]">
            <!-- Form -->
            <div class="flex flex-col gap-6 text-gray-600 dark:text-gray-400">
                <div class="relative">
                    <div class="relative flex flex-row items-center justify-center">
                        <img src="{{ asset('front/img/logoEpf.png') }}" alt="Logo de EPF">
                    </div>
                </div>

                @if (session('error'))
                    <div class="relative text-red-500 text-center rounded-full">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('register') }}" method="post" class="relative flex flex-col gap-6">
                    @csrf
                    <div class="relative z-0">
                        <input type="text" aria-label="name" name="name" id="name" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" "
                                required autocomplete="name" autofocus>

                        <label for="name" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Prénom et nom</label>
                    </div>
                    <!-- input email -->
                    <div class="relative z-0">
                        <input type="email" aria-label="email" name="email" id="email" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer" placeholder=" "
                               required autocomplete="email" autofocus>

                        <label for="email" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-3 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Email</label>
                    </div>

                    <!-- input password outlined -->
                    <div class="relative z-0 [&.show_.off]:!block [&.show_.on]:!hidden">
                        <input type="password" aria-label="password"  id="password" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer"
                               placeholder=" " name="password" required autocomplete="current-password">

                        <label for="password" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-2.5 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Mot de passe</label>

                        <div title="Show or hide password" onclick="passwordFunc()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 cursor-pointer">
                            <span class="material-symbols-outlined on">visibility</span>
                            <span class="material-symbols-outlined off !hidden">visibility_off</span>
                        </div>
                    </div>
                    <div class="relative z-0 [&.show_.off]:!block [&.show_.on]:!hidden">
                        <input type="password" aria-label="password"  id="password_confirmation" class="w-full h-12 block leading-5 relative py-2 px-4 rounded bg-neutral-10 dark:bg-neutral-900 border focus:border-2 border-gray-500 overflow-x-auto focus:outline-none focus:border-primary-600 focus:ring-0 dark:text-gray-200 dark:border-gray-400 dark:focus:border-primary-200 peer"
                               placeholder=" " name="password_confirmation" required autocomplete="current-password">

                        <label for="password" class="absolute tracking-[.03125em] text-gray-500 dark:text-gray-400 bg-neutral-10 dark:bg-neutral-900 duration-300 transform px-1 -translate-y-6 scale-75 top-2.5 z-10 origin-[0] left-4 peer-focus:left-4 peer-focus:text-primary-600 dark:peer-focus:text-primary-200 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-neutral-10 dark:peer-focus:bg-neutral-900 peer-focus:px-1 peer-invalid:text-error-600 dark:peer-invalid:text-error-200">Confirmer mot de passe</label>

                        <div title="Show or hide password" onclick="passwordFunct()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 cursor-pointer">
                            <span class="material-symbols-outlined on">visibility</span>
                            <span class="material-symbols-outlined off !hidden">visibility_off</span>
                        </div>
                    </div>

                    <script>
                        function passwordFunc() {
                            const x = document.getElementById("password");
                            const parent = x.parentNode;

                            if (x.type === "password") {
                                x.type = "text";
                                parent.classList.add("show");
                            } else {
                                x.type = "password";
                                parent.classList.remove("show");
                            }
                        }
                        function passwordFunct() {
                            const x = document.getElementById("password_confirmation");
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

                    <button type="submit" class="btn bg-red-800 relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                        <span class="material-symbols-outlined">arrow_forward</span>
                        Créer un compte
                    </button>

                    <p class="text-body-lg">Vous avez déja un compte? <a href="{{ route('login') }}" class="hover:text-primary-600 dark:hover:text-primary-200">Se connecter</a></p>
                </form>
            </div>
        </div>

        <div class="flex-shrink max-w-full order-1 md:order-2 w-full md:w-1/2 lg:w-2/3 relative rounded-t-lg md:rounded-xl oveflow-hidden bg-primary-200" style="background-image: url({{ asset('admin/src/img/mosaique.webp') }});object-fit:cover;background-repeat: no-repeat;background-size:100% 100%;">
            <div class="flex items-center justify-center w-full h-full">
              <!-- logo -->
              <div class="relative">
                <a role="button" class="sidebar-logo py-6 flex items-center  w-full">
                  <h4 class="text-2xl md:text-4xl font-medium tracking-wide text-white text-shadow shadow-indigo-500/50 ml-2 md:ml-4">BIENVENUE SUR EPF ONLINE</h4>
                </a>
              </div>
            </div>
          </div>
    </div>


@endsection
