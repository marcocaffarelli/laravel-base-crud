@include('layouts.head')
<body>
    <h1>Modifica il post</h1>
    <form action="{{route('posts.update', ['post'=> $post->id])}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="title">TITOLO</label><br>
            <input type="text" id="title" name="title" placeholder="Inserisci il titolo" value="{{$post->title}}">
        </div>
        <div>
            <label for="body">BODY</label><br>
            <textarea name="body" id="body" cols="30" rows="10" placeholder="inserisci il testo">{{$post->body}}</textarea>
        </div>
        <button type="submit">SUBMIT</button>
        <!-- <a href="{{route('blog')}}"><button type="submit">SUBMIT</button></a> -->
        
    </form>
</body>