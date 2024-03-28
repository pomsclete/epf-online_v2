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
                <div class="flex flex-col gap-6 text-gray-600 dark:text-gray-400">
                    <div class="relative">
                        <h2 class="text-headline-md text-gray-900 dark:text-gray-100 mb-1 mt-2 text-center">{{ __('Vérifiez votre adresse e-mail') }}</h2>
                    </div>
                    <div class="relative">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                            </div>
                        @endif
                    </div>
                    <div class="relative text-center">
                        {{ __('Avant de continuer, veuillez vérifier votre courrier électronique pour un lien de vérification.') }}
                        {{ __('Si vous n\'avez pas reçu l\'e-mail') }}
                    </div>
                    <div class="relative text-center">
                        <form method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="border border-indigo-600 mt-2 btn relative inline-flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-sm tracking-[.00714em] font-medium bg-primary-600 text-black dark:bg-primary-200 dark:text-primary-800">
                                <span class="material-symbols-outlined">arrow_forward</span>
                                {{ __('cliquez ici pour en demander un autre') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-shrink max-w-full order-1 md:order-2 w-full md:w-1/2 lg:w-2/3 relative rounded-t-lg md:rounded-xl oveflow-hidden bg-primary-200" style="background-image: url({{ asset('src/img/cover/cover1.jpg') }});background-repeat: repeat;">
            <div class="flex items-center justify-center w-full h-full">
                <!-- logo -->
                <div class="relative">
                    <a href="../analytics/analytics-dashboard.html" class="sidebar-logo py-6 flex items-center w-full">
                        <div class="w-9 h-9 rounded-full border-2 border-white flex items-center justify-center text-primary-800 font-bold text-lg">
                            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary-200">AF</span>
                        </div>
                        <h4 class="text-2xl md:text-4xl font-medium tracking-wide text-white ml-2 md:ml-4">Bienvenue sur EPF ONLINE</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
