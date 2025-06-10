<x-layout>
    <x-page-heading>Register</x-page-heading>
    
    <x-form.form method="POST" action="/register" enctype="multipart/form-data">
        <x-form.form-input label="Your Name" name="name" required />
        <x-form.form-input label="Email" name="email" type="email" required />
        <x-form.form-input label="Password" name="password" type="password" required />
        <x-form.form-input label="Confirm Password" name="password_confirmation" type="password" required />
    
        <hr class="border-white/20 my-15">
    
        <x-form.form-input label="Employer Name" name="employer" required />
        <x-form.form-input label="Employer Logo" name="logo" type="file" required />
    
        <div class="text-center">
            <x-form.button>Create Account</x-form.button>
        </div>
    
    </x-form.form>
</x-layout>