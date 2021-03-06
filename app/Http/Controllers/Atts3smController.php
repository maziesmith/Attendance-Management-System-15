<?php
namespace App\Http\Controllers;
use App\Models\atts_3s;
use App\Models\att3;
use App\Models\table__course__s__students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\url;
use App\Http\Controllers\Controller;
use Exception;
use PDF; 
use Carbon\Carbon;

 class Atts3smController extends Controller
 {
     
  // ---------------------------_ATTENDANCE VIEW_-------------------------------------------------
     
     // viewing table_2 subject
    public function view($id,Request $request)
    {
        $atts = atts_3s::paginate(100);
         $SingleData =  DB::table('atts_3s')->first();
            
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
           $atts = atts_3s::paginate(100);
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
        $atts = atts_3s::paginate(200);
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
  public function result()
   {
          DB::table('atts_3s')-> update(['attend_mark'=>0]);
          DB::table('atts_3s')-> update(['is_saved'=>0]);
           return redirect::to(url::previous());
   } 
   
      public function result1()
   {
          DB::table('atts_3s')-> update(['attend_mark1'=>0]);
          DB::table('atts_3s')-> update(['is_saved1'=>0]);
           return redirect::to(url::previous());
   } 
      public function result2()
   {
          DB::table('atts_3s')-> update(['attend_mark2'=>0]);
          DB::table('atts_3s')-> update(['is_saved2'=>0]);
           return redirect::to(url::previous());
   } 
      public function result3()
   {
          DB::table('atts_3s')-> update(['attend_mark3'=>0]);
          DB::table('atts_3s')-> update(['is_saved3'=>0]);
           return redirect::to(url::previous());
   } 
      public function result4()
   {
          DB::table('atts_3s')-> update(['attend_mark4'=>0]);
          DB::table('atts_3s')-> update(['is_saved4'=>0]);
           return redirect::to(url::previous());
   } 
      public function result5()
   {
          DB::table('atts_3s')-> update(['attend_mark5'=>0]);
          DB::table('atts_3s')-> update(['is_saved5'=>0]);
           return redirect::to(url::previous());
   } 
      public function result6()
   {
          DB::table('atts_3s')-> update(['attend_mark6'=>0]);
          DB::table('atts_3s')-> update(['is_saved6'=>0]);
           return redirect::to(url::previous());
   } 
   
      public function result7()
   {
          DB::table('atts_3s')-> update(['attend_mark7'=>0]);
          DB::table('atts_3s')-> update(['is_saved7'=>0]);
           return redirect::to(url::previous());
   } 
   
   
// function change precentage with hours for subject1
     public function store(Request $request,$id)
   {   

    try{
        if($id==19){
            $st = Carbon::parse($request->ST);
            $et = Carbon::parse($request->ET);
            $diff = $et->diffInHours($st);

            DB::table('atts_3s')-> update(['hours'=>$diff]);  
            DB::table('atts_3s')-> update(['hall'=>$request->hall]);
            DB::table('atts_3s')-> update(['date'=>$request->date]);
            DB::table('atts_3s')-> update(['Start_Time'=>$request->ST]);
            DB::table('atts_3s')-> update(['End_Time'=>$request->ET]);
            DB::table('atts_3s')->update(['nooflectures' => DB::raw('nooflectures +  hours')]);
            DB::table('atts_3s')->where('attend_mark', '0')->update(['lectureattend' => DB::raw('lectureattend + hours')]);
            DB::table('atts_3s')-> update(['is_saved'=>0]); 
             }
             
               
             if($id==18){
                
                $st = Carbon::parse($request->ST);
                $et = Carbon::parse($request->ET);
                $diff = $et->diffInHours($st);
                
               
    
               DB::table('atts_3s')-> update(['hours1'=>$diff]); 
               
                 DB::table('atts_3s')->update(['nooflectures1' => DB::raw('nooflectures1 +  hours1')]);
        
            DB::table('atts_3s')->where('attend_mark1', '0')->update(['lectureattend1' => DB::raw('lectureattend1 + hours1')]);
            
            DB::table('atts_3s')-> update(['is_saved1'=>'0']); 

            DB::table('atts_3s')-> update(['hall1'=>$request->hall]);

           DB::table('atts_3s')-> update(['date1'=>$request->date]);

            DB::table('atts_3s')-> update(['Start_Time1'=>$request->ST]);

            DB::table('atts_3s')-> update(['End_Time1'=>$request->ET]);
           
         
             }
             
             if($id==17){


              $st = Carbon::parse($request->ST);
                $et = Carbon::parse($request->ET);
                $diff = $et->diffInHours($st);
    
                DB::table('atts_3s')-> update(['hours2'=>$diff]);  

                DB::table('atts_3s')-> update(['hall2'=>$request->hall]);

            DB::table('atts_3s')-> update(['date2'=>$request->date]);

            DB::table('atts_3s')-> update(['Start_Time2'=>$request->ST]);

            DB::table('atts_3s')-> update(['End_Time2'=>$request->ET]); 
           
            DB::table('atts_3s')->update(['nooflectures2' => DB::raw('nooflectures2 +  hours2')]);
            
             DB::table('atts_3s')->where('attend_mark2', '0')->update(['lectureattend2' => DB::raw('lectureattend2 + hours2')]);
        
            DB::table('atts_3s')-> update(['is_saved2'=>'0']); 
             }
               
            if($id==16){
                $st = Carbon::parse($request->ST);
                $et = Carbon::parse($request->ET);
                $diff = $et->diffInHours($st);
    
                DB::table('atts_3s')-> update(['hours3'=>$diff]);  

                DB::table('atts_3s')-> update(['hall3'=>$request->hall]);

            DB::table('atts_3s')-> update(['date3'=>$request->date]);

            DB::table('atts_3s')-> update(['Start_Time3'=>$request->ST]);

            DB::table('atts_3s')-> update(['End_Time3'=>$request->ET]); 
             //DB::table('atts_3s')-> update(['hours3'=>$request->name]); 
           
            DB::table('atts_3s')->update(['nooflectures3' => DB::raw('nooflectures3 +  hours3')]);
        
            DB::table('atts_3s')->where('attend_mark3', '0')->update(['lectureattend3' => DB::raw('lectureattend3 + hours3')]);
       
            DB::table('atts_3s')-> update(['is_saved3'=>'0']); 
             }
             
            if($id==15){
                $st = Carbon::parse($request->ST);
                $et = Carbon::parse($request->ET);
                $diff = $et->diffInHours($st);
    
                DB::table('atts_3s')-> update(['hours4'=>$diff]);  

                DB::table('atts_3s')-> update(['hall4'=>$request->hall]);

            DB::table('atts_3s')-> update(['date4'=>$request->date]);

            DB::table('atts_3s')-> update(['Start_Time4'=>$request->ST]);

            DB::table('atts_3s')-> update(['End_Time4'=>$request->ET]); 
           
            DB::table('atts_3s')->update(['nooflectures4' => DB::raw('nooflectures4 +  hours4')]);
        
            DB::table('atts_3s')->where('attend_mark4', '0')->update(['lectureattend4' => DB::raw('lectureattend4 + hours4')]);
        
            DB::table('atts_3s')-> update(['is_saved4'=>'0']); 
             }
             
            if($id==14){
                $st = Carbon::parse($request->ST);
                $et = Carbon::parse($request->ET);
                $diff = $et->diffInHours($st);
    
                DB::table('atts_3s')-> update(['hours5'=>$diff]);  

                DB::table('atts_3s')-> update(['hall5'=>$request->hall]);

            DB::table('atts_3s')-> update(['date5'=>$request->date]);

            DB::table('atts_3s')-> update(['Start_Time5'=>$request->ST]);

            DB::table('atts_3s')-> update(['End_Time5'=>$request->ET]); 
           
            DB::table('atts_3s')->update(['nooflectures5' => DB::raw('nooflectures5 +  hours5')]);
        
            DB::table('atts_3s')->where('attend_mark5', '0')->update(['lectureattend5' => DB::raw('lectureattend5 + hours5')]);
        
            DB::table('atts_3s')-> update(['is_saved5'=>'0']); 
             }
             
            if($id==13){

             $st = Carbon::parse($request->ST);
                $et = Carbon::parse($request->ET);
                $diff = $et->diffInHours($st);
    
                DB::table('atts_3s')-> update(['hours6'=>$diff]);  

                DB::table('atts_3s')-> update(['hall6'=>$request->hall]);

            DB::table('atts_3s')-> update(['date6'=>$request->date]);

            DB::table('atts_3s')-> update(['Start_Time6'=>$request->ST]);

            DB::table('atts_3s')-> update(['End_Time6'=>$request->ET]); 
           
            DB::table('atts_3s')->update(['nooflectures6' => DB::raw('nooflectures6 +  hours6')]);
        
            DB::table('atts_3s')->where('attend_mark6', '0')->update(['lectureattend6' => DB::raw('lectureattend6 + hours6')]);
        
            DB::table('atts_3s')-> update(['is_saved6'=>'0']); 
             }
             
            if($id==12){
                $st = Carbon::parse($request->ST);
                $et = Carbon::parse($request->ET);
                $diff = $et->diffInHours($st);
    
                DB::table('atts_3s')-> update(['hours7'=>$diff]);  

                DB::table('atts_3s')-> update(['hall7'=>$request->hall]);

            DB::table('atts_3s')-> update(['date7'=>$request->date]);

            DB::table('atts_3s')-> update(['Start_Time7'=>$request->ST]);

            DB::table('atts_3s')-> update(['End_Time7'=>$request->ET]); 
            //DB::table('atts_3s')-> update(['hours7'=>$request->name]); 
           
            DB::table('atts_3s')->update(['nooflectures7' => DB::raw('nooflectures7 +  hours7')]);
        
            DB::table('atts_3s')->where('attend_mark7', '0')->update(['lectureattend7' => DB::raw('lectureattend7 + hours7')]);
      
            DB::table('atts_3s')-> update(['is_saved7'=>'0']); 
             }


            return redirect::to(url::previous())
            ->with('success_message', 'Attendance Sheet successfully added!');   
                 
             
             
        } catch (Exception $exception) {
                return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
   }
  

   //function for mark attendance for subject1
     public function ray(Request $request)
    {
      DB::table('atts_3s')-> update(['attend_mark'=>0]); 
        $record = $request->my_checkbox;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_3s')->where('id', $value)->update(['attend_mark'=>1]);
        }
        }    
        
        DB::table('atts_3s')-> update(['is_saved'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray1(Request $request)
    {
      DB::table('atts_3s')-> update(['attend_mark1'=>0]); 
        $record = $request->my_checkbox1;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_3s')->where('id', $value)->update(['attend_mark1'=>1]);
        }
        }    
        
        DB::table('atts_3s')-> update(['is_saved1'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray2(Request $request)
    {
      DB::table('atts_3s')-> update(['attend_mark2'=>0]); 
        $record = $request->my_checkbox2;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_3s')->where('id', $value)->update(['attend_mark2'=>1]);
        }
        }    
        
        DB::table('atts_3s')-> update(['is_saved2'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray3(Request $request)
    {
      DB::table('atts_3s')-> update(['attend_mark3'=>0]); 
        $record = $request->my_checkbox3;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_3s')->where('id', $value)->update(['attend_mark3'=>1]);
        }
        }    
        
        DB::table('atts_3s')-> update(['is_saved3'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray4(Request $request)
    {
      DB::table('atts_3s')-> update(['attend_mark4'=>0]); 
        $record = $request->my_checkbox4;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_3s')->where('id', $value)->update(['attend_mark4'=>1]);
        }
        }    
        
        DB::table('atts_3s')-> update(['is_saved4'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray5(Request $request)
    {
      DB::table('atts_3s')-> update(['attend_mark5'=>0]); 
        $record = $request->my_checkbox5;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_3s')->where('id', $value)->update(['attend_mark5'=>1]);
        }
        }    
        
        DB::table('atts_3s')-> update(['is_saved5'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray6(Request $request)
    {
      DB::table('atts_3s')-> update(['attend_mark6'=>0]); 
        $record = $request->my_checkbox6;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_3s')->where('id', $value)->update(['attend_mark6'=>1]);
        }
        }    
        
        DB::table('atts_3s')-> update(['is_saved6'=>1]); 
        
        return redirect::to(url::previous());
     }
     
        public function ray7(Request $request)
    {
      DB::table('atts_3s')-> update(['attend_mark7'=>0]); 
        $record = $request->my_checkbox7;
        
        if (is_null($record)){
            
        }
        else{
        foreach ($record as $value) {
            DB::table('atts_3s')->where('id', $value)->update(['attend_mark7'=>1]);
        }
        }    
        
        DB::table('atts_3s')-> update(['is_saved7'=>1]); 
        
        return redirect::to(url::previous());
     }
  
    
      public function reset1()
    {
            DB::table('atts_1s')
               ->update(['nooflectures' => 0]);
            DB::table('atts_1s')
               ->update(['lectureattend' => 0]);
            DB::table('atts_1s')
               ->update(['nooflectures1' => 0]);
            DB::table('atts_1s')
               ->update(['lectureattend1' => 0]);
            DB::table('atts_1s')
               ->update(['nooflectures2' => 0]);
            DB::table('atts_1s')
               ->update(['lectureattend2' => 0]);
            DB::table('atts_1s')
               ->update(['nooflectures3' => 0]);
            DB::table('atts_1s')
               ->update(['lectureattend3' => 0]);
            DB::table('atts_1s')
               ->update(['nooflectures4' => 0]);
            DB::table('atts_1s')
               ->update(['lectureattend4' => 0]);
            DB::table('atts_1s')
               ->update(['nooflectures5' => 0]);
            DB::table('atts_1s')
               ->update(['lectureattend5' => 0]);
            DB::table('atts_1s')
               ->update(['nooflectures6' => 0]);
            DB::table('atts_1s')
               ->update(['lectureattend6' => 0]);
            DB::table('atts_1s')
               ->update(['nooflectures7' => 0]);
            DB::table('atts_1s')
               ->update(['lectureattend7' => 0]);
             DB::table('atts_1s')
               ->update(['attend_mark' => 0]);
            DB::table('atts_1s')
               ->update(['attend_mark1' => 0]);
            DB::table('atts_1s')
               ->update(['attend_mark2' => 0]);
            DB::table('atts_1s')
               ->update(['attend_mark3' => 0]);
            DB::table('atts_1s')
               ->update(['attend_mark4' => 0]);
            DB::table('atts_1s')
               ->update(['attend_mark5' => 0]);
            DB::table('atts_1s')
               ->update(['attend_mark6' => 0]);
            DB::table('atts_1s')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_1s')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_1s')
               ->update(['is_saved' => 0]);
             DB::table('atts_1s')
               ->update(['is_saved1' => 0]);
             DB::table('atts_1s')
               ->update(['is_saved2' => 0]);
             DB::table('atts_1s')
               ->update(['is_saved3' => 0]);
             DB::table('atts_1s')
               ->update(['is_saved4' => 0]);
             DB::table('atts_1s')
               ->update(['is_saved5' => 0]);
             DB::table('atts_1s')
               ->update(['is_saved6' => 0]);
             DB::table('atts_1s')
               ->update(['is_saved7' => 0]);
             
             
             
             
            DB::table('atts')
               ->update(['nooflectures' => 0]);
            DB::table('atts')
               ->update(['lectureattend' => 0]);
            DB::table('atts')
               ->update(['nooflectures1' => 0]);
            DB::table('atts')
               ->update(['lectureattend1' => 0]);
            DB::table('atts')
               ->update(['nooflectures2' => 0]);
            DB::table('atts')
               ->update(['lectureattend2' => 0]);
            DB::table('atts')
               ->update(['nooflectures3' => 0]);
            DB::table('atts')
               ->update(['lectureattend3' => 0]);
            DB::table('atts')
               ->update(['nooflectures4' => 0]);
            DB::table('atts')
               ->update(['lectureattend4' => 0]);
            DB::table('atts')
               ->update(['nooflectures5' => 0]);
            DB::table('atts')
               ->update(['lectureattend5' => 0]);
            DB::table('atts')
               ->update(['nooflectures6' => 0]);
            DB::table('atts')
               ->update(['lectureattend6' => 0]);
            DB::table('atts')
               ->update(['nooflectures7' => 0]);
            DB::table('atts')
               ->update(['lectureattend7' => 0]);
            DB::table('atts')
               ->update(['attend_mark' => 0]);
            DB::table('atts')
               ->update(['attend_mark1' => 0]);
            DB::table('atts')
               ->update(['attend_mark2' => 0]);
            DB::table('atts')
               ->update(['attend_mark3' => 0]);
            DB::table('atts')
               ->update(['attend_mark4' => 0]);
            DB::table('atts')
               ->update(['attend_mark5' => 0]);
            DB::table('atts')
               ->update(['attend_mark6' => 0]);
            DB::table('atts')
               ->update(['attend_mark7' => 0]);
             DB::table('atts')
               ->update(['attend_mark7' => 0]);
             DB::table('atts')
               ->update(['is_saved' => 0]);
             DB::table('atts')
               ->update(['is_saved1' => 0]);
             DB::table('atts')
               ->update(['is_saved2' => 0]);
             DB::table('atts')
               ->update(['is_saved3' => 0]);
             DB::table('atts')
               ->update(['is_saved4' => 0]);
             DB::table('atts')
               ->update(['is_saved5' => 0]);
             DB::table('atts')
               ->update(['is_saved6' => 0]);
             DB::table('atts')
               ->update(['is_saved7' => 0]);
        
             
             
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
             DB::table('atts_3s')
               ->update(['attend_mark' => 0]);
            DB::table('atts_3s')
               ->update(['attend_mark1' => 0]);
            DB::table('atts_3s')
               ->update(['attend_mark2' => 0]);
            DB::table('atts_3s')
               ->update(['attend_mark3' => 0]);
            DB::table('atts_3s')
               ->update(['attend_mark4' => 0]);
            DB::table('atts_3s')
               ->update(['attend_mark5' => 0]);
            DB::table('atts_3s')
               ->update(['attend_mark6' => 0]);
            DB::table('atts_3s')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_3s')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_3s')
               ->update(['is_saved' => 0]);
             DB::table('atts_3s')
               ->update(['is_saved1' => 0]);
             DB::table('atts_3s')
               ->update(['is_saved2' => 0]);
             DB::table('atts_3s')
               ->update(['is_saved3' => 0]);
             DB::table('atts_3s')
               ->update(['is_saved4' => 0]);
             DB::table('atts_3s')
               ->update(['is_saved5' => 0]);
             DB::table('atts_3s')
               ->update(['is_saved6' => 0]);
             DB::table('atts_3s')
               ->update(['is_saved7' => 0]);
             
             
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
             
             
                   DB::table('atts_1gs')
               ->update(['nooflectures' => 0]);
            DB::table('atts_1gs')
               ->update(['lectureattend' => 0]);
            DB::table('atts_1gs')
               ->update(['nooflectures1' => 0]);
            DB::table('atts_1gs')
               ->update(['lectureattend1' => 0]);
            DB::table('atts_1gs')
               ->update(['nooflectures2' => 0]);
            DB::table('atts_1gs')
               ->update(['lectureattend2' => 0]);
            DB::table('atts_1gs')
               ->update(['nooflectures3' => 0]);
            DB::table('atts_1gs')
               ->update(['lectureattend3' => 0]);
             DB::table('atts_1gs')
               ->update(['nooflectures4' => 0]);
            DB::table('atts_1gs')
               ->update(['lectureattend4' => 0]);
             DB::table('atts_1gs')
               ->update(['nooflectures5' => 0]);
            DB::table('atts_1gs')
               ->update(['lectureattend5' => 0]);
             DB::table('atts_1gs')
               ->update(['nooflectures6' => 0]);
            DB::table('atts_1gs')
               ->update(['lectureattend6' => 0]);
            DB::table('atts_1gs')
               ->update(['nooflectures7' => 0]);
            DB::table('atts_1gs')
               ->update(['lectureattend7' => 0]);
             DB::table('atts_1gs')
               ->update(['attend_mark' => 0]);
            DB::table('atts_1gs')
               ->update(['attend_mark1' => 0]);
            DB::table('atts_1gs')
               ->update(['attend_mark2' => 0]);
            DB::table('atts_1gs')
               ->update(['attend_mark3' => 0]);
            DB::table('atts_1gs')
               ->update(['attend_mark4' => 0]);
            DB::table('atts_1gs')
               ->update(['attend_mark5' => 0]);
            DB::table('atts_1gs')
               ->update(['attend_mark6' => 0]);
            DB::table('atts_1gs')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_1gs')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_1gs')
               ->update(['is_saved' => 0]);
             DB::table('atts_1gs')
               ->update(['is_saved1' => 0]);
             DB::table('atts_1gs')
               ->update(['is_saved2' => 0]);
             DB::table('atts_1gs')
               ->update(['is_saved3' => 0]);
             DB::table('atts_1gs')
               ->update(['is_saved4' => 0]);
             DB::table('atts_1gs')
               ->update(['is_saved5' => 0]);
             DB::table('atts_1gs')
               ->update(['is_saved6' => 0]);
             DB::table('atts_1gs')
               ->update(['is_saved7' => 0]);
         
             
               DB::table('atts_2gs')
               ->update(['nooflectures' => 0]);
            DB::table('atts_2gs')
               ->update(['lectureattend' => 0]);
            DB::table('atts_2gs')
               ->update(['nooflectures1' => 0]);
            DB::table('atts_2gs')
               ->update(['lectureattend1' => 0]);
            DB::table('atts_2gs')
               ->update(['nooflectures2' => 0]);
            DB::table('atts_2gs')
               ->update(['lectureattend2' => 0]);
            DB::table('atts_2gs')
               ->update(['nooflectures3' => 0]);
            DB::table('atts_2gs')
               ->update(['lectureattend3' => 0]);
            DB::table('atts_2gs')
               ->update(['nooflectures4' => 0]);
            DB::table('atts_2gs')
               ->update(['lectureattend4' => 0]); 
             DB::table('atts_2gs')
               ->update(['nooflectures5' => 0]);
            DB::table('atts_2gs')
               ->update(['lectureattend5' => 0]);
              DB::table('atts_2gs')
               ->update(['nooflectures6' => 0]);
            DB::table('atts_2gs')
               ->update(['lectureattend6' => 0]);
            DB::table('atts_2gs')
               ->update(['nooflectures7' => 0]);
            DB::table('atts_2gs')
               ->update(['lectureattend7' => 0]);
             DB::table('atts_2gs')
               ->update(['attend_mark' => 0]);
            DB::table('atts_2gs')
               ->update(['attend_mark1' => 0]);
            DB::table('atts_2gs')
               ->update(['attend_mark2' => 0]);
            DB::table('atts_2gs')
               ->update(['attend_mark3' => 0]);
            DB::table('atts_2gs')
               ->update(['attend_mark4' => 0]);
            DB::table('atts_2gs')
               ->update(['attend_mark5' => 0]);
            DB::table('atts_2gs')
               ->update(['attend_mark6' => 0]);
            DB::table('atts_2gs')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_2gs')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_2gs')
               ->update(['is_saved' => 0]);
             DB::table('atts_2gs')
               ->update(['is_saved1' => 0]);
             DB::table('atts_2gs')
               ->update(['is_saved2' => 0]);
             DB::table('atts_2gs')
               ->update(['is_saved3' => 0]);
             DB::table('atts_2gs')
               ->update(['is_saved4' => 0]);
             DB::table('atts_2gs')
               ->update(['is_saved5' => 0]);
             DB::table('atts_2gs')
               ->update(['is_saved6' => 0]);
             DB::table('atts_2gs')
               ->update(['is_saved7' => 0]);
         
           DB::table('atts_3gs')
               ->update(['nooflectures' => 0]);
            DB::table('atts_3gs')
               ->update(['lectureattend' => 0]);
            DB::table('atts_3gs')
               ->update(['nooflectures1' => 0]);
            DB::table('atts_3gs')
               ->update(['lectureattend1' => 0]);
            DB::table('atts_3gs')
               ->update(['nooflectures2' => 0]);
            DB::table('atts_3gs')
               ->update(['lectureattend2' => 0]);
            DB::table('atts_3gs')
               ->update(['nooflectures3' => 0]);
            DB::table('atts_3gs')
               ->update(['lectureattend3' => 0]);
           DB::table('atts_3gs')
               ->update(['nooflectures4' => 0]);
            DB::table('atts_3gs')
               ->update(['lectureattend4' => 0]);
           
            DB::table('atts_3gs')
               ->update(['nooflectures5' => 0]);
            DB::table('atts_3gs')
               ->update(['lectureattend5' => 0]);
           
            DB::table('atts_3gs')
               ->update(['nooflectures6' => 0]);
            DB::table('atts_3gs')
               ->update(['lectureattend6' => 0]);
            
              
            DB::table('atts_3gs')
               ->update(['nooflectures7' => 0]);
            DB::table('atts_3gs')
               ->update(['lectureattend7' => 0]);
             DB::table('atts_3gs')
               ->update(['attend_mark' => 0]);
            DB::table('atts_3gs')
               ->update(['attend_mark1' => 0]);
            DB::table('atts_3gs')
               ->update(['attend_mark2' => 0]);
            DB::table('atts_3gs')
               ->update(['attend_mark3' => 0]);
            DB::table('atts_3gs')
               ->update(['attend_mark4' => 0]);
            DB::table('atts_3gs')
               ->update(['attend_mark5' => 0]);
            DB::table('atts_3gs')
               ->update(['attend_mark6' => 0]);
            DB::table('atts_3gs')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_3gs')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_3gs')
               ->update(['is_saved' => 0]);
             DB::table('atts_3gs')
               ->update(['is_saved1' => 0]);
             DB::table('atts_3gs')
               ->update(['is_saved2' => 0]);
             DB::table('atts_3gs')
               ->update(['is_saved3' => 0]);
             DB::table('atts_3gs')
               ->update(['is_saved4' => 0]);
             DB::table('atts_3gs')
               ->update(['is_saved5' => 0]);
             DB::table('atts_3gs')
               ->update(['is_saved6' => 0]);
             DB::table('atts_3gs')
               ->update(['is_saved7' => 0]);
         
           
            
              DB::table('atts_3ms')
               ->update(['nooflectures' => 0]);
            DB::table('atts_3ms')
               ->update(['lectureattend' => 0]);
            DB::table('atts_3ms')
               ->update(['nooflectures1' => 0]);
            DB::table('atts_3ms')
               ->update(['lectureattend1' => 0]);
            DB::table('atts_3ms')
               ->update(['nooflectures2' => 0]);
            DB::table('atts_3ms')
               ->update(['lectureattend2' => 0]);
            DB::table('atts_3ms')
               ->update(['nooflectures3' => 0]);
            DB::table('atts_3ms')
               ->update(['lectureattend3' => 0]);
            DB::table('atts_3ms')
               ->update(['nooflectures4' => 0]);
            DB::table('atts_3ms')
               ->update(['lectureattend4' => 0]);
            DB::table('atts_3ms')
               ->update(['nooflectures5' => 0]);
            DB::table('atts_3ms')
               ->update(['lectureattend5' => 0]);
            DB::table('atts_3ms')
               ->update(['nooflectures6' => 0]);
            DB::table('atts_3ms')
               ->update(['lectureattend6' => 0]);
            
              
            DB::table('atts_3ms')
               ->update(['nooflectures7' => 0]);
            DB::table('atts_3ms')
               ->update(['lectureattend7' => 0]);
             DB::table('atts_3ms')
               ->update(['attend_mark' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark1' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark2' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark3' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark4' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark5' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark6' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_3ms')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved1' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved2' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved3' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved4' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved5' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved6' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved7' => 0]);
         
             
                DB::table('atts_4ms')
               ->update(['nooflectures' => 0]);
            DB::table('atts_4ms')
               ->update(['lectureattend' => 0]);
            DB::table('atts_4ms')
               ->update(['nooflectures1' => 0]);
            DB::table('atts_4ms')
               ->update(['lectureattend1' => 0]);
            DB::table('atts_4ms')
               ->update(['nooflectures2' => 0]);
            DB::table('atts_4ms')
               ->update(['lectureattend2' => 0]);
            DB::table('atts_4ms')
               ->update(['nooflectures3' => 0]);
            DB::table('atts_4ms')
               ->update(['lectureattend3' => 0]);
            DB::table('atts_4ms')
               ->update(['nooflectures4' => 0]);
            DB::table('atts_4ms')
               ->update(['lectureattend4' => 0]);
            DB::table('atts_4ms')
               ->update(['nooflectures5' => 0]);
            DB::table('atts_4ms')
               ->update(['lectureattend5' => 0]);
            DB::table('atts_4ms')
               ->update(['nooflectures6' => 0]);
            DB::table('atts_4ms')
               ->update(['lectureattend6' => 0]);
              DB::table('atts_4ms')
               ->update(['nooflectures7' => 0]);
            DB::table('atts_4ms')
               ->update(['lectureattend7' => 0]);
              
            DB::table('atts_3ms')
               ->update(['nooflectures7' => 0]);
            DB::table('atts_3ms')
               ->update(['lectureattend7' => 0]);
             DB::table('atts_3ms')
               ->update(['attend_mark' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark1' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark2' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark3' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark4' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark5' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark6' => 0]);
            DB::table('atts_3ms')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_3ms')
               ->update(['attend_mark7' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved1' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved2' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved3' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved4' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved5' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved6' => 0]);
             DB::table('atts_3ms')
               ->update(['is_saved7' => 0]);
  
             return redirect()-> back()->with('message', 'Successfully reset the old data!');
    }
    
    
    //Get summary for Level
     public function Subject_Level(Request $request)
    {     
          $detail=$request;
             $items = DB::table('precentages')
             ->select('precentage')
             ->where('Level','=', "2S")->first();
             
             $level1 = DB::table('Level')
                    ->where('id','=', "1")->first();             
             $level2 = DB::table('Level')
                    ->where('id','=', "2")->first();
             $level3 = DB::table('Level')
                    ->where('id','=', "3")->first();
             $level4 = DB::table('Level')
                    ->where('id','=', "4")->first();             
             $level5 = DB::table('Level')
                    ->where('id','=', "5")->first();
             $level6 = DB::table('Level')
                    ->where('id','=', "6")->first();
             $level7 = DB::table('Level')
                    ->where('id','=', "7")->first();             
             $level8 = DB::table('Level')
                    ->where('id','=', "8")->first();
             $level9 = DB::table('Level')
                    ->where('id','=', "9")->first();

             
             $atts_1s = DB::table('atts_1s')->first();
                  
             $atts_2s = DB::table('atts')->first();
                 
             $atts_3s = DB::table('atts_3s')->first();
                 
             $atts_4s = DB::table('atts_4s')->first();
                   
             $atts_1g = DB::table('atts_1gs')->first();
                 
             $atts_2g = DB::table('atts_2gs')->first();
             
             $atts_3g = DB::table('atts_3gs')->first();
                    
             $atts_3m = DB::table('atts_3ms')->first();
                   
             $atts_4m = DB::table('atts_4ms')->first();
         
             $summary1s= DB::table('atts_1s')
                    ->orWhere('precentage','<',$items->precentage )
                    ->orWhere('precentage1','<',$items->precentage )
                    ->orWhere('precentage2','<',$items->precentage )
                    ->orWhere('precentage3','<',$items->precentage )
                    ->orWhere('precentage4','<',$items->precentage )
                    ->orWhere('precentage5','<',$items->precentage )
                    ->orWhere('precentage6','<',$items->precentage )
                    ->orWhere('precentage7','<',$items->precentage )->get();
             
             
             $summary2s= DB::table('atts')
                    ->orWhere('precentage','<',$items->precentage )
                    ->orWhere('precentage1','<',$items->precentage )
                    ->orWhere('precentage2','<',$items->precentage )
                    ->orWhere('precentage3','<',$items->precentage )
                    ->orWhere('precentage4','<',$items->precentage )
                    ->orWhere('precentage5','<',$items->precentage )
                    ->orWhere('precentage6','<',$items->precentage )
                    ->orWhere('precentage7','<',$items->precentage )->get();
             
             $summary3s= DB::table('atts_3s')
                    ->orWhere('precentage','<',$items->precentage )
                    ->orWhere('precentage1','<',$items->precentage )
                    ->orWhere('precentage2','<',$items->precentage )
                    ->orWhere('precentage3','<',$items->precentage )
                    ->orWhere('precentage4','<',$items->precentage )
                    ->orWhere('precentage5','<',$items->precentage )
                    ->orWhere('precentage6','<',$items->precentage )
                    ->orWhere('precentage7','<',$items->precentage )->get();
             
             $summary4s= DB::table('atts_4s')
                    ->orWhere('precentage','<',$items->precentage )
                    ->orWhere('precentage1','<',$items->precentage )
                    ->orWhere('precentage2','<',$items->precentage )
                    ->orWhere('precentage3','<',$items->precentage )
                    ->orWhere('precentage4','<',$items->precentage )
                    ->orWhere('precentage5','<',$items->precentage )
                    ->orWhere('precentage6','<',$items->precentage )
                    ->orWhere('precentage7','<',$items->precentage )->get();
             
             
             $summary1g= DB::table('atts_1gs')
                    ->orWhere('precentage','<',$items->precentage )
                    ->orWhere('precentage1','<',$items->precentage )
                    ->orWhere('precentage2','<',$items->precentage )
                    ->orWhere('precentage3','<',$items->precentage )
                    ->orWhere('precentage4','<',$items->precentage )
                    ->orWhere('precentage5','<',$items->precentage )
                    ->orWhere('precentage6','<',$items->precentage )
                    ->orWhere('precentage7','<',$items->precentage )->get();
             
             
             $summary2g= DB::table('atts_2gs')
                    ->orWhere('precentage','<',$items->precentage )
                    ->orWhere('precentage1','<',$items->precentage )
                    ->orWhere('precentage2','<',$items->precentage )
                    ->orWhere('precentage3','<',$items->precentage )
                    ->orWhere('precentage4','<',$items->precentage )
                    ->orWhere('precentage5','<',$items->precentage )
                    ->orWhere('precentage6','<',$items->precentage )
                    ->orWhere('precentage7','<',$items->precentage )->get();
             
             $summary3g= DB::table('atts_3gs')
                    ->orWhere('precentage','<',$items->precentage )
                    ->orWhere('precentage1','<',$items->precentage )
                    ->orWhere('precentage2','<',$items->precentage )
                    ->orWhere('precentage3','<',$items->precentage )
                    ->orWhere('precentage4','<',$items->precentage )
                    ->orWhere('precentage5','<',$items->precentage )
                    ->orWhere('precentage6','<',$items->precentage )
                    ->orWhere('precentage7','<',$items->precentage )->get();
             
             $summary3m= DB::table('atts_3ms')
                    ->orWhere('precentage','<',$items->precentage )
                    ->orWhere('precentage1','<',$items->precentage )
                    ->orWhere('precentage2','<',$items->precentage )
                    ->orWhere('precentage3','<',$items->precentage )
                    ->orWhere('precentage4','<',$items->precentage )
                    ->orWhere('precentage5','<',$items->precentage )
                    ->orWhere('precentage6','<',$items->precentage )
                    ->orWhere('precentage7','<',$items->precentage )->get();
             
              $summary4m= DB::table('atts_4ms')
                    ->orWhere('precentage','<',$items->precentage )
                    ->orWhere('precentage1','<',$items->precentage )
                    ->orWhere('precentage2','<',$items->precentage )
                    ->orWhere('precentage3','<',$items->precentage )
                    ->orWhere('precentage4','<',$items->precentage )
                    ->orWhere('precentage5','<',$items->precentage )
                    ->orWhere('precentage6','<',$items->precentage )
                    ->orWhere('precentage7','<',$items->precentage )->get();
         
             
            $data1s_1=DB::table('table__course__s__students')
                    ->where('id','=', "45")->first();             
                         
            $data1s_2=DB::table('table__course__s__students')
                    ->where('id','=', "44")->first();
               
            $data1s_3=DB::table('table__course__s__students')
                    ->where('id','=', "43")->first();   
            
            $data1s_4=DB::table('table__course__s__students')
                    ->where('id','=', "42")->first();
            
            $data1s_5=DB::table('table__course__s__students')
                    ->where('id','=', "39")->first();
           
            $data1s_6=DB::table('table__course__s__students')
                    ->where('id','=', "38")->first();
            
            $data1s_7=DB::table('table__course__s__students')
                    ->where('id','=', "37")->first();                    
            
            $data1s_8=DB::table('table__course__s__students')
                    ->where('id','=', "46")->first(); 
             
             
            $data2s_1=DB::table('table__course__s__students')
                    ->where('id','=', "35")->first();
            
            $data2s_2=DB::table('table__course__s__students')
                    ->where('id','=', "31")->first();
               
            $data2s_3=DB::table('table__course__s__students')
                    ->where('id','=', "27")->first();   
            
            $data2s_4=DB::table('table__course__s__students')
                    ->where('id','=', "25")->first();
            
            $data2s_5=DB::table('table__course__s__students')
                    ->where('id','=', "24")->first();
           
            $data2s_6=DB::table('table__course__s__students')
                    ->where('id','=', "23")->first();
            
            $data2s_7=DB::table('table__course__s__students')
                    ->where('id','=', "22")->first();                    
            
            $data2s_8=DB::table('table__course__s__students')
                    ->where('id','=', "21")->first();         
            
 
            $data3s_1=DB::table('table__course__s__students')
                    ->where('id','=', "19")->first();
            
            $data3s_2=DB::table('table__course__s__students')
                    ->where('id','=', "18")->first();
               
            $data3s_3=DB::table('table__course__s__students')
                    ->where('id','=', "17")->first();   
            
            $data3s_4=DB::table('table__course__s__students')
                    ->where('id','=', "16")->first();
            
            $data3s_5=DB::table('table__course__s__students')
                    ->where('id','=', "15")->first();
           
            $data3s_6=DB::table('table__course__s__students')
                    ->where('id','=', "14")->first();
            
            $data3s_7=DB::table('table__course__s__students')
                    ->where('id','=', "13")->first();
            
            $data3s_8=DB::table('table__course__s__students')
                    ->where('id','=', "12")->first();
           
            
            $data4s_1=DB::table('table__course__s__students')
                    ->where('id','=', "11")->first();             
                         
            $data4s_2=DB::table('table__course__s__students')
                    ->where('id','=', "10")->first();
               
            $data4s_3=DB::table('table__course__s__students')
                    ->where('id','=', "9")->first();   
            
            $data4s_4=DB::table('table__course__s__students')
                    ->where('id','=', "8")->first();
            
            $data4s_5=DB::table('table__course__s__students')
                    ->where('id','=', "7")->first();
           
            $data4s_6=DB::table('table__course__s__students')
                    ->where('id','=', "6")->first();
            
            $data4s_7=DB::table('table__course__s__students')
                    ->where('id','=', "5")->first();                    
            
            $data4s_8=DB::table('table__course__s__students')
                    ->where('id','=', "4")->first(); 
            
            
            $data1g_1=DB::table('table__course__g__students')
                    ->where('id','=', "1")->first();             
                         
            $data1g_2=DB::table('table__course__g__students')
                    ->where('id','=', "2")->first();
               
            $data1g_3=DB::table('table__course__g__students')
                    ->where('id','=', "3")->first();   
            
            $data1g_4=DB::table('table__course__g__students')
                    ->where('id','=', "4")->first();
            
            $data1g_5=DB::table('table__course__g__students')
                    ->where('id','=', "30")->first();
           
            $data1g_6=DB::table('table__course__g__students')
                    ->where('id','=', "31")->first();
            
            $data1g_7=DB::table('table__course__g__students')
                    ->where('id','=', "39")->first();                    
            
            $data1g_8=DB::table('table__course__g__students')
                    ->where('id','=', "40")->first(); 
            
            
            
            $data2g_1=DB::table('table__course__g__students')
                    ->where('id','=', "5")->first();             
                         
            $data2g_2=DB::table('table__course__g__students')
                    ->where('id','=', "6")->first();
               
            $data2g_3=DB::table('table__course__g__students')
                    ->where('id','=', "7")->first();   
            
            $data2g_4=DB::table('table__course__g__students')
                    ->where('id','=', "8")->first();
            
            $data2g_5=DB::table('table__course__g__students')
                    ->where('id','=', "33")->first();
           
            $data2g_6=DB::table('table__course__g__students')
                    ->where('id','=', "34")->first();
            
            $data2g_7=DB::table('table__course__g__students')
                    ->where('id','=', "43")->first();                    
            
            $data2g_8=DB::table('table__course__g__students')
                    ->where('id','=', "44")->first(); 
            
            
            
            $data3g_1=DB::table('table__course__g__students')
                    ->where('id','=', "22")->first();             
                         
            $data3g_2=DB::table('table__course__g__students')
                    ->where('id','=', "24")->first();
               
            $data3g_3=DB::table('table__course__g__students')
                    ->where('id','=', "25")->first();   
            
            $data3g_4=DB::table('table__course__g__students')
                    ->where('id','=', "26")->first();
            
            $data3g_5=DB::table('table__course__g__students')
                    ->where('id','=', "36")->first();
           
            $data3g_6=DB::table('table__course__g__students')
                    ->where('id','=', "37")->first();
            
            $data3g_7=DB::table('table__course__g__students')
                    ->where('id','=', "47")->first();                    
            
            $data3g_8=DB::table('table__course__g__students')
                    ->where('id','=', "48")->first(); 
            
            
            
            $data3m_1=DB::table('table__course__g__students')
                    ->where('id','=', "9")->first();             
                         
            $data3m_2=DB::table('table__course__g__students')
                    ->where('id','=', "10")->first();
               
            $data3m_3=DB::table('table__course__g__students')
                    ->where('id','=', "11")->first();   
            
            $data3m_4=DB::table('table__course__g__students')
                    ->where('id','=', "12")->first();
            
            $data3m_5=DB::table('table__course__g__students')
                    ->where('id','=', "27")->first();
           
            $data3m_6=DB::table('table__course__g__students')
                    ->where('id','=', "28")->first();
            
            $data3m_7=DB::table('table__course__g__students')
                    ->where('id','=', "29")->first();                    
            
            $data3m_8=DB::table('table__course__g__students')
                    ->where('id','=', "45")->first(); 
            
           
            $data4m_1=DB::table('table__course__g__students')
                    ->where('id','=', "14")->first();             
                         
            $data4m_2=DB::table('table__course__g__students')
                    ->where('id','=', "15")->first();
               
            $data4m_3=DB::table('table__course__g__students')
                    ->where('id','=', "17")->first();   
            
            $data4m_4=DB::table('table__course__g__students')
                    ->where('id','=', "18")->first();
            
            $data4m_5=DB::table('table__course__g__students')
                    ->where('id','=', "19")->first();
           
            $data4m_6=DB::table('table__course__g__students')
                    ->where('id','=', "20")->first();
            
            $data4m_7=DB::table('table__course__g__students')
                    ->where('id','=', "21")->first();                    
            
            $data4m_8=DB::table('table__course__g__students')
                    ->where('id','=', "46")->first();
            
     
           
                 $pdf = PDF::loadView('Summery.table_2_sub.Level', compact('items','detail',
                         'data3s_8','data3s_1','data3s_2','data3s_3','data3s_4', 'data3s_5','data3s_6','data3s_7','level3','summary3s','atts_3s',
                         'data2s_8','data2s_1','data2s_2','data2s_3','data2s_4','data2s_5','data2s_6','data2s_7','level2','summary2s', 'atts_2s',
                         'data1s_8','data1s_1','data1s_2','data1s_3','data1s_4','data1s_5','data1s_6','data1s_7','level1','summary1s', 'atts_1s',
                         'data4s_8','data4s_1','data4s_2','data4s_3','data4s_4','data4s_5','data4s_6','data4s_7','level4','summary4s', 'atts_4s',
                          'data1g_8','data1g_1','data1g_2','data1g_3','data1g_4','data1g_5','data1g_6','data1g_7','level5','summary1g', 'atts_1g',
                         'data2g_8','data2g_1','data2g_2','data2g_3','data2g_4','data2g_5','data2g_6','data2g_7','level6','summary2g', 'atts_2g',
                         'data3g_8','data3g_1','data3g_2','data3g_3','data3g_4','data3g_5','data3g_6','data3g_7','level7','summary3g', 'atts_3g',
                         'data3m_8','data3m_1','data3m_2','data3m_3','data3m_4','data3m_5','data3m_6','data3m_7','level8','summary3m', 'atts_3m',
                         'data4m_8','data4m_1','data4m_2','data4m_3','data4m_4','data4m_5','data4m_6','data4m_7','level9','summary4m', 'atts_4m'
                         ))
                         ->setPaper('a4', 'landscape');
                 return $pdf->stream('Summmary.pdf');
                
     }  
     
      public function Backup(Request $request)
     {
             $detail=$request;
             $items = DB::table('precentages')
             ->select('precentage')
             ->where('Level','=', "2S")->first();
             
             $level1 = DB::table('Level')
                    ->where('id','=', "1")->first();             
             $level2 = DB::table('Level')
                    ->where('id','=', "2")->first();
             $level3 = DB::table('Level')
                    ->where('id','=', "3")->first();
             $level4 = DB::table('Level')
                    ->where('id','=', "4")->first();             
             $level5 = DB::table('Level')
                    ->where('id','=', "5")->first();
             $level6 = DB::table('Level')
                    ->where('id','=', "6")->first();
             $level7 = DB::table('Level')
                    ->where('id','=', "7")->first();             
             $level8 = DB::table('Level')
                    ->where('id','=', "8")->first();
             $level9 = DB::table('Level')
                    ->where('id','=', "9")->first();

             
             $atts_1s = DB::table('atts_1s')->first();
                  
             $atts_2s = DB::table('atts')->first();
                 
             $atts_3s = DB::table('atts_3s')->first();
                 
             $atts_4s = DB::table('atts_4s')->first();
                   
             $atts_1g = DB::table('atts_1gs')->first();
                 
             $atts_2g = DB::table('atts_2gs')->first();
             
             $atts_3g = DB::table('atts_3gs')->first();
                    
             $atts_3m = DB::table('atts_3ms')->first();
                   
             $atts_4m = DB::table('atts_4ms')->first();
         
             $summary1s= DB::table('atts_1s')->get();
                    
             $summary2s= DB::table('atts')->get();
                    
             $summary3s= DB::table('atts_3s')->get();
                 
             
             $summary4s= DB::table('atts_4s')->get();
                    
             
             $summary1g= DB::table('atts_1gs')->get();
                    
             $summary2g= DB::table('atts_2gs')->get();
                   
             $summary3g= DB::table('atts_3gs')->get();
                  
             $summary3m= DB::table('atts_3ms')->get();
                   
             $summary4m= DB::table('atts_4ms')->get();
                
            $data1s_1=DB::table('table__course__s__students')
                    ->where('id','=', "45")->first();             
                         
            $data1s_2=DB::table('table__course__s__students')
                    ->where('id','=', "44")->first();
               
            $data1s_3=DB::table('table__course__s__students')
                    ->where('id','=', "43")->first();   
            
            $data1s_4=DB::table('table__course__s__students')
                    ->where('id','=', "42")->first();
            
            $data1s_5=DB::table('table__course__s__students')
                    ->where('id','=', "39")->first();
           
            $data1s_6=DB::table('table__course__s__students')
                    ->where('id','=', "38")->first();
            
            $data1s_7=DB::table('table__course__s__students')
                    ->where('id','=', "37")->first();                    
            
            $data1s_8=DB::table('table__course__s__students')
                    ->where('id','=', "46")->first(); 
             
             
            $data2s_1=DB::table('table__course__s__students')
                    ->where('id','=', "35")->first();
            
            $data2s_2=DB::table('table__course__s__students')
                    ->where('id','=', "31")->first();
               
            $data2s_3=DB::table('table__course__s__students')
                    ->where('id','=', "27")->first();   
            
            $data2s_4=DB::table('table__course__s__students')
                    ->where('id','=', "25")->first();
            
            $data2s_5=DB::table('table__course__s__students')
                    ->where('id','=', "24")->first();
           
            $data2s_6=DB::table('table__course__s__students')
                    ->where('id','=', "23")->first();
            
            $data2s_7=DB::table('table__course__s__students')
                    ->where('id','=', "22")->first();                    
            
            $data2s_8=DB::table('table__course__s__students')
                    ->where('id','=', "21")->first();         
            
 
            $data3s_1=DB::table('table__course__s__students')
                    ->where('id','=', "19")->first();
            
            $data3s_2=DB::table('table__course__s__students')
                    ->where('id','=', "18")->first();
               
            $data3s_3=DB::table('table__course__s__students')
                    ->where('id','=', "17")->first();   
            
            $data3s_4=DB::table('table__course__s__students')
                    ->where('id','=', "16")->first();
            
            $data3s_5=DB::table('table__course__s__students')
                    ->where('id','=', "15")->first();
           
            $data3s_6=DB::table('table__course__s__students')
                    ->where('id','=', "14")->first();
            
            $data3s_7=DB::table('table__course__s__students')
                    ->where('id','=', "13")->first();
            
            $data3s_8=DB::table('table__course__s__students')
                    ->where('id','=', "12")->first();
           
            
            $data4s_1=DB::table('table__course__s__students')
                    ->where('id','=', "11")->first();             
                         
            $data4s_2=DB::table('table__course__s__students')
                    ->where('id','=', "10")->first();
               
            $data4s_3=DB::table('table__course__s__students')
                    ->where('id','=', "9")->first();   
            
            $data4s_4=DB::table('table__course__s__students')
                    ->where('id','=', "8")->first();
            
            $data4s_5=DB::table('table__course__s__students')
                    ->where('id','=', "7")->first();
           
            $data4s_6=DB::table('table__course__s__students')
                    ->where('id','=', "6")->first();
            
            $data4s_7=DB::table('table__course__s__students')
                    ->where('id','=', "5")->first();                    
            
            $data4s_8=DB::table('table__course__s__students')
                    ->where('id','=', "4")->first(); 
            
            
            $data1g_1=DB::table('table__course__g__students')
                    ->where('id','=', "1")->first();             
                         
            $data1g_2=DB::table('table__course__g__students')
                    ->where('id','=', "2")->first();
               
            $data1g_3=DB::table('table__course__g__students')
                    ->where('id','=', "3")->first();   
            
            $data1g_4=DB::table('table__course__g__students')
                    ->where('id','=', "4")->first();
            
            $data1g_5=DB::table('table__course__g__students')
                    ->where('id','=', "30")->first();
           
            $data1g_6=DB::table('table__course__g__students')
                    ->where('id','=', "31")->first();
            
            $data1g_7=DB::table('table__course__g__students')
                    ->where('id','=', "39")->first();                    
            
            $data1g_8=DB::table('table__course__g__students')
                    ->where('id','=', "40")->first(); 
            
            
            
            $data2g_1=DB::table('table__course__g__students')
                    ->where('id','=', "5")->first();             
                         
            $data2g_2=DB::table('table__course__g__students')
                    ->where('id','=', "6")->first();
               
            $data2g_3=DB::table('table__course__g__students')
                    ->where('id','=', "7")->first();   
            
            $data2g_4=DB::table('table__course__g__students')
                    ->where('id','=', "8")->first();
            
            $data2g_5=DB::table('table__course__g__students')
                    ->where('id','=', "33")->first();
           
            $data2g_6=DB::table('table__course__g__students')
                    ->where('id','=', "34")->first();
            
            $data2g_7=DB::table('table__course__g__students')
                    ->where('id','=', "43")->first();                    
            
            $data2g_8=DB::table('table__course__g__students')
                    ->where('id','=', "44")->first(); 
            
            
            
            $data3g_1=DB::table('table__course__g__students')
                    ->where('id','=', "22")->first();             
                         
            $data3g_2=DB::table('table__course__g__students')
                    ->where('id','=', "24")->first();
               
            $data3g_3=DB::table('table__course__g__students')
                    ->where('id','=', "25")->first();   
            
            $data3g_4=DB::table('table__course__g__students')
                    ->where('id','=', "26")->first();
            
            $data3g_5=DB::table('table__course__g__students')
                    ->where('id','=', "36")->first();
           
            $data3g_6=DB::table('table__course__g__students')
                    ->where('id','=', "37")->first();
            
            $data3g_7=DB::table('table__course__g__students')
                    ->where('id','=', "47")->first();                    
            
            $data3g_8=DB::table('table__course__g__students')
                    ->where('id','=', "48")->first(); 
            
            
            
            $data3m_1=DB::table('table__course__g__students')
                    ->where('id','=', "9")->first();             
                         
            $data3m_2=DB::table('table__course__g__students')
                    ->where('id','=', "10")->first();
               
            $data3m_3=DB::table('table__course__g__students')
                    ->where('id','=', "11")->first();   
            
            $data3m_4=DB::table('table__course__g__students')
                    ->where('id','=', "12")->first();
            
            $data3m_5=DB::table('table__course__g__students')
                    ->where('id','=', "27")->first();
           
            $data3m_6=DB::table('table__course__g__students')
                    ->where('id','=', "28")->first();
            
            $data3m_7=DB::table('table__course__g__students')
                    ->where('id','=', "29")->first();                    
            
            $data3m_8=DB::table('table__course__g__students')
                    ->where('id','=', "45")->first(); 
            
           
            $data4m_1=DB::table('table__course__g__students')
                    ->where('id','=', "14")->first();             
                         
            $data4m_2=DB::table('table__course__g__students')
                    ->where('id','=', "15")->first();
               
            $data4m_3=DB::table('table__course__g__students')
                    ->where('id','=', "17")->first();   
            
            $data4m_4=DB::table('table__course__g__students')
                    ->where('id','=', "18")->first();
            
            $data4m_5=DB::table('table__course__g__students')
                    ->where('id','=', "19")->first();
           
            $data4m_6=DB::table('table__course__g__students')
                    ->where('id','=', "20")->first();
            
            $data4m_7=DB::table('table__course__g__students')
                    ->where('id','=', "21")->first();                    
            
            $data4m_8=DB::table('table__course__g__students')
                    ->where('id','=', "46")->first();
            
     
           
                 $pdf = PDF::loadView('BackUp.table_2.Level2', compact('items','detail',
                         'data3s_8','data3s_1','data3s_2','data3s_3','data3s_4', 'data3s_5','data3s_6','data3s_7','level3','summary3s','atts_3s',
                         'data2s_8','data2s_1','data2s_2','data2s_3','data2s_4','data2s_5','data2s_6','data2s_7','level2','summary2s', 'atts_2s',
                         'data1s_8','data1s_1','data1s_2','data1s_3','data1s_4','data1s_5','data1s_6','data1s_7','level1','summary1s', 'atts_1s',
                         'data4s_8','data4s_1','data4s_2','data4s_3','data4s_4','data4s_5','data4s_6','data4s_7','level4','summary4s', 'atts_4s',
                          'data1g_8','data1g_1','data1g_2','data1g_3','data1g_4','data1g_5','data1g_6','data1g_7','level5','summary1g', 'atts_1g',
                         'data2g_8','data2g_1','data2g_2','data2g_3','data2g_4','data2g_5','data2g_6','data2g_7','level6','summary2g', 'atts_2g',
                         'data3g_8','data3g_1','data3g_2','data3g_3','data3g_4','data3g_5','data3g_6','data3g_7','level7','summary3g', 'atts_3g',
                         'data3m_8','data3m_1','data3m_2','data3m_3','data3m_4','data3m_5','data3m_6','data3m_7','level8','summary3m', 'atts_3m',
                         'data4m_8','data4m_1','data4m_2','data4m_3','data4m_4','data4m_5','data4m_6','data4m_7','level9','summary4m', 'atts_4m'
                         ))
                         ->setPaper('a4', 'landscape');
                         return $pdf->stream('Backup.pdf');
       
     }
 }
 
 