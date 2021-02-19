@extends('layouts.head')
<div style="border: 1px solid black; margin: 10px 0;">
    <h1>POST {{$post->id}}</h1>
    <h3><strong>TITOLO: </strong>{{$post->title}}</h3>
    <p><strong>BODY: </strong>{{$post->body}}</p>
    <p><strong>CREATED: </strong>{{$post->created_at}}</p>
    <p><strong>UPDATED: </strong>{{$post->updated_at}}</p>
</div>
<a href="{{ route('blog') }}" style="background-color: darkblue; color: white; padding: 3px; margin: 5px; border: 1px solid black; border-radius: 5px;">RETURN</a>