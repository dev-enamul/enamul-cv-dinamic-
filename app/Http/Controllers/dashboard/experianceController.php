<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experiance;

class experianceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "Experiance List";
        $datas = Experiance::all();
        return view('backend.experiance.list',compact('page_name','datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = "Experiance Create";
        return view('backend.experiance.create',compact('page_name'));
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
            'organization'=>'required',
            'position'=>'required',
            'duration'=>'required',
            'description'=>'required',
            'organization_logo'=>'required'
        ]);
        $education = new Experiance;
        $education->organization= $request->organization;
        $education->position = $request->position;
        $education->duration = $request->duration;
        $education->description = $request->description;


        $image = $request->file('organization_logo');
        $extension = $image->getClientOriginalExtension();
        $name = $request->organization.'.'.$extension;
        $path = 'fontend/images';
        $image->move($path,$name);
        $education->organization_logo = $name;

        $education->save();
        return redirect()->route('experiance');
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
        $page_name = "Experiacne Edit";
        $data = Experiance::find($id);
        return view('backend.experiance.edit',compact('data','page_name'));
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
            'organization'=>'required',
            'position'=>'required',
            'duration'=>'required',
            'description'=>'required',
        ]);
        $education = Experiance::find($id);
        $education->organization= $request->organization;
        $education->position = $request->position;
        $education->duration = $request->duration;
        $education->description = $request->description;


        if($image = $request->file('organization_logo')){
            $extension = $image->getClientOriginalExtension();
            $name = $request->organization.'.'.$extension;
            $path = 'fontend/images';
            @unlink($path.'/'.$name);
            $image->move($path,$name);
            $education->organization_logo = $name;
        }
        $education->save();
        return redirect()->route('experiance');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $extension = Experiance::find($id);
        $extension->delete();
        return redirect()->back();
    }
}
