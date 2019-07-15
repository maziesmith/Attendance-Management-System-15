<?php

namespace App\Http\Controllers;

use App\Models\atts_1s;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use DB;

class Atts1sController extends Controller
{

    public function index(Request $request)
    {   
          $level = DB::table('Level')
          ->where('id','=', "1")->first();
           
          $level1 = DB::table('Level')
         ->where('id','=', "2")->first();
          
          $level2 = DB::table('Level')
         ->where('id','=', "3")->first();
          
          $level3 = DB::table('Level')
          ->where('id','=', "4")->first();

        
        $keyword = $request->get('search');
       
        if (!empty($keyword)) {
            $atts1sObjects = atts_1s::where('name', 'LIKE', "%$keyword%")
                ->orWhere('Reg_No', 'LIKE', "%$keyword%")
                ->latest()->paginate(100);
        } else 
        {   
            $atts1sObjects = atts_1s::paginate(25);   
        }

         return view('atts_1s.index', compact('atts1sObjects','level','level1','level2','level3'));
    }

    
    public function create()
    {

        return view('atts_1s.create');
    }

  
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            atts_1s::create($data);

            return redirect()->route('atts_1s.atts_1s.index')
                             ->with('success_message', 'Student data was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

   
    public function show($id)
    {
        $atts1s = atts_1s::findOrFail($id);

        return view('atts_1s.show', compact('atts1s'));
    }

  
    public function edit($id)
    {
        $atts1s = atts_1s::findOrFail($id);
        

        return view('atts_1s.edit', compact('atts1s'));
    }

   
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $atts1s = atts_1s::findOrFail($id);
            $atts1s->update($data);
                 return redirect()->route('atts_1s.atts_1s.index')
                             ->with('success_message', 'Student data was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    
    public function destroy($id)
    {
        try {
            $atts1s = atts_1s::findOrFail($id);
            $atts1s->delete();

            return redirect()->route('atts_1s.atts_1s.index')
                             ->with('success_message', 'Student data was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
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
