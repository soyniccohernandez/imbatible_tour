<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1 class="text-2xl font-bold mb-6">Lista de Interesados</h1>

            <!-- Fila de búsqueda y botones -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-3 mb-6 space-y-3 sm:space-y-0">

                <!-- Input de búsqueda + botones Buscar / Mostrar Todo -->
                <form action="{{ route('interesados.index') }}" method="GET" class="flex flex-1 space-x-2">
                    <input type="text" name="q" placeholder="Buscar por nombre, teléfono o correo"
                        value="{{ request('q') }}"
                        class="flex-1 px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-400" required>

                    <button type="submit"
                        class="bg-red-500 text-white px-4 py-2 rounded-xl hover:bg-red-700 transition font-medium">
                        Buscar
                    </button>

                    <a href="{{ route('interesados.index') }}"
                        class="bg-gray-400 text-white px-4 py-2 rounded-xl hover:bg-gray-500 transition font-medium">
                        Limpiar
                    </a>
                </form>

                <!-- Botón Exportar Excel -->
                <a href="{{ route('interesados.export') }}"
                    class="bg-green-500 text-white px-4 py-2 rounded-xl hover:bg-green-600 transition font-medium">
                    Exportar Excel
                </a>
            </div>


            <!-- Tabla de interesados -->
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Teléfono</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Correo</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Autorización</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Registrado</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($interesados as $interesado)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $interesado->nombre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $interesado->telefono }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $interesado->correo }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $interesado->autorizaContacto ? 'Sí' : 'No' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $interesado->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center text-gray-500">No hay interesados
                                    registrados.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Paginación -->
                <div class="px-6 py-4">
                    {{ $interesados->withQueryString()->links() }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
