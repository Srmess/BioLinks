<x-layout.app>
    <x-container>
        <div class="absolute top-10 left-10 flex flex-col gap-4">
            <x-a href="{{ route('profile') }}" class="w-full">
                <x-button class="btn-ghost btn-block">Update profile</x-button>
            </x-a>
            <x-a href="{{ route('links.create') }}" class="w-full">
                <x-button class="btn-ghost btn-block">Create a new link</x-button>
            </x-a>
            <x-a href="{{ route('logout') }}" class="w-full">
                <x-button class="btn-ghost btn-block">Logout</x-button>
            </x-a>
        </div>
        <div>
            <div class="text-center space-y-8">
                <div class="space-y-2">
                    <x-avatar-image src="/storage/{{ $user->profile_photo_url }}" alt="user profile photo" />
                    <div class="font-bold text-2xl tracking-wider">{{ $user->name }}</div>
                    <div class="text-sm opacity-80 max-w-[400px] line-clamp-6">{{ $user->description }}</div>
                </div>
                <ul class="space-y-4">
                    @foreach ($links as $link)
                        <li class="flex items-center gap-2">
                            @unless ($loop->first)
                                <x-form :route="route('links.up', $link)" patch>
                                    <x-button class="btn-ghost">
                                        <x-icons.arrow-up class="size-6" />
                                    </x-button>
                                </x-form>
                            @else
                                <x-button disabled class="btn-ghost">
                                    <x-icons.arrow-up class="size-6" />
                                </x-button>
                            @endunless

                            @unless ($loop->last)
                                <x-form :route="route('links.down', $link)" patch>
                                    <x-button class="btn-ghost">
                                        <x-icons.arrow-down class="size-6" />
                                    </x-button>
                                </x-form>
                            @else
                                <x-button disabled class="btn-ghost">
                                    <x-icons.arrow-down class="size-6" />
                                </x-button>
                            @endunless


                            <x-a href="{{ route('links.edit', $link) }}" class="w-full">
                                <x-button class="btn-outline btn-block rounded-full!">
                                    {{ $link->name }}
                                </x-button>
                            </x-a>

                            <x-form :route="route('links.delete', $link)" delete
                                onsubmit=" return confirm('Tem certeza que deseja excluir esse link?')">
                                <x-button class="btn-error! btn-ghost! rounded-full px-0 w-10">
                                    <x-icons.trash class="size-6" />
                                </x-button>

                            </x-form>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </x-container>
</x-layout.app>
