@props(['active' => false])

<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-900 '}} text-gray-900 flex h-10 w-[60px] items-center justify-center  text-sm font-semibold leading-6 "
  {{$attributes}}
  aria-current="{{$active ? 'page' : 'false'}}"
  >
    {{$slot}}
</a>

