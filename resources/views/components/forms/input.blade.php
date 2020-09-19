{{--Unresolvable dependency resolving [Parameter #0 [ <required> string $name ]] in class BladeUIKit\Components\Forms\Inputs\Input (View: /Users/patrickbrouwers/Sites/blade-ui-kit/resources/views/components/forms/input.blade.php)--}}
{{--<x-input {{ $attributes->merge(['class' => 'p-4 text-gray-700']) }} />--}}

{{--Renders as <x-input> not the actual component contents--}}
<x-input {!! $attributes->merge(['class' => 'p-4 text-gray-700']) !!} />
