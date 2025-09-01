<x-layout>
    <x-slot:heading>
        <h1 class="text-black text-3xl font-bold">Job Listings</h1>
        <div class="w-screen flex items-center justify-between">
            <a href="/jobs/create" class="p-3 bg-black text-white rounded-xl">Go to create</a>
        </div>
    </x-slot:heading>
    <div class="p-3 flex flex-col gap-5">
        @foreach ($jobs as $job)
            <a href="/job/{{ $job['id'] }}">
                <h1 class="font-bold text-xl text-black">{{ $job->employer->name }}</h1>
                <div class="flex text-blue-600 hover:text-blue-900 duration-300 ease underline">
                    <strong>{{ $job['title'] }}: </strong>
                    <p>{{ $job['salary'] }}</p>
                </div>
            </a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
