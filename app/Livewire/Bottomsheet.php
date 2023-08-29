<?php

namespace App\Livewire;

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
}
