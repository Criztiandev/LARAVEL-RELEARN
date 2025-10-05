@props(['type' => 'a', 'href' => null])

@php
    $isActive = $href && request()->is(trim($href, '/') ?: '/');
    $baseClasses =
        'flex items-center gap-3 p-2 text-base font-medium rounded-lg transition-colors duration-150 cursor-pointer group';
    $activeClasses = 'bg-gray-100 text-gray-900 dark:bg-gray-700 dark:text-white';
    $inactiveClasses = 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700';
    $classes = $baseClasses . ' ' . ($isActive ? $activeClasses : $inactiveClasses);
@endphp

@if ($type === 'a')
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
