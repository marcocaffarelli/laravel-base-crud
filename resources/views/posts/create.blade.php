@include('layouts.head')
<body>
    <div class="create d-flex">
        <h1>NEW POST</h1>
        <div class="container_form d-flex">
            <form action="{{route('posts.store')}}" method="post">
                @csrf
                <div>
                    <label for="title">TITOLO</label><br>
                    <input type="text" id="title" name="title" placeholder="Inserisci il titolo">
                </div>
                <div>
                    <label for="body">BODY</label><br>
                    <textarea name="body" id="body" cols="30" rows="5" placeholder="inserisci il testo"></textarea>
                </div>
                <button type="submit" class="btn bg-primary">SUBMIT</button>
                <!-- <a href="{{route('blog')}}"><button type="submit">SUBMIT</button></a> -->
                
            </form>            
        </div>

    </div>
</body>