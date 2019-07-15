<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\table__course__g__student;
use Exception;
use DB;

class TableCourseGStudentsController extends Controller
{

     //table course for view attendance
    public function index(Request $request)
    {    $level = DB::table('Level')
          ->where('id','=', "5")->first();
           
          $level1 = DB::table('Level')
         ->where('id','=', "6")->first();
          
          $level2 = DB::table('Level')
         ->where('id','=', "7")->first();
          
          $level3 = DB::table('Level')
          ->where('id','=', "8")->first();

          $level4 = DB::table('Level')
          ->where('id','=', "9")->first();
          
        $tableCourseGStudents = table__course__g__student::where('Level', '=', "2G") ->latest()->paginate(60);
    
             $items = DB::table('precentages')
             ->select('precentage')
             ->where('Level','=', "2S")->first();
        return view('table__course__g__students.index', compact('tableCourseGStudents','items','level','level1','level2','level3','level4'));
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
        $tableCourseGStudents = table__course__g__student::where('Level', '=', "2G") ->latest()->paginate(60);
        return view('Add_Attendance_Subject_Table.2g_attendance.index', compact('tableCourseGStudents','level','level1','level2','level3','level4'));
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
      
       $tableCourseSStudentsObjects  = table__course__g__student::where('Level', '=', "2G") ->latest()->paginate(60);
       return view('Reset_Table/Update_Semester5', compact('tableCourseSStudentsObjects','items','level','level1','level2','level3','level4'));
      
    }


    // going to data  edit view
    public function edit($id)
    {
        $tableCourseGStudent = table__course__g__student::findOrFail($id);
          $dat = DB::table('table__lectures')
                ->select('id','name')
                ->get();

        return view('table__course__g__students.edit2G', compact('tableCourseGStudent','dat'));
    }

  
   //go to edit view update semester table
       public function edit1($id)
   {
       $tableCourseGStudent = table__course__g__student::findOrFail($id);
       $dat = DB::table('table__lectures')
               ->select('id','name')
               ->get();
       

       return view('table__course__g__students.edit5', compact('tableCourseGStudent','dat'));
   }
   
   
    //update the table with edit data
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $tableCourseGStudent = table__course__g__student::findOrFail($id);
            $tableCourseGStudent->update($data);

            return back();

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    
   //validate the user enter data
    protected function getData(Request $request)
    {
        $rules = [
            'id' => 'nullable|string|min:0|max:191',
            'code' => 'nullable|string|min:0|max:191',
            'name' => 'nullable|string|min:0|max:191',
            'credit' => 'nullable|string|min:0|max:191',
            'Level' => 'nullable|string|min:0|max:191',
            'Lecture_id' => 'nullable|string|min:0|max:191',
        ];

        $data = $request->validate($rules);

        return $data;
    }
}
