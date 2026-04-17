@props([
    'variant' => 'primary', // primary, secondary, outline, ghost
    'size' => 'md', // sm, md, lg
    'href' => null,
    'icon' => null,
    'iconPosition' => 'left',
    'fullWidth' => false,
    'type' => 'button',
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 active:scale-95 focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:scale-100';
    
    $variantClasses = [
        'primary' => 'bg-greycode-light-blue text-white hover:bg-blue-700 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-greycode-light-blue shadow-md hover:shadow-lg',
        'secondary' => 'bg-gray-800 text-white hover:bg-black dark:bg-gray-700 dark:hover:bg-gray-600 focus:ring-gray-500 shadow-md hover:shadow-lg',
        'outline' => 'border-2 border-greycode-light-blue text-greycode-light-blue bg-transparent hover:bg-greycode-light-blue hover:text-white dark:text-blue-400 dark:border-blue-400 dark:hover:bg-blue-600 focus:ring-greycode-light-blue',
        'ghost' => 'text-greycode-light-blue hover:bg-gray-100 dark:text-blue-400 dark:hover:bg-gray-800 focus:ring-greycode-light-blue',
        'gradient' => 'bg-gradient-to-r from-greycode-light-blue to-greycode-mid-blue text-white hover:brightness-110 focus:ring-greycode-light-blue shadow-md hover:shadow-xl',
    ];
    
    $sizeClasses = [
        'sm' => 'px-3 py-1.5 text-sm',
        'md' => 'px-5 py-2.5 text-base',
        'lg' => 'px-7 py-3.5 text-lg',
    ];
    
    $widthClass = $fullWidth ? 'w-full' : '';
    
    $classes = $baseClasses . ' ' . $variantClasses[$variant] . ' ' . $sizeClasses[$size] . ' ' . $widthClass;
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon && $iconPosition === 'left')
            <i class="{{ $icon }} mr-2"></i>
        @endif
        {{ $slot }}
        @if($icon && $iconPosition === 'right')
            <i class="{{ $icon }} ml-2"></i>
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon && $iconPosition === 'left')
            <i class="{{ $icon }} mr-2"></i>
        @endif
        {{ $slot }}
        @if($icon && $iconPosition === 'right')
            <i class="{{ $icon }} ml-2"></i>
        @endif
    </button>
@endif