@props([
    'variant' => 'default'
])

@php
    $classes = match ($variant) {
        'success' => 'bg-green-100 text-green-700',
        'warning' => 'bg-amber-100 text-amber-700',
        'danger' => 'bg-red-100 text-red-700',
        default => 'bg-slate-100 text-slate-700',
    };
@endphp

<span {{ $attributes->merge([
    'class' => "inline-flex items-center rounded-full px-2.5 py-1 text-xs font-semibold {$classes}"
]) }}>
    {{ $slot }}
</span>