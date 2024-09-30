<x-app-layout>
    <h1>Cadastrar Novo Funcionário</h1>

    <form action="{{ route('funcionarios.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" id="cargo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="salario">Salário:</label>
            <input type="number" step="0.01" name="salario" id="salario" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</x-app-layout>
