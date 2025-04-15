<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProdutoCreate extends Component
{
    public $nome;
    public $ingredientes;
    public $valor;
    public $imagem;

    use WithFileUploads;

    public function store()
    {

        $imagemPath = null;
        if ($this->imagem) {
            $imagemPath = $this->imagem->store('produtos', 'public');
        }

        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            'imagem' => $imagemPath
        ]);
        session()->flash('success', 'Produto cadastrado com sucesso');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
