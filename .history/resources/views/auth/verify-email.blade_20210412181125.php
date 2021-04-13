<x-public-layout>
    <x-slot name="header">
        <x-navigation></x-navigation>
    </x-slot>
    <section class="page-banner-110">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{ 'https://ui-avatars.com/api/?name='.Auth::user()->name.'&size=72' }}" alt="" width="72" height="72">
            <h2></h2>
            <div class="alert alert-info">Gracias por registrarte! Antes de comenzar, ¿podría verificar su dirección de correo electrónico haciendo clic en el enlace que le acabamos de enviar? Si no recibió el correo electrónico, con gusto le enviaremos otro.</div>
            @if (session('status') == 'verification-link-sent')
                <p>Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó durante el registro.</p>
            @endif
        </div>
    </section>
    <x-jet-authentication-card>



        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
    <x-slot name="footer">
        <x-footer></x-footer>
    </x-slot>
</x-public-layout>
