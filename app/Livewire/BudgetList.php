<?php

namespace App\Livewire;
use App\Models\Budget;
use Livewire\Component;

class BudgetList extends Component
{
    public $budgets;
  
    public function mount()
    {
      $this->budgets = Budget::all();
    }
    public function render()
    {
        return view('livewire.budget-list')->layout('components.layouts.app');
    }
}
