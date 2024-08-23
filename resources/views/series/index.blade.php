<x-layout title="Listar">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar série</a>
    
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">                
                    {{ $serie->name }}

                <div class="d-flex gap-2">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-warning ">Editar</a>
                    <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger">Deletar</button>
                    </form>
                </div>
            
            </li>
        @endforeach
    </ul>

</x-layout>