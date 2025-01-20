<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>From the Jobs Page</h1>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-5 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}</strong> Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach
    </div>
    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
