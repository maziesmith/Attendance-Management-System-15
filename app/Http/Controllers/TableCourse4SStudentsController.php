<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\table__course__s__students;
use Exception;
use DB;


class TableCourse4SStudentsController extends Controller
{
     //table course for view attendance
    public function index(Request $request)
    { $level = DB::table('Level')
          ->where('id','=', "1")->first();
           
          $level1 = DB::table('Level')
         ->where('id','=', "2")->first();
          
          $level2 = DB::table('Level')
         ->where('id','=', "3")->first();
          
          $level3 = DB::table('Level')
          ->where('id','=', "4")->first();
 
          
           $items = DB::table('precentages')
             ->select('precentage')
             ->where('Level','=', "2S")->first();
        
       $tableCourse4SStudentsObjects  = table__course__s__students::where('Level', '=', "4S") ->latest()->paginate(60);
       return view('table__course__4s__students.index', compact('tableCourse4SStudentsObjects','items','level','level1','level2','level3'));

    }
    
     //table course for mark attendance
    public function AddAttendance(Request $request)
    {    $level = DB::table('Level')
          ->where('id','=', "1")->first();
           
          $level1 = DB::table('Level')
         ->where('id','=', "2")->first();
          
          $level2 = DB::table('Level')
         ->where('id','=', "3")->first();
          
          $level3 = DB::table('Level')
          ->where('id','=', "4")->first();
 
       $tableCourse4SStudentsObjects  = table__course__s__students::where('Level', '=', "4S") ->latest()->paginate(60);
       return view('Add_Attendance_Subject_Table.4s_attendance.index', compact('tableCourse4SStudentsObjects','level','level1','level2','level3'));

    }
    
         public function Reset_index(Request $request)
    {   $level = DB::table('Level')
          ->where('id','=', "1")->first();
           
          $level1 = DB::table('Level')
         ->where('id','=', "2")->first();
          
          $level2 = DB::table('Level')
         ->where('id','=', "3")->first();
          
          $level3 = DB::table('Level')
          ->where('id','=', "4")->first();
          
          $items = DB::table('precentages')
             ->select('precentage')
             ->where('Level','=', "2S")->first();
      
       $tableCourseSStudentsObjects  = table__course__s__students::where('Level', '=', "4S") ->latest()->paginate(60);
       return view('Reset_Table/Update_Semester3', compact('tableCourseSStudentsObjects','items','level','level1','level2','level3'));
      
    }

  
      public function edit($id)
   {
       $tableCourseSStudents = table__course__s__students::findOrFail($id);
       $dat = DB::table('table__lectures')
               ->select('id','name')
               ->get();
       

       return view('table__course__s__students.edit4s', compact('tableCourseSStudents','dat'));
   }
   
       public function edit1($id)
   {
       $tableCourseSStudents = table__course__s__students::findOrFail($id);
       $dat = DB::table('table__lectures')
               ->select('id','name')
               ->get();
       

       return view('table__course__s__students.edit3', compact('tableCourseSStudents','dat'));
   }

    
}