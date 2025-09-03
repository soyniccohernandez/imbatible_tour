<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
    <title>El Cruce de la Cordillera 2025 | 4 etapas con Santiago Buitrago</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CSS de Splide -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <!-- Tipografías -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="font-[Montserrat] bg-gray-50 text-gray-800">
    <!-- Header -->
    <header class="fixed top-0 left-0 w-full z-20 bg-black shadow">
        <nav class="flex items-center justify-between px-6 py-4 max-w-7xl mx-auto">
            <!-- Logo izquierda -->
            <div>
                <a href="/">
                    <img src="/assets/logo_light.svg" alt="Logo" class="h-14 md:h-16 w-auto">
                </a>
            </div>

            <!-- Logos derecha -->
            <div class="flex items-center space-x-5">
                <a href="https://www.instagram.com/imbatible__/" target="_blank" rel="noopener">
                    <img src="/assets/logo_instagram.svg" alt="Instagram" class="h-8 w-8">
                </a>
                <a href="https://wa.me/573213028666" target="_blank" rel="noopener">
                    <img src="/assets/logo_whatsapp.svg" alt="WhatsApp" class="h-8 w-8">
                </a>
            </div>
        </nav>
    </header>


    <!-- Contenido principal -->
    <main class="pt-32 pb-16 px-6">
        <section class="max-w-5xl mx-auto  rounded-2xl p-8">
            <h1 class="text-3xl font-bold mb-6 text-center">Política de Privacidad y Tratamiento de Datos Personales
            </h1>

            <p class="mb-4">
                <strong>Reto Imbatible</strong>, en cumplimiento de lo dispuesto en la
                <strong>Ley 1581 de 2012</strong> y demás normas concordantes, informa a los usuarios de este sitio web
                sobre su política de tratamiento y protección de datos personales.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">1. Responsable del tratamiento de la información</h2>
            <ul class="list-disc pl-6 mb-4">
                <li><strong>Nombre:</strong> Reto Imbatible</li>
                <li><strong>Correo electrónico:</strong> <a href="mailto:info@retoimbatible.com"
                        class="text-blue-600">info@retoimbatible.com</a></li>
                <li><strong>Teléfono:</strong> 321 302 8666</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">2. Datos que recopilamos</h2>
            <ul class="list-disc pl-6 mb-4">
                <li>Datos de identificación: nombre, apellido, documento de identidad.</li>
                <li>Datos de contacto: correo electrónico, teléfono.</li>
                <li>Información de navegación: dirección IP, cookies, dispositivo, navegador.</li>
                <li>Datos relacionados con formularios de contacto, inscripciones o solicitudes de información.</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">3. Finalidad del tratamiento</h2>
            <ul class="list-disc pl-6 mb-4">
                <li>Atender consultas, solicitudes o reclamos.</li>
                <li>Gestionar procesos de inscripción o participación en el evento.</li>
                <li>Enviar información sobre actividades, servicios, eventos o promociones.</li>
                <li>Realizar análisis estadísticos de uso del sitio web.</li>
                <li>Cumplir obligaciones legales.</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">4. Derechos de los titulares de datos</h2>
            <p class="mb-4">De acuerdo con la Ley 1581 de 2012, usted tiene derecho a:</p>
            <ul class="list-disc pl-6 mb-4">
                <li>Conocer, actualizar y rectificar sus datos personales.</li>
                <li>Solicitar prueba de la autorización otorgada para su uso.</li>
                <li>Ser informado sobre el tratamiento de sus datos.</li>
                <li>Revocar la autorización y/o solicitar la supresión de los datos.</li>
                <li>Presentar quejas ante la Superintendencia de Industria y Comercio.</li>
            </ul>
            <p class="mb-4">
                Para ejercer estos derechos puede escribirnos al correo
                <a href="mailto:info@retoimbatible.com" class="text-blue-600">info@retoimbatible.com</a>.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">5. Transferencia y transmisión de datos</h2>
            <p class="mb-4">
                Podremos compartir datos con proveedores de servicios tecnológicos (ejemplo: hosting, herramientas de
                email marketing, pasarelas de pago), garantizando que se respete la seguridad y confidencialidad de la
                información.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">6. Uso de cookies</h2>
            <p class="mb-4">
                Este sitio web utiliza cookies propias y de terceros para mejorar la experiencia de navegación, analizar
                el tráfico y personalizar contenidos. El usuario puede configurar su navegador para rechazarlas o
                eliminarlas.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">7. Seguridad de la información</h2>
            <p class="mb-4">
                Implementamos medidas técnicas, humanas y administrativas razonables para proteger la información de
                accesos no autorizados, pérdida, alteración o uso indebido.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">8. Vigencia y cambios de la política</h2>
            <p>
                La presente Política de Privacidad entra en vigencia a partir del
                <strong>{{ date('d/m/Y') }}</strong>.
                Cualquier cambio sustancial será informado en este mismo medio.
            </p>
        </section>
    </main>

    <!-- Footer -->
    <footer class="max-w-7xl mx-auto py-10">
        <div class="flex justify-center items-center gap-16">
            <!-- SVG izquierda -->
            <div>
                <img src="/assets/b.svg" alt="Decoración izquierda" class="h-10 md:h-12">
            </div>

            <!-- Logo con texto debajo -->
            <div class="flex flex-col items-center text-center">
                <p class="text-lg italic text-gray-600 mb-2">Organiza</p>
                <img src="/assets/logo_dark.svg" alt="Logo" class="h-12 md:h-14 mb-2">
                <a href="{{ url('/politica-de-privacidad') }}" class="text-sm text-gray-500 hover:text-gray-700">
                    Política de Privacidad
                </a>
            </div>

            <!-- SVG derecha -->
            <div>
                <img src="/assets/b.svg" alt="Decoración derecha" class="h-10 md:h-12">
            </div>
        </div>
    </footer>
</body>

</html>
