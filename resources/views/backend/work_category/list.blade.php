@extends('backend.layout.master')

@section('mainContent')


<div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{$page_name}}</strong><a class="btn btn-info pull-right" href="{{route('project_category_create')}}">Create</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">Si</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($datas as $key => $data)
                                <tr>
                                  <th>{{$key}}</th>
                                  <td>{{$data->name}}</td>
                                  <td>
                                      @if($data->status ==1)
                                       <a href="{{url('dashboard/project/category/status/'.$data->id)}}" class="btn btn-danger">Unpublish</a>
                                      @else
                                        <a href="{{url('dashboard/project/category/status/'.$data->id)}}" class="btn btn-success">publish</a>
                                      @endif
                                  </td>
                                  <td>
                                      <a href="{{url('dashboard/project/category/edit/'.$data->id)}}" class="btn btn-info">Edit</a>
                                      <a href="{{url('dashboard/project/category/delete/'.$data->id)}}" class="btn btn-danger">Delete</a>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>


@endsection 