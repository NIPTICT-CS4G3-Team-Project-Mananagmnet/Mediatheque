@extends("admin.layout")

@section('stylesheet')
{{--    <link rel="stylesheet" href="{{ asset("css/upload_form_style.css") }}">--}}
    <link href="{{ asset('css/jquerysctipttop.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/styles.imageuploader.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section role="main" class="l-main" style="margin-top:150px;">

        <!-- <header class="site-header">
            <h1 class="site-title l-site-title">jQuery Image Uploader Plugin Demo</h1>
        </header> -->

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
            </div>
        </div>
        <div class="uploader__box js-uploader__box l-center-box">
            <form>
                <div class="uploader__contents">
                    <label class="button button--secondary" for="fileinput">Select Files</label>
                    <input id="fileinput" class="uploader__file-input" type="file" multiple value="Select Files">
                </div>
                <input class="button button--big-bottom" type="submit" value="Upload Selected Files">
            </form>
        </div>
    </section>
{{--    <form action="#" method="post" enctype="multipart/form-data">--}}
{{--        <input type="file" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple/>--}}
{{--        <input type="submit" name='submit_image' value="Upload Image"/>--}}
{{--    </form>--}}

{{--    <form>--}}
{{--        <div class="form-group">--}}
{{--            <label for="exampleInputEmail1">Email address</label>--}}
{{--            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
{{--            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
{{--        </div>--}}

{{--        <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--    </form>--}}


{{--    <div id="img_preview_container" class="row text-center text-lg-left">--}}
{{--        --}}{{-- image preview will come here--}}
{{--    </div>--}}
@endsection

@section('script')
{{--    $('form').ajaxForm(function()--}}
{{--    {--}}
{{--    alert("Uploaded SuccessFully");--}}
{{--    });--}}
@endsection

@section('javascript')
    <script src="{{ asset('js/jquery.imageuploader.js') }}"></script>
    <script>
        (function(){
            var options = {};
            $('.js-uploader__box').uploader(options);
        }());
        // function preview_image()
        // {
        //     var total_file=document.getElementById("upload_file").files.length;
        //     for(var i=0;i<total_file;i++)
        //     {
        //         $('#img_preview_container').append('<div class="col-lg-3 col-md-4 col-6"><a href="#" class="d-block mb-4 h-100"> <img class="img-fluid img-thumbnail" src="'+URL.createObjectURL(event.target.files[i])+'" alt=""> </a></div>');
        //     }
        // }
    </script>
@endsection
