<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servece;
use Image;
use DB;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "Service List";
        $datas = Servece::with('servece_category')->get();
        
        return view('backend.service.list',compact('page_name','datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = "Service Create";
        $project_category = DB::table('work__categories')->pluck('name','id');
        return view('backend.service.create',compact('page_name','project_category'));
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
            'title'=>'required',
            'description'=>'required',
            'project_category'=>'required',
            'image'=>'required',
        ]);
        $service = new Servece;
        $service->title = $request->title;
        $service->work_category_id = $request->project_category;
        $service->description = $request->description;

        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $image_name = $request->title.'.'.$extension;
        $file_path = 'fontend/images';
        Image::make($image)->resize(1000,800)->move($file_path,$image_name);

        $service->image = $image_name;

        $service->save();
        return redirect()->route('service');



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
        $page_name = "Service Edit";
        $data = Servece::with('servece_category')->find($id);
        $project_category = DB::table('work__categories')->pluck('name','id');

        return view('backend.service.edit',compact('page_name','data','project_category'));
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
            'title'=>'required',
            'description'=>'required',
            'project_category'=>'required',
        ]);
        $service = Servece::find($id);
        $service->title = $request->title;
        $service->work_category_id = $request->project_category;
        $service->description = $request->description;

        if($image = $request->file('image')){
            
            $extension = $image->getClientOriginalExtension();
            $image_name = $request->title.'.'.$extension;
            $file_path = 'fontend/images';
            @unlink($file_path.'/'.$service->image);
            Image::make($image)->resize(1000,800)->move($file_path,$image_name);
            $service->image = $image_name;
        }
        $service->save();
        return redirect()->route('service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Servece::find($id);
        $service->delete();
        return redirect()->back();
    }

    public function status($id){
        $service = Servece::find($id);

        if($service->status == 1){
            $service->status = 0;
        }else{
            $service->status = 1;
        }
        $service->save();

        return redirect()->back();

    }
}
