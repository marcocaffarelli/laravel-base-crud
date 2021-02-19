<h2>Prova</h2>
<a href="{{route('posts.create')}}"><button style="background-color: yellow;">Crea un nuovo post</button></a>
@foreach($posts as $post)
    <div class="post" style="border: 1px solid black; margin: 10px 0; width: 500px; padding: 10px;">
        <h3><strong>TITOLO: </strong>{{$post->title}}</h3>
        <p><strong>BODY: </strong>{{$post->body}}</p>
        <p><strong>CREATED: </strong>{{$post->created_at}}</p>
        <p><strong>UPDATED: </strong>{{$post->updated_at}}</p>
        <a href="{{route('posts.show', ['post'=> $post->id])}}" style="background-color: green; color: white; padding: 3px; margin: 5px; border: 1px solid black; border-radius: 5px;">
            View
        </a>
        <a href="{{route('posts.edit', ['post'=> $post->id])}}" style="background-color: yellow; color: black; padding: 3px; margin: 5px; border: 1px solid black; border-radius: 5px;">
            Edit
        </a>
        <a href="#" style="background-color: red; color: white; padding: 3px; margin: 5px; border: 1px solid black; border-radius: 5px;">
            Delete
        </a>
    </div>
@endforeach
