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
        <div>
            <h1>Update Employees</h1>
        </div>
        <form action="{{ URL('employee/edit',$employee->id) }}" method="post" >
            @csrf
            @method('put')
             {{-- cross site reqeust forgery --}}
            <input type="text" value="{{ $employee->name }}" name="name" placeholder="Enter your name" >
            <input type="text" value="{{ $employee->lastName}}" name="lastName" placeholder="Enter your lastname" >
            <input type="number" value="{{ $employee->age }}" name="age" placeholder="Enter your age" >
            <h3><label >Gender</label></h3>
            Male <input type="radio" name="gender" value="m" {{ $employee->gender=="m"?"checked":"" }}>
            Female <input type="radio" name="gender" value="f" {{ $employee->gender=="f"?"checked":"" }}>
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>
