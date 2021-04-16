<x-public-layout>
    <link rel="stylesheet" href="{{ url('css/sweetalert2/sweetalert2.bundle.css') }}">
    <x-slot name="header">
        <x-navigation></x-navigation>
    </x-slot>
    @livewire('home.main-banner')
    @livewire('product.user-product-register-form')
    <x-slot name="footer">
        <x-footer></x-footer>
    </x-slot>
</x-public-layout>
