<div>
    <img src={{ $user->profile_photo_url }} alt="foto de perfil">
    <h2>User {{ $user->name }}</h2>
    <p>{{ $user->description }}</p>

    <ul>
        @foreach ($user->links as $link)
            <li>
                <a href="{{ $link->url }}" target="_blank">
                    {{ $link->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
