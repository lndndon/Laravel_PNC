
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enrollment Database</title>
</head>
@extends('Admin.layout')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href={{url('/css/database.css')}}>
<body>
    <br>
    <div class="container">
        <h2 align="center">Student Information</h2>
        <table id="DatabaseStudent">
        <thead id="thead">
            <tr>
                <td>Firstname</td>
                <td>Middlename</td>
                <td>Lastname</td>
                <td>Prefix</td>
                <td>Age</td>
                <td>Sex</td>
                <td>Contact</td>
                <td>Email</td>
                <td>Course</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody class="tbody">
            @foreach ($list as $item)
                <tr>
                    <td> {{$item['Firstname']}} </td>
                    <td> {{$item['Middlename']}} </td>
                    <td> {{$item['Lastname']}} </td>
                    <td> {{$item['Prefix']}} </td>
                    <td> {{$item['Age']}} </td>
                    <td> {{$item['Sex']}} </td>
                    <td> {{$item['Contact']}} </td>
                    <td> {{$item['Email']}} </td>
                    <td> {{$item['Course']}} </td>
                    <td>
                        <a class="btn btn-success" href={{"/view/".$item['id']}}>View</a>
                        {{-- <a href={{"/archive/".$item['id']}}>Archive</a> --}}
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

    </div>



    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
             $('#DatabaseStudent').DataTable({
                responsive: true
             });
        } );
    </script>



@endsection
