<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
class LecturerViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        //
       
        $id1 = Auth::id();
        $data = DB::table('table__lectures')

                ->join('users','table__lectures.RegistrationNo','=','users.RegistrationNo')
                
                ->join('table__course__s__students','table__course__s__students.Lecture_id','=','table__lectures.id')
                
                ->select('table__lectures.id','users.RegistrationNo','table__lectures.name','users.email','table__course__s__students.id as idcourse','table__course__s__students.code','table__course__s__students.name as coursename','table__course__s__students.level')
                ->where('users.id','=',$id1)
                ->get();


       
        return view('LecturerView.index',compact('data'));

    }
    public function index2()
    {
        //
       
        $id1 = Auth::id();
        $data = DB::table('table__lectures')

                ->join('users','table__lectures.RegistrationNo','=','users.RegistrationNo')
                
                ->join('table__course__g__students','table__course__g__students.Lecture_id','=','table__lectures.id')
                
                ->select('table__lectures.id','users.RegistrationNo','table__lectures.name','users.email','table__course__g__students.id as idcourse','table__course__g__students.code','table__course__g__students.name as coursename','table__course__g__students.level')
                ->where('users.id','=',$id1)
                ->get();


       
        return view('LecturerView.index',compact('data'));

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
