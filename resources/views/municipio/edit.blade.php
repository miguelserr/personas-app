<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Municipio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('municipios.update', ['municipio'=> $municipio->muni_codi]) }}">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Id</label>
                            <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id"
                                   disabled="disabled" value="{{ $municipio->muni_codi }}">
                            <div id="codigoHelp" class="form-text">Municipio Id</div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Municipio</label>
                            <input type="text" required class="form-control" id="name" name="name"
                                   placeholder="Name municipio" value="{{ $municipio->muni_nomb }}">
                        </div>
                        <label for="departamento">Departamento:</label>
                        <select class="form-select" id="departamento" name="code" required>
                            <option selected disabled value="">Choose One...</option>
                            @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->depa_codi }}" {{ $departamento->depa_codi == $municipio->depa_codi ? 'selected' : '' }}>
                                    {{ $departamento->depa_nomb }}
                                </option>
                            @endforeach
                        </select>
                        <div class="mt-3">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                            <a href="{{ route('municipios.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
