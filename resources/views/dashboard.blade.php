<div>
    <h1>Dashboard </h1>

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <ul>
        @foreach ($links as $link)
            <li>
                <a href="{{ route('links.edit', $link) }}">
                    {{ $link->name }}
                </a>

                <form action="{{ route('links.delete', $link) }}" method="post"
                    onsubmit=" return confirm('Tem certeza que deseja excluir esse link?')">
                    @csrf
                    @method('DELETE')
                    <button>Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
