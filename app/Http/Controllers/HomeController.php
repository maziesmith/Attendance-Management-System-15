<?php

use App\Models\att;
use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Auth;
use DB;
class HomeController extends Controller
{
  
    public function index()
    {
        $id1 = Auth::id();
        $max = DB::table('users')
        ->where('id','=',$id1)
        ->select('RegistrationNo')
        ->get();
        foreach($max as $ma)
        {
        $data = DB::table('atts')
        ->where('Reg_No','=',$ma->RegistrationNo)
        ->get();
        $dat = DB::table('atts_1s')
        ->where('Reg_No','=',$ma->RegistrationNo)
        ->get();
        $da = DB::table('atts_3s')
        ->where('Reg_No','=',$ma->RegistrationNo)
        ->get();
        $d = DB::table('atts_4s')
        ->where('Reg_No','=',$ma->RegistrationNo)
        ->get();

        $infor = DB::table('atts_1gs')
        ->where('Reg_No','=',$ma->RegistrationNo)
        ->get();
        $info = DB::table('atts_2gs')
        ->where('Reg_No','=',$ma->RegistrationNo)
        ->get();
        $Ldata = DB::table('table__lectures')
        ->where('RegistrationNo','=',$ma->RegistrationNo)
        ->get();
        }
        return view('home', compact('data','dat','da','d','infor','info','Ldata'));
    }
}
