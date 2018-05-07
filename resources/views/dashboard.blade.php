@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <a href="/articles/create" class="pull-right btn btn-primary">Create article</a>
                    <h3>Your Blog Articles</h3>
                    @if(count($articles) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($articles as $article)
                            <tr>
                                <td>{{$article->title}}</td>
                                <td><a href="articles/{{$article->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                    {!!Form::open(['action' => ['ArticlesController@destroy', $article->id], 'method' => 'article', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no articles</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
