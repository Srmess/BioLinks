<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="route('profile')" put id="profile-form" enctype="multipart/form-data">
                <div class="flex flex-col gap-2 items-center">
                    <x-avatar-image src="/storage/{{ $user->profile_photo_url }}" alt="user profile photo" />
                    <x-file-input name="profile_photo" />
                </div>
                <x-input placeholder="Name" name="name" value="{{ old('name', $user->name) }}" />
                <x-textarea placeholder="Description" name="description"
                    value="{{ old('description', $user->description) }}" />
                <x-input placeholder="handler" name="handler" value="{{ old('handler', $user->handler) }}"
                    prefix="biolinks.com.br/" />
            </x-form>

            <x-slot:actions>
                <x-button form="profile-form" type='submit' class="w-full">Update profile</x-button>
                <a href="{{ route('dashboard') }}" class="w-full">
                    <x-button class="w-full btn-ghost hover:bg-conic-240/20">Cancel</x-button>
                </a>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
