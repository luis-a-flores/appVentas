<x-app-layout>



    @livewireStyles

    <livewire:cliente.app-products />



    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    <x-livewire-alert::flash />
    @stack('js')




</x-app-layout>
