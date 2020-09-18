@extends('_layouts.master')

@section('body')
<h1 class="text-primary">Posts</h1>
<ul>
    @foreach($posts as $post)
        <li><a href="{{ $post->getUrl() }}">{{ $post->title }}</a> By {{ $post->author }}</li>
    @endforeach
</ul>
@endsection
