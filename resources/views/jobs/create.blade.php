<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-form.form method="POST" action="/jobs">

        <x-form.form-input label="Title" name="title" placeholder="CEO" required />
        <x-form.form-input label="Salary" name="salary" placeholder="$75,000" required />
        <x-form.form-input label="Location" name="location" placeholder="Atlanta, Georgia" required />

        <x-form.select label="Schedule" name="schedule">
            <option class="bg-[#060606] border border-[#060606]">Part Time</option>
            <option class="bg-[#060606] border border-[#060606]">Full Time</option>
            <option class="bg-[#060606] border border-[#060606]">Contract</option>
        </x-form.select>

        <x-form.form-input label="URL" name="url" placeholder="https://my-comapny//jobs/workers-needed" required /> 

        <x-form.checkbox label="Featured (Costs Extra)" name="featured" />

        <hr class="border-white/20 my-15">
        
        <x-form.form-input label="Tags (comma separated)" name="tags" placeholder="programmer, video, eductaion" />
        <div class="text-center">
            <x-form.button>Publish</x-form.button>
        </div>
    </x-form.form>
</x-layout>