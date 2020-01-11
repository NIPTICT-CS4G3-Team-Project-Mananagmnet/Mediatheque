<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    </head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg bg-primary text-light">{{ __('Profile') }}</div>

                        <div class="card-body">
                        <form method="POST" action="{{ url('/'.Auth::profile()->id.'/update_profile') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" id="name" name="name"  placeholder="{{('name')}}">
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" value="{{ Auth::user()->email }}" class="form-control" id="email" name="email" placeholder="{{('email')}}">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position</label>
                                        <input type="text" value="{{ Auth::user()->position }}" class="form-control" id="position" name="position" placeholder="Position">
                                       
                                    </div>

                                    <div>
                                        <input type="file" value="{{ Auth::user()->photo }}" id="photo" name="photo">
                                    </div> 
                                    <br>  
                                    

                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </form>
                        <div>
                                
                    </div>
                </div>
            </div>

            
        
        </div>
    </div>