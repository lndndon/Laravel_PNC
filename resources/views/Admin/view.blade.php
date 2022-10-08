
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View</title>
</head>
@extends('Admin.layout')

@section('content')
<link rel="stylesheet" href={{url('/css/view.css')}}>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<body class="container-fluid">
        <div id="header">
            <h3>Student Data Sheet</h3>
            <img src=" {{asset('/public/images/'.$item['TwobyTwo'])}} " alt="" width="150rem;">
        </div>
    <table class="table container">


        <tr>
            <td >Name </td>
            <td id="line"> {{$item['Firstname']}} </td>
            <td id="line"> {{$item['Middlename']}} </td>
            <td id="line"> {{$item['Lastname']}} </td>
            <td id="line"> {{$item['Prefix']}}  </td>
        </tr>
        <tr>
            <td></td>
            <td>Firstname</td>
            <td>Middlename</td>
            <td>Lastname</td>
            <td>Prefix</td>
        </tr>
        <tr>
            <td>Address</td>
            <td id="line"> {{$item['HouseNo']}} </td>
            <td id="line"> {{$item['Street']}} </td>
            <td id="line"> {{$item['Barangay']}} </td>
            <td id="line"> {{$item['City']}} </td>
            <td id="line"> {{$item['Province']}} </td>
        </tr>
        <tr>
            <td></td>
            <td>House No.</td>
            <td>Street</td>
            <td>Barangay</td>
            <td>City</td>
            <td>Province</td>
        </tr>
        <tr>
            <td>Education</td>
            <td id="line"> {{$item['Elementary']}} </td>
            <td id="line"> {{$item['Secondary']}} </td>
            <td id="line"> {{$item['Senior']}} </td>
        </tr>
        <tr>
            <td></td>
            <td>Elementary</td>
            <td>Secondary</td>
            <td>Senior</td>
        </tr>
        <tr>
            <td>Parent's Information</td>
        </tr>
        <tr>
            <td>Mother</td>
            <td id="line"> {{$item['MotherFirstname']}} </td>
            <td id="line"> {{$item['MotherMiddlename']}} </td>
            <td id="line"> {{$item['MotherLastname']}} </td>
            <td id="line"> {{$item['MotherContact']}} </td>
            <td id="line"> {{$item['MotherJob']}} </td>
            <td id="line"> {{$item['Mothersalary']}} </td>
        </tr>
        <tr>
            <td></td>
            <td>Firstname</td>
            <td>Middlename</td>
            <td>Lastname</td>
            <td>ContactNo.</td>
            <td>Job</td>
            <td>Salary</td>
        </tr>
        <tr>
            <td>Father</td>
            <td id="line"> {{$item['FatherFirstname']}} </td>
            <td id="line"> {{$item['FatherMiddlename']}} </td>
            <td id="line"> {{$item['FatherLastname']}} </td>
            <td id="line"> {{$item['FatherContact']}} </td>
            <td id="line"> {{$item['FatherJob']}} </td>
            <td id="line"> {{$item['Fathersalary']}} </td>
        </tr>
        <tr>
            <td></td>
            <td>Firstname</td>
            <td>Middlename</td>
            <td>Lastname</td>
            <td>ContactNo.</td>
            <td>Job</td>
            <td>Salary</td>
        </tr>
        <tr>
            <td>Course:</td>
            <td id="line"> {{$item['Course'] }}</td>

        </tr>

    </table>


    <div id="buttons">
            <a class="btn btn-success" href=" {{'/exportPDF/'.$item['id']}} ">Print</a>
            <a class="btn btn-danger" href=" {{url('database')}} ">Cancel</a>


    </div>

    {{-- <a class="btn btn-success" href=" {{route('exportPDF')}} ">Print</a> --}}

@endsection
