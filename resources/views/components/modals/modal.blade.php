<div {{ $attributes->merge(['class' => 'relative inline-block align-bottom rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all w-full']) }}>
    <div>
        @isset($icon)
        <div {{ $icon->attributes->merge(['class' => 'mx-auto flex items-center justify-center h-12 w-12 rounded-full p-2 rounded-full']) }}>
            {{ $icon }}
        </div>
        @endisset
        <div class="mt-3 text-center sm:mt-5">
            <h3 {{ $title->attributes->merge(['class' => 'text-lg leading-6 font-medium text-gray-900']) }}>{{ $title }}</h3>
            <p {{ $description->attributes->merge(['class' => 'text-sm font-normal text-gray-600']) }}>{{ $description }}</p>
            <div class="mt-2">
                {{ $body }}
            </div>
        </div>
    </div>
    <div class="mt-5 sm:mt-6">
        {{ $buttons }}
    </div>
</div>
