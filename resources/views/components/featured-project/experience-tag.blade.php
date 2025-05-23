@props(['experience' => 'beginner'])

@php
    $color = "bg-green-100 text-green-800";
    if ($experience === 'advanced') {
          $color = "bg-red-100 text-red-800";
    } elseif ($experience === 'intermediate') {
        $color = "bg-yellow-100 text-yellow-800";
    }
@endphp

<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $color }}">{{ Str::title($slot) }}</span>
