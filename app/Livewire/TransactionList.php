<?php

namespace App\Livewire;
use App\Models\Transaction;
use Livewire\Component;

class TransactionList extends Component
{
    public $transactions;
  
    public function mount()
    {
      $this->transactions = Transaction::all();
    }
    public function render()
    {
        return view('livewire.transaction-list')->layout('components.layout.app');
    }
}
