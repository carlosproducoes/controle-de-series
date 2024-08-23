<x-layout title="Editar">
    <form action="{{ route('series.update', $serie->id ) }}" method="POST">
        @csrf
        @method("PUT")

        <div class="mb-2">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="{{ $serie->name }}" name="name" id="name" class="form-control">
        </div>

        <input type="submit" class="btn btn-primary" value="Editar">
    </form>
</x-layout>