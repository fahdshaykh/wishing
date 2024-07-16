@extends('layouts.app')

@section('title','Welcome on wishing')

@section('content')

<div class="row tm-row">
    @foreach ($posts as $post)
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="{{ route('welcome.show', $post->id) }}" class="effect-lily tm-post-link tm-pt-60">
            <div class="tm-post-link-inner">
                <img src="{{ asset('post_images').'/'.$post->image }}" alt="Image" class="img-fluid">                            
            </div>
            <span class="position-absolute tm-new-badge">New</span>
            <h2 class="tm-pt-30 tm-color-primary tm-post-title"> {{ $post->title }} </h2>
        </a>                    
        <p class="tm-pt-30">

            @php
                $words = explode(' ', $post->content);
                $firstPart = implode(' ', array_slice($words, 0, 50));
            @endphp

            {!! $firstPart !!}

            @if (count($words) > 50)
                ... <a href="{{ route('welcome.show', $post->id) }}">Read More</a>
            @endif

        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <span class="tm-color-primary"> {{ $post->created_at->diffForHumans(); }} </span>
        </div>
        <hr>
        
    </article>
    @endforeach
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