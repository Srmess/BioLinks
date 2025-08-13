<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id='login-form' class="w-full">
                <x-input placeholder="Email" name="email" value="{{ old('email') }}" />
                <x-input placeholder="Password" name="password" value="{{ old('password') }}" />
            </x-form>
            <x-slot:actions>
                <x-button form="login-form" type='submit' class="w-full">Login</x-button>
                <x-a :href="route('register')">I need to create a new account!</x-a>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
