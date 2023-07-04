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

    public function delete(Subscriber $subscriber)
    {
        $subscriber->delete();

        session()->flash('message', 'Subsrciber deleted successfully.');
    }
}
