@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add subject') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{'/updateResultat/'.$resultat->id}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Exam</label>
                            <select name="exam_id" class="form-control">
                                @foreach ($exam as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Classe</label>
                            <select name="classe_id" class="form-control">
                                @foreach ($classe as $item)
                                    <option value="{{$item->id}}">{{$item->num_classe}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Subject</label>
                            <select name="subject_id" class="form-control">
                                @foreach ($subject as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Student</label>
                            <select name="student_id" class="form-control">
                                @foreach ($student as $item)
                                    <option value="{{$item->id}}">{{$item->fullname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Written point</label>
                          <input type="number" class="form-control" name="written" value="{{$resultat->written}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Oral point</label>
                            <input type="number" class="form-control" name="orale" value="{{$resultat->oral}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Classe point</label>
                            <input type="number" class="form-control" name="classe" value="{{$resultat->classe}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Session Point</label>
                            <input type="number" class="form-control" name="total" disabled value="{{$resultat->total}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Add subject</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
