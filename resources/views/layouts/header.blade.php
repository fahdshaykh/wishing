<div class="tm-header-wrapper">
    <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <div class="tm-site-header">
        <a href="{{ url('/') }}">
            <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
        </a>            
            <h1 class="text-center">Wish Quotes</h1>
    </div>
    <nav class="tm-nav" id="tm-nav">            
        <ul>
            <li class="tm-nav-item active"><a href="{{ url('/') }}" class="tm-nav-link">
                <i class="fas fa-home"></i>
                Blog Home
            </a></li>
        </ul>
    </nav>

    <aside class="col-lg-12 tm-aside-col">
        <div class="tm-post-sidebar">
            <hr class="mb-3 tm-hr-primary">
            <h2 class="mb-4 tm-post-title">Categories</h2>
            <ul class="tm-mb-75 pl-2 tm-category-list">
                @foreach ($categories as $category)
                    <li><a href="{{ route('category.posts', $category->id) }}" class="wishing-color-primary"> {{ $category->title }} </a></li>
                @endforeach
            </ul>
            <hr class="mb-3 tm-hr-primary">
                              
    </aside>

    <div class="tm-mb-65">
        <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
            <i class="fab fa-facebook tm-social-icon"></i>
        </a>
        <a href="https://twitter.com" class="tm-social-link">
            <i class="fab fa-twitter tm-social-icon"></i>
        </a>
        <a href="https://instagram.com" class="tm-social-link">
            <i class="fab fa-instagram tm-social-icon"></i>
        </a>
        <a href="https://linkedin.com" class="tm-social-link">
            <i class="fab fa-linkedin tm-social-icon"></i>
        </a>
    </div>
</div>