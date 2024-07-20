<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xtra Blog</title>
	
    @include('layouts.style')
</head>
<body>
	<header class="tm-header" id="tm-header">
        @include('layouts.header')
    </header>

    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" action="{{ route('search.posts') }}" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="search" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div> 
                       

            @yield('content')
            
            
            
        </main>
    </div>
    @include('layouts.script')
    @yield('scripts')

</body>
</html>