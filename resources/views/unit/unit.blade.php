@extends('inc.nav')

@section('content')
    <div class="container" style="margin-top: 10%"><br>
        <div class="row justify-content-center">
                <div class="col-md-10 bg-white">
                    <h4 style="margin-top: 3%">Add Unit</h4>
                    {!! Form::open(['action' => 'UnitsController@store', 'method' => 'POST']) !!}

                    <div class="form-group">
                        {{Form::label('name', 'Unit')}}
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Unit'])}}
                    </div>
                    <div class="form-group">
                        <label>School/Unit</label>
                            <select name="cat" id="cat" class="form-control">
                                <option value="">Select School/Unit</option>
                                <option value="unit">Unit</option>
                                <option value="school">School</option>
                            </select><br>
                    </div>

                    <div class="form-group">
                        {{Form::label('about', 'About')}}
                        {{Form::textarea('about', '', ['class' => 'form-control', 'placeholder' => 'About the Unit/Schhol'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('mission', 'Mission')}}
                        {{Form::textarea('mission', '', ['class' => 'form-control', 'placeholder' => 'Mission of the Unit/School'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('vision', 'Vision')}}
                        {{Form::textarea('vision', '', ['class' => 'form-control', 'placeholder' => 'Vision of the Unit/School'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('link', 'URLlink')}}
                        {{Form::text('link', '', ['class' => 'form-control', 'placeholder' => 'URLlink'])}}
                    </div>
                    
                    {{Form::submit('Submit', ['class' => 'btn btn-primary my-2'])}}
                    {!! Form::close() !!}
                </div>
        </div>
    </div><br>
@endsection