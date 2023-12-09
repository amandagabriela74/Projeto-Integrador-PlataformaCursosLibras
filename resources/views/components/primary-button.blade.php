<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white m-2 px-14 py-2 bg-sky-400 rounded-xl hover:bg-sky-500 font-bold']) }}>
    {{ $slot }}
</button>
