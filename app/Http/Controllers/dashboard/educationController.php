<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;

class educationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $page_name ="Education";
       $datas = Education::all();

       return view('backend.education.list',compact('page_name','datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name="Education Edit";
        return view('backend.education.create',compact('page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'school'=>'required',
            'subject'=>'required',
            'duration'=>'required',
            'description'=>'required',
            'school_logo'=>'required'
        ]);
        $education = new Education;
        $education->school= $request->school;
        $education->subject = $request->subject;
        $education->duration = $request->duration;
        $education->description = $request->description;


        $image = $request->file('school_logo');
        $extension = $image->getClientOriginalExtension();
        $name = $request->school.'.'.$extension;
        $path = 'fontend/images';
        $image->move($path,$name);
        Image::make($image)->resize(1000,800)->move($path,$name);
        $education->school_logo = $name;

        $education->save();
        return redirect()->route('education');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_name = "Education Edit";
        $data = Education::find($id);
        return view('backend.education.edit',compact('data','page_name'));
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
        $this->validate($request,[
            'school'=>'required',
            'subject'=>'required',
            'duration'=>'required',
            'description'=>'required',
        ]);
        $education = Education::find($id);
        $education->school= $request->school;
        $education->subject = $request->subject;
        $education->duration = $request->duration;
        $education->description = $request->description;


        if($image = $request->file('school_logo')){
            $extension = $image->getClientOriginalExtension();
            
            $name = $request->school.'.'.$extension;
            $path = 'fontend/images';
            @unlink($path.'/'.$education->school_logo);
            $image->move($path,$name);
            $education->school_logo = $name;
        }

        $education->save();
        return redirect()->route('education');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education= Education::find($id);
        $education->delete();
        return redirect()->route('education');

    }
}
