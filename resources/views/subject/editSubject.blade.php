@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add subject') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{'/updateSubject/'.$subject->id}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$subject->name}}">
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Classe</label>
                                <select name="classe_id" class="form-control">
                                    <option value="{{$subject->classe_id}}">{{$subject->classe_id}}</option>
                                    @foreach ($classe as $item)
                                      <option value="{{$item->id}}">{{$item->num_classe}}</option>
                                    @endforeach
                                </select>
                          </div>
                        <button type="submit" class="btn btn-primary">Edit subject</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
