<x-web-layout>
    <x-slot name="header">
        <x-navigation></x-navigation>
    </x-slot>
    @livewire('home.main-banner')
    @livewire('home.main-product-list')
    <x-slot name="footer">
        <x-footer></x-footer>
    </x-slot>
</x-web-layout>
