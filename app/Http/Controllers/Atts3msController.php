<?php

namespace App\Http\Controllers;

use App\Models\atts_3ms;
use Illuminate\Http\Request;
use App\Models\table__course__g__student;
use App\Http\Controllers\Controller;
use Exception;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\url;
use PDF;

class Atts3msController extends Controller
{
       public function index(Request $request)
    {
            $level = DB::table('Level')
          ->where('id','=', "5")->first();
           
          $level1 = DB::table('Level')
         ->where('id','=', "6")->first();
          
          $level2 = DB::table('Level')
         ->where('id','=', "7")->first();
          
          $level3 = DB::table('Level')
          ->where('id','=', "8")->first();

          $level4 = DB::table('Level')
          ->where('id','=', "9")->first();



         $keyword = $request->get('search');
       
        if (!empty($keyword)) {
            $atts3msObjects = atts_3ms::where('name', 'LIKE', "%$keyword%")
                ->orWhere('Reg_No', 'LIKE', "%$keyword%")
            
                ->latest()->paginate(100);
        } else
        {
          $atts3msObjects = atts_3ms::paginate(25);
        }

         return view('atts_3ms.index', compact('atts3msObjects','level','level1','level2','level3','level4'));
    }

  

    public function create()
    {

        return view('atts_3ms.create');
    }

    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            atts_3ms::create($data);

            return redirect()->route('atts_3ms.atts_3ms.index')
                             ->with('success_message', 'Student data was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }


    public function show($id)
    {
        $atts3ms = atts_3ms::findOrFail($id);

        return view('atts_3ms.show', compact('atts3ms'));
    }

    public function edit($id)
    {
        $atts3ms = atts_3ms::findOrFail($id);
        

        return view('atts_3ms.edit', compact('atts3ms'));
    }

    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $atts3ms = atts_3ms::findOrFail($id);
            $atts3ms->update($data);

            return redirect()->route('atts_3ms.atts_3ms.index')
                             ->with('success_message', 'Student data was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    
    public function destroy($id)
    {
        try {
            $atts3ms = atts_3ms::findOrFail($id);
            $atts3ms->delete();

            return redirect()->route('atts_3ms.atts_3ms.index')
                             ->with('success_message', 'Student data was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

     public function view($id,Request $request)
    {
        $atts = atts_3ms::paginate(100);
        $SingleData = atts_3ms::findOrFail(1);
            
        $keyword = $request->get('search');
            
        $items = DB::table('precentages')
            ->select('precentage')
            ->where('Level','=', "2S")->first();
        
        $data = table__course__g__student::findOrFail($id);
        
        
                
        if (!empty($keyword)) {
                 $atts = atts_3ms::where('Reg_NO', 'LIKE', "%$keyword%")
                ->orWhere('Name', 'LIKE', "%$keyword%")  
                ->latest()->paginate(300);
        }
        else {
           $atts = atts_3ms::paginate(100);
        }
        
             if($id==9){
             return view('subject table_8_view.Subject1', compact('atts','items','data', 'SingleData'));
             }
             if($id==10){
             return view('subject table_8_view.Subject2', compact('atts','items','data','SingleData'));
             }
              if($id==11){
             return view('subject table_8_view.Subject3', compact('atts','items','data','SingleData'));
             }
              if($id==12){
             return view('subject table_8_view.Subject4', compact('atts','items','data','SingleData'));
             }
              if($id==27){
             return view('subject table_8_view.Subject5', compact('atts','items','data','SingleData'));
             }
             
              if($id==28){
             return view('subject table_8_view.Subject6', compact('atts','items','data','SingleData'));
             }
              if($id==29){
             return view('subject table_8_view.Subject7', compact('atts','items','data','SingleData'));
             }
    }
  
    
        public function attendance_mark($id)
                
    {
        $atts =  atts_3ms::paginate(11);
        $data = table__course__g__student::findOrFail($id);
        if($id==9){
              return view('subject table_8_mark8.subject1', compact('atts','data'));
             }
        if($id==10){
              return view('subject table_8_mark8.subject2', compact('atts','data'));
             }
        if($id==11){
              return view('subject table_8_mark8.subject3', compact('atts','data'));
             } 
        if($id==12){
               return view('subject table_8_mark8.subject4', compact('atts','data'));
             }
         if($id==27){
               return view('subject table_8_mark8.subject5', compact('atts','data'));
             }
          if($id==28){
               return view('subject table_8_mark8.subject6', compact('atts','data'));
             }
              if($id==29){
               return view('subject table_8_mark8.subject7', compact('atts','data'));
             }
    }    
   
    
     //function for mark attendance for subject1
    public function edit1($id)
    {        
        $att = atts_3ms::findOrFail($id);    
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
    public function edit2($id)
    {
        $att = atts_3ms::findOrFail($id);    
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
    public function edit3($id)
    {        
        $att = atts_3ms::findOrFail($id);    
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
    public function edit4($id)
    {        
        $att = atts_3ms::findOrFail($id);    
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
    
     public function edit5($id)
    {        
        $att = atts_3ms::findOrFail($id);    
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
    
     public function edit6($id)
    {        
        $att = atts_3ms::findOrFail($id);    
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
     public function edit7($id)
    {        
        $att = atts_3ms::findOrFail($id);    
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
    
    // function change precentage with hours for subject1
    public function store1(Request $request,$id)
   {   
    try{
             if($id==9){
            DB::table('atts_3ms')-> update(['hours'=>$request->name]); 
            
            DB::table('atts_3ms')->update(['nooflectures' => DB::raw('nooflectures +  hours')]);
           
            DB::table('atts_3ms')->where('attend_mark', '0')->update(['lectureattend' => DB::raw('lectureattend + hours')]);
        
            DB::table('atts_3ms')->update(['attend_mark' =>'0']);
             }
             
               
             if($id==10){
               DB::table('atts_3ms')-> update(['hours1'=>$request->name]); 
           
            DB::table('atts_3ms')->update(['nooflectures1' => DB::raw('nooflectures1 +  hours1')]);
        
            DB::table('atts_3ms')->where('attend_mark1', '0')->update(['lectureattend1' => DB::raw('lectureattend1 + hours1')]);
        
            DB::table('atts_3ms')->update(['attend_mark1' =>'0']);
             }
             
             if($id==11){
               DB::table('atts_3ms')-> update(['hours2'=>$request->name]); 
           
            DB::table('atts_3ms')->update(['nooflectures2' => DB::raw('nooflectures2 +  hours2')]);
        
            DB::table('atts_3ms')->where('attend_mark2', '0')->update(['lectureattend2' => DB::raw('lectureattend2 + hours2')]);
        
            DB::table('atts_3ms')->update(['attend_mark2' =>'0']);
             }
               
            if($id==12){
             DB::table('atts_3ms')-> update(['hours3'=>$request->name]); 
           
            DB::table('atts_3ms')->update(['nooflectures3' => DB::raw('nooflectures3 +  hours3')]);
        
            DB::table('atts_3ms')->where('attend_mark3', '0')->update(['lectureattend3' => DB::raw('lectureattend3 + hours3')]);
        
            DB::table('atts_3ms')->update(['attend_mark3' =>'0']);
             }
              
    
    
            if($id==27){
             DB::table('atts_3ms')-> update(['hours4'=>$request->name]); 
           
            DB::table('atts_3ms')->update(['nooflectures4' => DB::raw('nooflectures4 +  hours4')]);
        
            DB::table('atts_3ms')->where('attend_mark4', '0')->update(['lectureattend4' => DB::raw('lectureattend4 + hours4')]);
        
            DB::table('atts_3ms')->update(['attend_mark4' =>'0']);
             }
              
                
            if($id==28){
             DB::table('atts_3ms')-> update(['hours5'=>$request->name]); 
           
            DB::table('atts_3ms')->update(['nooflectures5' => DB::raw('nooflectures5 +  hours5')]);
        
            DB::table('atts_3ms')->where('attend_mark5', '0')->update(['lectureattend5' => DB::raw('lectureattend5 + hours5')]);
        
            DB::table('atts_3ms')->update(['attend_mark5' =>'0']);
             }
               
                
            if($id==29){
             DB::table('atts_3ms')-> update(['hours6'=>$request->name]); 
           
            DB::table('atts_3ms')->update(['nooflectures6' => DB::raw('nooflectures6 +  hours6')]);
        
            DB::table('atts_3ms')->where('attend_mark6', '0')->update(['lectureattend6' => DB::raw('lectureattend6 + hours6')]);
        
            DB::table('atts_3ms')->update(['attend_mark6' =>'0']);
             }
                return redirect::to(url::previous())
            ->with('success_message', 'Attendance Sheet successfully added!');      
                
                
                 
             
             
        } catch (Exception $exception) {
                return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
    
     public function Subject_Level()
    {     
            $atts = atts_3ms::paginate(100);
            $items = DB::table('precentages')
             ->select('precentage')
             ->where('Level','=', "2S")->first();
            
            $data=DB::table('table__course__g__students')
                    ->where('id','=', "9")->first();
            
            $data1=DB::table('table__course__g__students')
                    ->where('id','=', "10")->first();
               
            $data2=DB::table('table__course__g__students')
                    ->where('id','=', "11")->first();   
            
            $data3=DB::table('table__course__g__students')
                    ->where('id','=', "12")->first();
            
            $data4=DB::table('table__course__g__students')
                    ->where('id','=', "27")->first();
           
            $data5=DB::table('table__course__g__students')
                    ->where('id','=', "28")->first();
            
            $data6=DB::table('table__course__g__students')
                    ->where('id','=', "29")->first();
            
             $level1 = DB::table('Level')
                    ->where('id','=', "8")->first();
             
            $SingleData = atts_3ms::findOrFail(1);
        
            
                 $pdf = PDF::loadView('Summery.table_6_sub.Level', compact('atts','items','SingleData','data','data1','data2','data3','data4','data5','data6','data7','level1'));
                 return $pdf->download('Summmary Level.pdf');
     }  
    
       public function Backup()
     {
        $atts = atts_3ms::paginate(100);
        $items = DB::table('precentages')
         ->select('precentage')
         ->where('Level','=', "2s")->first();
        
        $data=DB::table('table__course__g__students')
                ->where('id','=', "9")->first();
        
        $data1=DB::table('table__course__g__students')
                ->where('id','=', "10")->first();
           
        $data2=DB::table('table__course__g__students')
                ->where('id','=', "11")->first();   
        
        $data3=DB::table('table__course__g__students')
                ->where('id','=', "12")->first();
        
          $data4=DB::table('table__course__g__students')
                    ->where('id','=', "27")->first();
           
            $data5=DB::table('table__course__g__students')
                    ->where('id','=', "28")->first();
            
            $data6=DB::table('table__course__g__students')
                    ->where('id','=', "29")->first();
               
             
           $leve = DB::table('Level')
                    ->where('id','=', "8")->first();
        
        
        $SingleData = atts_3ms::findOrFail(1);   
       
        
        $pdf = PDF::loadView('BackUp.table_2.Level2', compact('atts','items','SingleData','data',
                'data1','data2','data3','data4','data5','data6','data7','leve'))
                ->download('BackUP Level.pdf');
        return view('BackUp.table_2.Level2',compact('atts','items','data','data1','data2',
                'data3','data4','data5','data6','data7','SingleData','leve'));
     }
     
        public function reset1()
    {
        $level = DB::table('Level')
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
         
          $tableCourseSStudentsObjects = table__course__g__student::where('Level', '=', "3m") ->latest()->paginate(60);

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
           
             
           
             return view('Reset_Table/Update_Semester7', compact('tableCourseSStudentsObjects','items','level','level1','level2','level3','level4'));
    }
 
  
    
    protected function getData(Request $request)
    {
        $rules = [
            'Reg_No' => 'required|string|min:1|max:20',
            'name' => 'required|string|min:1|max:60',
            
        ];

        
        $data = $request->validate($rules);


      
        return $data;
    }

}
