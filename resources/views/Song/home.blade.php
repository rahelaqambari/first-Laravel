
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
      div.main>img{
        height: auto;
        width: 100%;

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
    p{
        padding: 2px 4px;
        background-color:cyan ;
        border: 1px solid bule;
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
        <img src="/img/download (11).jfif" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ut natus, eveniet voluptatum ex inventore praesentium aperiam quas, asperiores animi eaque excepturi reprehenderit explicabo reiciendis consequatur esse. Odit, autem commodi?</p>        
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