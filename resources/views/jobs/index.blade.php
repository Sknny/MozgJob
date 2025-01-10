<x-layout>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md-6">
        @forelse ($jobs as $job)
        <x-job-card :job="$job" />
        @empty
        <p>No Jobs Available</>
        @endforelse
    </div>
</x-layout>