<?php

namespace App\Livewire;

use Livewire\Component;

class Datarow extends Component
{
    public $mandoob;
    public function render()
    {
        return view('livewire.datarow');
    }

    public function mount($mandoob = null)
    {
        $this->mandoob = $mandoob;
    }
}
