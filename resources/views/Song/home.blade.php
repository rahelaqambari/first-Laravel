
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: ;
            margin: 0;
            box-sizing: border-box;
        }
    div.main{
        padding: 60px 2px;
        color: white; 
        gap: 40px;
        text-align: center;
        background-color: gray;
    }
    div.main>p{
        width: auto;
        padding: 40px 120px;
        text-align: center;
    }
    div.main>div{
        display: flex;
        color: beige;
        gap: 60px;
        justify-content: center;
    }
    div.music{
        color: gray;
        padding: 12px 8px;
    background-color: beige;
    text-align: center;        
    }
    div.music>div{
        display: flex;
        gap: 40px;
        padding: 23px 8px;
        justify-content: center;
    }
    div.footer{
        background-color: gray;
        text-align: center;
        color: beige;
        padding: 32px 8px;
        border-bottom: 2px solid beige;
        
    }
    div.footer>div{
        padding: 6px 32px;
        margin: 4px 32px;
        border-top: 2px solid beige;
    }
    span{
        font-size: 30px;
        margin-top: 12px;
        padding: 6px 8px;
        color: white;
        color: black;
    }
    </style>
</head>
<body>
    <div class="main">
        <h1>All Songs</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi illum itaque fugiat alias? Tenetur beatae, officia molestias quaerat commodi nihil at vitae harum minima, natus expedita totam laboriosam temporibus aliquid. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed illo quae, incidunt nam quod non? Est ea quisquam, excepturi quae minima, officiis iure molestias dolorum eius laudantium eum ut recusandae? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla ex laboriosam amet eligendi aspernatur ipsum cum! Ducimus ea sit nobis obcaecati Lorem Lorem officia architecto repudiandae libero et quisquam, quas, qui voluptatibus.lorem</p>
        <div>
            <h3>POP Music</h3>
            <h3>Jazz Music</h3>
            <h3>Bolero Music</h3>
            <h3>Baroque Music</h3>
            <h3>Tango Music</h3>
            <h3>Lovely Music</h3>
        </div>
    </div>
    <div class="music">
        <h1>You Can Find Here The Best Music!</h1>
        @foreach ($song as $so )
        <div>
            <h1>{{ $so->singer }}</h1>
            <audio src="{{ asset('storage/'.$so->song) }}" controls></audio>
            <a href="{{ asset('storage/'.$so->song) }}" download="{{ asset('storage/'.$so->song) }}">Download the song</a>
        </div>
        
        @endforeach
    </div> 
    <div class="footer">
        <h1>Follow US to Link the Best Music!</h1>
       <div>
         <h3><span>&copy;</span> Copy right by Rahela Qambari</h3>
       </div>
    </div> 
</body>
</html>