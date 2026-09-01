<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Inteligencia Académica - UNS</title>
    <!-- Tailwind CSS CDN & FontAwesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600;700&family=Inter:wght@300;400;600;800&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #0b0507;
            background-image:
                radial-gradient(circle at 50% 0%, rgba(220, 44, 76, 0.15), transparent 70%),
                linear-gradient(to right, rgba(220, 44, 76, 0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(220, 44, 76, 0.03) 1px, transparent 1px);
            background-size: 100% 100%, 40px 40px, 40px 40px;
        }

        .font-tech {
            font-family: 'Chakra Petch', sans-serif;
        }

        /* Cortes geométricos futuristas estilo Cyberpunk / Sci-Fi */
        .clip-cyber-box {
            clip-path: polygon(0 0, 100% 0, 100% calc(100% - 20px), calc(100% - 20px) 100%, 0 100%);
        }

        .clip-cyber-card-1 {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 25px 100%, 0 calc(100% - 25px));
        }

        .clip-cyber-card-2 {
            clip-path: polygon(25px 0, 100% 0, 100% calc(100% - 25px), calc(100% - 25px) 100%, 0 100%, 0 25px);
        }

        .clip-cyber-btn {
            clip-path: polygon(12px 0, 100% 0, 100% calc(100% - 12px), calc(100% - 12px) 100%, 0 100%, 0 12px);
        }

        .glow-red {
            box-shadow: 0 0 25px rgba(220, 44, 76, 0.25);
        }

        .glow-gold {
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.25);
        }
    </style>
</head>
<body class="text-white min-h-screen flex flex-col justify-between p-4 sm:p-8 overflow-x-hidden">

    <!-- Top Header -->
    <header class="max-w-7xl w-full mx-auto flex justify-between items-center pb-6 border-b border-[#DC2C4C]/20">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-[#DC2C4C] rounded-lg flex items-center justify-center shadow-lg shadow-[#DC2C4C]/30 border border-amber-400/50">
                <i class="fa-solid fa-graduation-cap text-white text-xl"></i>
            </div>
            <div>
                <h1 class="font-tech font-extrabold tracking-widest text-lg text-white">UNIVERSIDAD NACIONAL DEL SANTA</h1>
                <p class="text-xs text-[#DC2C4C] font-mono tracking-wider">SISTEMA INTEGRADO DE INTELIGENCIA ACADÉMICA &bull; E.P. ING. DE SISTEMAS</p>
            </div>
        </div>

        <div class="hidden md:flex items-center gap-4 text-xs font-mono">
            <div class="bg-[#1c0d12] border border-[#DC2C4C]/30 px-3 py-1.5 rounded text-gray-300">
                <span class="text-amber-400 font-bold">ESTUDIANTE:</span> FERNANDO CH.
            </div>
            <div class="bg-[#1c0d12] border border-[#DC2C4C]/30 px-3 py-1.5 rounded text-gray-300">
                <span class="text-emerald-400 font-bold">ESTADO:</span> REGULAR (VI CICLO)
            </div>
        </div>
    </header>

    <!-- Main Container -->
    <main class="max-w-7xl w-full mx-auto my-8 space-y-6">

        <!-- Title Header -->
        <div class="space-y-1">
            <div class="inline-flex items-center gap-2 text-xs font-mono font-bold text-amber-400 uppercase tracking-widest bg-amber-400/10 px-3 py-1 rounded border border-amber-400/20">
                <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                Plataforma de Control UNS v2.1
            </div>
            <h2 class="font-tech text-3xl sm:text-4xl font-extrabold tracking-wide uppercase text-transparent bg-clip-text bg-gradient-to-r from-white via-gray-100 to-gray-400">
                BIENVENIDO AL SISTEMA ACADÉMICO
            </h2>
            <p class="text-gray-400 text-sm max-w-2xl">
                Selecciona un módulo institucional para acceder a la información, matrículas y recursos de la Universidad Nacional del Santa.
            </p>
        </div>

        <!-- Futuristic Modules Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 pt-4">

            <!-- Módulo 1: MATRÍCULA (Card Activa Principal) -->
            <div class="bg-[#18090e]/90 border-2 border-[#DC2C4C] p-6 clip-cyber-card-1 glow-red relative group hover:border-amber-400 transition-all duration-300 flex flex-col justify-between space-y-6">

                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-14 h-14 bg-[#DC2C4C]/20 border border-[#DC2C4C] rounded-xl flex items-center justify-center text-[#DC2C4C] text-2xl group-hover:scale-110 transition duration-300">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </div>
                        <span class="bg-[#DC2C4C] text-white text-[10px] font-mono font-extrabold px-2.5 py-1 rounded tracking-wider uppercase">
                            MÓDULO PRINCIPAL
                        </span>
                    </div>

                    <div>
                        <h3 class="font-tech text-xl font-bold tracking-wider text-white group-hover:text-amber-400 transition">
                            PROCESO DE MATRÍCULA Y ASIGNATURAS
                        </h3>
                        <p class="text-xs text-gray-400 mt-2 leading-relaxed">
                            Consulta y gestiona la selección de cursos aptos, elección de grupos, verificación de créditos y generación de consolidado oficial 2026-I.
                        </p>
                    </div>
                </div>

                <div class="space-y-4 pt-4 border-t border-[#DC2C4C]/20">
                    <div class="flex justify-between items-center text-xs font-mono">
                        <span class="text-gray-400">Último Ciclo Registrado:</span>
                        <span class="text-amber-400 font-bold">VI CICLO (8 CURSOS)</span>
                    </div>

                    <a href="{{ url('/dashboard') }}" class="w-full bg-gradient-to-r from-[#DC2C4C] to-[#b8223c] hover:from-amber-500 hover:to-amber-600 text-white font-tech font-bold py-3 px-4 clip-cyber-btn flex items-center justify-center gap-2 transition duration-200 shadow-lg text-sm tracking-wider">
                        <span>ACCEDER AL MÓDULO</span>
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- Módulo 2: RÉCORD Y LOGROS -->
            <div class="bg-[#140b12]/80 border border-[#DC2C4C]/40 p-6 clip-cyber-card-2 relative group hover:border-[#DC2C4C] transition-all duration-300 flex flex-col justify-between space-y-6">

                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-14 h-14 bg-amber-500/10 border border-amber-500/30 rounded-xl flex items-center justify-center text-amber-400 text-2xl">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <span class="bg-gray-800 text-gray-400 text-[10px] font-mono font-semibold px-2.5 py-1 rounded tracking-wider uppercase">
                            CONSULTA
                        </span>
                    </div>

                    <div>
                        <h3 class="font-tech text-xl font-bold tracking-wider text-white group-hover:text-amber-400 transition">
                            RÉCORD Y DISTINCIONES ACADÉMICAS
                        </h3>
                        <p class="text-xs text-gray-400 mt-2 leading-relaxed">
                            Revisa el historial consolidado de notas aprobadas, métricas de rendimiento ponderado, ranking de la escuela y constancias digitales.
                        </p>
                    </div>
                </div>

                <div class="space-y-4 pt-4 border-t border-gray-800">
                    <div class="grid grid-cols-2 gap-2 text-xs font-mono">
                        <div class="bg-[#1c0e15] p-2 rounded border border-gray-800">
                            <p class="text-gray-500 text-[10px]">Promedio Ponderado:</p>
                            <p class="text-amber-400 font-bold text-sm">15.84</p>
                        </div>
                        <div class="bg-[#1c0e15] p-2 rounded border border-gray-800">
                            <p class="text-gray-500 text-[10px]">Créditos Aprobados:</p>
                            <p class="text-emerald-400 font-bold text-sm">142 CRED</p>
                        </div>
                    </div>

                    <button class="w-full bg-[#241019] hover:bg-[#DC2C4C] text-gray-300 hover:text-white font-tech font-bold py-3 px-4 clip-cyber-btn flex items-center justify-center gap-2 transition duration-200 text-sm tracking-wider border border-[#DC2C4C]/40">
                        <span>CONSULTAR RÉCORD</span>
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </button>
                </div>
            </div>

            <!-- Módulo 3: MAPA DE RECURSOS DEL CAMPUS -->
            <div class="bg-[#140b12]/80 border border-[#DC2C4C]/40 p-6 clip-cyber-card-1 relative group hover:border-[#DC2C4C] transition-all duration-300 flex flex-col justify-between space-y-6">

                <div class="space-y-4">
                    <div class="flex justify-between items-start">
                        <div class="w-14 h-14 bg-emerald-500/10 border border-emerald-500/30 rounded-xl flex items-center justify-center text-emerald-400 text-2xl">
                            <i class="fa-solid fa-network-wired"></i>
                        </div>
                        <span class="bg-gray-800 text-gray-400 text-[10px] font-mono font-semibold px-2.5 py-1 rounded tracking-wider uppercase">
                            RECURSOS
                        </span>
                    </div>

                    <div>
                        <h3 class="font-tech text-xl font-bold tracking-wider text-white group-hover:text-emerald-400 transition">
                            RECURSOS Y LABORATORIOS DEL CAMPUS
                        </h3>
                        <p class="text-xs text-gray-400 mt-2 leading-relaxed">
                            Visualiza la disponibilidad en tiempo real de laboratorios de cómputo de la escuela, biblioteca central y salas de investigación.
                        </p>
                    </div>
                </div>

                <div class="space-y-4 pt-4 border-t border-gray-800">
                    <div class="flex items-center justify-between text-xs font-mono bg-[#1c0e15] p-2.5 rounded border border-gray-800">
                        <span class="text-gray-400">Laboratorios Activos:</span>
                        <div class="flex items-center gap-1.5">
                            <span class="text-emerald-400 font-extrabold text-sm">08</span>
                            <!-- Bar Chart Visualizer -->
                            <div class="flex items-end gap-0.5 h-4">
                                <span class="w-1 bg-emerald-500 h-2"></span>
                                <span class="w-1 bg-emerald-500 h-4"></span>
                                <span class="w-1 bg-emerald-500 h-3"></span>
                                <span class="w-1 bg-emerald-500 h-4"></span>
                            </div>
                        </div>
                    </div>

                    <button class="w-full bg-[#241019] hover:bg-[#DC2C4C] text-gray-300 hover:text-white font-tech font-bold py-3 px-4 clip-cyber-btn flex items-center justify-center gap-2 transition duration-200 text-sm tracking-wider border border-[#DC2C4C]/40">
                        <span>VER MAPA DE RECURSOS</span>
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </button>
                </div>
            </div>

        </div>

    </main>

    <!-- Footer Futurista -->
    <footer class="max-w-7xl w-full mx-auto pt-6 border-t border-[#DC2C4C]/20 flex flex-col sm:flex-row justify-between items-center text-xs font-mono text-gray-500 gap-2">
        <p>&copy; 2026 UNIVERSIDAD NACIONAL DEL SANTA &bull; PORTAL INSTITUCIONAL</p>
        <p class="text-[#DC2C4C]">SISTEMA DESARROLLADO PARA LA E.P. ING. DE SISTEMAS</p>
    </footer>

</body>
</html>
