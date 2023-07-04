<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Livewire\Component;

class Subscribers extends Component
{
    public $search;

    public function render()
    {
        $subscribers = Subscriber::where('email', 'like', "%{$this->search}%")->paginate('15');

        return view('livewire.subscribers')->with(['subscribers' => $subscribers]);
    }

    public function delete(Subscriber $subscriber)
    {
        $subscriber->delete();

        session()->flash('message', 'Subsrciber deleted successfully.');
    }
}
