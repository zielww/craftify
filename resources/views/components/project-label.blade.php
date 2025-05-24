@props(['skill_level' => 'beginner'])

@php
    $styling = "bg-primary-100 text-primary-800";
    if ($skill_level === 'advanced') {
        $styling = "bg-red-100 text-red-800";
    }else if ($skill_level === 'intermediate') {
        $styling = "bg-yellow-100 text-yellow-800";
    }
@endphp

<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium mr-2 {{ $styling }}">{{ Str::title($skill_level) }}</span>
