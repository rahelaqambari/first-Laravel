<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.main{
            max-width: 960px;
            width: 100%;
            margin: 4px auto;
            border:2px solid black
        }
        div.main>div{
            background-color: darkcyan;
            padding: 8px 5px;
            text-align: center;
            color: white;
        }
        div.main>div.erorr{
            background-color: red;

        }
            form{
                display: block;
            }
            form>input{
                padding: 16px 12px;
                width: 95%;
                margin: 4px 12px;
                outline: 0;
                border: 2px black solid;
                border-radius: 5px;
            }
            form>button{
                padding: 16px 12px;
                margin: 2px 42px;
                width: 90%;
                color: white;
                border-radius: 6px;
                border: 2px solid blue;
                background-color: blue;
            }
    </style>
</head>
<body>
    <div class="main">
        <!-- <div class="erorr">
            @if ($errors->any())
            <ol>
                @foreach ($errors->all() as $erorr )
                <li>{{ $erorr }}</li>
                @endforeach
            </ol>
            
            @endif
            
        </div> -->
        <div>
            <h1>Add Music</h1>
        </div>
        <form enctype="multipart/form-data" action="{{ URL('songs/insert') }}" method="post" >
            @csrf
             {{-- cross site reqeust forgery --}}
            <input type="text"  name="singer" placeholder="Enter the singer name" >
            <input type="file" name="song" id="song" accept="audio/*" >
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>
