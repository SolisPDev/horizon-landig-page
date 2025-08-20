<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <title>HorizonDevs - Codificando el Futuro</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app">
        <hero-section></hero-section>
        <tech-stack></tech-stack>
        <contact-form></contact-form>
        <visit-counter></visit-counter>
    </div>
    @vite('resources/js/app.js')
</body>
</html>