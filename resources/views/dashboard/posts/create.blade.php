@extends('dashboard.layouts.admin')

@section('script')

<script src="{{asset('admin/assets/bundles/datatables/datatables.min.js')}}"></script>
<script src="{{asset('admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/js/page/datatables.js')}}"></script>

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form method="post" action="{{ route('posts.store') }}" class="needs-validation" novalidate="" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-header">
                    <h4>Create Booking</h4>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label>Select category</label>
                        <select class="form-control" name="category_id" required="">
                          <option value="">Select Category</option>
                          @foreach ($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->title }}</option>
                          @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{old('title')}}" class="form-control" required="">
                        <div class="invalid-feedback">
                            Enter Customer name.
                        </div>
                    </div>
                    
                    <div class="form-group mb-2">
                        <label>Content</label>
                        <textarea class="form-control" name="content"></textarea>
                    </div>

                    
                    <div id="items" class="form-group">
                        <label class="col-md-12 control-label" for="textinput">Quotes</label>
                      <div class="col-md-12 margin-bottom">
                        <input id="textinput" name="quote[]" type="text" placeholder="Enter quotes" class="form-control input-md" required="">
                      
                      </div>
                    </div>
                    

                    <div class="float-right">
                        <button id="add" class="btn add-more button-yellow uppercase" type="button">+ Add multiple quotes</button>
                        <button class="delete btn button-white uppercase">- Remove quotes</button>
                    </div>
                

                    <div class="form-group mb-2">
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" />
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>
                </div>


                

                <div class="card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
  $(".delete").hide();
  //when the Add Field button is clicked
  $("#add").click(function(e) {
    $(".delete").fadeIn("1500");
    //Append a new row of code to the "#items" div
    $("#items").append(
      '<div class="next-referral col-12"><input id="textinput" name="quote[]" type="text" placeholder="Enter quotes" class="form-control input-md mt-2"></div>'
    );
  });
  $("body").on("click", ".delete", function(e) {
    $(".next-referral").last().remove();
  });
});

</script>