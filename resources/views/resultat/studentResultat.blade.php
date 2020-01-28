@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach ($resultat as $item)
                    <div class="card-header">{{$item->student->fullname}}</div>
                @endforeach
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Subject</th>
                            <th scope="col">Exam</th>
                            <th scope="col">Written</th>
                            <th scope="col">Oral</th>
                            <th scope="col">Classe point</th>
                            <th scope="col">Session point</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($resultat as $item)
                                <tr>
                                    <td>{{$item->subject->name}}</td>
                                    <td>{{$item->exam->name}}</td>
                                    <td>{{$item->written}}</td>
                                    <td>{{$item->orale}}</td>
                                    <td>{{$item->classe}}</td>
                                    <td>{{$item->total}}</td>
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
