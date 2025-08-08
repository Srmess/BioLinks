<div>
    <h1>Login</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <form action="{{ route('login') }}" method="post">
        @csrf
        <div>
            <label>Email:</label>
            <input type="text" name="email" value="{{ old('email') }}" />
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Senha:</label>
            <input type="text" name="password" value="{{ old('password') }}" />
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <button>Enviar</button>
    </form>
</div>
