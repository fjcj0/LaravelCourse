<x-layout>
    <x-slot:heading>
        <h1 class="text-black text-3xl font-bold">Edit Job</h1>
        <div class="w-screen flex items-center justify-between">
            <a href="/jobs" class="p-3 bg-black text-white rounded-xl">Go to jobs</a>
        </div>
    </x-slot:heading>
    <div class="max-w-3xl p-5 flex items-start justify-start">
        <form class="w-full" method="POST" action="/jobs/{{ $job->id }}/update">
            @csrf
            @method('PATCH')
            <div class="space-y-2">
                <div class="border-b border-gray-900/10 pb-2">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <div class="mt-2">
                                <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input id="title" type="text" name="title" placeholder="Shift Leader"
                                        autocomplete="title" value="{{ $job->title }}"
                                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                                </div>
                            </div>
                            <div class="text-sm text-red-500 my-2">
                                @error('title')
                                    <p> {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mt-2">
                                <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <input id="salary" type="salary" name="salary" placeholder="$50,000"
                                        autocomplete="salary" value="{{ $job->salary }}"
                                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                                </div>
                            </div>
                            <div class="text-sm text-red-500 my-2">
                                @error('salary')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center justify-between">

                    <div class="">
                        <button type="submit" form="delete-form"
                            class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
                    </div>
                    <div class="flex items-end justify-end gap-x-3">
                        <a href="/jobs" class="text-sm/6 px-3 py-2 font-semibold text-gray-900">Cancel</a>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                    </div>
                </div>
        </form>
    </div>
    <form method="POST" id="delete-form" action="/job/{{ $job->id }}" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
