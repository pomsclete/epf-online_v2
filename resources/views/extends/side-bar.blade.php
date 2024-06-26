<header data-type="navtop" class="nav-top [&.show]:translate-y-0 top-0 fixed h-16 px-4 lg:px-8 lg:pl-3 left-0 lg:left-72 right-0 flex flex-row items-center justify-between gap-3 z-50 transition-all duration-300 ease-in-out bg-surface-500 dark:bg-surfacedark-500">
    <!-- trigger sidebar -->
    <button data-type="dialogs" data-target="#sidebar" class="relative inline-flex lg:hidden items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
      <span class="material-symbols-outlined !text-[28px]">menu</span>
    </button>

    <!-- trigger compact layout -->
    <button data-type="toggle" data-target="#body-layout" class="compact-btn group relative hidden  !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
      <span class="material-symbols-outlined !text-[28px] menu-close">menu_open</span>
      <span class="material-symbols-outlined !text-[28px] menu-open">menu</span>
    </button>

  <!-- search form -->
  <div class="relative w-full hidden md:block">
    <!-- desktop search -->
    <div class="inline-flex flex-row items-center gap-2 h-8 py-1 pl-1 pr-3 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 [&.active]:border-secondary-100 dark:[&.active]:border-secondary-700 hover:bg-surface-200 dark:hover:bg-surfacedark-200 focus:bg-surface-400 dark:focus:bg-surfacedark-400 border border-gray-500 dark:border-gray-200 rounded-r-lg  text-lg tracking-[.00714em]">
      <div class="flex items-center justify-center w-6 h-6 overflow-hidden rounded-full bg-gray-700">
          <span class="material-symbols-outlined !text-white">
            bring_your_own_ip
            </span>
      </div>
      <span>{{ $title ?? config('app.name') }}</span>
    </div>
  </div>

  <!-- navbar right -->
  <div class="flex flex-row items-center gap-3 ml-auto md:ml-12">
    <!-- mobile search trigger -->
    <button data-type="dialogs" data-target="#dialog_search" class="btn relative inline-flex md:hidden !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
      <span class="material-symbols-outlined !text-[28px]">search</span>
    </button>


    {{--<div class="relative hidden sm:inline-block">
      <!-- trigger bottom sheets -->
      <button data-type="dialogs" data-target="#sheets_b" class="btn relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
        <span aria-label="Settings" data-microtip-position="bottom" role="tooltip" class="material-symbols-outlined !text-[28px] pointer-events-none">settings</span>
      </button>
    </div>--}}

    {{--<div class="relative">
      <button data-type="dropdown" data-target="#dropdown2" class="btn relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
        <span aria-label="Notification" data-microtip-position="bottom" role="tooltip" class="material-symbols-outlined !text-[28px] pointer-events-none ">notifications</span>
        <span class="pointer-events-none absolute top-2 right-2 w-4 h-4 flex items-center justify-center rounded-full text-[11px] leading-none tracking-[.045em] font-medium bg-error-600 dark:bg-error-200 text-white dark:text-error-800">1</span>
      </button>

      <!-- menus -->
      <div id="dropdown2" data-type="dropdownmenu" class="[&.show]:!opacity-100 [&.show]:!visible opacity-0 invisible absolute top-[3.1rem] z-30 transition duration-400 ease-in-out -right-12 sm:right-0 min-w-[300px] inline-flex flex-col py-2 rounded-xl overflow-hidden bg-white dark:bg-gray-900 shadow-md dark:shadow-gray-50/10 max-sm:fixed max-sm:mt-3 max-sm:left-4 max-sm:right-4">
        <div class="px-6 pt-1.5 pb-3 font-normal border-b border-gray-100 dark:border-gray-800">
          <div class="relative">
            <div class="text-title-sm">Notifications</div>
            <div class="absolute top-0 right-0">
              <button class="inline-block mr-0">
                <span class="material-symbols-outlined pointer-events-none" aria-label="Clear all" data-microtip-position="bottom" role="tooltip">delete</span>
              </button>
            </div>
          </div>
        </div>

        <div class="max-h-60 overflow-y-auto scrollbars">
          <!-- item -->
          <a class="relative" href="../user/notification.html">
            <div class="unread flex flex-wrap flex-row items-center border-b border-gray-100 dark:border-gray-800 [&.unread]:bg-surface-400 dark:[&.unread]:bg-surfacedark-400 hover:bg-surface-200 dark:hover:bg-surfacedark-200 py-2">
              <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                <div class="flex justify-center items-center mx-auto w-8 h-8 rounded-full bg-primary-600 dark:bg-primary-200 text-neutral-10 dark:text-neutral-900">
                  <span class="material-symbols-outlined">diversity_3</span>
                </div>
              </div>
              <div class="flex-shrink max-w-full px-2 w-3/4">
                <div class="text-body-md">Time for a meeting with Mr.Roger</div>
                <div class="text-gray-500 text-body-md mt-1">5 Minutes Ago</div>
              </div>
            </div>
          </a>

          <!-- item -->
          <a class="relative" href="../user/notification.html">
            <div class="flex flex-wrap flex-row items-center border-b border-gray-100 dark:border-gray-800 [&.unread]:bg-surface-400 dark:[&.unread]:bg-surfacedark-400 hover:bg-surface-200 dark:hover:bg-surfacedark-200 py-2">
              <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                <div class="flex justify-center items-center mx-auto w-8 h-8 rounded-full bg-primary-600 dark:bg-primary-200 text-neutral-10 dark:text-neutral-900">
                  <span class="material-symbols-outlined">person</span>
                </div>
              </div>
              <div class="flex-shrink max-w-full px-2 w-3/4">
                <div class="text-body-md">Congratulations you get a new prospect!</div>
                <div class="text-gray-500 text-body-md mt-1">1h ago</div>
              </div>
            </div>
          </a>
        </div>

        <div class="px-6 pt-3 pb-1.5 text-center text-body-md font-normal">
          <a href="../user/notification.html" class="hover:underline">Show all Notifications</a>
        </div>
      </div>
    </div>--}}

    <div class="relative">
      <button data-type="dropdown" data-target="#dropdown1" class="btn w-12 h-12 gap-x-2 py-2.5 flex items-center gap-2 justify-center rounded-full text-sm tracking-[0.15px]">
        <img src="{{ asset('admin/src/img/avatar.png') }}" alt="ari budin" class="w-10 h-10 flex-none rounded-full bg-primary-600 dark:bg-primary-200">
      </button>

      <!-- menus -->
      <ul id="dropdown1" data-type="dropdownmenu" class="[&.show]:!opacity-100 [&.show]:!visible opacity-0 invisible absolute top-[3.1rem] z-30 transition duration-400 ease-in-out left-auto right-0 min-w-[200px] inline-flex flex-col py-2 rounded-xl bg-white dark:bg-gray-900 shadow-md dark:shadow-gray-50/10 max-sm:fixed max-sm:mt-3 max-sm:left-4 max-sm:right-4">
        <li class="relative">
          <a href="{{ route('profile') }}" wire:navigate class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
            <span class="material-symbols-outlined">person</span>
            Mon profil
          </a>
        </li>
        <li class="relative">
          <a href="{{ route('parametrage') }}" wire:navigate class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
          <span class="material-symbols-outlined">settings</span>
            Paramétrage
          </a>
        </li>
        <li class="relative">
          <a href="{{ route('support')}}" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
            <span class="material-symbols-outlined">help_center</span>
            Aide ?
          </a>
        </li>
        <li class="relative border-t border-gray-100 dark:border-gray-800">
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
            <span class="material-symbols-outlined">power_settings_new</span>
            Déconnexion
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>
    </div>
  </div>
  </header>
