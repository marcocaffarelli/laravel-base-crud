<h2>Prova</h2>
<div>
    @foreach($posts as $post)
        <h3><strong>TITOLO: </strong>{{$post->title}}</h3>
        <p><strong>BODY: </strong>{{$post->body}}</p>
        <p><strong>CREATED: </strong>{{$post->created_at}}</p>
        <p><strong>UPDATED: </strong>{{$post->updated_at}}</p>
    @endforeach
</div>
