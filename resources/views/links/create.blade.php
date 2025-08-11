<div>
    <h1>Cadastrar link</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <form action="{{ route('links.create') }}" method="post">
        @csrf

        <div>
            <label>Nome:</label>
            <input type="text" name="name" value="{{ old('name') }}" />
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label>link:</label>
            <input type="text" name="url" value="{{ old('url') }}" />
            @error('url')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <button>Criar link</button>
    </form>
</div>
