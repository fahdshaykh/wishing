@extends('layouts.app')

@section('title','Welcome on wishing')


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
                    {{ $post->content }}
                </p>
            </div>
            
            <!-- Comments -->

            @foreach ($post->quotes as $post)
              <div class="box">
                <p id="quotation-{{$post->id}}" class="quote-text"> {{ $post->quote }} </p>
                <button class="button" type="button" onClick="copyToClipboard('#quotation-{{$post->id}}')" style="margin-top: -5%;float: right;">
                  <img src="https://s2.svgbox.net/octicons.svg?ic=copy" alt="Icon">
                </button>
              </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">

// COPY TO CLIPBOARD
function copyToClipboard(textSelector) {
  const textToCopy = document.querySelector(textSelector);
  const selection = window.getSelection();
  const range = document.createRange();
  
  range.selectNodeContents(textToCopy);
  selection.removeAllRanges();
  selection.addRange(range);
  
  document.execCommand('copy');
  selection.removeAllRanges();

  // Custom feedback
  alert('Text copied: ' + textToCopy.textContent);
}

</script>

@endsection