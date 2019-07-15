<?php
namespace App\Http\Controllers;
use App\Models\att;
use App\Models\table__course__s__students;
use App\Models\table__course__g__students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\url;
use App\Http\Controllers\Controller;
use Exception;
use PDF; 
use Auth;
 class StudentController extends Controller
 {

public function vview()
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
        $inf = DB::table('atts_3gs')
        ->where('Reg_No','=',$ma->RegistrationNo)
        ->get();
        $in = DB::table('atts_3ms')
        ->where('Reg_No','=',$ma->RegistrationNo)
        ->get();
        $i = DB::table('atts_4ms')
        ->where('Reg_No','=',$ma->RegistrationNo)
        ->get();
        }
    if($data)
    {
        foreach($data as $sub)
        {
            $abc = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode)
            ->get();
            $abd = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode1)
            ->get();
            $abe = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode2)
            ->get();
            $abf = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode3)
            ->get();
            $abg = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode4)
            ->get();
            $abh = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode4)
            ->get();
            $abi = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode6)
            ->get();
            $abj = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode7)
            ->get();  
            return view('student.all', compact('data','dat','da','d','abc','abd','abe','abf','abg','abh','abi','abj','infor','info'));  
        }
    }
    if($dat)
    {
        foreach($dat as $sub)
        {
            $abc = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode)
            ->get();
            $abd = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode1)
            ->get();
            $abe = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode2)
            ->get();
            $abf = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode3)
            ->get();
            $abg = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode4)
            ->get();
            $abh = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode4)
            ->get();
            $abi = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode6)
            ->get();
            $abj = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode7)
            ->get();  
            return view('student.all', compact('data','dat','da','d','abc','abd','abe','abf','abg','abh','abi','abj','infor','info'));  
        }
    }
    if($da)
    {
        foreach($da as $sub)
        {
            $abc = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode)
            ->get();
            $abd = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode1)
            ->get();
            $abe = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode2)
            ->get();
            $abf = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode3)
            ->get();
            $abg = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode4)
            ->get();
            $abh = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode4)
            ->get();
            $abi = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode6)
            ->get();
            $abj = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode7)
            ->get();  
            return view('student.all', compact('data','dat','da','d','abc','abd','abe','abf','abg','abh','abi','abj','infor','info')); 
        }
    }
    if($d)
    {
        foreach($d as $sub)
        {
            $abc = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode)
            ->get();
            $abd = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode1)
            ->get();
            $abe = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode2)
            ->get();
            $abf = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode3)
            ->get();
            $abg = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode4)
            ->get();
            $abh = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode4)
            ->get();
            $abi = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode6)
            ->get();
            $abj = DB::table('table__course__s__students')
            ->where('id','=',$sub->subcode7)
            ->get();  
            return view('student.all', compact('data','dat','da','d','abc','abd','abe','abf','abg','abh','abi','abj','infor','info')); 
        }
    }
    if($infor)
    {
        foreach($infor as $sub)
        {
            $abc = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode)
            ->get();
            $abd = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode1)
            ->get();
            $abe = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode2)
            ->get();
            $abf = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode3)
            ->get();
            $abg = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode4)
            ->get();
            $abh = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode4)
            ->get();
            $abi = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode6)
            ->get();
            $abj = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode7)
            ->get();  
            return view('student.all', compact('data','dat','da','d','abc','abd','abe','abf','abg','abh','abi','abj','infor','info'));  
        }
    }
    if($info)
    {
        foreach($info as $sub)
        {
            $abc = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode)
            ->get();
            $abd = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode1)
            ->get();
            $abe = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode2)
            ->get();
            $abf = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode3)
            ->get();
            $abg = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode4)
            ->get();
            $abh = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode4)
            ->get();
            $abi = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode6)
            ->get();
            $abj = DB::table('table__course__g__students')
            ->where('id','=',$sub->subcode7)
            ->get();  
            return view('student.all', compact('data','dat','da','d','abc','abd','abe','abf','abg','abh','abi','abj','infor','info'));  
        }
    }


    }
}