<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Create company') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Fill all fields.') }}
        </p>
    </header>

    <form method="post" action="{{ route('company.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')

        <div>
            <x-input-label for="name" :value="__('Company name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" autocomplete="name" />
            <x-input-error :messages="$errors->updatePassword->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Company address')" />
            <x-textarea id="address" name="address" class="mt-1 block w-full"></x-textarea>
            <x-input-error :messages="$errors->updatePassword->get('address')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="nip" :value="__('NIP')" />
            <x-text-input id="nip" name="nip" type="text" class="mt-1 block w-full" autocomplete="nip" />
            <x-input-error :messages="$errors->updatePassword->get('nip')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('success') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
