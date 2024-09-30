<x-app-layout>
    <h5 class="mt-3">Bem-vindo ao sistema de gerenciamento de funcionários!</h5>

    <div class="mt-4">
        <h6>Funcionalidades disponíveis:</h6>
        <ul>
            <li><a href="{{ route('funcionarios.index') }}">Visualizar Funcionários</a></li>
            <li><a href="{{ route('funcionarios.create') }}">Adicionar Novo Funcionário</a></li>
        </ul>
    </div>
</x-app-layout>
