@extends('admin.layout')

@section('content')

    <div class="container">

        <div class="jumbotron">

                <div class="row">
                        <div class="col-md-8">
                            
                        </div>
        
                        <div class="col-md-4">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addNewCategory">
                                Add New Category
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="addNewCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">New Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/add_new_category" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="category">Category Name</label>
                                                    <input type="text" class="form-control" id="category" name="categoryName">
                                                </div>
        
                                                <button type="submit" class="btn btn-success" id="btn_save">Save</button>
                                            </form>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
              
                        </div>
                    </div>    
    
        <form action="/admin/update_image/{{ $photos['id'] }}" method="POST" enctype="multipart/form-data" id="upload_single_form" onclick="clear()">
            @csrf
            {{ method_field('PUT') }}

            <div class="form-group row">
                    <label for="category" class="col-sm-1 col-form-label dropdownCategory">Category</label>
                    <div class="col-sm-4">

                                <select class="form-control" id="category" name="select_category">

                                    <?php
                                       $servername = "localhost";
                                       $username = "root";
                                       $password = "";
                                       $dbname = "mediatheque";

                                       // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $sql = "SELECT id, category FROM categories ";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "<option value='{$row['category']}'>{$row['category']}</option>";
                                            }
                                        } else {
                                            echo "<option value=''></option>";
                                        }
                                        $conn->close();
                                    ?>
                                    
                                </select>
            
                    
                    </div>
                </div>
            
            <div class="form-group">
                <label for="input1">Album Name</label>
                <input type="text" class="form-control" id="input1" name="album" value="{{ $photos['album_name'] }}">
            </div>

            <div class="form-group">
                <label for="input2">Name</label>
                <input type="text" class="form-control" id="input1" name="name_pic" value="{{ $photos['name'] }}">
            </div>

            <div class="form-group">
                <label for="inputDate">Date</label>
                <input type="date" max="3000-12-31" 
                       min="1000-01-01" class="form-control" id="inputDate" name="date" value="{{ $photos['date'] }}">
            </div>
            
            <div class="form-group">
                <label for="input3">Description</label>
                <input type="text" class="form-control" id="input3" name="des" value="{{ $photos['description'] }}">
            </div>

            <div class="form-group">
                <label for="input4">Image File</label>
            <input type="file" class="form-control" id="input4" name="image" value="{{ $photos['path'] }}" onchange="showImage.call(this)">
                <img src="{{ asset('uploads/'. $photos['path'] ) }}" alt="" style="height:200px; margin-top:10px;" id="img">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>

@endsection


@section('javascript')

    <script>

        function clear(){
            document.getElementById("upload_single_form").reset();
        }
        
    </script>

    <script>

        $('#btn_save').on('click', function(){
            var data = $('#category').val();

            Swal.fire($data);
        })
    </script>

    // function display image after choose file
    <script>
        function showImage(){
            if (this.files && this.files[0]){
                var obj = new FileReader();

                obj.onload = function(data){
                    var image = document.getElementById("img");

                    image.src = data.target.result;
                    image.style.display = "block";

                }

                obj.readAsDataURL(this.files[0]);
            }
        }

    </script>
    
@endsection

