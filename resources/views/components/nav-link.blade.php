@props(['active' => false, 'device' => 'pc'])

@php
    $active_classes = "border-b-2";
    $classes = "border-primary-500 text-gray-900 inline-flex items-center px-1 pt-1  text-sm font-medium";

    if ($device === 'mobile') {
        $active_classes = "!bg-primary-50 !border-primary-500 !text-primary-700 block";
        $classes = "border-transparent text-gray-500 hover:bg-gray-50 hover:border-primary-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium";
    }

 @endphp

<a {{ $attributes }}
    class="{{ $active ? $active_classes : "" }} {{ $classes }}"
>
    {{ $slot }}
</a>
