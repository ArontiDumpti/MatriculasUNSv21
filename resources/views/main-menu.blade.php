<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu Interconectado - UNS</title>
    <!-- Tailwind CSS CDN & FontAwesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@500;700;800&family=Inter:wght@400;600;800&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            background-image: radial-gradient(circle at 50% 0%, rgba(220, 44, 76, 0.05), transparent 70%);
        }

        .font-tech {
            font-family: 'Chakra Petch', sans-serif;
        }

        /* Panel contenedor único exterior con corte en esquina superior derecha */
        .clip-panel-container {
            clip-path: polygon(0 0, calc(100% - 35px) 0, 100% 35px, 100% 100%, 0 100%);
        }

        /* Tarjeta 1 (Izquierda): Corte diagonal en su lado derecho */
        .clip-[#DC2C4C]panel-left {
            clip-path: polygon(0 0, 100% 0, calc(100% - 40px) 100%, 0 100%);
        }

        /* Tarjeta 2 (Centro): Paralelogramo encajado entre tarjeta 1 y 3 */
        .clip-panel-center {
            clip-path: polygon(40px 0, 100% 0, calc(100% - 40px) 100%, 0 100%);
        }

        /* Tarjeta 3 (Derecha): Corte diagonal en su lado izquierdo */
        .clip-panel-right {
            clip-path: polygon(40px 0, 100% 0, 100% 100%, 0 100%);
        }

        /* En pantallas grandes (Desktop) aplicamos los cortes diagonales entrelazados */
        @media (min-width: 1024px) {
            .interlocked-card-left {
                clip-path: polygon(0 0, 100% 0, calc(100% - 45px) 100%, 0 100%);
                margin-right: -40px;
            }

            .interlocked-card-center {
                clip-path: polygon(45px 0, 100% 0, calc(100% - 45px) 100%, 0 100%);
                margin-right: -40px;
                padding-left: 55px !important;
            }

            .interlocked-card-right {
                clip-path: polygon(45px 0, 100% 0, 100% 100%, 0 100%);
                padding-left: 55px !important;
            }
        }

        .glow-[#DC2C4C] {
            box-shadow: 0 0 30px rgba(220, 44, 76, 0.2);
        }
    </style>
</head>
<body class="text-gray-800 min-h-screen flex flex-col justify-between">

    <!-- Top Navigation Header (Rojo Carmesí UNS) -->
    <header class="bg-[#DC2C4C] text-white shadow-md border-b-4 border-amber-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo & Brand UNS -->
                <div class="flex items-center space-x-3">
                    <div class="bg-white p-1.5 rounded-lg shadow-sm">
                        <i class="fa-solid fa-university text-[#DC2C4C] text-2xl"></i>
                    </div>
                    <div>
                        <h1 class="font-extrabold text-lg leading-none tracking-wide">UNIVERSIDAD NACIONAL DEL SANTA</h1>
                        <span class="text-xs text-amber-300 font-medium">Portal Integrado de Matrícula</span>
                    </div>
                </div>

                <!-- Esquina Superior Derecha: Ciclo Actual Requerido por Aaron -->
                <div class="flex items-center space-x-4">
                    <div class="bg-[#B51F3B] px-4 py-1.5 rounded-xl border border-amber-400/50 text-right shadow-sm">
                        <p class="text-[10px] text-amber-300 font-extrabold uppercase tracking-widest">Ciclo Académico Actual</p>
                        <p class="text-sm font-extrabold text-white font-tech tracking-wider">VI CICLO &bull; 2026-I</p>
                    </div>

                    <div class="w-10 h-10 rounded-full bg-amber-500 text-white flex items-center justify-center font-bold text-lg shadow border-2 border-white">
                        F
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Container -->
    <main class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8 flex-1">

        <!-- Banner Encabezado -->
        <div class="text-center max-w-3xl mx-auto space-y-2">
            <span class="bg-[#DC2C4C]/10 text-[#DC2C4C] text-xs font-tech font-extrabold px-3 py-1 rounded-full uppercase tracking-widest border border-[#DC2C4C]/20">
                SISTEMA INTEGRADO DE CONTROL
            </span>
            <h2 class="font-tech text-3xl sm:text-4xl font-extrabold text-gray-900 tracking-wide uppercase">
                BIENVENIDO AL SISTEMA DE INTELIGENCIA ACADÉMICA
            </h2>
            <p class="text-xs sm:text-sm text-gray-500">
                Selecciona un módulo para acceder a la información de la institución.
            </p>
        </div>

        <!-- PANEL UNIFICADO INTERCONECTADO  -->
        <div class="bg-white border-4 border-[#DC2C4C] rounded-2xl shadow-2xl overflow-hidden clip-panel-container glow-[#DC2C4C] p-2 bg-[#DC2C4C]/5">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-0">

                <!-- SECCIÓN 1: VER HORARIOS (Encajada diagonalmente) -->
                <div class="bg-white p-6 sm:p-8 border-b-2 lg:border-b-0 lg:border-r-2 border-[#DC2C4C]/30 interlocked-card-left flex flex-col justify-between space-y-6 group hover:bg-red-50/60 transition duration-300">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <div class="w-16 h-16 rounded-2xl bg-red-50 border-2 border-[#DC2C4C]/30 flex items-center justify-center text-[#DC2C4C] text-3xl group-hover:scale-110 group-hover:bg-[#DC2C4C] group-hover:text-white transition duration-300 shadow-sm">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                            <span class="font-tech text-xs font-bold text-gray-400">01</span>
                        </div>

                        <div>
                            <h3 class="font-tech text-2xl font-black tracking-wide text-[#DC2C4C] group-hover:text-[#B51F3B] transition">
                                VER HORARIOS
                            </h3>
                            <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                                Consulta y administra todos los registros de horarios, aulas asignadas y distribución de laboratorios del ciclo.
                            </p>
                        </div>
                    </div>

                    <div class="space-y-4 pt-4 border-t border-gray-100 pr-6">
                        <div class="flex justify-between items-center text-xs font-mono">
                            <span class="text-gray-400 font-semibold">Último Registro:</span>
                            <span class="font-extrabold text-gray-900">2025-II</span>
                        </div>

                        <a href="{{ url('/dashboard#horarios') }}" class="w-full bg-[#DC2C4C] hover:bg-[#B51F3B] text-white font-tech font-extrabold py-3.5 px-4 rounded-xl flex items-center justify-center gap-2 transition text-xs tracking-wider shadow-md">
                            <span>ACCEDER</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- SECCIÓN 2: CURSOS PENDIENTES (Paralelogramo central entrelazado) -->
                <div class="bg-white p-6 sm:p-8 border-b-2 lg:border-b-0 lg:border-r-2 border-[#DC2C4C]/30 interlocked-card-center flex flex-col justify-between space-y-6 group hover:bg-amber-50/60 transition duration-300">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center pr-6">
                            <div class="w-16 h-16 rounded-2xl bg-amber-50 border-2 border-amber-500/30 flex items-center justify-center text-amber-600 text-3xl group-hover:scale-110 group-hover:bg-amber-500 group-hover:text-white transition duration-300 shadow-sm">
                                <i class="fa-solid fa-award"></i>
                            </div>
                            <span class="font-tech text-xs font-bold text-gray-400">02</span>
                        </div>

                        <div class="pr-6">
                            <h3 class="font-tech text-2xl font-black tracking-wide text-[#DC2C4C] group-hover:text-amber-600 transition">
                                CURSOS PENDIENTES
                            </h3>
                            <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                                Revisa el listado de asignaturas aprobadas, créditos de prerrequisito y la carga académica del semestre.
                            </p>
                        </div>
                    </div>

                    <div class="space-y-4 pt-4 border-t border-gray-100 pr-6">
                        <div class="flex justify-between items-center text-xs font-mono">
                            <span class="text-gray-400 font-semibold">Cursos Aptos:</span>
                            <span class="font-extrabold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded">8 DISPONIBLES</span>
                        </div>

                        <a href="{{ url('/dashboard#pendientes') }}" class="w-full bg-[#DC2C4C] hover:bg-[#B51F3B] text-white font-tech font-extrabold py-3.5 px-4 rounded-xl flex items-center justify-center gap-2 transition text-xs tracking-wider shadow-md">
                            <span>ACCEDER</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

                <!-- SECCIÓN 3: MATRICULARME (Sección derecha encajada) -->
                <div class="bg-gradient-to-br from-white via-red-50/40 to-red-100/50 p-6 sm:p-8 interlocked-card-right flex flex-col justify-between space-y-6 group hover:bg-red-100/60 transition duration-300">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <div class="w-16 h-16 rounded-2xl bg-[#DC2C4C] text-white flex items-center justify-center text-3xl shadow-md group-hover:scale-110 transition duration-300">
                                <i class="fa-solid fa-check-double"></i>
                            </div>
                            <span class="bg-[#DC2C4C] text-white text-[10px] font-tech font-black px-3 py-1 rounded-full uppercase tracking-widest shadow-sm">
                                PROCESO ACTIVO
                            </span>
                        </div>

                        <div>
                            <h3 class="font-tech text-2xl font-black tracking-wide text-[#DC2C4C]">
                                MATRICULARME
                            </h3>
                            <p class="text-xs text-gray-700 mt-2 leading-relaxed font-semibold">
                                Inicia la inscripción oficial de asignaturas, selecciona tus grupos de laboratorio y emite tu ficha de consolidado.
                            </p>
                        </div>
                    </div>

                    <div class="space-y-4 pt-4 border-t-2 border-[#DC2C4C]/30">
                        <div class="flex justify-between items-center text-xs font-mono">
                            <span class="text-gray-600 font-bold">Estado:</span>
                            <span class="font-extrabold text-green-800 bg-green-100 px-2.5 py-1 rounded-full">HABILITADO</span>
                        </div>

                        <a href="{{ url('/dashboard') }}" class="w-full bg-amber-500 hover:bg-amber-600 text-white font-tech font-extrabold py-3.5 px-4 rounded-xl flex items-center justify-center gap-2 transition text-xs tracking-wider shadow-lg">
                            <span>MATRICULARME AHORA</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-4 mt-auto">
        <div class="max-w-7xl mx-auto px-4 text-center text-xs font-mono text-gray-500">
            &copy; 2026 Universidad Nacional del Santa &bull; Módulo de Matrículas UNS
        </div>
    </footer>

</body>
</html>
