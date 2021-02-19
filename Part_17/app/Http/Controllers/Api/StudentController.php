<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return response()->json($student);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name'         => 'required|unique:students|max:255',
        'email'        => 'required|unique:students',
        'photo'        => 'required',
        'phone'        => 'required',          
        'address'      => 'required',          
        'district'     => 'required',          
        'section_id'   => 'required',          
        'course_id'    => 'required'          
        ]);
        Student::create($request->all());    
        return response('Inserted Successfully !!!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findorfail($id);
        return response()->json($student);
    }    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'name'         => 'required|unique:students|max:255',
        'email'        => 'required|unique:students',
        'photo'        => 'required',
        'phone'        => 'required',          
        'address'      => 'required',          
        'district'     => 'required',          
        'section_id'   => 'required',          
        'course_id'    => 'required'          
        ]);
        $student = Student::findorfail($id)->update($request->all());            
        return response('Updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('id',$id)->delete();
        return response('Deleted Successfully !!!');
    }
}
