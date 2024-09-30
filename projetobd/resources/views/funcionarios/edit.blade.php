<x-app-layout>
    <div class="container">
        <h1>Editar Funcionário</h1>

        <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ $funcionario->nome }}" required>
            </div>

            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" name="cargo" id="cargo" class="form-control" value="{{ $funcionario->cargo }}" required>
            </div>

            <div class="mb-3">
                <label for="salario" class="form-label">Salário</label>
                <input type="number" step="0.01" name="salario" id="salario" class="form-control" value="{{ $funcionario->salario }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $funcionario->email }}" required>
            </div>

            <button type="submit" class="btn btn-success">Atualizar</button>
            <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-app-layout>
