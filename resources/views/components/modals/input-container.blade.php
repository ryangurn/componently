<div {{ $attributes->merge(['class' => 'relative border border-gray-300 rounded-md px-3 py-2 focus-within:z-10 focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600']) }}>
    <label {{ $name->attributes->merge(['class' => 'block text-xs font-medium text-gray-900']) }}>{{ $name }}</label>
    {{ $slot }}
</div>
