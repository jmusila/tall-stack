<x-guest-layout>
   <div class="flex flex-col bg-indigo-900 w-full h-screen">
    <nav>
        <a href="/"><x-application-logo></x-application-logo></a>
        <div>
            @auth
                <a href="{{ route('dashboard') }}"></a>
            @endauth
        </div>
    </nav>
   </div>
   <div class="flex flex-col bg-pink-500 w-full h-screen">

   </div>
</x-guest-layout>
