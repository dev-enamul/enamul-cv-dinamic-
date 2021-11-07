@extends('backend.layout.master')

@section('mainContent')

<div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{$page_name}}</strong><a class="btn btn-info pull-right" href="{{route('experiance_create')}}">Create</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">Si</th>
                                  <th scope="col">Company/Organization</th>
                                  <th scope="col">Position</th>
                                  <th scope="col">Duration</th>
                                  <th scope="col">Image</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($datas as $key => $data)
                                <tr>
                                  <th>{{$key}}</th>
                                  <td>{{$data->organization}}</td>
                                  <td>{{$data->position}}</td>
                                  <td>{{$data->duration}}</td>
                                  <td><img src="{{asset('fontend/images').'/'.$data->organization_logo}}" alt="" width="150px" height="150px"></td>
                                 
                                  <td>
                                      <a href="{{url('dashboard/experiance/edit/'.$data->id)}}" class="btn btn-info">Edit</a>
                                      <a href="{{url('dashboard/experiance/delete/'.$data->id)}}" class="btn btn-danger">Delete</a>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>


@endsection 