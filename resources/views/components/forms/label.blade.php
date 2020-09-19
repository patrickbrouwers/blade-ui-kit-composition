{{--Unresolvable dependency resolving [Parameter #0 [ <required> string $for ]] in class BladeUIKit\Components\Forms\Label--}}
{{--<x-label {{ $attributes->merge(['class' => 'font-bold']) }} />--}}

{{-- Renders as <x-label> not the component contents --}}
<x-label {!! $attributes->merge(['class' => 'font-bold']) !!} />
