<?php

namespace App\Livewire;

use Brian2694\Toastr\Facades\Toastr;
use App\Models\Mandoob;
use Livewire\Attributes\On;
use Livewire\Component;

class Bottomsheet extends Component
{
    public $currentMandoobId  = '';
    public $userCode  = '';
    public $accountType  = '';
    public $user_areaCode  = '';
    public $areacode  = '';
    public $user_auth_level  = '';
    public function render()
    {
        return view('livewire.bottomsheet');
    }

    public function updated()
    {
    }

    #[On('mandoob-selected')]
    public function fillTheSheet($id)
    {
        // $id == id: sent in thr Dispach 
        $this->currentMandoobId = $id;
        $fillingMandoon  = Mandoob::find($id);
        $this->userCode  = $fillingMandoon->userCode;
        $this->accountType  = $fillingMandoon->accountType;
        $this->user_areaCode   = $fillingMandoon->user_areaCode;
        $this->areacode  = $fillingMandoon->areacode;
        $this->user_auth_level  = $fillingMandoon->user_auth_level;
    }

    public function clearModelData()
    {
        $this->userCode = '';
        $this->accountType = '';
        $this->user_areaCode = '';
        $this->areacode = '';
        $this->user_auth_level = '';
        $this->currentMandoobId = '';
    }

    public function updateMandoobData()
    {
        // update the Data + Clear Form and Everything ;
        $updatedMandoob  = Mandoob::find($this->currentMandoobId);
        $updatedMandoob->userCode = $this->userCode;
        $updatedMandoob->accountType = $this->accountType;
        $updatedMandoob->user_areaCode = $this->user_areaCode;
        $updatedMandoob->areacode = $this->areacode;
        $updatedMandoob->user_auth_level = $this->user_auth_level;
        $updatedMandoob->save();

        // ! Now Clear the Model Data 
        $this->clearModelData();
        // * Now Show Toastr If you Can 
        Toastr::success('Updated', 'Done', ["positionClass" => "toast-top-right"]);
        return redirect()->route('home');
    }
}
