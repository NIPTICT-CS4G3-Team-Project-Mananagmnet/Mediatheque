@extends("admin.layout")

@section('stylesheet')
{{--    <link rel="stylesheet" href="{{ asset("css/upload_form_style.css") }}">--}}
    <link href="{{ asset('css/jquerysctipttop.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/styles.imageuploader.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <section role="main" class="l-main" style="margin-top:150px;">
        <div class="align_middle_of_html">
            <input type="file">
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

@endsection

@section('script')

@endsection

@section('javascript')
    <script src="{{ asset('js/jquery.imageuploader.js') }}"></script>
    <script>
        (function(){
            var options = {};
            $('.js-uploader__box').uploader(options);
        }());
    </script>
@endsection
