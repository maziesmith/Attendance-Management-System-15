<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Table_Lecture;
use Illuminate\Http\Request;

class Table_LectureController extends Controller
{

    public function index(Request $request)
    {   
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $table_lecture = Table_Lecture::where('name', 'LIKE', "%$keyword%")
                ->orWhere('Telephone_No', 'LIKE', "%$keyword%")
                ->orWhere('Email', 'LIKE', "%$keyword%")
                ->latest()->paginate(60);
        } else {
            $table_lecture = Table_Lecture::paginate($perPage);
        }

        return view('Table_Lecture.table_-lecture.index', compact('table_lecture'));
    }

    
    public function create()
    {
        return view('Table_Lecture.table_-lecture.create');
    }

    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Table_Lecture::create($requestData);

        return redirect('table_-lecture')->with('flash_message', 'Table_Lecture added!');
    }

    public function show($id)
    {
        $table_lecture = Table_Lecture::findOrFail($id);

        return view('Table_Lecture.table_-lecture.show', compact('table_lecture'));
    }

    public function edit($id)
    {
        $table_lecture = Table_Lecture::findOrFail($id);

        return view('Table_Lecture.table_-lecture.edit', compact('table_lecture'));
    }

       
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $table_lecture = Table_Lecture::findOrFail($id);
        $table_lecture->update($requestData);

        return redirect('table_-lecture')->with('flash_message', 'Table_Lecture updated!');
    }

  
}
