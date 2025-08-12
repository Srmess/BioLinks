<div>
    <h1>Editar Perfil</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <form action="{{ route('profile') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <img src="/storage/{{ $user->profile_photo_url }}">
        <input type="file" name="profile_photo">
        </img>
        <div>
            <label>Nome:</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" />
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Descrição:</label>
            <textarea type="text" name="description">{{ old('description', $user->description) }}</textarea>
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Link:</label>
            <input type="text" name="handler" value="{{ old('handler', $user->handler) }}" placeholder="@seulink" />
            @error('handler')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <button>Enviar</button>
    </form>
</div>
