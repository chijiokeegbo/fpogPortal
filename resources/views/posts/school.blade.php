@extends('inc.nav')

@section('content')
    <div class="container" style="margin-top: 10%"><br>
        <div class="row justify-content-center">
                <div class="col-md-10 bg-white">
                    <h4 style="margin-top: 3%">Add School</h4>
                    {!! Form::open(['action' => 'SchoolsController@store', 'method' => 'POST']) !!}

                    <div class="form-group">
                        {{Form::label('name', 'School')}}
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'School'])}}
                    </div>
                    {{Form::submit('Submit', ['class' => 'btn btn-primary my-2'])}}
                    {!! Form::close() !!}
                </div>
        </div>
    </div><br>
@endsection