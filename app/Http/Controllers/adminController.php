<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pnc;
use PDF;
use Validator;
use Auth;

class adminController extends Controller
{

    public function databaseDisplay(){
        return view('Admin.database');
    }
    public function showList(){
        $list= pnc::all();
        return view('Admin.database', compact('list'));
    }
    public function viewStudent($id){
        $view = pnc::find($id);
        return view('Admin.view',['item'=>$view]);
    }

    public function displayHome(){
        return view('AdminDashboard');
    }


    public function checklogin(Request $req){
        $this->validate($req , [
            'email'  =>'required|email',
            'password' =>'required|alpha_num|min:3',
        ]);
        $user_data = array(
            'email' => $req ->get('email'),
            'password' => $req->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect('/database');
        }else{
            return back()->with('error','Wrong Credentials');
        }
    }

    public function successLogin(){
        return view('Admin.database');
    }


    public function generatePDF($id){
        $tao = pnc::get()->where('id',$id);
        $pdf = PDF::loadView('Admin.PDFcontent',[
            'tao' =>$tao
        ]);

        return $pdf->download('PDFcontent.pdf');
    }


}
