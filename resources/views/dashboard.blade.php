<div>
    <h1>Dashboard </h1>

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <a href="{{ route('links.create') }}">Criar novo link</a>
    <br>
    <a href="{{ route('profile') }}">Editar perfil</a>

    <ul>
        @foreach ($links as $link)
            <li style="display: flex">
                @unless ($loop->first)
                    <form action="{{ route('links.up', $link) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button>⬆️​ ​</button>
                    </form>
                @endunless

                @unless ($loop->last)
                    <form action="{{ route('links.down', $link) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button>⬇️</button>

                    </form>
                @endunless


                <a href="{{ route('links.edit', $link) }}">
                    {{ $link->name }}
                </a>

                <form action="{{ route('links.delete', $link) }}" method="post"
                    onsubmit=" return confirm('Tem certeza que deseja excluir esse link?')">
                    @csrf
                    @method('DELETE')
                    <button>Deletar ​​</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
