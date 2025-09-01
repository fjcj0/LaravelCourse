<x-layout>
    <x-slot:heading>
        <div class="w-full flex items-center justify-between">
            <h1 class="text-black text-3xl font-bold">Job</h1>
            <a href="/jobs" class="p-3 bg-black text-white rounded-xl">Go to jobs</a>
        </div>
    </x-slot:heading>
    <div class="flex my-3 text-black p-3">
        <strong>{{ $job['title'] }}: </strong>
        <p>{{ $job['salary'] }}</p>
    </div>
    <div class="p-3">
        <a href="/job/{{$job->id}}/edit" class="p-3 rounded-lg bg-black text-white">Edit Job</a>
    </div>
</x-layout>
