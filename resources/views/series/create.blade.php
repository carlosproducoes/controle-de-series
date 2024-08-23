<x-layout title="Nova Série">
    <form action="{{ route('series.store') }}" method="POST">
        @csrf

        <div class="mb-2">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <input type="submit" class="btn btn-primary" value="Adicionar">
    </form>
</x-layout>