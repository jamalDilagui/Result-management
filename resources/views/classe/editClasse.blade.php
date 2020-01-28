@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit classe') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{'/updateClasse/'.$classe->id}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Edit classe</label>
                        <input type="text" class="form-control" name="num_classe" value="{{$classe->num_classe}}" placeholder="Classe name">
                        </div>
                        <button type="submit" class="btn btn-primary">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
