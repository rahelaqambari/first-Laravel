
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    div.main{
        padding: 23px 2px;
        color: white; 
        text-align: center;
        background-color: gray;
    }
    div.main>p{
        width: auto;
        padding: 8px 120px;
        text-align: center;
    }
    div.music{
        
        
    }
    </style>
</head>
<body>
    <div class="main">
        <h1>All Songs</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed illo quae, incidunt nam quod non? Est ea quisquam, excepturi quae minima, officiis iure molestias dolorum eius laudantium eum ut recusandae? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla ex laboriosam amet eligendi aspernatur ipsum cum! Ducimus ea sit nobis obcaecati officia architecto repudiandae libero et quisquam, quas, qui voluptatibus.</p>
    </div>
    <div class="music">
        <h1>Find the bset song here</h1>
        @foreach ($song as $so )
        <div>
            <h1>{{ $so->singer }}</h1>
            <audio src="{{ asset('storage/'.$so->song) }}" controls></audio>
            <a href="{{ asset('storage/'.$so->song) }}" download="{{ asset('storage/'.$so->song) }}">Download the song</a>
        </div>
        
        @endforeach
    </div>  
</body>
</html>