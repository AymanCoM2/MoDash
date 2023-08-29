<?php

namespace App\Livewire;

use App\Models\Mandoob;
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
        $fillingMandoon  = Mandoob::find($id);
        $this->userCode  = $fillingMandoon->userCode;
        $this->accountType  = $fillingMandoon->accountType;
        $this->user_areaCode   = $fillingMandoon->user_areaCode;
        $this->areacode  = $fillingMandoon->areacode;
        $this->user_auth_level  = $fillingMandoon->user_auth_level;
    }
}
