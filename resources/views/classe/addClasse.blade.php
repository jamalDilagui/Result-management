@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add classe') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{'addClasse'}}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Add classe</label>
                          <input type="text" class="form-control" name="num_classe" placeholder="Classe name">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
