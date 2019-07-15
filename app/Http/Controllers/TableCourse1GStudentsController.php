<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\table__course__g__student;
use Illuminate\Support\Facades\Redirect;
use Exception;
use DB;

class TableCourse1GStudentsController extends Controller
{
     //table course for view attendance
    public function index(Request $request)
    {   $level = DB::table('Level')
          ->where('id','=', "5")->first();
           
          $level1 = DB::table('Level')
         ->where('id','=', "6")->first();
          
          $level2 = DB::table('Level')
         ->where('id','=', "7")->first();
          
          $level3 = DB::table('Level')
          ->where('id','=', "8")->first();

          $level4 = DB::table('Level')
          ->where('id','=', "9")->first();
          
        $tableCourseGStudents = table__course__g__student::where('Level', '=', "1G") ->latest()->paginate(60);
   
             $items = DB::table('precentages')
             ->select('precentage')
             ->where('Level','=', "2S")->first();    
         
    return view('table__course__1g__students.index', compact('tableCourseGStudents','items','level','level1','level2','level3','level4'));
    }
    
      //table course for mark attendance
    public function AddAttendance(Request $request)
    {   $level = DB::table('Level')
          ->where('id','=', "5")->first();
           
          $level1 = DB::table('Level')
         ->where('id','=', "6")->first();
          
          $level2 = DB::table('Level')
         ->where('id','=', "7")->first();
          
          $level3 = DB::table('Level')
          ->where('id','=', "8")->first();

          $level4 = DB::table('Level')
          ->where('id','=', "9")->first();
          
        $tableCourseGStudents = table__course__g__student::where('Level', '=', "1G") ->latest()->paginate(60);
        return view('Add_Attendance_Subject_Table.1g__attendance.index', compact('tableCourseGStudents','level','level1','level2','level3','level4'));
    }
    
         public function Reset_index(Request $request)
    {   $level = DB::table('Level')
          ->where('id','=', "5")->first();
           
          $level1 = DB::table('Level')
         ->where('id','=', "6")->first();
          
          $level2 = DB::table('Level')
         ->where('id','=', "7")->first();
          
          $level3 = DB::table('Level')
          ->where('id','=', "8")->first();

          $level4 = DB::table('Level')
          ->where('id','=', "9")->first();
                  
          $items = DB::table('precentages')
             ->select('precentage')
             ->where('Level','=', "2S")->first();
      
       $tableCourseSStudentsObjects  = table__course__g__student::where('Level', '=', "1G") ->latest()->paginate(60);
       return view('Reset_Table/Update_Semester4', compact('tableCourseSStudentsObjects','items','level','level1','level2','level3','level4'));
      
    }
     public function edit($id)
   {
       $tableCourseGStudent = table__course__g__student::findOrFail($id);
       $dat = DB::table('table__lectures')
               ->select('id','name')
               ->get();
       

       return view('table__course__g__students.edit1g', compact('tableCourseGStudent','dat'));
   }
  
   
   //go to edit view update semester table
       public function edit1($id)
   {
       $tableCourseGStudent = table__course__g__student::findOrFail($id);
       $dat = DB::table('table__lectures')
               ->select('id','name')
               ->get();
       

       return view('table__course__g__students.edit4', compact('tableCourseGStudent','dat'));
   }

}    

