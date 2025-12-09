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
        <div class="erorr">
            @if ($errors->any())
            <ol>
                @foreach ($errors->all() as $erorr )
                <li>{{ $erorr }}</li>
                @endforeach
            </ol>
            
            @endif
            
        </div>
        <div>
            <h1>Add Employees</h1>
        </div>
        <form enctype="multipart/form-data" action="{{ URL('employee/create') }}" method="post" >
            @csrf
             {{-- cross site reqeust forgery --}}
            <input type="text" value="{{ old('name') }}" name="name" placeholder="Enter your name" >
            <input type="text" value="{{ old('lastName') }}" name="lastName" placeholder="Enter your lastname" >
            <input type="text" value="{{ old('age') }}" name="age" placeholder="Enter your age" >
            <h3><label >Gender</label></h3>
            Male <input type="radio" name="gender" value="m" {{ old('gender') ==="m"? "checked":"" }} >
            Female <input type="radio" name="gender" value="f" {{ old('gender') ==="f"? "checked":"" }}>
            <label for="image">Profile picture</label>
            <input type="file" name="image" id="image" accept="image/*" >
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>
