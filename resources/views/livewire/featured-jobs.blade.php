<div>
    <div class="grid lg:grid-cols-3 gap-8 mt-6">
        @foreach ($featuredJobs as $job)
            <x-job-card :$job />
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-4" >
        {{ $featuredJobs->links() }}
    </div>
</div>
