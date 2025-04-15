<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Show extends Component
{
    public $clienteId;
    public $cliente;

    public function mount($clienteId){
        $this->clienteId=$clienteId;
        $this->showCliente();
    }

    public function showCliente(){
        $this->cliente=Cliente::find($this->clienteId);
    }
    public function render()
    {
        return view('livewire.clientes.show');
    }
}
