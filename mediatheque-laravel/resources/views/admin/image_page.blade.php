@extends('admin.layout')

@section('content')

    <div class="container">
        <div class="row">

            @foreach ($photos as $photo)
                <div class="col-4 mb-3">
                    <div class="card" style="width: 20rem;">
                        <img src="{{ asset('uploads/'. $photo->path) }}" alt="" class="card-img-top" style="height: 180px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $photo->name }}</h5>
                            <p class="card-text">{{ $photo->description }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="/admin/edit_image_page/{{ $photo->id }}"><button type="button" class="btn btn-success" style="width: 80px;">Edit</button></a>
                            <a href="#"><button type="button" class="btn btn-danger" style="width: 80px;">Delete</button></a>
                        </div>
                    </div>
                </div>

                
            @endforeach
            
        </div>
    </div>
    
@endsection