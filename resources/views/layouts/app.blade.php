<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Turjoy</title>
</head>
<body>

    <nav class="bg-teal-600 border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a class="flex items-center">
            <img src="img/TURJOY.png" class="h-8 mr-3" alt="Turjoy Logo"/>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
        </a>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-teal-600 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="{{route('travels.index')}}" class="text-white">Cargar rutas</a>
            </li>
            <li>
                <form method="POST" action="{{route('logout')}}" class="text-white">
                    @csrf
                    <button type="submit" class="p-2 font-bold uppercase hover:bg-slate-300 hover:rounded-lg">
                        Cerrar Sesión
                    </button>
                </form>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
