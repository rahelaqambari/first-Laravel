<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is the services page</h1>
    @if ($name ==="cleaning")
    <h1>You should clean the house</h1>
    @elseif($name ==="cooking")
    <h1>You are the chef</h1>
    @else(==="washing")
    <h1>You must washing the daishes now!</h1>
    @endif
    <h1>The services name is {{ $name }}</h1>

</body>
</html>
