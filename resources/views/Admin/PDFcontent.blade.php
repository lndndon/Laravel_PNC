<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href='{{public_path('/css/PDFcontent.css')}}'>

<body>
        <div id="heading">
            <img src='{{public_path('/images/pnc.png')}}' alt="" id="PNCicon">
        </div>
    <br><br>
    <div>
        @foreach ($tao as $data )
            <div id="containPic">
                <img src="{{public_path('public/images/'.$data['TwobyTwo'])}}" alt="" id="pic2x2" >
            </div>
        @endforeach
    </div>
        <table>
           @foreach ($tao as $data )

                <tr>
                    <td>Name:</td>
                    <td id="line"> {{$data['Firstname'] }} </td>
                    <td id="line"> {{$data['Middlename']}} </td>
                    <td id="line"> {{$data['Lastname']}} </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Firstname</td>
                    <td>Middlename</td>
                    <td>Lastname</td>
                    <td>Prefix</td>
                </tr>
                <br>
                <tr>
                    <td>Address</td>
                    <td  id="line"> {{$data['HouseNo']}} </td>
                    <td  id="line"> {{$data['Street']}} </td>
                    <td  id="line"> {{$data['Barangay']}} </td>
                    <td  id="line"> {{$data['City']}} </td>
                    <td  id="line"> {{$data['Province']}} </td>
                </tr>
                <tr>
                    <td></td>
                    <td>House No.</td>
                    <td>Street</td>
                    <td>Barangay</td>
                    <td>City</td>
                    <td>Province</td>
                </tr>
                <br>
                <tr>
                    <td>Education</td>
                    <td id="line"> {{$data['Elementary']}} </td>
                    <td id="line"> {{$data['Secondary']}} </td>
                    <td id="line"> {{$data['Senior']}} </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Elementary</td>
                    <td>Secondary</td>
                    <td>Senior</td>
                </tr>
                <br>
                <tr>
                    <td>Mother</td>
                    <td id="line"> {{$data['MotherMiddlename']}} </td>
                    <td id="line"> {{$data['MotherFirstname']}} </td>
                    <td id="line"> {{$data['MotherLastname']}} </td>
                    <td id="line"> {{$data['MotherContact']}} </td>
                    <td id="line"> {{$data['MotherJob']}} </td>
                    <td id="line"> {{$data['Mothersalary']}} </td>
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
                <br>
                <tr>
                    <td>Father</td>
                    <td id="line"> {{$data['FatherFirstname']}} </td>
                    <td id="line"> {{$data['FatherMiddlename']}} </td>
                    <td id="line"> {{$data['FatherLastname']}} </td>
                    <td id="line"> {{$data['FatherContact']}} </td>
                    <td id="line"> {{$data['FatherJob']}} </td>
                    <td id="line"> {{$data['Fathersalary']}} </td>
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
                    <td>Course</td>
                    <td id="line"> {{$data['Course']}} </td>
                </tr>
           @endforeach
        </table>

        <div id="pageBreak" class="">
                <img src="{{public_path('public/images/'.$data['PSA'])}}" alt="" id="PSA">
        </div>
</body>
</html>

