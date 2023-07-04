<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Livewire\Component;

class Subscribers extends Component
{

    public function render()
    {
        $subscribers = Subscriber::paginate('15');

        return view('livewire.subscribers')->with(['subscribers' => $subscribers]);
    }
}
