<x-layout.app>
    <div>
        <h1>Editar link</h1>

        @if ($message = session()->get('message'))
            <div>
                {{ $message }}
            </div>
        @endif

        <form action="{{ route('links.edit', $link) }}" method="post">
            @csrf
            @method('PUT')

            <div>
                <label>Nome:</label>
                <input type="text" name="name" value="{{ old('name', $link->name) }}" />
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label>Link:</label>
                <input type="text" name="url" value="{{ old('url', $link->url) }}" />
                @error('url')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <button>Editar link</button>
        </form>
    </div>
</x-layout.app>
