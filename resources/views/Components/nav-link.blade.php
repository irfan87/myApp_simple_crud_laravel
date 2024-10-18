{{-- @props(["active" => false, "class" => ""])

@php
	// $baseClass = $attributes->get('class') ? 'navbar-brand' : 'nav-link';
	$baseClass = $attributes->get('class') ? "navbar-brand" : 'nav-link';
	$activeClass = $active ? 'active' : '';
@endphp

<a 
	class="{{ $baseClass }} {{ $activeClass }}"
	aria-current="{{ $active ? 'page' : 'false' }}" 
	{{ $attributes }}
	>
	{{ $slot }}
</a> --}}
@props(["active" => false])

<a 
	aria-current="{{ $active ? 'page' : 'false' }}" 
	{{ $attributes }}
	>
	{{ $slot }}
</a>