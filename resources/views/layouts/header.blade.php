<header>
    <h1>LARAVEL BASE CRUD</h1>
        <nav>
            <a href="{{ route('home') }}" class="{{Route::currentRouteName() === 'home' ? 'active' : '' }}">HOME</a>
            <a href="{{ route('blog') }}" class="{{Route::currentRouteName() === 'blog' ? 'active' : '' }}">BLOG</a>
        </nav>
</header>