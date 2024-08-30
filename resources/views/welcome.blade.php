@extends('layouts.app')

@section('title','Welcome to Wisherpro')

@section('content')

<div class="row tm-row">
    @foreach ($posts as $post)
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="{{ route('welcome.show', $post->slug) }}" class="effect-lily tm-post-link tm-pt-60">
            <div class="tm-post-link-inner">
                <img src="{{ asset('post_images').'/'.$post->image }}" alt="Image" class="img-fluid">                            
            </div>
            
            <h2 class="tm-pt-30 tm-color-primary tm-post-title"> {{ $post->title }} </h2>
        </a>                    
        <p class="tm-pt-30">

            @php
                $words = explode(' ', $post->content);
                $firstPart = implode(' ', array_slice($words, 0, 25));
            @endphp

            {!! $firstPart !!}

            @if (count($words) > 25)
                ... <a href="{{ route('welcome.show', $post->slug) }}">Read More</a>
            @endif

        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <span class="tm-color-primary"> {{ $post->created_at->diffForHumans(); }} </span>
        </div>
        <hr>
        
    </article>
    @endforeach
</div>

{{ $posts->links('vendor.pagination.custom') }}

@endsection