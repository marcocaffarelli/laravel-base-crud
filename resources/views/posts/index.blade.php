<h2>Prova</h2>
<a href="{{route('posts.create')}}"><button style="background-color: yellow;">Crea un nuovo post</button></a>
@foreach($posts as $post)
    <div class="post" style="border: 1px solid black; margin: 10px 0; width: 500px;">
        <h3><strong>TITOLO: </strong>{{$post->title}}</h3>
        <p><strong>BODY: </strong>{{$post->body}}</p>
        <p><strong>CREATED: </strong>{{$post->created_at}}</p>
        <p><strong>UPDATED: </strong>{{$post->updated_at}}</p>
    </div>
@endforeach
