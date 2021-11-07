@extends('backend.layout.master')

@section('mainContent')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
        <strong>{{$page_name}}</strong>
        </div>
        <div class="card-body card-block">

         
        {{ Form::open(['url' => 'dashboard/service/store','method'=>'POST','enctype'=>'multipart/form-data','class'=>'form-horizontal']) }}
            
            <div class="form-group">
                <label for="title" class=" form-control-label">Title</label>
              {{Form::text('title',NULL,['class'=>'form-control','id'=>'title','placeholder'=>'Enter Service Title..'])}}
                @error('title')
             
                <div class="text-danger">{{$message}}</div>
                @enderror

                <label for="description" class=" form-control-label">Description</label>
              {{Form::textarea('description',NULL,['class'=>'form-control','id'=>'editor','placeholder'=>'Enter Description..'])}}
                @error('description')
      
                <div class="text-danger">{{$message}}</div>
                @enderror

                <label for="project_category" class=" form-control-label">Project Category</label>
              {{Form::select('project_category',$project_category,NULL,['class'=>'form-control','id'=>'project_category'])}}
                @error('project_category')
                <div class="text-danger">{{$message}}</div>
                @enderror

                <label for="image" class=" form-control-label">Image</label>
                  {{Form::file('image',['class'=>'form-control','id'=>'image'])}}
                  @error('image')
                
                    <div class=" text-danger">{{$message}}</div>
                  @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Category </button>
        {{Form::close()}}
        </div>
       
    </div>
 
</div>

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>

<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
            document.getElementById("uploadPreview").style.display ='block';
        };
    };

</script>

@endsection