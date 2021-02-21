@extends('layouts.head')
<body>
    <div class="show">
        <div>
            <h3><strong>TITOLO: </strong>{{$post->title}}</h3>
            <p class="body"><strong>BODY: </strong>{{$post->body}}</p>
            <p class="data"><strong>CREATED: </strong>{{$post->created_at}}</p>
            <p class="data"><strong>UPDATED: </strong>{{$post->updated_at}}</p>
        </div>
        <a href="{{ route('blog') }}" class="btn">RETURN</a>
    </div>
</body>