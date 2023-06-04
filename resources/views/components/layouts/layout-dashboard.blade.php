<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>San Martin | Dashboard</title>
</head>
<body>
<div class="container mx-auto grid grid-cols-12">
    <header class="col-start-1 col-span-2">
        @include('components.dashboard.navigation')
    </header>
    <main class="col-start-3 col-span-10">
        {{ $slot  }}
    </main>
</div>
</body>
</html>
