<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            {{-- <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..."
                    class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form> --}}
            <x-form.form action="/search" class="mt-6">
                <x-form.form-input :label="false" name="q" placeholder="Web Developer..." />
            </x-form.form>
        </section>
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <livewire:featured-jobs />
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                 @foreach ($tags as $tag)
                     <x-tag :$tag />
                 @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <livewire:jobs />
        </section>
    </div>
</x-layout>