<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Livewire\Component;

class Subscribers extends Component
{
    protected $subscribers;

    public function render()
    {
        $this->subscribers = Subscriber::paginate('15');

        return view('livewire.subscribers')->with(['subscribers' => $this->subscribers]);
    }
}
