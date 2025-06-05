@props(['link'])

<a href="{{$link}}" class="hover:text-blue-400 transition-colors duration-300 font-bold max-h-10 flex">
    <img src="{{Vite::asset('resources/images/logo.svg ')}}" alt="" class="w-5">
    <h2 class="pl-2">Get2Work</h2>
</a>