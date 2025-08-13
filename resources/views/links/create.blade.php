<x-layout.app>
    <x-container>
        <x-card title="Create a new Link">
            <x-form :route="route('links.create')" post id="create-link-form">
                <x-input placeholder="Name" name="name" value="{{ old('name') }}" />
                <x-input placeholder="URL" name="url" value="{{ old('url') }}" />
            </x-form>

            <x-slot:actions>
                <x-button form="create-link-form" type='submit' class="w-full">Create new Link</x-button>
                <a href="{{ route('dashboard') }}" class="w-full">
                    <x-button class="w-full btn-ghost hover:bg-conic-240/20">Cancel</x-button>
                </a>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
