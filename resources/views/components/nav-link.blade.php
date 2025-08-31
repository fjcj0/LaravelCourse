@props(['active' => false])
<a href="{{ $attributes->get('href') }}"
    class="{{ $active ? 'bg-white text-black' : 'text-white' }} font-bold p-3 rounded-xl"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes->except('href') }}>
    {{ $slot }}
</a>