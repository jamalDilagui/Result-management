@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{'/createResultat'}}" class="btn btn-primary mb-3">Add new result</a>
            <div class="card">
                <div class="card-header">Result list</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Student</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Exam</th>
                            <th scope="col">Written</th>
                            <th scope="col">Oral</th>
                            <th scope="col">Classe point</th>
                            <th scope="col">Session point</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($resultat as $item)
                                <tr>
                                    <th scope="row">{{$item->student->fullname}}</th>
                                    <td>{{$item->subject->name}}</td>
                                    <td>{{$item->exam->name}}</td>
                                    <td>{{$item->written}}</td>
                                    <td>{{$item->oral}}</td>
                                    <td>{{$item->classe}}</td>
                                    <td>{{$item->total}}</td>
                                    <td><a href="{{'/editResultat/'.$item->id}}" class="btn btn-primary">Edit</a> <a href="{{'/deleteResultat/'.$item->id}}" class="btn btn-danger">Delete</a></td>
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
