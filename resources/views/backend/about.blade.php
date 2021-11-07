@extends('backend.layout.master')

@section('mainContent')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
        <strong>Basic Form</strong> Elements
        </div>
        <div class="card-body card-block">

         
        {{ Form::open(['url' => 'dashboard/about/update','method'=>'POST','enctype'=>'multipart/form-data','class'=>'form-horizontal']) }}
            
            <div class="row form-group">
                <div class="col col-md-3"><label for="title" class=" form-control-label">Text Input</label></div>
                <div class="col-12 col-md-9">{{Form::text('title',$data->title,['class'=>'form-control','id'=>'title','placeholder'=>'Enter about heading'])}}</div>
                @error('title')
                <div class="col col-md-3"></div>
                <div class="col-12 col-md-9 text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="describtion" class=" form-control-label">Describtion</label></div>
                <div class="col-12 col-md-9">{{Form::textarea('describtion',$data->describtion,['class'=>'form-control','id'=>'describtion','placeholder'=>'Enter about Details'])}}</div>
                @error('describtion')
                <div class="col col-md-3"></div>
                <div class="col-12 col-md-9 text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="freelance" class=" form-control-label">Freelance</label></div>
                <div class="col-12 col-md-9">{{Form::text('freelance',$data->freelance,['class'=>'form-control','id'=>'freelance','placeholder'=>'Enter freelance'])}}</div>
                @error('freelance')
                <div class="col col-md-3"></div>
                <div class="col-12 col-md-9 text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="resident" class=" form-control-label">Resident</label></div>
                <div class="col-12 col-md-9">{{Form::text('resident',$data->resident,['class'=>'form-control','id'=>'resident','placeholder'=>'Enter recident'])}}</div>
                @error('resident')
                <div class="col col-md-3"></div>
                <div class="col-12 col-md-9 text-danger">{{$message}}</div>
                @enderror

            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="address" class=" form-control-label">Address</label></div>
                <div class="col-12 col-md-9">{{Form::text('address',$data->address,['class'=>'form-control','id'=>'address','placeholder'=>'Enter address'])}}</div>
                @error('address')
                <div class="col col-md-3"></div>
                <div class="col-12 col-md-9 text-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="profile_pic" class=" form-control-label"></label></div>
                <div class="col-12 col-md-9"><img src="{{asset('fontend/images').'/'.$data->profile_pic}}" id="profile_pic" height="150px"></div>
            
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="address" class=" form-control-label">Image</label></div>
                <div class="col-12 col-md-9">{{Form::file('profile_pic',['class'=>'form-control','id'=>'address'])}}</div>
            </div>


            <button type="submit" class="btn btn-primary pull-right">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
             
             
        {{Form::close()}}
        </div>
       
    </div>
 
</div>

@endsection