@include('layouts.head')
<body>
    <h2>Prova</h2>
    <a href="{{route('posts.create')}}"><button class="btn">Crea un nuovo post</button></a>
    @foreach($posts as $post)
        <div class="post row d-flex">
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
                <a href="{{route('posts.show', ['post'=> $post->id])}}" class="col btn bg-primary">
                    View
                </a>
            </div>
            <div>
                <a href="{{route('posts.edit', ['post'=> $post->id])}}" class="col btn bg-warning">
                    Edit
                </a>
            </div>
            <form action="{{ route('posts.destroy', $post->id) }}" class="col" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn bg-danger">Delete</button>
            </form>

        </div>
    @endforeach
</body>