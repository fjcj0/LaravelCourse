<x-layout>
    <x-slot:heading>
        <div class="w-screen flex items-center justify-between">
            <h1 class="text-black text-3xl font-bold">Job</h1>
            <a href="/jobs" class="p-3 bg-black text-white rounded-xl">Go to jobs</a>
        </div>
    </x-slot:heading>
    <div class="flex my-3 text-black p-3">
        <strong>{{ $job['title'] }}: </strong>
        <p>{{ $job['salary'] }}</p>
    </div>
</x-layout>
