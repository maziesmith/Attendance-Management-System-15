<?php

namespace App\Http\Controllers;

use App\Models\atts_3gs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\table__course__g__student;
use Exception;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\url;
use PDF;

class Atts3gsController extends Controller
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
            $atts3gsObjects = atts_3gs::where('name', 'LIKE', "%$keyword%")
                ->orWhere('Reg_No', 'LIKE', "%$keyword%")
            
                ->latest()->paginate(100);
        } else
        {
           $atts3gsObjects = atts_3gs::paginate(25);
        }

           return view('atts_3gs.index', compact('atts3gsObjects','level','level1','level2','level3','level4'));
    }

  

    public function create()
    {
        
        
        return view('atts_3gs.create');
    }

 
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            atts_3gs::create($data);

            return redirect()->route('atts_3gs.atts_3gs.index')
                             ->with('success_message', 'Student data was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

   
    public function show($id)
    {
        $atts3gs = atts_3gs::findOrFail($id);

        return view('atts_3gs.show', compact('atts3gs'));
    }

   
    public function edit($id)
    {
        $atts3gs = atts_3gs::findOrFail($id);
        

        return view('atts_3gs.edit', compact('atts3gs'));
    }

   
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $atts3gs = atts_3gs::findOrFail($id);
            $atts3gs->update($data);

            return redirect()->route('atts_3gs.atts_3gs.index')
                             ->with('success_message', 'Student data was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    public function destroy($id)
    {
        try {
            $atts3gs = atts_3gs::findOrFail($id);
            $atts3gs->delete();

            return redirect()->route('atts_3gs.atts_3gs.index')
                             ->with('success_message', 'Student data was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
    
      public function view($id,Request $request)
    {
        $atts = atts_3gs::paginate(100);
        $SingleData = atts_3gs::findOrFail(1);
            
        $keyword = $request->get('search');
            
        $items = DB::table('precentages')
            ->select('precentage')
            ->where('Level','=', "2S")->first();
        
        $data = table__course__g__student::findOrFail($id);
        
        
                
        if (!empty($keyword)) {
                 $atts = atts_3gs::where('Reg_NO', 'LIKE', "%$keyword%")
                ->orWhere('Name', 'LIKE', "%$keyword%")  
                ->latest()->paginate(300);
        }
        else {
           $atts = atts_3gs::paginate(100);
        }
        
             if($id==22){
             return view('subject table_7_view.Subject1', compact('atts','items','data', 'SingleData'));
             }
             if($id==24){
             return view('subject table_7_view.Subject2', compact('atts','items','data','SingleData'));
             }
              if($id==25){
             return view('subject table_7_view.Subject3', compact('atts','items','data','SingleData'));
             }
              if($id==26){
             return view('subject table_7_view.Subject4', compact('atts','items','data','SingleData'));
             }
              if($id==36){
             return view('subject table_7_view.Subject5', compact('atts','items','data','SingleData'));
             }
              if($id==37){
             return view('subject table_7_view.Subject6', compact('atts','items','data','SingleData'));
             }
             
             
    }
    
    
        public function attendance_mark($id)
                
    {
        $atts =  atts_3gs::paginate(11);
        $data = table__course__g__student::findOrFail($id);
        if($id==22){
              return view('subject table_7_mark7.subject1', compact('atts','data'));
             }
        if($id==24){
              return view('subject table_7_mark7.subject2', compact('atts','data'));
             }
        if($id==25){
              return view('subject table_7_mark7.subject3', compact('atts','data'));
             } 
        if($id==26){
               return view('subject table_7_mark7.subject4', compact('atts','data'));
             }
        if($id==36){
              return view('subject table_7_mark7.subject5', compact('atts','data'));
             }
        if($id==37){
              return view('subject table_7_mark7.subject6', compact('atts','data'));
             } 
             
             
    }    
   
    
     //function for mark attendance for subject1
    public function edit1($id)
    {        
        $att = atts_3gs::findOrFail($id);    
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
        $att = atts_3gs::findOrFail($id);    
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
        $att = atts_3gs::findOrFail($id);    
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
        $att = atts_3gs::findOrFail($id);    
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
        $att = atts_3gs::findOrFail($id);    
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
        $att = atts_3gs::findOrFail($id);    
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
        $att = atts_3gs::findOrFail($id);    
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
             if($id==22){
            DB::table('atts_3gs')-> update(['hours'=>$request->name]); 
            
            DB::table('atts_3gs')->update(['nooflectures' => DB::raw('nooflectures +  hours')]);
           
            DB::table('atts_3gs')->where('attend_mark', '0')->update(['lectureattend' => DB::raw('lectureattend + hours')]);
        
            DB::table('atts_3gs')->update(['attend_mark' =>'0']);
             }
             
               
             if($id==24){
               DB::table('atts_3gs')-> update(['hours1'=>$request->name]); 
           
            DB::table('atts_3gs')->update(['nooflectures1' => DB::raw('nooflectures1 +  hours1')]);
        
            DB::table('atts_3gs')->where('attend_mark1', '0')->update(['lectureattend1' => DB::raw('lectureattend1 + hours1')]);
        
            DB::table('atts_3gs')->update(['attend_mark1' =>'0']);
             }
             
             if($id==25){
               DB::table('atts_3gs')-> update(['hours2'=>$request->name]); 
           
            DB::table('atts_3gs')->update(['nooflectures2' => DB::raw('nooflectures2 +  hours2')]);
        
            DB::table('atts_3gs')->where('attend_mark2', '0')->update(['lectureattend2' => DB::raw('lectureattend2 + hours2')]);
        
            DB::table('atts_3gs')->update(['attend_mark2' =>'0']);
             }
               
            if($id==26){
             DB::table('atts_3gs')-> update(['hours3'=>$request->name]); 
           
            DB::table('atts_3gs')->update(['nooflectures3' => DB::raw('nooflectures3 +  hours3')]);
        
            DB::table('atts_3gs')->where('attend_mark3', '0')->update(['lectureattend3' => DB::raw('lectureattend3 + hours3')]);
        
            DB::table('atts_3gs')->update(['attend_mark3' =>'0']);
             }
                
             
            if($id==36){
            DB::table('atts_3gs')-> update(['hours4'=>$request->name]); 
           
            DB::table('atts_3gs')->update(['nooflectures4' => DB::raw('nooflectures4 +  hours4')]);
        
            DB::table('atts_3gs')->where('attend_mark4', '0')->update(['lectureattend4' => DB::raw('lectureattend4 + hours4')]);
        
            DB::table('atts_3gs')->update(['attend_mark4' =>'0']);
             }
                
             
            if($id==37){
            DB::table('atts_3gs')-> update(['hours5'=>$request->name]); 
           
            DB::table('atts_3gs')->update(['nooflectures5' => DB::raw('nooflectures5 +  hours5')]);
        
            DB::table('atts_3gs')->where('attend_mark5', '0')->update(['lectureattend5' => DB::raw('lectureattend5 + hours5')]);
        
            DB::table('atts_3gs')->update(['attend_mark5' =>'0']);
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
            $atts = atts_3gs::paginate(100);
            $items = DB::table('precentages')
             ->select('precentage')
             ->where('Level','=', "2S")->first();
            
            $data=DB::table('table__course__g__students')
                    ->where('id','=', "22")->first();
            
            $data1=DB::table('table__course__g__students')
                    ->where('id','=', "24")->first();
               
            $data2=DB::table('table__course__g__students')
                    ->where('id','=', "25")->first();   
            
            $data3=DB::table('table__course__g__students')
                    ->where('id','=', "26")->first();
            
             $data4=DB::table('table__course__g__students')
                    ->where('id','=', "36")->first();
            
              $data5=DB::table('table__course__g__students')
                    ->where('id','=', "37")->first();
            
               $data6=DB::table('table__course__g__students')
                    ->where('id','=', "38")->first();
            
            
             $level1 = DB::table('Level')
                    ->where('id','=', "7")->first();
             
            $SingleData = atts_3gs::findOrFail(1);
        
            
                 $pdf = PDF::loadView('Summery.table_5_sub.Level', compact('atts','items','SingleData','data','data1','data2','data3','data4','data5','data6','data7','level1'));
                 return $pdf->download('Summmary Level.pdf');
     }  
     
         public function Backup()
     {
        $atts = atts_3gs::paginate(100);
        $items = DB::table('precentages')
         ->select('precentage')
         ->where('Level','=', "2s")->first();
        
        $data=DB::table('table__course__g__students')
                ->where('id','=', "22")->first();
        
        $data1=DB::table('table__course__g__students')
                ->where('id','=', "24")->first();
           
        $data2=DB::table('table__course__g__students')
                ->where('id','=', "25")->first();   
        
        $data3=DB::table('table__course__g__students')
                ->where('id','=', "26")->first();
        
        $data4=DB::table('table__course__g__students')
                ->where('id','=', "36")->first();
       
         $data5=DB::table('table__course__g__students')
                ->where('id','=', "37")->first();
       
          $data6=DB::table('table__course__g__students')
                ->where('id','=', "38")->first();
       
             
             
           $leve = DB::table('Level')
                    ->where('id','=', "7")->first();
        
        
        $SingleData = atts_3gs::findOrFail(1);   
       
        
        $pdf = PDF::loadView('BackUp.table_2.Level9', compact('atts','items','SingleData','data',
                'data1','data2','data3','data4','data5','data6','data7','leve'))
                ->download('BackUP Level.pdf');
        return view('BackUp.table_2.Level9',compact('atts','items','data','data1','data2',
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
         
          $tableCourseSStudentsObjects = table__course__g__student::where('Level', '=', "2g") ->latest()->paginate(60);

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
           
            
            
             return view('Reset_Table/Update_Semester6', compact('tableCourseSStudentsObjects','items','level','level1','level2','level3','level4'));
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
