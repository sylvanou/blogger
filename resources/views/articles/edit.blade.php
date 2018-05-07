@extends('layouts.app')

@section('content')
    <h1>Edit Article</h1>
    {!! Form::open(['action' => ['ArticlesController@update', $article->id], 'method' => 'article', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $article->title, ['class' =>'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('title', 'Body')}}
            {{Form::textarea('body', $article->body, ['id' => 'article-ckeditor', 'class' =>'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection