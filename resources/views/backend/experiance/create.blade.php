@extends('backend.layout.master')

@section('mainContent')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
        <strong>{{$page_name}}</strong>
        </div>
        <div class="card-body card-block">
         
        {{ Form::open(['url' => 'dashboard/experiance/store','method'=>'POST','enctype'=>'multipart/form-data','class'=>'form-horizontal']) }}
            
            <div class="form-group">
                <label for="organization" class=" form-control-label">Company Name</label>
              {{Form::text('organization',NULL,['class'=>'form-control','id'=>'organization','placeholder'=>'Enter Comapny name..'])}}
                @error('organization')
                <div class="text-danger">{{$message}}</div>
                @enderror

                <label for="position" class=" form-control-label">Position</label>
                {{Form::text('position',NULL,['class'=>'form-control','id'=>'position','placeholder'=>'Enter Position..'])}}
                @error('position')
                <div class="text-danger">{{$message}}</div>
                @enderror

                <label for="duration" class=" form-control-label">Duration</label>
                {{Form::text('duration',NULL,['class'=>'form-control','id'=>'duration','placeholder'=>'Example 2008 - 2020'])}}
                @error('duration')
                <div class="text-danger">{{$message}}</div>
                @enderror

                <label for="description" class=" form-control-label">Describtion</label>
                {{Form::textarea('description',NULL,['class'=>'form-control','id'=>'description','placeholder'=>'What you role.. '])}}
                @error('description')
                <div class="text-danger">{{$message}}</div>
                @enderror
  
                <label for="organization_logo" class=" form-control-label">Company Logo</label>
                  {{Form::file('organization_logo',['class'=>'form-control','id'=>'organization_logo'])}}
                  @error('organization_logo')
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