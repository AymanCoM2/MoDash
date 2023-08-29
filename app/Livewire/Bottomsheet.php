<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Bottomsheet extends Component
{
    public $userCode  = 'Code';
    public $accountType  = 'Type';
    public $user_areaCode  = 'USR Area Code';
    public $areacode  = 'Area Code';
    public $user_auth_level  = 'Auth Level';
    public function render()
    {
        return view('livewire.bottomsheet');
    }

    public function updated()
    {
        die();
    }

    #[On('mandoob-selected')]
    public function fillTheSheet($id)
    // $id == id: sent in thr Dispach 
    {
        $this->userCode  = $id;
        $this->accountType  = 'cc';
        $this->user_areaCode  = 'c c c';
        $this->areacode  = 'c c';
        $this->user_auth_level  = 'c c';
    }
}
