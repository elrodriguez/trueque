<x-public-layout>
    <x-slot name="header">
        <x-navigation></x-navigation>
    </x-slot>
    @livewire('home.main-banner')
    @livewire('product.user-product-create-form')
    <x-slot name="footer">
        <x-footer></x-footer>
    </x-slot>
</x-public-layout>
