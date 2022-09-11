@extends('inc.nav')

@section('content')
<div class="container"><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h5>{{ Auth::user()->school }} Dashboard </h5></div>

                <div class="card-body">
                    <h3>Post</h3>
                    @if (count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                        <td>
                                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method', 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method','DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}  
                                        </td>
                                    </tr>  
                                @endforeach
                        </table>
                    @else
                        <h4>You have no Post</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
