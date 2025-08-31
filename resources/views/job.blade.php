<x-layout>
    <x-slot:heading>
        <h1 class="text-black text-3xl font-bold">Job</h1>
    </x-slot:heading>
    <div class="flex my-3 text-black p-3">
        <strong>{{ $job['title'] }}: </strong>
        <p>{{ $job['salary'] }}</p>
    </div>
</x-layout>