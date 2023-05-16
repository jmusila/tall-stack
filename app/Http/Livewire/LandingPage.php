<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class LandingPage extends Component
{
    public function subscribe()
    {
        Log::info('I am being clicked!');
    }

    public function render()
    {
        return view('livewire.landing-page');
    }
}
