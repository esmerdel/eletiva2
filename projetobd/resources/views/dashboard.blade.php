<x-app-layout>
    <div style="background-image: url('{{ asset('images/naregua4.jpg') }}'); background-size: cover; background-position: center; height: 100vh; margin: 0; padding: 0; overflow: hidden;">
        <div class="text-center" style="padding-top: 20%;">
            <h5 class="mt-3" style="color: white;">Gerenciamento do Sistema!</h5>
            <div class="mt-4" style="background-color: rgba(255, 255, 255, 0.7); border-radius: 10px; padding: 20px;">
                <h6>Funcionalidades disponíveis:</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('funcionarios.index') }}" class="text-dark">Visualizar Funcionários</a></li>
                    <li><a href="{{ route('funcionarios.create') }}" class="text-dark">Adicionar Novo Funcionário</a></li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
