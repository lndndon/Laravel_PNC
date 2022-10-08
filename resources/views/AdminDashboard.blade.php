@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href={{url('css/AdminDashboard.css')}}>
<body>
    <br>
    <div class="container" id="form">


        <form action="" method="post">
        @csrf
        <div class="form-group" >
        <label for="email">Email</label><br>
        <input type="email" name="email" class="form-control" required><br>
        </div>
        <div class="form-group">
        <label for="password">Password</label><br>
        <input type="password" name="password" class="form-control" required><br><br>
        </div>

        <button type="submit" class="btn btn-success" name="login" >Login</button><br>

    </form>
    </div>

</body>
</html>
@endsection
