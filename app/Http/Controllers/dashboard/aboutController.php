<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = About::first();
        $page_name = "About me";
        return view('backend.about',compact('data','page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'describtion'=>'required',
            'resident'=>'required',
            'freelance'=>'required',
            'address'=>'required',
        ]);

        $about = About::first();
        $about->title = $request->title;
        $about->describtion = $request->describtion;
        $about->resident = $request->resident;
        $about->freelance = $request->freelance;
        $about->address = $request->address;

        if($profile_pic =$request->file('profile_pic')){
            $extension = $profile_pic->getClientOriginalExtension();
            @unlink('fontend/images'.'/'.$about->profile_pic);
            $file_path ='fontend/images';
            $file_name = 'enamul'.'.'.$extension;
            $profile_pic->move($file_path,$file_name);
            $about->profile_pic = $file_name;
        }
        $about->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
