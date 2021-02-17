<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionCreateRequest;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{
    /**
     *  Get invoices view
     *
    */
    public function index(){
        $sections =  DB::table('sections')->get();
        return view('sections.sections',compact('sections'));
    }

    /**
     *  Save new section 
     * @return response
    */
    public function store(SectionCreateRequest $request){
        $input = $request->all();
        
        // Chack if section is already exists
        $section_exists = DB::table('sections')->where('name',$input['name'])->exists();
        
        if($section_exists){
            session()->flash('error',trans('admin.section_exists'));
            return redirect(route('admins.sections'));
        } else {
            Section::create([
                'name' => $request->name,
                'description' => $request->description,
                'created_by' => auth()->user()->name,
                'notes' => $request->notes,
                ]);
                
                session()->flash('add',trans('admin.add_succefully'));
                
                return redirect(route('admins.sections'));

        }

    }
}
