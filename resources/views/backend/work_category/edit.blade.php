@extends('backend.layout.master')

@section('mainContent')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
        <strong>{{$page_name}}</strong>
        </div>
        <div class="card-body card-block">

         
        {{ Form::open(['url' => ['dashboard/project/category/update/'.$data->id],'method'=>'PUT','enctype'=>'multipart/form-data','class'=>'form-horizontal']) }}
            
            <div class="row form-group">
                <label for="name" class=" form-control-label">Text Input</label>
              {{Form::text('name',$data->name,['class'=>'form-control','id'=>'name','placeholder'=>'Enter project category..'])}}
                @error('name')
                <div class="col col-md-3"></div>
                <div class="col-12 col-md-9 text-danger">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Category </button>
        {{Form::close()}}
        </div>
       
    </div>
 
</div>

@endsection