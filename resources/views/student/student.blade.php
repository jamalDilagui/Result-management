@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{'/createStudent'}}" class="btn btn-primary mb-3">Add new student</a>
            <div class="card">
                <div class="card-header">Student list</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Fullname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Classe</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $item)
                                <tr>
                                    <th scope="row">{{$item->fullname}}</th>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->classe->num_classe}}</td>
                                    <td><a href="{{'/editStudent/'.$item->id}}" class="btn btn-primary">Edit</a> <a href="{{'/deleteStudent/'.$item->id}}" class="btn btn-danger">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
