<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Carrusel Simple</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CSS de Splide -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">



    <!-- Tipografias -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- JS de Splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" defer></script>
    <style>
        body {
            font-family: "Montserrat", sans-serif;

        }

        .splide__slide img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-float {
            animation: float 4s ease-in-out infinite;
        }


        @keyframes zoom-slow {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .animate-zoom-slow {
            animation: zoom-slow 20s ease-in-out infinite;
        }



        @keyframes fade-in {
            0% {
                opacity: 0;
                transform: scale(0.95);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes fade-out {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        /* Animación de zoom/flotado */
        @keyframes float-intro {
            0% {
                transform: scale(0.95);
                opacity: 0;
            }

            20% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.05);
            }

            80% {
                transform: scale(1);
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* --------------------------- Intro*/

        @keyframes fadeScaleIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(20px);
            }

            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        @keyframes fadeScaleOut {
            from {
                opacity: 1;
                transform: scale(1) translateY(0);
            }

            to {
                opacity: 0;
                transform: scale(0.9) translateY(-20px);
            }
        }

        @keyframes fadeOutBg {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        .animate-in {
            animation: fadeScaleIn 1.8s ease-in-out forwards;
        }

        .animate-out {
            animation: fadeScaleOut 1s ease-in-out forwards;
        }

        .animate-bg-out {
            animation: fadeOutBg 1.5s ease forwards;
        }
    </style>
</head>

<body>
    <div id="intro" class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-black">
        <!-- Logo principal (centrado absoluto) -->
        <img id="intro-logo" src="/assets/logo_event.svg" alt="Logo Evento"
            class="w-72 md:w-[28rem] lg:w-[36rem] xl:w-[44rem] opacity-0">

        <!-- Bloque "Organiza" + logo pequeño -->
        <div id="intro-subblock" class="flex flex-col items-center mt-8 opacity-0">
            <span class="text-white text-lg md:text-xl tracking-wide mb-2">Organiza</span>
            <img src="/assets/logo_light.svg" alt="Logo Secundario" class="w-24 md:w-32 lg:w-40">
        </div>
    </div>



    <!-- Carrusel con Navbar y Logo centrado -->
    <section class="relative w-full">

        <!-- Navbar sobrepuesto arriba -->
        <header class="absolute top-0 left-0 w-full z-20">
            <nav class="flex items-center justify-between px-6 py-4 max-w-7xl mx-auto">

                <!-- Logo izquierda -->
                <div>
                    <img src="/assets/logo_light.svg" alt="Logo" class="h-16 md:h-20 w-auto">
                </div>

                <!-- Logos derecha -->
                <div class="flex items-center space-x-5">
                    <a href="https://instagram.com" target="_blank" rel="noopener">
                        <img src="/assets/logo_instagram.svg" alt="Instagram" class="h-10 w-10">
                    </a>
                    <a href="https://wa.me/573000000000" target="_blank" rel="noopener">
                        <img src="/assets/logo_whatsapp.svg" alt="WhatsApp" class="h-10 w-10">
                    </a>
                </div>

            </nav>
        </header>

        <!-- Logo centrado sobre el carrusel -->
        <div class="absolute inset-0 flex items-center justify-center z-10">
            <img src="/assets/logo_event.svg" alt="Logo Evento"
                class="w-72 md:w-[28rem] lg:w-[36rem] xl:w-[44rem] animate-float">
        </div>

        <!-- Carrusel -->
        <div id="image-carousel" class="splide w-full overflow-hidden" aria-label="Carrusel principal">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($slides as $slide)
                        <li class="splide__slide relative">
                            <div class="aspect-[16/9] md:aspect-[21/9] w-full">
                                <img src="{{ $slide['src'] }}" alt="{{ $slide['alt'] }}"
                                    class="w-full h-full object-cover object-center animate-zoom-slow" />
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <!-- Sección con formulario -->
    <section class=" py-16">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-24 items-center justify-items-cente p-6">

                <!-- Columna Izquierda -->
                <div class="text-center max-w-2xl">

                    <div class="text-left">
                        <!-- Primera parte -->
                        <h2 class="text-5xl font-black mb-2 italic" style="color:#C2270E;">
                            DEL 26 AL 29 DE
                        </h2>

                        <!-- SVG decorativo -->
                        <div class="my-1 flex">
                            <img src="/assets/a.svg" alt="Decoración" class="h-5 md:h-6">
                        </div>

                        <!-- Segunda parte -->
                        <h2 class="text-5xl font-black mt-2 italic" style="color:#C2270E;">
                            NOVIEMBRE DE 2025
                        </h2>
                    </div>

                    <p class="text-lg text-gray-600 leading-relaxed text-justify mt-10">
                        <span class="font-semibold">Vive el ciclismo de una manera única:</span>
                        hombro a hombro con Santiago Buitrago, pedaleando cuatro etapas por nuestro hermoso país,
                        cruzando la cordillera central, compartiendo historias, anécdotas y creando miles de recuerdos.
                    </p>
                </div>

                <!-- Columna Derecha -->
                <div class="max-w-full w-full">
                    <div class="flex justify-center ">
                        <div
                            class="bg-black text-[#E9C82D] font-bold text-4xl px-6 py-3 inline-block italic rounded-lg">
                            ¡Sólo 40 cupos!
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center mt-5">
                        ¿Quieres más información?
                    </h3>
                    <form action="#" method="POST" class="space-y-5">
                        <!-- Nombre -->
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" id="nombre" name="nombre" required
                                class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm px-4 py-2 
             focus:border-[#C2270E] focus:ring-[#C2270E] sm:text-sm"
                                placeholder="Tu nombre completo">
                        </div>

                        <!-- Teléfono -->
                        <div>
                            <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                            <input type="tel" id="telefono" name="telefono" required
                                class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm px-4 py-2 
             focus:border-[#C2270E] focus:ring-[#C2270E] sm:text-sm"
                                placeholder="+57 300 000 0000">
                        </div>

                        <!-- Correo -->
                        <div>
                            <label for="correo" class="block text-sm font-medium text-gray-700">
                                Correo electrónico
                            </label>
                            <input type="email" id="correo" name="correo" required
                                class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm px-4 py-2 
             focus:border-[#C2270E] focus:ring-[#C2270E] sm:text-sm"
                                placeholder="ejemplo@correo.com">
                        </div>

                        <!-- Check consentimiento -->
                        <div class="flex items-start">
                            <input id="acepto" name="acepto" type="checkbox" required
                                class="h-4 w-4 text-[#C2270E] border-gray-300 rounded focus:ring-[#C2270E]">
                            <label for="acepto" class="ml-2 text-sm text-gray-600">
                                Autorizo ser contactado(a) para recibir información relacionada con
                                <span class="font-semibold text-gray-800">El cruce de la cordillera</span>.
                            </label>
                        </div>

                        <!-- Botón -->
                        <div>
                            <button type="submit"
                                class="w-full bg-[#C2270E] text-white py-3 font-medium shadow 
             hover:bg-red-700 transition rounded-none clip-path-inverted">
                                Enviar
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>

    <div id="cookie-banner" class="fixed bottom-0 inset-x-0 bg-gray-900 text-white p-4 z-50">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between space-y-3 sm:space-y-0">
            <p class="text-sm text-center sm:text-left">
                Usamos cookies y almacenamos datos para mejorar tu experiencia en
                <span class="font-semibold">El cruce de la cordillera</span>.
                Al continuar navegando aceptas nuestra
                <a href="/politica-de-privacidad" class="underline text-[#C2270E]">Política de privacidad</a>.
            </p>
            <div class="flex space-x-2">
                <button onclick="acceptCookies()"
                    class="bg-[#C2270E] px-4 py-2 rounded-md text-sm font-medium hover:bg-red-700 transition">
                    Aceptar
                </button>
                <button onclick="rejectCookies()"
                    class="bg-gray-700 px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-600 transition">
                    Rechazar
                </button>
            </div>
        </div>
    </div>


    <footer class="max-w-7xl mx-auto">
        <div class="flex justify-center items-center gap-16">

            <!-- SVG izquierda -->
            <div>
                <img src="/assets/b.svg" alt="Decoración izquierda" class="h-10 md:h-12">
            </div>

            <!-- Logo con texto debajo -->
            <div class="flex flex-col items-center text-center">
                <p class="text-lg italic text-gray-600 mb-2">Organiza</p>
                <img src="/assets/logo_dark.svg" alt="Logo" class="h-12 md:h-14 mb-2">
            </div>

            <!-- SVG derecha -->
            <div>
                <img src="/assets/b.svg" alt="Decoración derecha" class="h-10 md:h-12">
            </div>

        </div>
    </footer>


    <!-- JS Carrusel -->
    <script>
        // Animaciones carrousel
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#image-carousel', {
                type: 'loop', // Repetición en bucle
                perPage: 1, // Una imagen a la vez
                autoplay: true, // Automático
                interval: 4000, // 4 segundos
                pauseOnHover: true, // Pausa al pasar el mouse
                arrows: false, // Flechas
                pagination: false, // Puntos
                speed: 800, // Velocidad transición
            }).mount();
        });


        // Animaciones Intro
        window.addEventListener('load', () => {
            const intro = document.getElementById('intro');
            const logo = document.getElementById('intro-logo');
            const subblock = document.getElementById('intro-subblock');

            // 1️⃣ Fondo negro inicial (suspenso)
            setTimeout(() => {
                // 2️⃣ Aparece logo principal (centrado)
                logo.classList.add('animate-in');

                // 3️⃣ Después aparece bloque "Organiza" + logo pequeño
                setTimeout(() => {
                    subblock.classList.add('animate-in');

                    // 4️⃣ Mantener visibles un rato
                    setTimeout(() => {
                        // 🚀 Se van los dos logos al mismo tiempo
                        subblock.classList.add('animate-out');
                        logo.classList.add('animate-out');

                        // 5️⃣ Luego el fondo
                        setTimeout(() => {
                            intro.classList.add('animate-bg-out');
                            setTimeout(() => intro.remove(), 1500);
                        }, 1000);

                    }, 3500); // tiempo visibles juntos

                }, 2500); // delay después del logo principal

            }, 1000); // tiempo solo fondo negro
        });


        // Animaciones Cookies
        function acceptCookies() {
            localStorage.setItem("cookiesAccepted", "true");
            document.getElementById("cookie-banner").style.display = "none";
        }

        function rejectCookies() {
            localStorage.setItem("cookiesAccepted", "false");
            document.getElementById("cookie-banner").style.display = "none";
        }

        // Ocultar banner si ya aceptó/rechazó
        if (localStorage.getItem("cookiesAccepted")) {
            document.getElementById("cookie-banner").style.display = "none";
        }


       
    </script>

</body>

</html>
