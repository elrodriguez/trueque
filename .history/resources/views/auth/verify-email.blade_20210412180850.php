<x-public-layout>
    <x-slot name="header">
        <x-navigation></x-navigation>
    </x-slot>
    <section class="page-banner-110">
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="{{ 'https://ui-avatars.com/api/?name='.Auth::user()->name.'&size=72' }}" alt="" width="72" height="72">
          <h2>{{ Auth::user()->name }}</h2>
          <p class="lead">{{ Auth::user()->email }}</p>
        </div>
    </section>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

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
