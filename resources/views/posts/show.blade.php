@extends('layouts.head')
<body>
    <div class="show">
        <div>
            <h1>POST {{$post->id}}</h1>
            <h3><strong>TITOLO: </strong>{{$post->title}}</h3>
            <p><strong>BODY: </strong>{{$post->body}}</p>
            <p><strong>CREATED: </strong>{{$post->created_at}}</p>
            <p><strong>UPDATED: </strong>{{$post->updated_at}}</p>
        </div>
        <a href="{{ route('blog') }}" class="btn">RETURN</a>
    </div>
</body>