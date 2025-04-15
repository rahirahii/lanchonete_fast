<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Edit extends Component
{
    public $clienteId;
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

    public function mount($clienteId)
    {
        $cliente = Cliente::findOrFail($clienteId);
        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->endereco = $cliente->endereco;
        $this->telefone = $cliente->telefone;
        $this->cpf = $cliente->cpf;
        $this->email = $cliente->email;
        $this->senha = $cliente->senha;
    }

    public function update()
    {
        $this->validate([
            'nome' => 'required|string|max:80',
            'endereco' => 'required',
            'telefone' => 'required',
            'cpf' => 'required|max:11',
            'email' => 'required',
            'senha' => 'required'
        ]);

        $cliente = Cliente::find($this->clienteId);
        $cliente->update([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => $this->senha
        ]);

        session()->flash('message', 'Cliente atualizado com sucesso');
    }

    public function render()
    {
        return view('livewire.clientes.edit');
    }
}
