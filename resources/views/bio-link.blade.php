<x-layout.app>
    <x-container>
        <div class="text-center space-y-8">
            <div class="space-y-2">
                <x-avatar-image src="/storage/{{ $user->profile_photo_url }}" alt="user profile photo" />
                <div class="font-bold text-2xl tracking-wider">{{ $user->name }}</div>
                <div class="text-sm opacity-80 max-w-[400px] line-clamp-6">{{ $user->description }}</div>
            </div>
            <ul class="space-y-4">
                @foreach ($user->links as $link)
                    <li class="flex items-center gap-2">
                        <x-a href="{{ $link->url }}" target="_blank" class="w-full">
                            <x-button class="btn-outline btn-block rounded-full!">
                                {{ $link->name }}
                            </x-button>
                        </x-a>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>
