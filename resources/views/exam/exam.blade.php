@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{'/createExam'}}" class="btn btn-primary mb-3">Add new exam</a>
            <div class="card">
                <div class="card-header">{{ __('Edit exam') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th class="th-sm">Exam
                            </th>
                            <th class="th-sm">Classe
                            </th>
                            <th class="th-sm">Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($exam as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->classe_id}}</td>
                                    <td><a href="{{'/editExam/'.$item->id}}" class="btn btn-primary">Edit</a> <a href="{{'/deleteExam/'.$item->id}}" class="btn btn-danger">Delete</a></td>
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

