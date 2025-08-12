<x-layout.app>
    <x-container>
        <x-card title="Register">
            <x-form :route="route('register')" post id='register-form'>
                <x-input placeholder="Name" name="name" value="{{ old('name') }}" />
                <x-input placeholder="Email" name="email" value="{{ old('email') }}" />
                <x-input placeholder="Email confirmation" name="email_confirmation"
                    value="{{ old('email_confirmation') }}" />
                <x-input placeholder="Password" name="password" value="{{ old('password') }}" />
            </x-form>
            <x-slot:actions class="flex-col">
                <x-button form="register-form" type='submit' class="w-full">Register</x-button>
                <x-a :href="route('login')">Already have an account!</x-a>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
