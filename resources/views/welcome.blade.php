@extends('layouts.app')

@section('title','Welcome on wishing')

@section('content')

<div class="row tm-row">
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="{{ route('post.index') }}" class="effect-lily tm-post-link tm-pt-60">
            <div class="tm-post-link-inner">
                <img src="{{ asset('frontend/img/img-01.jpg') }}" alt="Image" class="img-fluid">                            
            </div>
            <span class="position-absolute tm-new-badge">New</span>
            <h2 class="tm-pt-30 tm-color-primary tm-post-title">Simple and useful HTML layout</h2>
        </a>                    
        <p class="tm-pt-30">
            There is a clickable image with beautiful hover effect and active title link for each post item. 
            Left side is a sticky menu bar. Right side is a blog content that will scroll up and down.
        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <span class="tm-color-primary">June 24, 2020</span>
        </div>
        <hr>
        
    </article>
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
            <div class=" tm-post-link-inner">
                <img src="{{ asset('frontend/img/img-02.jpg') }}" alt="Image" class="img-fluid">                            
            </div>
            <span class="position-absolute tm-new-badge">New</span>
            <h2 class="tm-pt-30 tm-color-primary tm-post-title">Multi-purpose blog template</h2>
        </a>                    
        <p class="tm-pt-30">
            <a rel="nofollow" href="https://templatemo.com/tm-553-xtra-blog" target="_blank">Xtra Blog</a>  is a multi-purpose HTML CSS template from TemplateMo website. 
            Blog list, single post, about, contact pages are included. Left sidebar fixed width and content area is a fluid full-width.
        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <span class="tm-color-primary">June 16, 2020</span>
        </div>
        <hr>

    </article>
</div>
<div class="row tm-row tm-mt-100 tm-mb-75">
    <div class="tm-prev-next-wrapper">
        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
    </div>
    <div class="tm-paging-wrapper">
        <span class="d-inline-block mr-3">Page</span>
        <nav class="tm-paging-nav d-inline-block">
            <ul>
                <li class="tm-paging-item active">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                </li>
            </ul>
        </nav>
    </div>                
</div>
@endsection