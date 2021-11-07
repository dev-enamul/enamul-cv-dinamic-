<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work_Category;

class workCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "Project Category List";
        $datas = Work_Category::all();
        return view('backend.work_category.list',compact('page_name','datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = "Project category Create";
        return view('backend.work_category.create',compact('page_name'));
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
            'name'=>'required'
        ]);
        $category = new Work_Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('project_category');
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
        $data = Work_Category::find($id);
        $page_name = "Edit Project Category";
        return view('backend.work_category.edit',compact('data','page_name'));
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
        $work_category = Work_Category::find($id);
        $work_category->name = $request->name;
        $work_category->save();
        return redirect()->route('project_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work_category = Work_Category::find($id);
        $work_category->delete();
        return redirect()->back();
    }

    public function status($id){
        $work_category= Work_Category::find($id);
        if($work_category->status == 1){
            $work_category->status = 0;
        }else{
            $work_category->status = 1;
        }
        $work_category->save();
        return redirect()->back();
    }
}
