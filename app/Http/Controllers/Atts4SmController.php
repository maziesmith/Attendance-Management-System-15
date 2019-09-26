<?php

namespace App\Http\Controllers;

use App\Models\table__course__s__students;
use Illuminate\Http\Request;
use App\Models\att4s;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\url;
use App\Http\Controllers\Controller;
use Exception;
use PDF; 
use Carbon\Carbon;

class Atts4SmController extends Controller
{
    public function view($id,Request $request)
    {
        $mutable = Carbon::now();
        
        $att4s = att4s::paginate(100);
       $SingleData =  DB::table('atts_4s')->first();
            
        $keyword = $request->get('search');
            
        $items = DB::table('precentages')
            ->select('precentage')
            ->where('Level','=', "2S")->first();
        
        $data = table__course__s__students::findOrFail($id);
        
        if (!empty($keyword)) {
                 $att4s = att4s::where('Reg_NO', 'LIKE', "%$keyword%")
                ->orWhere('Name', 'LIKE', "%$keyword%")  
                ->paginate(300);
        }
        else {
           $att4s = att4s::paginate(100);
        }
        
             if($id==11){
             return view('subject table_4_view.Subject1', compact('att4s','items','data', 'SingleData'));
             }
             if($id==10){
             return view('subject table_4_view.Subject2', compact('att4s','items','data','SingleData'));
             }
              if($id==9){
             return view('subject table_4_view.Subject3', compact('att4s','items','data','SingleData'));
             }
              if($id==8){
             return view('subject table_4_view.Subject4', compact('att4s','items','data','SingleData'));
             }
              if($id==7){
             return view('subject table_4_view.Subject5', compact('att4s','items','data','SingleData'));
             }
              if($id==6){
             return view('subject table_4_view.Subject6', compact('att4s','items','data','SingleData'));
             }
              if($id==5){
             return view('subject table_4_view.Subject7', compact('att4s','items','data','SingleData'));
             }
              if($id==4){
             return view('subject table_4_view.Subject8', compact('att4s','items','data','SingleData'));
             }
    }


    public function attendance_mark($id)
    {
        $att4s = att4s::paginate(200);
        $data = table__course__s__students::findOrFail($id);
        if($id==11){
              return view('subject table_4_mark4.subject1', compact('att4s','data'));
             }
        if($id==10){
              return view('subject table_4_mark4.subject2', compact('att4s','data'));
             }
        if($id==9){
              return view('subject table_4_mark4.subject3', compact('att4s','data'));
             } 
        if($id==8){
               return view('subject table_4_mark4.subject4', compact('att4s','data'));
             }
        if($id==7){
               return view('subject table_4_mark4.subject5', compact('att4s','data'));
             }
        if($id==6){
               return view('subject table_4_mark4.subject6', compact('att4s','data'));
             }
        if($id==5){
               return view('subject table_4_mark4.subject7', compact('att4s','data'));
             }
        if($id==4){
               return view('subject table_4_mark4.subject8', compact('att4s','data'));
             }     
    }
    
     public function result()
   {
          DB::table('atts_4s')-> update(['attend_mark'=>0]);
          DB::table('atts_4s')-> update(['is_saved'=>0]);
           return redirect::to(url::previous());
   } 
   
      public function result1()
   {
          DB::table('atts_4s')-> update(['attend_mark1'=>0]);
          DB::table('atts_4s')-> update(['is_saved1'=>0]);
           return redirect::to(url::previous());
   } 
      public function result2()
   {
          DB::table('atts_4s')-> update(['attend_mark2'=>0]);
          DB::table('atts_4s')-> update(['is_saved2'=>0]);
           return redirect::to(url::previous());
   } 
      public function result3()
   {
          DB::table('atts_4s')-> update(['attend_mark3'=>0]);
          DB::table('atts_4s')-> update(['is_saved3'=>0]);
           return redirect::to(url::previous());
   } 
      public function result4()
   {
          DB::table('atts_4s')-> update(['attend_mark4'=>0]);
          DB::table('atts_4s')-> update(['is_saved4'=>0]);
           return redirect::to(url::previous());
   } 
      public function result5()
   {
          DB::table('atts_4s')-> update(['attend_mark5'=>0]);
          DB::table('atts_4s')-> update(['is_saved5'=>0]);
           return redirect::to(url::previous());
   } 
      public function result6()
   {
          DB::table('atts_4s')-> update(['attend_mark6'=>0]);
          DB::table('atts_4s')-> update(['is_saved6'=>0]);
           return redirect::to(url::previous());
   } 
   
      public function result7()
   {
          DB::table('atts_4s')-> update(['attend_mark7'=>0]);
          DB::table('atts_4s')-> update(['is_saved7'=>0]);
           return redirect::to(url::previous());
   } 
 

    public function store(Request $request,$id)
   {   

    try{
        if($id==11){
            $st = Carbon::parse($request->ST);
            $et = Carbon::parse($request->ET);
            $diff = $et->diffInHours($st);

            DB::table('atts_4s')-> update(['hours'=>$diff]);  

            DB::table('atts_4s')-> update(['hall'=>$request->hall]);

            DB::table('atts_4s')-> update(['date'=>$request->date]);

            DB::table('atts_4s')-> update(['Start_Time'=>$request->ST]);

            DB::table('atts_4s')-> update(['End_Time'=>$request->ET]);

        
        DB::table('atts_4s')->update(['nooflectures' => DB::raw('nooflectures +  hours')]);
       
        DB::table('atts_4s')->where('attend_mark', '0')->update(['lectureattend' => DB::raw('lectureattend + hours')]);
    
      
         DB::table('atts_4s')-> update(['is_saved'=>0]); 
         }
         
           
         if($id==10){
            $st = Carbon::parse($request->ST);
            $et = Carbon::parse($request->ET);
            $diff = $et->diffInHours($st);

            DB::table('atts_4s')-> update(['hours1'=>$diff]);  

            DB::table('atts_4s')-> update(['hall1'=>$request->hall]);

        DB::table('atts_4s')-> update(['date1'=>$request->date]);

        DB::table('atts_4s')-> update(['Start_Time1'=>$request->ST]);

        DB::table('atts_4s')-> update(['End_Time1'=>$request->ET]);
       
        DB::table('atts_4s')->update(['nooflectures1' => DB::raw('nooflectures1 +  hours1')]);
    
        DB::table('atts_4s')->where('attend_mark1', '0')->update(['lectureattend1' => DB::raw('lectureattend1 + hours1')]);
    
    
         DB::table('atts_4s')-> update(['is_saved1'=>0]); 
         }
         
         if($id==9){
            $st = Carbon::parse($request->ST);
            $et = Carbon::parse($request->ET);
            $diff = $et->diffInHours($st);

            DB::table('atts_4s')-> update(['hours2'=>$diff]);  

            DB::table('atts_4s')-> update(['hall2'=>$request->hall]);

        DB::table('atts_4s')-> update(['date2'=>$request->date]);

        DB::table('atts_4s')-> update(['Start_Time2'=>$request->ST]);

        DB::table('atts_4s')-> update(['End_Time2'=>$request->ET]);  
       
        DB::table('atts_4s')->update(['nooflectures2' => DB::raw('nooflectures2 +  hours2')]);
        
          DB::table('atts_4s')->where('attend_mark2', '0')->update(['lectureattend2' => DB::raw('lectureattend2 + hours2')]);
      
         DB::table('atts_4s')-> update(['is_saved2'=>0]); 
         }
           
        if($id==8){
            $st = Carbon::parse($request->ST);
            $et = Carbon::parse($request->ET);
            $diff = $et->diffInHours($st);

            DB::table('atts_4s')-> update(['hours3'=>$diff]);  

            DB::table('atts_4s')-> update(['hall3'=>$request->hall]);

        DB::table('atts_4s')-> update(['date3'=>$request->date]);

        DB::table('atts_4s')-> update(['Start_Time3'=>$request->ST]);

        DB::table('atts_4s')-> update(['End_Time3'=>$request->ET]);  
       
        DB::table('atts_4s')->update(['nooflectures3' => DB::raw('nooflectures3 +  hours3')]);
    
        DB::table('atts_4s')->where('attend_mark3', '0')->update(['lectureattend3' => DB::raw('lectureattend3 + hours3')]);
   
        
         DB::table('atts_4s')-> update(['is_saved3'=>0]); 
         }
         
        if($id==7){
            $st = Carbon::parse($request->ST);
            $et = Carbon::parse($request->ET);
            $diff = $et->diffInHours($st);

            DB::table('atts_4s')-> update(['hours4'=>$diff]);  

            DB::table('atts_4s')-> update(['hall4'=>$request->hall]);

        DB::table('atts_4s')-> update(['date4'=>$request->date]);

        DB::table('atts_4s')-> update(['Start_Time4'=>$request->ST]);

        DB::table('atts_4s')-> update(['End_Time4'=>$request->ET]); 
       
        DB::table('atts_4s')->update(['nooflectures4' => DB::raw('nooflectures4 +  hours4')]);
    
        DB::table('atts_4s')->where('attend_mark4', '0')->update(['lectureattend4' => DB::raw('lectureattend4 + hours4')]);
    
         DB::table('atts_4s')-> update(['is_saved4'=>0]); 
         }
         
        if($id==6){
            $st = Carbon::parse($request->ST);
            $et = Carbon::parse($request->ET);
            $diff = $et->diffInHours($st);

            DB::table('atts_4s')-> update(['hours5'=>$diff]);  

            DB::table('atts_4s')-> update(['hall5'=>$request->hall]);

        DB::table('atts_4s')-> update(['date5'=>$request->date]);

        DB::table('atts_4s')-> update(['Start_Time5'=>$request->ST]);

        DB::table('atts_4s')-> update(['End_Time5'=>$request->ET]);
       
        DB::table('atts_4s')->update(['nooflectures5' => DB::raw('nooflectures5 +  hours5')]);
    
        DB::table('atts_4s')->where('attend_mark5', '0')->update(['lectureattend5' => DB::raw('lectureattend5 + hours5')]);
   
         DB::table('atts_4s')-> update(['is_saved5'=>0]); 
         }
         
        if($id==5){
            
       
            $st = Carbon::parse($request->ST);
            $et = Carbon::parse($request->ET);
            $diff = $et->diffInHours($st);

            DB::table('atts_4s')-> update(['hours6'=>$diff]);  

            DB::table('atts_4s')-> update(['hall6'=>$request->hall]);

        DB::table('atts_4s')-> update(['date6'=>$request->date]);

        DB::table('atts_4s')-> update(['Start_Time6'=>$request->ST]);

        DB::table('atts_4s')-> update(['End_Time6'=>$request->ET]); 
       
        DB::table('atts_4s')->update(['nooflectures6' => DB::raw('nooflectures6 +  hours6')]);
    
        DB::table('atts_4s')->where('attend_mark6', '0')->update(['lectureattend6' => DB::raw('lectureattend6 + hours6')]);
    
        
         DB::table('atts_4s')-> update(['is_saved6'=>0]); 
         }
         
        if($id==4){

       $st = Carbon::parse($request->ST);
            $et = Carbon::parse($request->ET);
            $diff = $et->diffInHours($st);

            DB::table('atts_4s')-> update(['hours7'=>$diff]);  

            DB::table('atts_4s')-> update(['hall7'=>$request->hall]);

        DB::table('atts_4s')-> update(['date7'=>$request->date]);

        DB::table('atts_4s')-> update(['Start_Time7'=>$request->ST]);

        DB::table('atts_4s')-> update(['End_Time7'=>$request->ET]);  
       
        DB::table('atts_4s')->update(['nooflectures7' => DB::raw('nooflectures7 +  hours7')]);
    
        DB::table('atts_4s')->where('attend_mark7', '0')->update(['lectureattend7' => DB::raw('lectureattend7 + hours7')]);
    
         DB::table('atts_4s')-> update(['is_saved7'=>0]); 
         }
           
            return redirect::to(url::previous())
            ->with('success_message', 'Attendance Sheet successfully added!');   
                 
             
             
        } catch (Exception $exception) {
                return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
   }

   public function ray(Request $request)
    {
      DB::table('atts_4s')-> update(['attend_mark'=>0]); 
        $record = $request->my_checkbox;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_4s')->where('id', $value)->update(['attend_mark'=>1]);
        }
        }    
        
        DB::table('atts_4s')-> update(['is_saved'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray1(Request $request)
    {
      DB::table('atts_4s')-> update(['attend_mark1'=>0]); 
        $record = $request->my_checkbox1;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_4s')->where('id', $value)->update(['attend_mark1'=>1]);
        }
        }    
        
        DB::table('atts_4s')-> update(['is_saved1'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray2(Request $request)
    {
      DB::table('atts_4s')-> update(['attend_mark2'=>0]); 
        $record = $request->my_checkbox2;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_4s')->where('id', $value)->update(['attend_mark2'=>1]);
        }
        }    
        
        DB::table('atts_4s')-> update(['is_saved2'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray3(Request $request)
    {
      DB::table('atts_4s')-> update(['attend_mark3'=>0]); 
        $record = $request->my_checkbox3;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_4s')->where('id', $value)->update(['attend_mark3'=>1]);
        }
        }    
        
        DB::table('atts_4s')-> update(['is_saved3'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray4(Request $request)
    {
      DB::table('atts_4s')-> update(['attend_mark4'=>0]); 
        $record = $request->my_checkbox4;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_4s')->where('id', $value)->update(['attend_mark4'=>1]);
        }
        }    
        
        DB::table('atts_4s')-> update(['is_saved4'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray5(Request $request)
    {
      DB::table('atts_4s')-> update(['attend_mark5'=>0]); 
        $record = $request->my_checkbox5;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_4s')->where('id', $value)->update(['attend_mark5'=>1]);
        }
        }    
        
        DB::table('atts_4s')-> update(['is_saved5'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray6(Request $request)
    {
      DB::table('atts_4s')-> update(['attend_mark6'=>0]); 
        $record = $request->my_checkbox6;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_4s')->where('id', $value)->update(['attend_mark6'=>1]);
        }
        }    
        
        DB::table('atts_4s')-> update(['is_saved6'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray7(Request $request)
    {
      DB::table('atts_4s')-> update(['attend_mark7'=>0]); 
        $record = $request->my_checkbox7;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_4s')->where('id', $value)->update(['attend_mark7'=>1]);
        }
        }    
        
        DB::table('atts_4s')-> update(['is_saved7'=>1]); 
        
        return redirect::to(url::previous());
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
         
          $tableCourseSStudentsObjects = table__course__s__students::where('Level', '=', "4S") ->latest()->paginate(60);

            DB::table('atts_4s')
               ->update(['nooflectures' => 0]);
            DB::table('atts_4s')
               ->update(['lectureattend' => 0]);
            DB::table('atts_4s')
               ->update(['nooflectures1' => 0]);
            DB::table('atts_4s')
               ->update(['lectureattend1' => 0]);
            DB::table('atts_4s')
               ->update(['nooflectures2' => 0]);
            DB::table('atts_4s')
               ->update(['lectureattend2' => 0]);
            DB::table('atts_4s')
               ->update(['nooflectures3' => 0]);
            DB::table('atts_4s')
               ->update(['lectureattend3' => 0]);
            DB::table('atts_4s')
               ->update(['nooflectures4' => 0]);
            DB::table('atts_4s')
               ->update(['lectureattend4' => 0]);
            DB::table('atts_4s')
               ->update(['nooflectures5' => 0]);
            DB::table('atts_4s')
               ->update(['lectureattend5' => 0]);
            DB::table('atts_4s')
               ->update(['nooflectures6' => 0]);
            DB::table('atts_4s')
               ->update(['lectureattend6' => 0]);
            DB::table('atts_4s')
               ->update(['nooflectures7' => 0]);
            DB::table('atts_4s')
               ->update(['lectureattend7' => 0]);
             DB::table('atts_4s')
               ->update(['attend_mark' => 0]);
            DB::table('atts_4s')
               ->update(['attend_mark1' => 0]);
            DB::table('atts_4s')
               ->update(['attend_mark2' => 0]);
            DB::table('atts_4s')
               ->update(['attend_mark3' => 0]);
            DB::table('atts_4s')
               ->update(['attend_mark4' => 0]);
            DB::table('atts_4s')
               ->update(['attend_mark5' => 0]);
            DB::table('atts_4s')
               ->update(['attend_mark6' => 0]);
            DB::table('atts_4s')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_4s')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_4s')
               ->update(['is_saved' => 0]);
             DB::table('atts_4s')
               ->update(['is_saved1' => 0]);
             DB::table('atts_4s')
               ->update(['is_saved2' => 0]);
             DB::table('atts_4s')
               ->update(['is_saved3' => 0]);
             DB::table('atts_4s')
               ->update(['is_saved4' => 0]);
             DB::table('atts_4s')
               ->update(['is_saved5' => 0]);
             DB::table('atts_4s')
               ->update(['is_saved6' => 0]);
             DB::table('atts_4s')
               ->update(['is_saved7' => 0]);
        
            
        
             return view('Reset_Table/Update_Semester3', compact('tableCourseSStudentsObjects','items','level','level1','level2','level3'));
    }
    
   
    public function Subject_Level()
    {     
            $atts = att4s::paginate(100);
            $items = DB::table('precentages')
             ->select('precentage')
             ->where('Level','=', "2S")->first();
            
            $data=DB::table('table__course__s__students')
                    ->where('id','=', "11")->first();
            
            $data1=DB::table('table__course__s__students')
                    ->where('id','=', "10")->first();
               
            $data2=DB::table('table__course__s__students')
                    ->where('id','=', "9")->first();   
            
            $data3=DB::table('table__course__s__students')
                    ->where('id','=', "8")->first();
            
            $data4=DB::table('table__course__s__students')
                    ->where('id','=', "7")->first();
           
            $data5=DB::table('table__course__s__students')
                    ->where('id','=', "6")->first();
            
            $data6=DB::table('table__course__s__students')
                    ->where('id','=', "5")->first();
            
            $data7=DB::table('table__course__s__students')
                    ->where('id','=', "4")->first();
            
            $level1 = DB::table('Level')
                    ->where('id','=', "4")->first();
            
            
            $SingleData = att4s::findOrFail(1);
        
            
                 $pdf = PDF::loadView('Summery.table_2_sub.Level', compact('atts','items','SingleData','data','data1','data2','data3','data4','data5','data6','data7','level1'));
                 return $pdf->download('Summmary Level.pdf');
     }  
     
     public function Backup()
     {
        $atts = att4s::paginate(100);
        $items = DB::table('precentages')
         ->select('precentage')
         ->where('Level','=', "2S")->first();
        
        $data=DB::table('table__course__s__students')
                ->where('id','=', "11")->first();
        
        $data1=DB::table('table__course__s__students')
                ->where('id','=', "10")->first();
           
        $data2=DB::table('table__course__s__students')
                ->where('id','=', "9")->first();   
        
        $data3=DB::table('table__course__s__students')
                ->where('id','=', "8")->first();
        
        $data4=DB::table('table__course__s__students')
                ->where('id','=', "7")->first();
       
        $data5=DB::table('table__course__s__students')
                ->where('id','=', "6")->first();
        
        $data6=DB::table('table__course__s__students')
                ->where('id','=', "5")->first();
        
        $data7=DB::table('table__course__s__students')
                ->where('id','=', "4")->first();
        
        $leve = DB::table('Level')
                    ->where('id','=', "4")->first();
            
        
        $SingleData = att4s::findOrFail(1);   
       
        
        $pdf = PDF::loadView('BackUp.table_2.Level2', compact('atts','items','SingleData','data',
                'data1','data2','data3','data4','data5','data6','data7','leve'))
                ->download('BackUP Level.pdf');
        return view('BackUp.table_2.Level2',compact('atts','items','data','data1','data2',
                'data3','data4','data5','data6','data7','SingleData','leve'));
     }
}
