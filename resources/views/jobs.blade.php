<x-layout>
    <x-slot:heading>
        <h1 class="text-black text-3xl font-bold">Job Listings</h1>
    </x-slot:heading>
    <div class="p-3">
        @foreach ($jobs as $job)
        <a href="/job/{{ $job['id'] }}" class="flex my-3 text-blue-600 underline">
            <strong>{{ $job['title'] }}: </strong>
            <p>{{ $job['salary'] }}</p>
        </a>
        @endforeach
    </div>
</x-layout>