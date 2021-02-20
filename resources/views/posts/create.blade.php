@include('layouts.head')
<body>
    <h1>Crea un nuovo post</h1>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <div>
            <label for="title">TITOLO</label><br>
            <input type="text" id="title" name="title" placeholder="Inserisci il titolo">
        </div>
        <div>
            <label for="body">BODY</label><br>
            <textarea name="body" id="body" cols="30" rows="10" placeholder="inserisci il testo"></textarea>
        </div>
        <button type="submit">SUBMIT</button>
        <!-- <a href="{{route('blog')}}"><button type="submit">SUBMIT</button></a> -->
        
    </form>
</body>