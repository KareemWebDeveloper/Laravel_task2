<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create new user</title>
    <link rel="stylesheet" href="{{asset("bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("style.css")}}">
</head>

<body>
    <h1 style="text-align: center; padding: 2vh 0;">UPDATE PAGE</h1>
    <form action="{{ route("admin.update",$admin->id)}}" class="createForm" method="POST">
        @method("PUT")
        @csrf
        <label for="fn">FullName</label>
        <input type="text" id="fn" name="name" value="{{$admin->name}}" required placeholder="enter your fullname">
        <label for="mail">Email</label>
        <input type="email" id="mail" name="email" value="{{$admin->email}}" required placeholder="enter your email address">
        <label for="salary">Salary</label>
        <input type="text" id="salary" name="salary" value="{{$admin->salary}}" required placeholder="enter your salary">
        <input type="submit" value="update" class="subForm w-50 bg-primary">
    </form>
</body>

</html>
