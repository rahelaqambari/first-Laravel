<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="h-screen flex items-center justify-center w-full font-bold text-3xl">
        @include("Subview.Navbar")
        <h1>{{ $name }}</h1>
        <h1>{{ $class }}</h1>
    </div>
</body>
</html>