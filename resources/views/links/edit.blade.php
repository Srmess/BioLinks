<x-layout.app>
    <x-container>
        <x-card title="Edit Link">
            <x-form :route="route('links.edit', $link)" put id="edit-link-form">
                <x-input placeholder="Name" name="name" value="{{ old('name', $link->name) }}" />
                <x-input placeholder="URL" name="url" value="{{ old('url', $link->url) }}" />
            </x-form>

            <x-slot:actions>
                <x-button form="edit-link-form" type='submit' class="w-full">Edit Link</x-button>
                <a href="{{ route('dashboard') }}" class="w-full">
                    <x-button class="w-full btn-ghost hover:bg-conic-240/20">Cancel</x-button>
                </a>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
