<div id="form-create">
    <x-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('User') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk membuat data user baru') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-label for="name" value="{{ __('Nama') }}" />
                <small>Nama Lengkap Akun</small>
                <x-input id="name" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.name" />
                <x-input-error for="user.name" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.email" />
                <x-input-error for="user.email" class="mt-2" />
            </div>

            @if ($action == "createUser")
            <div class="form-group col-span-6 sm:col-span-5">
                <x-label for="password" value="{{ __('Password') }}" />
                <small>Minimal 8 karakter</small>
                <x-input id="password" type="password" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.password" />
                <x-input-error for="user.password" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-label for="password_confirmation" value="{{ __('Konfirmasi Password') }}" />
                <small>Minimal 8 karakter</small>
                <x-input id="password_confirmation" type="password" class="mt-1 block w-full form-control shadow-none" wire:model.defer="user.password_confirmation" />
                <x-input-error for="user.password_confirmation" class="mt-2" />
            </div>
            @endif
        </x-slot>

        <x-slot name="actions">
            <x-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-action-message>

            <x-button>
                {{ __($button['submit_text']) }}
            </x-button>
        </x-slot>
    </x-form-section>

    <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />
</div>
