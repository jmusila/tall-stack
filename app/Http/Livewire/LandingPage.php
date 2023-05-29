<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class LandingPage extends Component
{
    public $email;
    
    public function subscribe()
    {
        Log::info('I am being clicked! ' . $this->email);
    }

    public function render()
    {
        return view('livewire.landing-page');
    }
}
