<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pnc;
use Illuminate\Http\UploadedFile;
use App\Models\course;



class studentController extends Controller
{
    public function displayForm(){
        // $courses = course::orderBy('id')->pluck('Course');
        $courses = course::pluck('Course','CourseCode');
        // $courses = course::table('courses')->where('CourseCode','id')->pluck('Course');
        return view('Student.enrollmentForm', ['courses'=>$courses]);
    }
    public function displaySuccess(){
        return view('Student.Success');
    }

    public function inputData(Request $req){
        $input = new pnc();
        $input -> Firstname = $req -> firstname ;
        $input -> Middlename = $req -> middlename ;
        $input -> Lastname = $req -> lastname ;
        $input -> Prefix = $req -> prefix ;
        $input -> Age = $req -> age ;
        $input -> Sex = $req -> sex ;
        $input -> Contact = $req -> contact;
        $input -> Email = $req -> email;
        $input -> HouseNo = $req -> houseno;
        $input -> Street = $req -> street;
        $input -> Barangay = $req -> barangay;
        $input -> City = $req -> city;
        $input -> Province = $req -> province;
        $input -> Elementary = $req -> elem;
        $input -> Secondary = $req -> secondary;
        $input -> Senior = $req -> senior;
        $input -> MotherFirstname = $req -> motherfirst;
        $input -> MotherMiddlename = $req -> mothermiddle;
        $input -> MotherLastname = $req -> motherlast;
        $input -> MotherContact = $req -> mothercontact;
        $input -> MotherJob = $req -> motherjob;
        $input -> MotherSalary = $req -> mothersalary;
        $input -> FatherFirstname = $req -> fatherfirst;
        $input -> FatherMiddlename = $req -> fathermiddle;
        $input -> FatherLastname = $req -> fatherlast;
        $input -> FatherContact = $req -> fathercontact;
        $input -> FatherJob = $req -> fatherjob;
        $input -> FatherSalary = $req -> fathersalary;
        $input -> Course = $req -> courses;
        if ($req->hasfile('twobytwo')) {
            $file=$req->file('twobytwo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move(public_path('/public/images'),$filename);
            $input->twobytwo = $filename;
        }
        if ($req->hasfile('psa')) {
            $file=$req->file('psa');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move(public_path('/public/images'),$filename);
            $input->psa = $filename;
        }
        $input ->save();
        return redirect('enrollment');
    }
}
