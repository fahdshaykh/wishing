@extends('layouts.app')

@section('title', "$post->title | Wisherpro")


@section('content')
<div class="row tm-row">
    <div class="col-12">
        <hr class="tm-hr-primary tm-mb-55">
        <img src="{{ asset('post_images').'/'.$post->image }}" width="954" height="535" alt="Image" class="tm-mb-40 img-fluid">   
    </div>
</div>
<div class="row tm-row">
    <div class="col-lg-12 tm-post-col">
        <div class="">                    
            <div class="mb-4">
                <h2 class="pt-2 tm-color-primary tm-post-title"> {{ $post->title }} </h2>
                <p class="tm-mb-40"> {{ $post->created_at->diffForHumans(); }} </p>
                <p>
                    {!! $post->content !!}
                </p>
            </div>
            
            <!-- Quotes -->

              @foreach ($quotes as $quote)

              @php
                // $is_only_html = preg_match("#^(<[^>]*>)+$#", $quote);
                // $is_only_html = strip_tags($quote)
                $is_only_html = $quote->quote !== strip_tags($quote->quote);
                // echo $is_only_html;
              @endphp

                @if ($is_only_html)
                  
                {!! $quote->quote !!}

                @else

                <div class="box">
                  <p id="quotation-{{$quote->id}}" class="quote-text text-to-copy" data-copyid="{{$quote->id}}"> {{ strip_tags($quote->quote) }} </p>
                  <button class="copy-button" data-copyid="{{$quote->id}}" type="button" style="margin-top: -5%;float: right;">
                    <img src="https://s2.svgbox.net/octicons.svg?ic=copy" alt="Icon">
                  </button>
                </div>

                @endif
                
              @endforeach
            
            <!-- Quotes -->
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="text/javascript">

$('.copy-button').click(function() {
  var id = $(this).data('copyid');

  var textToCopy = $('.text-to-copy[data-copyid="' + id + '"]').text();

  // Create a temporary input element to hold the text
  var tempInput = $('<input>');
  $('body').append(tempInput);
  tempInput.val(textToCopy).select();
  document.execCommand('copy');
  tempInput.remove();

  alert('Text copied to clipboard!');
});

</script>

@endsection