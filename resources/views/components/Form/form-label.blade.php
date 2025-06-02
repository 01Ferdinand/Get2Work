{{-- <label {{$attributes->merge(['class' => 'block text-sm/6 font-medium text-gray-900'])}} >{{$slot}}</label> --}}

<label>
<div class="inline-flex items-center gap-x-2">
    <span class="w-2 h-2 bg-white inline-block"></span>

    <h3 class="font-bold text-lg">{{$slot}}</h3>
</div>
</label>