<!-- resources/views/livewire/produto-create.blade.php -->

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4 style="text-align:center">Cadastro de Produtos</h4>
                </div>

                <div class="card-body">
                    <form wire:submit.prevent="store">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome do Produto:</label>
                            <input type="text" class="form-control" id="nome" name="nome"
                                placeholder="Nome do Produto" wire:model.defer="nome"
                                style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                        </div>

                        <div class="mb-3">
                            <label for="ingredientes" class="form-label">Ingredientes:</label>
                            <input type="text" class="form-control" id="ingredientes" name="ingredientes"
                                placeholder="Ingredientes do Produto" wire:model.defer="ingredientes"
                                style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                        </div>

                        <div class="mb-3">
                            <label for="valor" class="form-label">Valor:</label>
                            <input type="number" class="form-control" id="valor" name="valor"
                                placeholder="Valor unitário" wire:model.defer="valor"
                                style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="btn btn-outline-primary btn-sm mt-2">
                                <i class="bi bi-upload"></i> Escolher Foto
                                <input type="file" wire:model="imagem" class="d-none" accept="image/*">
                            </label>

                            @if ($imagem)
                                <div class="mt-2">
                                    <img src="{{ $imagem->temporaryUrl() }}" alt="Preview da Imagem"
                                        style="max-width: 200px; max-height: 200px;">
                                </div>
                            @endif

                            @error('imagem')
                                <small class="text-danger d-block">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Cadastrar Produto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
