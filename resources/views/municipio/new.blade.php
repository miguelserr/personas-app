<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Municipio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('municipios.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="id" class="form-label">Code</label>
                            <input type="text" class="form-control" id="id" name="id" disabled="disabled">
                            <div id="idHelp" class="form-text">Municipio code</div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Municipio</label>
                            <input type="text" required class="form-control" id="name" name="name" 
                                   placeholder="Name commune">
                        </div>
                        <label for="departamento">Departamento:</label>
                        <select class="form-select" id="departamento" name="code" required>
                            <option selected disabled value="">Choose One...</option>
                            @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
                            @endforeach
                        </select>
                        <div class="mt-3">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
                            <a href="{{ route('municipios.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
