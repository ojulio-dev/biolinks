@props([
    'href' => null,
    'block' => null,
    'outline' => null,
    'color' => 'primary',
])

@php
    $tag = $href ? 'a' : 'button';
@endphp

<{{ $tag }} {{ $href ? "href=$href" : '' }}
    {{ $attributes->class(['btn', "btn-{$color}", 'btn-wide' => $block, 'btn-outline' => $outline]) }}>
    {{ $slot }}</{{ $tag }}>
