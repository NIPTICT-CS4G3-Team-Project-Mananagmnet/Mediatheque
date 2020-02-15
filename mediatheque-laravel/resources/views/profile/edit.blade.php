@extends('admin.layout')

@section('stylesheet')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('css/jquery.toast.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/cropper.css') }}"> -->
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg bg-primary text-light">{{ __('Edit Account') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/'.Auth::user()->id).'/profile_update'}}" enctype="multipart/form-data">
{{--                    <form method="POST" action="#" enctype="multipart/form-data">--}}
                        @csrf
                        
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->name }}" id="name" name="name"  placeholder="{{('name')}}">
{{--                                <input type="text" class="form-control" value="" id="name" name="name"  placeholder="{{('name')}}">--}}

                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" value="{{ Auth::user()->email }}" class="form-control" id="email" name="email" placeholder="{{('email')}}">
{{--                                <input type="text" value="" class="form-control" id="email" name="email" placeholder="{{('email')}}">--}}

                            </div>
                            <div class="form-group">
                                <label for="position">Position</label>
                                <input type="text" value="{{ Auth::user()->position }}" class="form-control" id="position" name="position" placeholder="Position">
{{--                                <input type="text" value="" class="form-control" id="position" name="position" placeholder="Position">--}}

                            </div>

                            <div class="form-group">
                                <label for="photo">{{ __('Photo') }}</label>
                                <div class="avatar" id="avatar">
                                    <img id="photo"  src="{{asset(Auth::user()->photo)}}" alt="">
                                    <div class="avatar1">
                                        <p class="text-center text-light">Choose</p>
<!-- {{--                                        <input type="file" id="photoInput" name="photo">--}} -->
                                        <input type="file" value="{{ Auth::user()->photo}}" id="photoInput" name="photo" onchange="document.getElementById('photo').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                </div>
                                <input type="hidden" name="cropedImage" value=""/>
                            </div>
                        </div>

                      

                        <button type="submit" class="btn btn-primary float-right">save</button>
                        {{--                                </div>--}}
                    </form>
                    <div>

                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection

@section('script')

@endsection
