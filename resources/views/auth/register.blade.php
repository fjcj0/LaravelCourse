<x-layout>
    <x-slot:heading>
        <h1 class="text-black text-3xl font-bold">Registeration</h1>
    </x-slot:heading>
    <div class="max-w-3xl p-5 flex items-start justify-start">
        <form class="w-full" method="POST" action="/register">
            @csrf
            <div class="space-y-2">
                <div class="border-b border-gray-900/10 pb-2">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <x-form-field>

                            <div class="mt-2">
                                <x-form-label for="first_name">First Name</x-form-label>
                                <x-form-input type="text" name="first_name" id="first_name" placeholder="first name"
                                    autocomplete="first_name" />
                            </div>
                            <div class="text-sm text-red-500 my-2">
                                <x-form-error name="first_name" />
                            </div>

                            <div class="mt-2">
                                <x-form-label for="last_name">Salary</x-form-label>
                                <x-form-input type="text" name="last_name" id="last_name" placeholder="last name"
                                    autocomplete="last_name" />
                            </div>
                            <div class="text-sm text-red-500 my-2">
                                <x-form-error name="last_name" />
                            </div>


                            <div class="mt-2">
                                <x-form-label for="email">Email</x-form-label>
                                <x-form-input type="email" name="email" id="email" placeholder="email"
                                    autocomplete="email" />
                            </div>
                            <div class="text-sm text-red-500 my-2">
                                <x-form-error name="email" />
                            </div>

                            <div class="mt-2">
                                <x-form-label for="password">Password</x-form-label>
                                <x-form-input type="password" name="password" id="password" placeholder="password"
                                    autocomplete="password" />
                            </div>
                            <div class="text-sm text-red-500 my-2">
                                <x-form-error name="password" />
                            </div>

                            <div class="mt-2">
                                <x-form-label for="password_confirmation">Confirmation Password</x-form-label>
                                <x-form-input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="password confirmation" autocomplete="password_confirmation" />
                            </div>
                            <div class="text-sm text-red-500 my-2">
                                <x-form-error name="password_confirmation" />
                            </div>

                        </x-form-field>
                    </div>
                </div>
                <div class="flex items-end justify-end gap-x-3">
                    <a href="/" class="text-sm/6 px-3 py-2 font-semibold text-gray-900">Cancel</a>
                    <x-form-button>Save</x-form-button>
                </div>
        </form>
    </div>
</x-layout>
