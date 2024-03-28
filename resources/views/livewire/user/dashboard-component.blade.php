<div>
    @include('extends.side-bar')
    <main class="lg:flex">
        @include('extends.aside')
        <!-- content -->
        <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">

            @livewire($profile)
        </div>
    </main>

</div>