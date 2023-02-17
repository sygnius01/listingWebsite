<?php

namespace App\Http\Livewire\Plans;

use Livewire\Component;
use App\Models\Plan;

class PlanCreate extends Component
{
    public string $planname,$description;
    public int $noproperties,$price;

    public function addPlans()
    {
        $plan = Plan::create([
            'planname'=>$this->planname,
            'description'=>$this->description,
            'price'=>$this->price,
            'how_many_properties'=>$this->noproperties,
        ]);

        session()->flash('message', 'Plan Added Successfully');

    }

    public function render()
    {
        return view('livewire.plans.plan-create');
    }
}
