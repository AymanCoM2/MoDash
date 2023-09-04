<?php

namespace App\Livewire;

use Brian2694\Toastr\Facades\Toastr;
use App\Models\Mandoob;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\On;
use Livewire\Component;

class Bottomsheet extends Component
{
    public $baseUrl  = 'http://localhost:5050/oneHuman/';
    public $currentMandoobId  = '';
    public $userCode  = '';
    public $accountType  = '';
    public $user_areaCode  = '';
    public $areacode  = '';
    public $user_auth_level  = '';

    public $userName;
    public $userEmail;
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
        // $id == id: sent in thr Dispatch 
        $this->currentMandoobId = $id;
        $fillingMandoob  = Mandoob::find($id);
        $this->userCode  = $fillingMandoob->userCode;
        $this->accountType  = $fillingMandoob->accountType;
        $this->user_areaCode   = $fillingMandoob->user_areaCode;
        $this->areacode  = $fillingMandoob->areacode;
        $this->user_auth_level  = $fillingMandoob->user_auth_level;

        $this->getFirebaseData();
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
        $this->dispatch('mandoob-updated', id: $updatedMandoob->id);
        // ! Now Clear the Model Data 
        $this->clearModelData();
        // * Now Show Toastr If you Can 
        toastr()->success('Updated', 'Done');
        // return redirect()->route('home');
        // Dispach another Event 

    }

    public function getFirebaseData()
    {
        $completeUrl = $this->baseUrl . $this->userCode;
        $response = Http::get($completeUrl);
        $responseBody = $response->body();
        $responseArray = json_decode($responseBody);
        // dd($responseArray[0]->Area);
        // dd($responseArray[0]->Username) ; 
        $this->userName  = $responseArray[0]->Username;
        $this->userEmail  = $responseArray[0]->Email;
    }
}
