<?php
namespace App\Http\Controllers;
use App\Models\att3;
use App\Models\table__course__s__students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\url;
use App\Http\Controllers\Controller;
use Exception;
use PDF; 

 class Atts3smController extends Controller
 {
     
  // ---------------------------_ATTENDANCE VIEW_-------------------------------------------------
     
     // viewing table_2 subject
    public function view($id,Request $request)
    {
        $atts = att3::paginate(100);
        $SingleData = att3::findOrFail(1);
            
        $keyword = $request->get('search');
            
        $items = DB::table('precentages')
            ->select('precentage')
            ->where('Level','=', "2S")->first();
        
        $data = table__course__s__students::findOrFail($id);
        
        
                
        if (!empty($keyword)) {
                 $atts = att3::where('Reg_NO', 'LIKE', "%$keyword%")
                ->orWhere('Name', 'LIKE', "%$keyword%")  
                ->latest()->paginate(300);
        }
        else {
           $atts = att3::paginate(100);
        }
        
             if($id==19){
             return view('subject table_3_view.Subject1', compact('atts','items','data', 'SingleData'));
             }
             if($id==18){
             return view('subject table_3_view.Subject2', compact('atts','items','data','SingleData'));
             }
              if($id==17){
             return view('subject table_3_view.Subject3', compact('atts','items','data','SingleData'));
             }
              if($id==16){
             return view('subject table_3_view.Subject4', compact('atts','items','data','SingleData'));
             }
              if($id==15){
             return view('subject table_3_view.Subject5', compact('atts','items','data','SingleData'));
             }
              if($id==14){
             return view('subject table_3_view.Subject6', compact('atts','items','data','SingleData'));
             }
              if($id==13){
             return view('subject table_3_view.Subject7', compact('atts','items','data','SingleData'));
             }
              if($id==12){
             return view('subject table_3_view.Subject8', compact('atts','items','data','SingleData'));
             }
    }
    
          
    
   
    // --------------------------_ATTENDANCE MARKING VIEW_------------------------------------------------
    
    //attenadnce marking view table_2 subject
    public function attendance_mark($id)
    {
        $atts = att3::paginate(11);
        $data = table__course__s__students::findOrFail($id);
        if($id==19){
              return view('subject table_3_mark2.subject1', compact('atts','data'));
             }
        if($id==18){
              return view('subject table_3_mark2.subject2', compact('atts','data'));
             }
        if($id==17){
              return view('subject table_3_mark2.subject3', compact('atts','data'));
             } 
        if($id==16){
               return view('subject table_3_mark2.subject4', compact('atts','data'));
             }
        if($id==15){
               return view('subject table_3_mark2.subject5', compact('atts','data'));
             }
        if($id==14){
               return view('subject table_3_mark2.subject6', compact('atts','data'));
             }
        if($id==13){
               return view('subject table_3_mark2.subject7', compact('atts','data'));
             }
        if($id==12){
               return view('subject table_3_mark2.subject8', compact('atts','data'));
             }     
    }

  
 // ---------------------------_HOUR BUTTON AND SUBMIT THE MARKING ATTENDANCE-----------------------------------------
 
// function change precentage with hours for subject1
    public function store(Request $request,$id)
   {   
    try{
             if($id==19){
            DB::table('atts_3s')-> update(['hours'=>$request->name]); 
            
            DB::table('atts_3s')->update(['nooflectures' => DB::raw('nooflectures +  hours')]);
           
            DB::table('atts_3s')->where('attend_mark', '0')->update(['lectureattend' => DB::raw('lectureattend + hours')]);
        
            DB::table('atts_3s')->update(['attend_mark' =>'0']);
             }
             
               
             if($id==18){
               DB::table('atts_3s')-> update(['hours1'=>$request->name]); 
           
            DB::table('atts_3s')->update(['nooflectures1' => DB::raw('nooflectures1 +  hours1')]);
        
            DB::table('atts_3s')->where('attend_mark1', '0')->update(['lectureattend1' => DB::raw('lectureattend1 + hours1')]);
        
            DB::table('atts_3s')->update(['attend_mark1' =>'0']);
             }
             
             if($id==17){
               DB::table('atts_3s')-> update(['hours2'=>$request->name]); 
           
            DB::table('atts_3s')->update(['nooflectures2' => DB::raw('nooflectures2 +  hours2')]);
        
            DB::table('atts_3s')->where('attend_mark2', '0')->update(['lectureattend2' => DB::raw('lectureattend2 + hours2')]);
        
            DB::table('atts_3s')->update(['attend_mark2' =>'0']);
             }
               
            if($id==16){
             DB::table('atts_3s')-> update(['hours3'=>$request->name]); 
           
            DB::table('atts_3s')->update(['nooflectures3' => DB::raw('nooflectures3 +  hours3')]);
        
            DB::table('atts_3s')->where('attend_mark3', '0')->update(['lectureattend3' => DB::raw('lectureattend3 + hours3')]);
        
            DB::table('atts_3s')->update(['attend_mark3' =>'0']);
             }
             
            if($id==15){
            DB::table('atts_3s')-> update(['hours4'=>$request->name]); 
           
            DB::table('atts_3s')->update(['nooflectures4' => DB::raw('nooflectures4 +  hours4')]);
        
            DB::table('atts_3s')->where('attend_mark4', '0')->update(['lectureattend4' => DB::raw('lectureattend4 + hours4')]);
        
            DB::table('atts_3s')->update(['attend_mark4' =>'0']);
             }
             
            if($id==14){
            DB::table('atts_3s')-> update(['hours5'=>$request->name]); 
           
            DB::table('atts_3s')->update(['nooflectures5' => DB::raw('nooflectures5 +  hours5')]);
        
            DB::table('atts_3s')->where('attend_mark5', '0')->update(['lectureattend5' => DB::raw('lectureattend5 + hours5')]);
        
            DB::table('atts_3s')->update(['attend_mark5' =>'0']);
             }
             
            if($id==13){
            DB::table('atts_3s')-> update(['hours6'=>$request->name]); 
           
            DB::table('atts_3s')->update(['nooflectures6' => DB::raw('nooflectures6 +  hours6')]);
        
            DB::table('atts_3s')->where('attend_mark6', '0')->update(['lectureattend6' => DB::raw('lectureattend6 + hours6')]);
        
            DB::table('atts_3s')->update(['attend_mark6' =>'0']);
             }
             
            if($id==12){
            DB::table('atts_3s')-> update(['hours7'=>$request->name]); 
           
            DB::table('atts_3s')->update(['nooflectures7' => DB::raw('nooflectures7 +  hours7')]);
        
            DB::table('atts_3s')->where('attend_mark7', '0')->update(['lectureattend7' => DB::raw('lectureattend7 + hours7')]);
        
            DB::table('atts_3s')->update(['attend_mark7' =>'0']);
             }
           
            return redirect::to(url::previous())
            ->with('success_message', 'Attendance Sheet successfully added!');   
                 
             
             
        } catch (Exception $exception) {
                return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
   }
   
    // -------------------------------_ MARKING THE ATTENDANCE-------------------------------------------------
   
   //function for mark attendance for subject1
    public function edit($id)
    {        
        $att = att3::findOrFail($id);    
            if($att->attend_mark==0){
                $att->attend_mark=1;
                $att->save(); 
            }  
            else{
                $att->attend_mark=0;
                $att->save();
            }
            
            
        if($id<=4 || (12<=$id  && $id<=15) || (23<=$id  && $id<=26) || (34<=$id  && $id<=37)) {    
            return redirect::to(url::previous() );
        }
        else{
            return redirect::to(url::previous() ."#r");
        }
    }
    
    
    //function for mark attendance for subject2
    public function edit1s($id)
    {
        $att = att3::findOrFail($id);    
            if($att->attend_mark1==0){
                $att->attend_mark1=1;
                $att->save(); 
            }  
            else{
                $att->attend_mark1=0;
                $att->save();
            }
        
        if($id<=4 || (12<=$id  && $id<=15) || (23<=$id  && $id<=26) || (34<=$id  && $id<=37)) {    
            return redirect::to(url::previous() );
        }
        else{
            return redirect::to(url::previous() ."#r");
        }
    }
    
       //function for mark attendance for subject3
    public function edit2s($id)
    {        
        $att = att3::findOrFail($id);    
            if($att->attend_mark2==0){
                $att->attend_mark2=1;
                $att->save(); 
            }  
            else{
                $att->attend_mark2=0;
                $att->save();
            }
            
            
        if($id<=4 || (12<=$id  && $id<=15) || (23<=$id  && $id<=26) || (34<=$id  && $id<=37)) {    
            return redirect::to(url::previous() );
        }
        else{
            return redirect::to(url::previous() ."#r");
        }
    }
    
       //function for mark attendance for subject4
    public function edit3s($id)
    {        
        $att = att3::findOrFail($id);    
            if($att->attend_mark3==0){
                $att->attend_mark3=1;
                $att->save(); 
            }  
            else{
                $att->attend_mark3=0;
                $att->save();
            }
            
            
        if($id<=4 || (12<=$id  && $id<=15) || (23<=$id  && $id<=26) || (34<=$id  && $id<=37)) {    
            return redirect::to(url::previous() );
        }
        else{
            return redirect::to(url::previous() ."#r");
        }
    }
    
       //function for mark attendance for subject5
    public function edit4s($id)
    {        
        $att = att3::findOrFail($id);    
            if($att->attend_mark4==0){
                $att->attend_mark4=1;
                $att->save(); 
            }  
            else{
                $att->attend_mark4=0;
                $att->save();
            }
            
            
        if($id<=4 || (12<=$id  && $id<=15) || (23<=$id  && $id<=26) || (34<=$id  && $id<=37)) {    
            return redirect::to(url::previous() );
        }
        else{
            return redirect::to(url::previous() ."#r");
        }
    }
    
       //function for mark attendance for subject6
    public function edit5s($id)
    {        
        $att = att3::findOrFail($id);    
            if($att->attend_mark5==0){
                $att->attend_mark5=1;
                $att->save(); 
            }  
            else{
                $att->attend_mark5=0;
                $att->save();
            }
            
            
        if($id<=4 || (12<=$id  && $id<=15) || (23<=$id  && $id<=26) || (34<=$id  && $id<=37)) {    
            return redirect::to(url::previous() );
        }
        else{
            return redirect::to(url::previous() ."#r");
        }
    }
    
       //function for mark attendance for subject7
    public function edit6s($id)
    {        
        $att = att3::findOrFail($id);    
            if($att->attend_mark6==0){
                $att->attend_mark6=1;
                $att->save(); 
            }  
            else{
                $att->attend_mark6=0;
                $att->save();
            }
            
            
        if($id<=4 || (12<=$id  && $id<=15) || (23<=$id  && $id<=26) || (34<=$id  && $id<=37)) {    
            return redirect::to(url::previous() );
        }
        else{
            return redirect::to(url::previous() ."#r");
        }
    }
    
    
       //function for mark attendance for subject8
    public function edit7s($id)
    {        
        $att = att3::findOrFail($id);    
            if($att->attend_mark7==0){
                $att->attend_mark7=1;
                $att->save(); 
            }  
            else{
                $att->attend_mark7=0;
                $att->save();
            }
            
            
        if($id<=4 || (12<=$id  && $id<=15) || (23<=$id  && $id<=26) || (34<=$id  && $id<=37)) {    
            return redirect::to(url::previous() );
        }
        else{
            return redirect::to(url::previous() ."#r");
        }
    }
    
    
    
    //function for reset Table_2 data
     public function reset($id)
    {
         $level = DB::table('Level')
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
         
          $tableCourseSStudentsObjects  = table__course__s__students::where('Level', '=', "3S") ->latest()->paginate(60);
          
        if($id==19){
            DB::table('atts_3s')
               ->update(['nooflectures' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend' => 0]);
             }
        if($id==18){
            DB::table('atts_3s')
               ->update(['nooflectures1' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend1' => 0]);
             }
      
        if($id==17){
            DB::table('atts_3s')
               ->update(['nooflectures2' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend2' => 0]);
             } 
        if($id==16){
            DB::table('atts_3s')
               ->update(['nooflectures3' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend3' => 0]);
             }
        if($id==15){
           DB::table('atts_3s')
               ->update(['nooflectures4' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend4' => 0]);
             }
        if($id==14){
        DB::table('atts_3s')
               ->update(['nooflectures5' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend5' => 0]);
             }
        if($id==13){
              DB::table('atts_3s')
               ->update(['nooflectures6' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend6' => 0]);
             }
        if($id==12){
            DB::table('atts_3s')
               ->update(['nooflectures7' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend7' => 0]);
             } 
   
             return view('Reset_Table/Update_Semester2', compact('tableCourseSStudentsObjects','items','level','level1','level2','level3'));
          
         
    }
    
      public function reset1()
    {
        $level = DB::table('Level')
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
         
          $tableCourseSStudentsObjects = table__course__s__students::where('Level', '=', "3S") ->latest()->paginate(60);

            DB::table('atts_3s')
               ->update(['nooflectures' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend' => 0]);
            DB::table('atts_3s')
               ->update(['nooflectures1' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend1' => 0]);
            DB::table('atts_3s')
               ->update(['nooflectures2' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend2' => 0]);
            DB::table('atts_3s')
               ->update(['nooflectures3' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend3' => 0]);
            DB::table('atts_3s')
               ->update(['nooflectures4' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend4' => 0]);
            DB::table('atts_3s')
               ->update(['nooflectures5' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend5' => 0]);
            DB::table('atts_3s')
               ->update(['nooflectures6' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend6' => 0]);
            DB::table('atts_3s')
               ->update(['nooflectures7' => 0]);
            DB::table('atts_3s')
               ->update(['lectureattend7' => 0]);
        
             return view('Reset_Table/Update_Semester2', compact('tableCourseSStudentsObjects','items','level','level1','level2','level3'));
    }
    
    
    //Get summary for Level
     public function Subject_Level()
    {     
            $atts = att3::paginate(100);
            $items = DB::table('precentages')
             ->select('precentage')
             ->where('Level','=', "2S")->first();
            
            $data=DB::table('table__course__s__students')
                    ->where('id','=', "19")->first();
            
            $data1=DB::table('table__course__s__students')
                    ->where('id','=', "18")->first();
               
            $data2=DB::table('table__course__s__students')
                    ->where('id','=', "17")->first();   
            
            $data3=DB::table('table__course__s__students')
                    ->where('id','=', "16")->first();
            
            $data4=DB::table('table__course__s__students')
                    ->where('id','=', "15")->first();
           
            $data5=DB::table('table__course__s__students')
                    ->where('id','=', "14")->first();
            
            $data6=DB::table('table__course__s__students')
                    ->where('id','=', "13")->first();
            
            $data7=DB::table('table__course__s__students')
                    ->where('id','=', "12")->first();
            
             $level1 = DB::table('Level')
                    ->where('id','=', "3")->first();
            
            
            $SingleData = att3::findOrFail(1);
        
            
                 $pdf = PDF::loadView('Summery.table_2_sub.Level', compact('atts','items','SingleData','data','data1','data2','data3','data4','data5','data6','data7','level1'));
                 return $pdf->download('Summmary Level.pdf');
     }  
     
      public function Backup()
     {
        $atts = att3::paginate(100);
        $items = DB::table('precentages')
         ->select('precentage')
         ->where('Level','=', "2S")->first();
        
        $data=DB::table('table__course__s__students')
                ->where('id','=', "19")->first();
        
        $data1=DB::table('table__course__s__students')
                ->where('id','=', "18")->first();
           
        $data2=DB::table('table__course__s__students')
                ->where('id','=', "17")->first();   
        
        $data3=DB::table('table__course__s__students')
                ->where('id','=', "16")->first();
        
        $data4=DB::table('table__course__s__students')
                ->where('id','=', "15")->first();
       
        $data5=DB::table('table__course__s__students')
                ->where('id','=', "14")->first();
        
        $data6=DB::table('table__course__s__students')
                ->where('id','=', "13")->first();
        
        $data7=DB::table('table__course__s__students')
                ->where('id','=', "12")->first();
        
        $leve = DB::table('Level')
                    ->where('id','=', "3")->first();
            
        
        
        $SingleData = att3::findOrFail(1);   
       
        
        $pdf = PDF::loadView('BackUp.table_2.Level2', compact('atts','items','SingleData','data',
                'data1','data2','data3','data4','data5','data6','data7','leve'))
                ->download('BackUP Level.pdf');
        return view('BackUp.table_2.Level2',compact('atts','items','data','data1','data2',
                'data3','data4','data5','data6','data7','SingleData','leve'));
     }
 }
 
 