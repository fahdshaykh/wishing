@extends('layouts.app')

@section('title','Welcome on wishing')

@section('content')
<div class="row tm-row">
    <div class="col-12">
        <hr class="tm-hr-primary tm-mb-55">
        <img src="{{ asset('frontend/img/img-01.jpg') }}" width="954" height="535" alt="Image" class="tm-mb-40 img-fluid">   
    </div>
</div>
<div class="row tm-row">
    <div class="col-lg-12 tm-post-col">
        <div class="">                    
            <div class="mb-4">
                <h2 class="pt-2 tm-color-primary tm-post-title">Single Post of Xtra Blog HTML Template</h2>
                <p class="tm-mb-40">June 16, 2020 posted by Admin Nat</p>
                <p>
                    This is a description of the video post. You can also have an image instead of
                    the video. You can free download 
                    from TemplateMo website. Phasellus maximus quis est sit amet maximus. Vestibulum vel rutrum
                    lorem, ac sodales augue. Aliquam erat volutpat. Duis lectus orci, blandit in arcu
                    est, elementum tincidunt lectus. Praesent vel justo tempor, varius lacus a,
            pharetra lacus. </p>
                <p>
                    Duis pretium efficitur nunc. Mauris vehicula nibh nisi. Curabitur gravida neque
                    dignissim, aliquet nulla sed, condimentum nulla. Pellentesque id venenatis
                    quam, id cursus velit. Fusce semper tortor ac metus iaculis varius. Praesent
                    aliquam ex vel lectus ornare tristique. Nunc et eros quis enim feugiat tincidunt
                    et vitae dui.
                </p>
            </div>
            
            <!-- Comments -->
            
        </div>
    </div>
</div>
@endsection