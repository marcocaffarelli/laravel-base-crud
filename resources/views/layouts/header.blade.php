<header>
    <h2>LARAVEL BASE CRUD</h2>
    <nav>
        <a href="{{ route('home') }}" class="{{Route::currentRouteName() === 'home' ? 'active' : '' }}">HOME</a>
        <a href="{{ route('blog') }}" class="{{Route::currentRouteName() === 'blog' ? 'active' : '' }}">BLOG</a>
    </nav>
</header>