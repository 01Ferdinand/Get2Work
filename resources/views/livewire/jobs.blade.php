<div>
    <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $jobs->links() }}
    </div>
</div>