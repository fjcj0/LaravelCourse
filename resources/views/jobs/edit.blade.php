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
                        <x-form-field>
                            <div class="mt-2">
                                <x-form-label for="title">Title</x-form-label>
                                <x-form-input name="title" id="title" placeholder="title" autocomplete="title" />
                            </div>
                            <div class="text-sm text-red-500 my-2">
                                <x-form-error name="title" />
                            </div>
                            <div class="mt-2">
                                <x-form-label for="salary">Salary</x-form-label>
                                <x-form-input name="salary" id="salary" placeholder="salary" autocomplete="salary" />
                            </div>
                            <div class="text-sm text-red-500 my-2">
                                <x-form-error name="salary" />
                            </div>
                        </x-form-field>
                    </div>
                </div>
                <div class="w-full flex items-center justify-between">

                    <div class="">
                        <button type="submit" form="delete-form"
                            class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
                    </div>
                    <div class="flex items-end justify-end gap-x-3">
                        <a href="/jobs" class="text-sm/6 px-3 py-2 font-semibold text-gray-900">Cancel</a>
                        <x-form-button>Update</x-form-button>
                    </div>
                </div>
        </form>
    </div>
    <form method="POST" id="delete-form" action="/job/{{ $job->id }}" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
