<x-public-layout>
    <x-slot name="header">
        <x-navigation></x-navigation>
    </x-slot>
    @livewire('auth.login')
    <x-slot name="footer">
        <x-footer></x-footer>
    </x-slot>
</x-public-layout>
