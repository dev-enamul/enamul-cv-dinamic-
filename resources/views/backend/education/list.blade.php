@extends('backend.layout.master')

@section('mainContent')

<div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{$page_name}}</strong><a class="btn btn-info pull-right" href="{{route('education_create')}}">Create</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">Si</th>
                                  <th scope="col">School</th>
                                  <th scope="col">Subject</th>
                                  <th scope="col">Duration</th>
                                  <th scope="col">Image</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($datas as $key => $data)
                                <tr>
                                  <th>{{$key}}</th>
                                  <td>{{$data->school}}</td>
                                  <td>{{$data->subject}}</td>
                                  <td>{{$data->duration}}</td>
                                  <td><img src="{{asset('fontend/images').'/'.$data->school_logo}}" alt="" width="150px" height="150px"></td>
                                 
                                  <td>
                                      <a href="{{url('dashboard/education/edit/'.$data->id)}}" class="btn btn-info">Edit</a>
                                      <a href="{{url('dashboard/education/delete/'.$data->id)}}" class="btn btn-danger">Delete</a>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>


@endsection 