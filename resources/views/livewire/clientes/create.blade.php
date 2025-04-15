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
                    <h4 style="text-align:center">Cadastro de Cliente</h4>
                </div>

                <div class="card-body">
                    <form wire:submit.prevent="store">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome"
                                placeholder="Nome Completo" wire:model.defer="nome"
                                style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                        </div>
                        
                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input type="endereco" class="form-control" id="endereco" name="endereco"
                                placeholder="Endereço" wire:model.defer="endereco"
                                style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                        </div>

                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" id="telefone" name="telefone"
                                placeholder="(12)345678910" wire:model.defer="telefone"
                                style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                        </div>

                        <div class="mb-3">
                            <label for="cpf" class="form-label">CPF:</label>
                            <input type="text" class="form-control" id="cpf" name="cpf"
                                placeholder="422.113.338/42" wire:model.defer="cpf"
                                style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Ex.: SeuEmail@gmail.com" wire:model.defer="email"
                                style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha"
                                placeholder="Digite Sua Senha" wire:model.defer="senha"
                                style="border-radius: 100px; border-inline-color: black; border-block-color:black">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="rememberMe"
                                id="rememberMe">
                            <label class="form-check-label text-secondary" for="rememberMe">Salvar
                                Informações</label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
