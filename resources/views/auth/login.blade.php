<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Módulo de Matrícula UNS</title>
    <!-- Tailwind CSS CDN & FontAwesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        uns: {
                            red: '#991b1b',
                            darkred: '#7f1d1d',
                            gold: '#d97706',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 font-sans antialiased min-h-screen flex items-center justify-center p-4">

    <div class="max-w-md w-full bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
        
        <!-- Header del Formulario (Rojo Guinda UNS) -->
        <div class="bg-gradient-to-r from-red-900 via-uns-red to-uns-darkred p-8 text-white text-center relative border-b-4 border-uns-gold">
            <div class="w-16 h-16 bg-white rounded-2xl mx-auto flex items-center justify-center shadow-lg mb-3">
                <i class="fa-solid fa-university text-uns-red text-3xl"></i>
            </div>
            <h1 class="text-xl font-extrabold tracking-wide">UNIVERSIDAD NACIONAL DEL SANTA</h1>
            <p class="text-xs text-amber-300 font-semibold mt-1">SISTEMA INTEGRADO DE MATRÍCULA</p>
        </div>

        <!-- Formulario de Login -->
        <form action="{{ url('/dashboard') }}" method="GET" class="p-8 space-y-5">
            <div>
                <label for="codigo" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                    Código de Estudiante / DNI
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                        <i class="fa-solid fa-id-card"></i>
                    </div>
                    <input type="text" id="codigo" name="codigo" required placeholder="Ej: 0202114001" 
                        class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-uns-red focus:bg-white transition outline-none">
                </div>
            </div>

            <div>
                <label for="password" class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                    Contraseña
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-gray-400">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <input type="password" id="password" name="password" required placeholder="••••••••" 
                        class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-uns-red focus:bg-white transition outline-none">
                </div>
            </div>

            <div class="flex items-center justify-between text-xs">
                <label class="flex items-center text-gray-600 cursor-pointer">
                    <input type="checkbox" class="rounded border-gray-300 text-uns-red focus:ring-uns-red mr-2">
                    Recordar mi sesión
                </label>
                <a href="#" class="text-uns-red font-semibold hover:underline">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit" class="w-full bg-uns-red hover:bg-uns-darkred text-white font-bold py-3.5 px-4 rounded-xl shadow-lg hover:shadow-xl transition duration-200 flex items-center justify-center gap-2">
                <span>Ingresar al Sistema</span>
                <i class="fa-solid fa-arrow-right-to-bracket"></i>
            </button>
        </form>

        <!-- Footer del Login -->
        <div class="bg-gray-50 px-8 py-4 border-t border-gray-100 text-center text-xs text-gray-500">
            Escuela Profesional de Ingeniería de Sistemas &bull; UNS 2026
        </div>

    </div>

</body>
</html>
