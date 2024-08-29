<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Lato:400,600&display=swap" rel="stylesheet" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        button {
            background-color: #4ed3ff;
        }
    </style>
</head>

<body class="bg-gray-100" style="font-family: Lato;">
    @if (session('status'))
        <div>{{ session("status") }}</div>
    @endif
   {{ $slot }}

</body>

</html>