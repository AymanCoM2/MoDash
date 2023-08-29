<?php

namespace App\Livewire;

use App\Models\Mandoob;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Livewire;

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


    #[On('mandoob-updated')]
    public function updateRowCard($id)
    {
        // ! so that when data is updated , it takes effect without reloading
        $this->render();
    }
}
