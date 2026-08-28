<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Módulo de Matrícula - UNS')</title>
    <!-- Tailwind CSS CDN & FontAwesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        uns: {
                            red: '#991b1b',      /* Rojo Guinda   */
                            darkred: '#7f1d1d',  /* Guinda Oscuro */
                            gold: '#d97706',     /* Dorado   */
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 font-sans antialiased flex flex-col min-h-screen">

<!-- Top Navigation Header (Rojo Guinda  ) -->
<header class="bg-uns-red text-white shadow-md border-b-4 border-uns-gold">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo & Brand UNS -->
            <div class="flex items-center space-x-3">
                <div class="bg-white p-1 rounded-lg shadow-sm flex items-center justify-center">
                    <img src="{{ asset('img/logo_uns_v2.png') }}" alt="Logo UNS" class="h-10 w-auto object-contain">
                </div>
                <div>
                    <h1 class="font-extrabold text-lg leading-none tracking-wide">UNIVERSIDAD NACIONAL DEL SANTA</h1>
                    <span class="text-xs text-amber-300 font-medium"></span>
                </div>
            </div>

            <!-- User Info -->
            <div class="flex items-center space-x-4">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-semibold">Fernando Ch.</p>
                    <p class="text-xs text-red-200">Ing. de Sistemas - Estudiante</p>
                </div>
                <img src="{{ asset('img/perfil_fer.png') }}" alt="Fernando" class="w-10 h-10 rounded-full object-cover shadow border-2 border-white">
                <a href="{{ url('/') }}" class="text-red-100 hover:text-white text-sm flex items-center gap-1 bg-uns-darkred px-3 py-1.5 rounded-md transition hover:bg-red-950">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="hidden md:inline">Salir</span>
                </a>
            </div>
        </div>
    </div>
</header>

<div class="flex-1 flex max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-6 gap-6">

    <!-- Sidebar Navigation -->
    <aside class="w-64 bg-white rounded-xl shadow-sm border border-gray-200 p-4 shrink-0 hidden md:block">
        <nav class="space-y-1">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Menú Principal</p>

            <a href="{{ url('/dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-red-50 hover:text-uns-red transition">
                <i class="fa-solid fa-chart-line text-uns-red w-5"></i>
                Dashboard / Inicio
            </a>

            <a href="{{ url('/dashboard#horarios') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-red-50 hover:text-uns-red transition">
                <i class="fa-solid fa-calendar-days text-amber-600 w-5"></i>
                Mis Horarios
            </a>

            <a href="{{ url('/dashboard#pendientes') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-red-50 hover:text-uns-red transition">
                <i class="fa-solid fa-book-open text-emerald-600 w-5"></i>
                Cursos Pendientes
            </a>

            <div class="pt-3 pb-1">
                <div class="border-t border-gray-200"></div>
            </div>

            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Proceso Activo</p>

            <a href="{{ url('/matricula') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-semibold bg-uns-red text-white shadow hover:bg-uns-darkred transition">
                <i class="fa-solid fa-pen-to-square w-5"></i>
                Proceso Matrícula
            </a>

            <a href="{{ url('/consolidado') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-gray-700 hover:bg-red-50 hover:text-uns-red transition">
                <i class="fa-solid fa-file-invoice text-purple-600 w-5"></i>
                Consolidado
            </a>
        </nav>
    </aside>

    <!-- Main Dynamic Content -->
    <main class="flex-1 min-w-0">
        @yield('content')
    </main>
</div>

<!-- Footer -->
<footer class="bg-white border-t border-gray-200 py-4 mt-auto">
    <div class="max-w-7xl mx-auto px-4 text-center text-xs text-gray-500">
        &copy; 2026 Universidad Nacional del Santa &bull; Módulo de Matrículas UNS
    </div>
</footer>

</body>
</html>
