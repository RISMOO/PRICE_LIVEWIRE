<?php

namespace App\Http\Livewire;

use Livewire\Component;
//use App\Service\LicensePriceCalculator;


class Calcul extends Component

{

    public $teamSize = 2;


    /*

    public function mount()//METHODE LIVEWIRE appele a l'initialisation //est appele avant le render et une seul fois//voir doc livewire lifecycle hooks
    {
        $this->amount = $this->calculateAmount($this->teamSize); //affecté al'initialisation

    }
    //APRES CHAQUE UPDATE ON APPELE LA METHODE AMOUNT
    public function updatedTeamSize(int $value)//METHODE LIVEWIRE ,sera appele uniquement si teamsize a été mis a jour
    {
        $this->amount = $this->calculateAmount($value);//a chaque update on recalcule
    }

*/
    public function render()//render saffiche des qu'il y a un changement
    {
        return view('livewire.calcul', [
             'amount' => $this->calculateAmount($this->teamSize)//passe la variable amount avec le prix calculé
           // 'amount' => LicensePriceCalculator::calculatePrice($this->teamSize)//on fait appel aun namespace creer et on elnve la fonction calculateAmount

        ]);
    }

    private function calculateAmount(int $teamSize)
    {
        return $teamSize <= 5 ?
            $teamSize * 15
            : 50 + ($teamSize - 5) * 10;
    }


}
