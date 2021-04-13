<x-public-layout>
    <x-slot name="header">
        <x-navigation></x-navigation>
    </x-slot>
    @livewire('home.main-banner')
    @livewire('home.main-product-list')
    <x-slot name="footer">
        <x-footer></x-footer>
    </x-slot>
    <script src="{{ url('js/sweetalert2/sweetalert2.bundle.js') }}" defer></script>
</x-public-layout>
