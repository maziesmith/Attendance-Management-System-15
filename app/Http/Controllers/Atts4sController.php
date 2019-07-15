<?php

namespace App\Http\Controllers;
use App\Models\atts_4s;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use DB;

class Atts4sController extends Controller
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
           $atts4sObjects = atts_4s::where('name', 'LIKE', "%$keyword%")
                ->orWhere('Reg_No', 'LIKE', "%$keyword%")
                ->paginate(100);
        } else {
            $atts4sObjects = atts_4s::paginate(25);
        }

        return view('atts_4s.index', compact('atts4sObjects','level','level1','level2','level3'));
    }
       



   
    public function create()
    {
        
        
        return view('atts_4s.create');
    }

 
    public function store(Request $request)
    {
       
           $data = $this->getData($request);
            
            atts_4s::create($data);

            return redirect()->route('atts_4s.atts_4s.index')
                             ->with('success_message', 'Student data was successfully added!');

           
       
    }


    public function show($id)
    {
        $atts4s = atts_4s::findOrFail($id);

        return view('atts_4s.show', compact('atts4s'));
    }

    public function edit($id)
    {
        $atts4s = atts_4s::findOrFail($id);
        

        return view('atts_4s.edit', compact('atts4s'));
    }

    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $atts4s = atts_4s::findOrFail($id);
            $atts4s->update($data);

            return redirect()->route('atts_4s.atts_4s.index')
                             ->with('success_message', 'Student data successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    public function destroy($id)
    {
        try {
            $atts4s = atts_4s::findOrFail($id);
            $atts4s->delete();

            return redirect()->route('atts_4s.atts_4s.index')
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
