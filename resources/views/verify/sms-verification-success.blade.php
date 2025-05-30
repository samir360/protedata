<x-layouts.focus-center>

    <x-slot name="title">
        {{ __('Thank You') }}
    </x-slot>

    <div class="mx-4">
        <div class="card max-w-3xl bg-base-100 shadow-xl mx-auto text-center">
            <div class="card-body">
                @svg('party', 'w-24 h-24 mx-auto text-primary-500 stroke-primary-500')
                <x-heading.h3 class="text-primary-900">
                    {{ __('Thank you for verifying your phone number!') }}
                </x-heading.h3>
                <p>
                    {{ __('Your phone number has been successfully verified.') }}
                </p>

                <x-button-link.primary href="{{ route('home') }}" class="mt-4 mx-auto">
                    {{ __('Start Your Journey') }}
                </x-button-link.primary>

            </div>
        </div>
    </div>

</x-layouts.focus-center>
