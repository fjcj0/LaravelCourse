<x-layout>
    <x-slot:heading>
        <h1 class="text-black text-3xl font-bold">Create Job</h1>
        <div class="w-screen flex items-center justify-between">
            <a href="/jobs" class="p-3 bg-black text-white rounded-xl">Go to jobs</a>
        </div>
    </x-slot:heading>
    <div class="max-w-3xl p-5 flex items-start justify-start">
        <form class="w-full" method="POST" action="/jobs">
            @csrf
            <div class="space-y-2">
                <div class="border-b border-gray-900/10 pb-2">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <x-form-field>
                            <div class="mt-2">
                                <x-form-label for="title">Title</x-form-label>
                                <x-form-input type="text" name="title" id="title" placeholder="title"
                                    autocomplete="title" />
                            </div>
                            <div class="text-sm text-red-500 my-2">
                                <x-form-error name="title" />
                            </div>
                            <div class="mt-2">
                                <x-form-label for="salary">Salary</x-form-label>
                                <x-form-input type="text" name="salary" id="salary" placeholder="salary"
                                    autocomplete="salary" />
                            </div>
                            <div class="text-sm text-red-500 my-2">
                                <x-form-error name="salary" />
                            </div>
                        </x-form-field>
                    </div>
                </div>
                <div class="flex items-end justify-end gap-x-3">
                    <a href="/jobs" class="text-sm/6 px-3 py-2 font-semibold text-gray-900">Cancel</a>
                    <x-form-button>Save</x-form-button>
                </div>
        </form>
    </div>
</x-layout>
