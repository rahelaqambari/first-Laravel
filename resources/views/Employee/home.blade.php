<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.search{
            margin: 14px auto;
            width: 160%;
            padding: 6px 0;
            max-width: 960px;
            border: 2px solid black;
        }div.search.form{
            display: flex;
            align-items: center;
            padding: 14px;
            border: 2px solid black;
        }
        input{
            padding: 14px 12px;
            margin: 20px 12px;
            border-bottom-left-radius: 6px;
            border-top-left-radius: 6px;
            outline: 0;
            width: 80%;
            border: 2px solid black;
            align-items: center;
        }
        button{
            background-color: darkcyan;
            padding: 14px 18px;
            border-left: 0;
            margin-left: -18px;
            color: white;
            text-decoration: 2px;
            border-bottom-right-radius: 6px;
            border-top-right-radius: 6px;
        }
        table{
            border: 2px solid black;
            width: 100px;
            margin: 14px auto;
        }
        th{
            background-color: darkcyan;
            color: white;
            padding: 12px 60px;
        }
        td{
         padding: 12px 16px;
         border: 2px solid black;
        }
        div.page{
            width: 100px;
            height: 10%;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        p{
            display: inline-block;
            border: 2px;
            height: 40px;
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="search">
        <form action={{ URL('employee') }} method="GET">
            <input type="text" name="search" id="search">
            <button type="submite">Search</button>         
        </form>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
             @foreach ($employee as $employ )
             <tr>
            <td>{{ $employ->id }}</td>
            <td>{{ $employ->name }}</td>
            <td>{{ $employ->lastName }}</td>
            <td>{{ $employ->age }}</td>
            <td>{{ $employ->gender }}</td>
            <td><a href="{{ URL('employee/update/').'/'. $employ->id }}">Update</a></td>
            <td>
                <form action="{{ URl('employee/delete', $employ->id) }}" method="post" onsubmit="return confirm('Are sure want to delete it!')">
                    @csrf
                    @method('DELETE')
                    <button type="onsbmit">Delete</button>
                </form>
            </td>

            </tr>
            
            @endforeach
        </table>
        <div class="page">
            <p>{{ $employee->appends(request()->query())->links() }}</p>
        </div>
    
</body>
</html>