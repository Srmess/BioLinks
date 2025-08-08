<div>
    <h1>Cadastro</h1>

    @if ($message = session()->get('message'))
        <div>
            {{ $message }}
        </div>
    @endif

    <form action="{{ route('register') }}" method="post">
        @csrf

        <div>
            <label>Nome:</label>
            <input type="text" name="name" value="{{ old('name') }}" />
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label>Email:</label>
            <input type="text" name="email" value="{{ old('email') }}" />
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label>Confirmação do email:</label>
            <input type="text" name="email_confirmation" value="{{ old('email_confirmation') }}" />
            @error('email_confirmation')
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
