<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Table</title>
    <link rel="stylesheet" href="{{asset("style.css")}}">
</head>
<body>
    <h1 style="text-align: center; margin:2vh 0">ADMINS TABLE</h1>
    <hr style="width: 35%; height:0.2vh; margin: auto; background-color: black;">
 <table>
     <thead>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>SALARY</th>
    <th>EDIT</th>
</thead>

<tbody>
<tr>
    <td>{{ $admin->id }}</td>
    <td>{{ $admin->name }}</td>
    <td>{{ $admin->email }}</td>
    <td>{{ $admin->salary }}</td>
    <td class="edit">
        <form action="{{ route("admin.edit",$admin->id) }}">
            <button type="submit" class="editButton">update</button>
        </form>
        <form action="{{ route("admin.destroy",$admin->id) }}" method="POST">
            @method("DELETE")
            @csrf
            <button type="submit" class="editButton">delete</button>
        </form>
    </td>
</tr>
</tbody>

</table>
<form action="{{ route("admin.index") }}" class="form1">
    {{-- @csrf --}}
    <button type="submit" class="create">back to main table</button>
</form>
</body>
</html>


