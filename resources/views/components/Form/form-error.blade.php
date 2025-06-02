@props(['name'])

{{-- @if ($errors->has($name))
    <p class="text-xs text-red-800 font-semibold mt-1">
        {{ $errors->first($name) }}
    </p>
@endif --}}



@error($name)
    <p class="text-xs text-red-800 font-semibold mt-1">{{ $message }}</p>
@enderror