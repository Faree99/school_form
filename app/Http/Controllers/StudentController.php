<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $student = Student::all();
        $data =  ['students'=> $student ];
    return view('index',$data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('form');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'class'=>'required',
            'dob'=>'required',
            'duration'=>'required',
            'certificate_id'=>'required',

       ]);


        $std =   Student::create($validate);
          if($std){
                return back()->with('success','Student data stored successfully');
                // return redirect()->route('index');
          }else{
            return back()->with('error','Student data not stored');


          }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $student =  Student::find($id);
        $data =  ['students'=> $student ];
       // return view('show',$data);
        return view('show')->with('students', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $student =  Student::find($id);
        $data =  ['student'=> $student ];
        return view('edit',$data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validate = $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'class'=>'required',
            'dob'=>'required',
            'duration'=>'required',
            'certificate_id'=>'required',

       ]);

          $student = Student::find($id);
           $std =  $student->update($validate);
                 if($std){

                    return redirect()->route('index');
                 }else {
                      return back()->with('error','un-enable to update student data');
                 }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $student = Student::find($id);
        $std =  $student->delete();
              if($std){

                return back()->with('success','student data deleted');
              }else {
                   return back()->with('error','un-enable to delete student data');
              }
    }
}
