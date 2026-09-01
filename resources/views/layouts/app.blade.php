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
                            red: '#DC2C4C',
                            darkred: '#B51F3B',
                            gold: '#d97706',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@500;700;800&family=Inter:wght@400;600;800&display=swap');
        .font-tech { font-family: 'Chakra Petch', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased flex flex-col min-h-screen">

    <!-- Top Navigation Header (Rojo Carmesí UNS) -->
    <header class="bg-[#DC2C4C] text-white shadow-md border-b-4 border-amber-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo & Brand UNS -->
                <div class="flex items-center space-x-3">
                    <a href="{{ url('/dashboard') }}" class="flex items-center space-x-3">
                        <div class="bg-white p-1 rounded-lg shadow-sm flex items-center justify-center">
                            <img src="{{ asset('img/logo_login.png') }}" alt="Logo UNS" class="h-8 w-auto object-contain" onerror="this.outerHTML='<i class=\'fa-solid fa-university text-[#DC2C4C] text-xl px-1\'></i>'">
                        </div>
                        <div>
                            <h1 class="font-extrabold text-lg leading-none tracking-wide">UNIVERSIDAD NACIONAL DEL SANTA</h1>
                            <span class="text-xs text-amber-300 font-medium">Portal Integrado de Matrícula v2.1</span>
                        </div>
                    </a>
                </div>

                <!-- Parte Superior Derecha: Ciclo Actual + Perfil -->
                <div class="flex items-center space-x-4">
                    <div class="bg-[#B51F3B] px-3.5 py-1.5 rounded-lg border border-amber-400/40 text-right hidden sm:block">
                        <p class="text-[10px] text-amber-300 font-bold uppercase tracking-wider">Ciclo Académico Actual</p>
                        <p class="text-sm font-extrabold text-white font-tech">VI CICLO &bull; 2026-I</p>
                    </div>

                    <div class="text-right hidden md:block">
                        <p class="text-sm font-semibold">Fernando Ch.</p>
                        <p class="text-xs text-red-200">Ing. de Sistemas - Estudiante</p>
                    </div>

                    <div class="w-10 h-10 rounded-full bg-amber-500 text-white flex items-center justify-center font-bold text-lg shadow border-2 border-white overflow-hidden">
                        <img src="{{ asset('img/perfil.jpg') }}" alt="Fernando" class="w-full h-full object-cover" onerror="this.outerHTML='F'">
                    </div>

                    <a href="{{ url('/login') }}" class="text-red-100 hover:text-white text-sm flex items-center gap-1 bg-[#B51F3B] px-3 py-1.5 rounded-md transition hover:bg-red-950">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="hidden md:inline">Salir</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="flex-1 flex max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-6 gap-6">

        <!-- Sidebar Navigation -->
        <aside class="w-64 bg-white rounded-2xl shadow-sm border border-gray-200 p-4 shrink-0 hidden md:block">
            <nav class="space-y-1">
                <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Menú Principal</p>
                
                <a href="{{ url('/dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-gray-700 hover:bg-red-50 hover:text-[#DC2C4C] transition">
                    <i class="fa-solid fa-chart-line text-[#DC2C4C] w-5"></i>
                    Dashboard / Inicio
                </a>

                <a href="{{ url('/horarios') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-gray-700 hover:bg-red-50 hover:text-[#DC2C4C] transition">
                    <i class="fa-solid fa-calendar-days text-amber-600 w-5"></i>
                    Mis Horarios
                </a>

                <a href="{{ url('/cursos-pendientes') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-gray-700 hover:bg-red-50 hover:text-[#DC2C4C] transition">
                    <i class="fa-solid fa-book-open text-emerald-600 w-5"></i>
                    Cursos Pendientes
                </a>

                <div class="pt-3 pb-1">
                    <div class="border-t border-gray-200"></div>
                </div>

                <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Proceso Activo</p>

                <a href="{{ url('/matricula') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold bg-[#DC2C4C] text-white shadow hover:bg-[#B51F3B] transition">
                    <i class="fa-solid fa-pen-to-square w-5"></i>
                    Proceso Matrícula
                </a>

                <a href="{{ url('/consolidado') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-gray-700 hover:bg-red-50 hover:text-[#DC2C4C] transition">
                    <i class="fa-solid fa-file-invoice text-purple-600 w-5"></i>
                    Consolidado Final
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
