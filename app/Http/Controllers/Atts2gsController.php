<?php

namespace App\Http\Controllers;

use App\Models\atts_2gs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\table__course__g__student;
use Exception;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\url;
use PDF;

class Atts2gsController extends Controller
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
            $atts2gsObjects = atts_2gs::where('name', 'LIKE', "%$keyword%")
                ->orWhere('Reg_No', 'LIKE', "%$keyword%")
            
                ->latest()->paginate(100);
        } else
        {
              $atts2gsObjects = atts_2gs::paginate(25);
        }

           return view('atts_2gs.index', compact('atts2gsObjects','level','level1','level2','level3','level4'));
    }
  

   
    public function create()
    {
        
        
        return view('atts_2gs.create');
    }

  
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            atts_2gs::create($data);

            return redirect()->route('atts_2gs.atts_2gs.index')
                             ->with('success_message', 'Student data was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

   
    public function show($id)
    {
        $atts2gs = atts_2gs::findOrFail($id);

        return view('atts_2gs.show', compact('atts2gs'));
    }

   
    public function edit($id)
    {
        $atts2gs = atts_2gs::findOrFail($id);
        

        return view('atts_2gs.edit', compact('atts2gs'));
    }

   
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $atts2gs = atts_2gs::findOrFail($id);
            $atts2gs->update($data);

            return redirect()->route('atts_2gs.atts_2gs.index')
                             ->with('success_message', 'Student data was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

  
    public function destroy($id)
    {
        try {
            $atts2gs = atts_2gs::findOrFail($id);
            $atts2gs->delete();

            return redirect()->route('atts_2gs.atts_2gs.index')
                             ->with('success_message', 'Student data was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
    
        public function attendance_mark($id)
                
    {
        $atts =  atts_2gs::paginate(11);
        $data = table__course__g__student::findOrFail($id);
        if($id==5){
              return view('subject table_6_mark6.subject1', compact('atts','data'));
             }
        if($id==6){
              return view('subject table_6_mark6.subject2', compact('atts','data'));
             }
        if($id==7){
              return view('subject table_6_mark6.subject3', compact('atts','data'));
             } 
        if($id==8){
               return view('subject table_6_mark6.subject4', compact('atts','data'));
             }
        if($id==33){
               return view('subject table_6_mark6.subject5', compact('atts','data'));
             }
               if($id==34){
               return view('subject table_6_mark6.subject6', compact('atts','data'));
             } 
    }
    
     //function for mark attendance for subject1
    public function edit1($id)
    {        
        $att = atts_2gs::findOrFail($id);    
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
        $att = atts_2gs::findOrFail($id);    
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
        $att = atts_2gs::findOrFail($id);    
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
        $att = atts_2gs::findOrFail($id);    
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
        $att = atts_2gs::findOrFail($id);    
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
        $att = atts_2gs::findOrFail($id);    
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
    
    // function change precentage with hours for subject1
    public function store1(Request $request,$id)
   {   
    try{
             if($id==5){
            DB::table('atts_2gs')-> update(['hours'=>$request->name]); 
            
            DB::table('atts_2gs')->update(['nooflectures' => DB::raw('nooflectures +  hours')]);
           
            DB::table('atts_2gs')->where('attend_mark', '0')->update(['lectureattend' => DB::raw('lectureattend + hours')]);
        
            DB::table('atts_2gs')->update(['attend_mark' =>'0']);
             }
             
               
             if($id==6){
               DB::table('atts_2gs')-> update(['hours1'=>$request->name]); 
           
            DB::table('atts_2gs')->update(['nooflectures1' => DB::raw('nooflectures1 +  hours1')]);
        
            DB::table('atts_2gs')->where('attend_mark1', '0')->update(['lectureattend1' => DB::raw('lectureattend1 + hours1')]);
        
            DB::table('atts_2gs')->update(['attend_mark1' =>'0']);
             }
             
             if($id==7){
               DB::table('atts_2gs')-> update(['hours2'=>$request->name]); 
           
            DB::table('atts_2gs')->update(['nooflectures2' => DB::raw('nooflectures2 +  hours2')]);
        
            DB::table('atts_2gs')->where('attend_mark2', '0')->update(['lectureattend2' => DB::raw('lectureattend2 + hours2')]);
        
            DB::table('atts_2gs')->update(['attend_mark2' =>'0']);
             }
               
            if($id==8){
             DB::table('atts_2gs')-> update(['hours3'=>$request->name]); 
           
            DB::table('atts_2gs')->update(['nooflectures3' => DB::raw('nooflectures3 +  hours3')]);
        
            DB::table('atts_2gs')->where('attend_mark3', '0')->update(['lectureattend3' => DB::raw('lectureattend3 + hours3')]);
        
            DB::table('atts_2gs')->update(['attend_mark3' =>'0']);
             }
            
                 
             if($id==33){
             DB::table('atts_2gs')-> update(['hours4'=>$request->name]); 
           
            DB::table('atts_2gs')->update(['nooflectures4' => DB::raw('nooflectures4 +  hours4')]);
        
            DB::table('atts_2gs')->where('attend_mark4', '0')->update(['lectureattend4' => DB::raw('lectureattend4 + hours4')]);
        
            DB::table('atts_2gs')->update(['attend_mark4' =>'0']);
             }
            
                    
            if($id==34){
             DB::table('atts_2gs')-> update(['hours5'=>$request->name]); 
           
            DB::table('atts_2gs')->update(['nooflectures5' => DB::raw('nooflectures5 +  hours5')]);
        
            DB::table('atts_2gs')->where('attend_mark5', '0')->update(['lectureattend5' => DB::raw('lectureattend5 + hours5')]);
        
            DB::table('atts_2gs')->update(['attend_mark5' =>'0']);
             }
                return redirect::to(url::previous())
            ->with('success_message', 'Attendance Sheet successfully added!');   
                 
             
        } catch (Exception $exception) {
                return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
   
  
    
     public function view($id,Request $request)
    {
        $atts = atts_2gs::paginate(100);
        $SingleData = atts_2gs::findOrFail(1);
            
        $keyword = $request->get('search');
            
        $items = DB::table('precentages')
            ->select('precentage')
            ->where('Level','=', "2S")->first();
        
        $data = table__course__g__student::findOrFail($id);
        
        
                
        if (!empty($keyword)) {
                 $atts = atts_2gs::where('Reg_NO', 'LIKE', "%$keyword%")
                ->orWhere('Name', 'LIKE', "%$keyword%")  
                ->latest()->paginate(300);
        }
        else {
           $atts = atts_2gs::paginate(100);
        }
        
             if($id==5){
             return view('subject table_6_view.Subject1', compact('atts','items','data', 'SingleData'));
             }
             if($id==6){
             return view('subject table_6_view.Subject2', compact('atts','items','data','SingleData'));
             }
              if($id==7){
             return view('subject table_6_view.Subject3', compact('atts','items','data','SingleData'));
             }
              if($id==8){
             return view('subject table_6_view.Subject4', compact('atts','items','data','SingleData'));
             }
              if($id==33){
             return view('subject table_6_view.Subject5', compact('atts','items','data','SingleData'));
             }
              if($id==34){
             return view('subject table_6_view.Subject6', compact('atts','items','data','SingleData'));
             }
    }
    
      public function Subject_Level()
    {     
            $atts = atts_2gs::paginate(100);
            $items = DB::table('precentages')
             ->select('precentage')
             ->where('Level','=', "2S")->first();
            
            $data=DB::table('table__course__g__students')
                    ->where('id','=', "5")->first();
            
            $data1=DB::table('table__course__g__students')
                    ->where('id','=', "6")->first();
               
            $data2=DB::table('table__course__g__students')
                    ->where('id','=', "7")->first();   
            
            $data3=DB::table('table__course__g__students')
                    ->where('id','=', "8")->first();
            
            $data4=DB::table('table__course__g__students')
                    ->where('id','=', "33")->first();   
            
            $data5=DB::table('table__course__g__students')
                    ->where('id','=', "34")->first();
            
             $level1 = DB::table('Level')
                    ->where('id','=', "6")->first();
             
            $SingleData = atts_2gs::findOrFail(1);
        
            
                 $pdf = PDF::loadView('Summery.table_5_sub.Level', compact('atts','items','SingleData','data','data1','data2','data3','data4','data5','data6','data7','level1'));
                 return $pdf->download('Summmary Level.pdf');
     }  
     
         public function Backup()
     {
        $atts = atts_2gs::paginate(100);
        $items = DB::table('precentages')
         ->select('precentage')
         ->where('Level','=', "2s")->first();
        
        $data=DB::table('table__course__g__students')
                ->where('id','=', "5")->first();
        
        $data1=DB::table('table__course__g__students')
                ->where('id','=', "6")->first();
           
        $data2=DB::table('table__course__g__students')
                ->where('id','=', "7")->first();   
        
        $data3=DB::table('table__course__g__students')
                ->where('id','=', "8")->first();
        
       $data4=DB::table('table__course__g__students')
                    ->where('id','=', "33")->first();   
            
            $data5=DB::table('table__course__g__students')
                    ->where('id','=', "34")->first();
             
             
           $leve = DB::table('Level')
                    ->where('id','=', "6")->first();
        
        
        $SingleData = atts_2gs::findOrFail(1);   
       
        
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
           
            
             return view('Reset_Table/Update_Semester5', compact('tableCourseSStudentsObjects','items','level','level1','level2','level3','level4'));
    }
 
  
    protected function getData(Request $request)
    {
        $rules = [
            'Reg_No' => 'required|string|min:1|max:20',
            'name' => 'required|string|min:1|max:60',
       
        ];

        
        $data = $request->validate($rules);


        $data['attend_mark'] = $request->has('attend_mark');
        $data['attend_mark1'] = $request->has('attend_mark1');
        $data['attend_mark2'] = $request->has('attend_mark2');
        $data['attend_mark3'] = $request->has('attend_mark3');
        $data['attend_mark4'] = $request->has('attend_mark4');
        $data['attend_mark5'] = $request->has('attend_mark5');
        $data['attend_mark6'] = $request->has('attend_mark6');
        $data['attend_mark7'] = $request->has('attend_mark7');


        return $data;
    }

}
