<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalização do Site</title>
    @vite(['resources/css/app.css'])
    @livewireStyles
</head>
<body class="bg-gray-100 p-6">
    <main>
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>