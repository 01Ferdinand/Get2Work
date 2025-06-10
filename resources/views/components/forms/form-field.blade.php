@props(['label', 'name'])

<div>
    @if ($label)
        <div>
            <x-form.form-label :$name :$label>
                {{$label}}
            </x-form.form-label>
        </div>
    @endif

    <div class="mt-1">
        {{$slot}}
        {{-- <x-form.form-error name=$name /> --}}
            @error($name)
                <p class=" text-red-600 font-semibold mt-1">{{$message}}</p>
            @enderror
    </div>
</div>