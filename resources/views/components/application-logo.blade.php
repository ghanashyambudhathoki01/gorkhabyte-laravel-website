@props(['class' => 'h-12 w-12'])

@php
    $logoExtensions = ['png', 'jpg', 'jpeg', 'svg'];
    $logoAsset = null;

    // Check for uploaded logo first
    foreach ($logoExtensions as $ext) {
        $path = public_path("images/gorkhabyte-logo.{$ext}");
        if (file_exists($path)) {
            $logoAsset = asset("images/gorkhabyte-logo.{$ext}");
            break;
        }
    }

    // Fallback to external logo if no uploaded logo exists
    if (!$logoAsset) {
        $logoAsset = "http://127.0.0.1:8000/assets/logo.jpeg";
    }
@endphp

@if($logoAsset)
    <img 
        src="{{ $logoAsset }}" 
        alt="Gorkhabyte Academy Logo"
        {{ $attributes->merge(['class' => "object-contain {$class}"]) }}
    />
@else
    {{-- Decorative SVG Fallback if even the external URL fails --}}
    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => $class]) }}>
        <defs>
            <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#4f46e5"/>
                <stop offset="100%" stop-color="#f59e0b"/>
            </linearGradient>
        </defs>
        <circle cx="100" cy="100" r="80" fill="url(#logoGradient)" opacity="0.1" />
        <path d="M30 80 L25 90 L30 100" stroke="#f59e0b" stroke-width="3" fill="none" stroke-linecap="round"/>
        <path d="M170 80 L175 90 L170 100" stroke="#f59e0b" stroke-width="3" fill="none" stroke-linecap="round"/>
    </svg>
@endif
