<button type="button"
{{ $attributes->merge(['class' => 'm-2 bg-website-normal p-3 text-sm sm:text-lg h-min w-auto text-center font-normal text-white shadow-sm transform transition hover:scale-110 hover:rounded-sm flex justify-center items-center space-x-2']) }}
@isset($href) onclick="window.location='{{ $href }}';" @endisset>
    {{ $slot }}
</button>
