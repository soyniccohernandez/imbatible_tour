<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Carrusel Simple</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CSS de Splide -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <!-- JS de Splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" defer></script>
    <style>
        .splide__slide img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Carrusel -->
    <section class="w-full bg-gray-100 py-8">
        <div class="max-w-full mx-auto px-4">
            <div id="image-carousel" class="splide rounded-2xl shadow-lg overflow-hidden max-w-7xl mx-auto"
                aria-label="Carrusel principal">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($slides as $slide)
                            <li class="splide__slide relative">
                                <img src="{{ $slide['src'] }}" alt="{{ $slide['alt'] }}"
                                    class="w-full h-48 sm:h-64 md:h-80 lg:h-[400px] xl:h-[500px] object-cover">
                                <div
                                    class="absolute bottom-6 left-6 text-white bg-black/50 px-4 py-2 rounded-lg max-w-xs">
                                    <h2 class="text-lg md:text-2xl font-bold">{{ $slide['title'] }}</h2>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Sección con formulario -->
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-start">

                <!-- Columna Izquierda -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        Conéctate con nosotros
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Estamos aquí para resolver tus dudas y brindarte toda la información que necesites.
                        Déjanos tus datos y pronto un asesor se pondrá en contacto contigo.
                    </p>
                </div>

                <!-- Columna Derecha -->
                <div class="bg-white p-8 shadow-lg rounded-2xl">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">
                        Déjanos tus datos
                    </h3>
                    <form action="#" method="POST" class="space-y-5">
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" id="nombre" name="nombre"
                                class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                placeholder="Tu nombre completo">
                        </div>
                        <div>
                            <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                            <input type="tel" id="telefono" name="telefono"
                                class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                placeholder="+57 300 000 0000">
                        </div>
                        <div>
                            <label for="correo" class="block text-sm font-medium text-gray-700">Correo
                                electrónico</label>
                            <input type="email" id="correo" name="correo"
                                class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                placeholder="ejemplo@correo.com">
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full bg-indigo-600 text-white py-3 rounded-xl font-medium shadow hover:bg-indigo-700 transition">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- JS Carrusel -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#image-carousel', {
                type: 'loop', // Repetición en bucle
                perPage: 1, // Una imagen a la vez
                autoplay: true, // Automático
                interval: 4000, // 4 segundos
                pauseOnHover: true, // Pausa al pasar el mouse
                arrows: true, // Flechas
                pagination: true, // Puntos
                speed: 800, // Velocidad transición
            }).mount();
        });
    </script>

</body>

</html>
