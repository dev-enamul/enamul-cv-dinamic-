@extends('backend.layout.master')

@section('mainContent')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
        <strong>{{$page_name}}</strong>
        </div>
        <div class="card-body card-block">

         
        {{ Form::open(['url' => 'dashboard/education/store','method'=>'POST','enctype'=>'multipart/form-data','class'=>'form-horizontal']) }}
            
            <div class="form-group">
                <label for="school" class=" form-control-label">School Name</label>
              {{Form::text('school',NULL,['class'=>'form-control','id'=>'school','placeholder'=>'Enter School Name..'])}}
                @error('school')
                <div class="text-danger">{{$message}}</div>
                @enderror

                <label for="subject" class=" form-control-label">Subject / Department</label>
                {{Form::text('subject',NULL,['class'=>'form-control','id'=>'subject','placeholder'=>'Enter Subject or Department..'])}}
                @error('subject')
                <div class="text-danger">{{$message}}</div>
                @enderror

                <label for="duration" class=" form-control-label">Duration</label>
                {{Form::text('duration',NULL,['class'=>'form-control','id'=>'duration','placeholder'=>'Example 2008 - 2020'])}}
                @error('duration')
                <div class="text-danger">{{$message}}</div>
                @enderror

                <label for="description" class=" form-control-label">Describtion</label>
                {{Form::textarea('description',NULL,['class'=>'form-control','id'=>'description','placeholder'=>'What you mind.. '])}}
                @error('description')
                <div class="text-danger">{{$message}}</div>
                @enderror
  
                <label for="school_logo" class=" form-control-label">School/Collage/University Logo</label>
                  {{Form::file('school_logo',['class'=>'form-control','id'=>'school_logo'])}}
                  @error('school_logo')
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