<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Módulo de Matrícula UNS</title>
    <!-- Tailwind CSS CDN & FontAwesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <!-- Card de Login Institucional -->
    <div class="bg-white w-full max-w-md rounded-2xl shadow-xl overflow-hidden border border-gray-200">
        
        <!-- Header Rojo Carmesí UNS -->
        <div class="bg-[#DC2C4C] p-8 text-center text-white relative">
            <div class="mx-auto mb-4 flex justify-center">
                <img src="{{ asset('img/logo_login.png') }}" alt="Logo UNS" class="h-[120px] w-[120px] object-contain drop-shadow-md" onerror="this.outerHTML='<i class=\'fa-solid fa-university text-5xl text-white mb-2\'></i>'">
            </div>
            <h1 class="text-xl font-extrabold tracking-wide uppercase">UNIVERSIDAD NACIONAL DEL SANTA</h1>
            <p class="text-xs text-amber-300 font-medium mt-1">Portal Integrado de Matrículas</p>
            <div class="absolute bottom-0 left-0 right-0 h-1.5 bg-amber-500"></div>
        </div>

        <!-- Formulario de Inicio de Sesión -->
        <form action="{{ url('/login') }}" method="POST" class="p-8 space-y-6">
            @csrf

            <!-- Errores de Validación -->
            @if ($errors->any())
                <div class="bg-red-50 border-l-4 border-[#DC2C4C] p-3 rounded text-xs text-red-700 font-medium">
                    {{ $errors->first() }}
                </div>
            @endif

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                    Código de Estudiante / DNI / Email
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                        <i class="fa-solid fa-id-card"></i>
                    </span>
                    <input type="text" name="login" required placeholder="Ingrese su código o correo" value="{{ old('login') }}" class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-[#DC2C4C] focus:border-[#DC2C4C] outline-none transition">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                    Contraseña
                </label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                        <i class="fa-solid fa-lock"></i>
                    </span>
                    <input type="password" name="password" required placeholder="••••••••" class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-[#DC2C4C] focus:border-[#DC2C4C] outline-none transition">
                </div>
            </div>

            <button type="submit" class="w-full bg-[#DC2C4C] hover:bg-[#B51F3B] text-white font-extrabold py-3.5 px-4 rounded-xl shadow-lg transition duration-200 text-sm tracking-wider flex items-center justify-center gap-2">
                <span>Ingresar al Sistema</span>
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </form>

        <!-- Footer Card -->
        <div class="bg-gray-50 p-4 border-t border-gray-100 text-center text-xs text-gray-500">
            &copy; 2026 Universidad Nacional del Santa
        </div>

    </div>

</body>
</html>
