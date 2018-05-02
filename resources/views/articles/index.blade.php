@extends('layouts.app')

@section('content')
  <h1 class="article-header">Articles</h1>
    @if(count($articles) > 0)
        @foreach($articles as $article)
            <div class="well">
                <div class="row">
                    {{-- <div class="col-md-4 col-sm-4">
                        <a href="/articles/{{$article->id}}"><img style="width: 100%" src="/storage/cover_images/{{$article->cover_image}}"></a>
                    </div> --}}
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
                        <small>Written on {{$article->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- {{$articles->links()}} --}}
    @else
        <p>No articles found</p>
    @endif
@endsection