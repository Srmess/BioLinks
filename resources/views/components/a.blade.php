@props(['href'])


<a href="{{ $href }}" {{ $attributes->class(['link link-primary link-hover']) }}>{{ $slot }}</a>
