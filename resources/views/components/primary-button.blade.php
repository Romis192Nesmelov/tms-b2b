<button {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-xl cursor-pointer font-semibold uppercase bg-green px-6 py-3 border-2 border-solid border-green-800 hover:border-yellow-400 focus:border-yellow-400 text-neutral-300 hover:text-yellow-400 focus:text-yellow-400']) }}>
    {{ $slot }}
</button>
