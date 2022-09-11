@extends('inc.nav')

@section('content')
    <div class="container" style="margin-top: 10%"><br>
        <div class="row justify-content-center">
                <div class="col-md-10 bg-white">
                    <h4 style="margin-top: 3%">Create a Post</h4>
                    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}

                    <div class="form-group">
                        {{Form::label('title', 'Title')}}
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('body', 'Body')}}
                        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
                    </div>
                    {{Form::submit('Submit', ['class' => 'btn btn-primary my-2'])}}
                    {!! Form::close() !!}
                </div>
        </div>
    </div><br>
@endsection