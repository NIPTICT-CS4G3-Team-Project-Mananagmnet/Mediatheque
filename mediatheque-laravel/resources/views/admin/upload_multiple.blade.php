@extends("admin.layout")

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/upload_form_style.css") }}">
@endsection

@section('content')
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple/>
        <input type="submit" name='submit_image' value="Upload Image"/>
    </form>
    <div id="image_preview"></div>

    <div id="imgPreviewContainer" class="row text-center text-lg-left">
{{--        image preview will come here--}}
    </div>
@endsection

@section('script')
    $('form').ajaxForm(function()
    {
    alert("Uploaded SuccessFully");
    });
@endsection

@section('javascript')
    <script>
        function preview_image()
        {
            var total_file=document.getElementById("upload_file").files.length;
            for(var i=0;i<total_file;i++)
            {
                $('#imgPreviewContainer').append('<div class="col-lg-3 col-md-4 col-6"><a href="#" class="d-block mb-4 h-100"> <img class="img-fluid img-thumbnail" src="'+URL.createObjectURL(event.target.files[i])+'" alt=""> </a></div>');
            }
        }
    </script>
@endsection
