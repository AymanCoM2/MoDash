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
        /**
         * <livewire:Datarow :mandoob="$mandoob">
         * IMPORTANT to use the mount() method For that !!
         */
        $this->mandoob = $mandoob;
    }

    public function sendFromRowtoSheet($mandoobId)
    {
        // $mandoobId
        // ,id: $mandoobId
        $this->dispatch('mandoob-selected', id: $mandoobId);
    }
}
