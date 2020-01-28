@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{'/createSubject'}}" class="btn btn-primary mb-3">Add new subject</a>
            <div class="card">
                <div class="card-header">Subject list</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Classe</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($subject as $item)
                                <tr>
                                    <th scope="row">{{$item->name}}</th>
                                    <td>{{$item->classe_id}}</td>
                                    <td><a href="{{'/editSubject/'.$item->id}}" class="btn btn-primary">Edit</a> <a href="{{'/deleteSubject/'.$item->id}}" class="btn btn-danger">Delete</a></td>
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
