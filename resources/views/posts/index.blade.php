<h2>Prova</h2>
<a href="{{route('posts.create')}}"><button style="background-color: yellow;">Crea un nuovo post</button></a>
@foreach($posts as $post)
    <div class="post row d-flex" style="border: 1px solid black; margin: 10px 0; padding: 10px;">
        <div class="col-lg-2">
            <h3><strong>TITOLO: </strong><br>{{$post->title}}</h3>
        </div>
        <div class="col-lg-5">
            <p><strong>BODY: </strong><br>{{$post->body}}</p>
        </div>
        <div class="col">
            <p><strong>CREATED: </strong><br>{{$post->created_at}}</p>
        </div>
        <div class="col">
            <p><strong>UPDATED: </strong><br>{{$post->updated_at}}</p>        
        </div>
        <div>
            <a href="{{route('posts.show', ['post'=> $post->id])}}" class="col btn bg-primary" style="height: 50px; width: 100px; margin-right: 15px;">
                View
            </a>
        </div>
        <div>
            <a href="{{route('posts.edit', ['post'=> $post->id])}}" class="col btn bg-warning" style="height: 50px; width: 100px;">
                Edit
            </a>
        </div>
        <form action="{{ route('posts.destroy', $post->id) }}" class="col" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn bg-danger" style="height: 50px; width: 100px;">Delete</button>
        </form>

    </div>
@endforeach
