@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full'
    ]
@endphp

<x-form.form-field :$label :$name>
    <select {{$attributes($defaults)}}>
        {{$slot}}
    </select>
</x-form.form-field>