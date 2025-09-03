<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="sm:px-6 lg:px-8">
                <a href="{{ route('interesados.index') }}" class="block bg-white shadow-lg rounded-2xl p-6 hover:shadow-xl transition">

                    <div class="flex items-center justify-between">
                        <!-- Icono / Avatar -->
                        <div class="flex items-center space-x-4">
                            <div
                                class="h-14 w-14 flex items-center justify-center rounded-full bg-[#C2270E] text-white text-2xl">
                                📋
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Gestión de interesados</h3>
                                <p class="text-gray-500 text-sm">Accede al listado de registros y opciones de gestión.
                                </p>
                            </div>
                        </div>

                        <!-- Flecha -->
                        <div class="text-gray-400 group-hover:text-[#C2270E] transition text-2xl">
                            →
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</x-app-layout>
