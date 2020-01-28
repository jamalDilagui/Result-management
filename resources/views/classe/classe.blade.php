@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{'/createClasse'}}" class="btn btn-primary mb-3">Add new classe</a>
            <div class="card">
                <div class="card-header">{{ __('Edit classe') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th class="th-sm">Classe
                            </th>
                            <th class="th-sm">Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($classe as $item)
                                <tr>
                                    <td>{{$item->num_classe}}</td>
                                    <td><a href="{{'/editClasse/'.$item->id}}" class="btn btn-primary">Edit</a> <a href="{{'/deleteClasse/'.$item->id}}" class="btn btn-danger">Delete</a></td>
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

