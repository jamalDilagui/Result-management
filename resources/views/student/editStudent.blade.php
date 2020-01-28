@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add classe') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{'/updateStudent/'.$student->id}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Fulname</label>
                          <input type="text" value="{{$student->fullname}}" class="form-control" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" value="{{$student->email}}" class="form-control" name="email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Gender</label>
                            <select name="gender" class="form-control">
                                <option value="{{$student->gender}}">{{$student->gender}}</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Session</label>
                            <select name="session" class="form-control">
                                <option value="{{$student->session}}">{{$student->session}}</option>
                                <option value="winter">winter</option>
                                <option value="fall ">fall </option>
                                <option value="autumn  ">autumn  </option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Classe</label>
                            <select name="classe_id" class="form-control">
                              <option value="{{$student->classe_id}}">{{$student->classe_id}}</option>
                              @foreach ($classe as $item)
                                <option value="{{$item->id}}">{{$item->num_classe}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">DOB</label>
                            <input type="date" value="{{$student->dob}}" class="form-control" name="dob">
                          </div>
                          <button type="submit" class="btn btn-primary">Edit student</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
