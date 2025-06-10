<x-layout>
    <x-page-heading>Sign In</x-page-heading>

    <x-form.form method="POST" action="/login">
        <x-form.form-input label="Email" name="email" type="email" required />
        <x-form.form-input label="Password" name="password" type="password" required />

        <div class="text-center">
            <x-form.button>Login</x-form.button>
        </div>
        
    </x-form.form>
</x-layout> 