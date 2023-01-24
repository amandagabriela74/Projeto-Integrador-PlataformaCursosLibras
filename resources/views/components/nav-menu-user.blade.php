@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center  border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center  border-b-2 border-transparent text-gray-900 text-base font-normal font-medium leading-5 text-gray-900 rounded-lg dark:text-white hover:bg-sky-400 hover:text-white dark:hover:bg-gray-700 w-full h-full';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>


{{-- items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 --}}