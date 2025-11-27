<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1 class="text-3xl">
            {{ $name }}


            @for($i=0; $i<50 ;$i++)
            @if($i===20)
            @break
            @endif
            @endfor
            {{ $i }}
        </h1>
    </div>
</body>
</html>