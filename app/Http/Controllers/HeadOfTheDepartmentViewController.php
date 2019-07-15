<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use DB;

class HeadOfTheDepartmentViewController extends Controller
{


    public function index1()
    {
        $data = DB::table('table__lectures')
                
                ->join('table__course__s__students','table__course__s__students.Lecture_id','=','table__lectures.id')
                
                ->select('table__course__s__students.id as idcourse','table__course__s__students.name as coursename','table__course__s__students.code','table__course__s__students.level')
                
                ->get();
                
        return view('HeadOfTheDepartment.index',compact('data'));

    }
    public function index2()
    {
        $data = DB::table('table__lectures')
                
                ->join('table__course__g__students','table__course__g__students.Lecture_id','=','table__lectures.id')
                
                ->select('table__lectures.id','table__lectures.RegistrationNo','table__lectures.name','table__lectures.email','table__course__g__students.id as idcourse','table__course__g__students.code','table__course__g__students.name as coursename','table__course__g__students.level')
                
                ->get();

        return view('HeadOfTheDepartment.index',compact('data'));

    }
    
}
