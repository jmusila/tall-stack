<div class="flex flex-col bg-indigo-900 w-full h-screen" x-cloak x-data="{showSubscribe: false,}">
<nav class="flex pt-5 justify-between container mx-auto text-indigo-200">
    <a class="text-4xl font-bold" href="/"><x-application-logo class="w-16 h-16 fill-current"></x-application-logo></a>
    <div class="flex justify-end">
        @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endauth
    </div>
</nav>
<div class="flex container mx-auto items-center h-full">
    <div class="flex flex-col w-1/3 items-start">
    <h1 class="text-white font-bold text-5xl leading-tight mb-4">Simple generic landing page to subscribe.</h1>
    <p class="text-indigo-200 text-xl mb-10">We are just learning the <span class="font-bold underline">TALL</span> stack. Would you mind subscribing?</p>
    <button class="rounded py-3 px-8 bg-red-500 hover:bg-red-600" x-on:click="showSubscribe = true">Subscribe</button>
    </div>
</div>
<div class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center justify-center w-full h-full" x-show="showSubscribe" x-on:click.self="showSubscribe = false" x-on:keydown.escape.window="showSubscribe = false">
    <div class="mg-auto bg-pink-500 shadow-2xl rounded-xl p-8">
        <p class="text-white text-5xl font-extrabold text-center">Let's do it!</p>
        <form class="flex flex-col items-center p-24" wire:submit.prevent="subscribe" wire:loading.class="opacity-50" wire:target="subscribe"> 
            <input class="rounded px-5 py-3 w-80 border border-blue-400" type="email" name="email" placeholder="Email Address" wire:model="email"></input>
            <span class="text-gray-100 text-xs">We will send you a confirmation email.</span>
            <button class="rounded px-5 py-3 mt-5 w-80 bg-blue-500 justify-center hover:bg-blue-700">Get In</button>
        </form>
    </div>
</div>
</div>
