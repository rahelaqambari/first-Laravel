@extends ("layout.mainlayout")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @section("styles")
     <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        nav{
            padding: 32px;
            background-color: cadetblue;
            width: 100%;
        }
        nav >ul {
            display: flex;
            width: 100%;
            gap: 17px;
            justify-content: center;
        list-style: none;
        }
        nav >ul >li >a{
            color: white;
            text-decoration: none;
        }
        section.main{
            border: 2px solid black;
            margin: 12px;
        }
        section.main >div.box{
             display: inline;
            justify-content: center;
            align-items: center;
        }
        footer{
            background-color: cadetblue;
            color: white;
            padding: 32px;
            text-align: center;
        }
    </style>
    @endsection
</head>
<body>
    <section class="main">
        @section("main")
         <div class="box">
            <div class="p">
                <h1>The blog part osf our campany</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe impedit repellat minus corrupti illum, temporibus similique aliquid praesentium mollitia harum aspernatur tempora ex dolores, sapiente perferendis provident obcaecati, quam illo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ab iusto quos iste, laborum ducimus doloribus eaque consectetur dolore rem mollitia itaque pariatur ipsam aliquid optio excepturi? Reiciendis, repellat <voluptas class="lo">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur, illo perferendis qui harum ipsum voluptatibus quasi aperiam autem a beatae ratione alias! Ullam similique minima at dolores reprehenderit voluptate quod.</voluptas></p>
            </div>
            <img src="" alt="">
        </div>
        @endsection
    </section>
</body>
</html>