<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout_style.css') }}">
    <title>Document</title>
</head>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="img_profile_container img-wrapper">
                    <img class="rounded rounded-circle mx-auto d-block" id="img_profile" src="{{ asset('img/profile_pic_1.png') }}" alt="profile picture">
                    <a href="#" id="camera_icon_container" class="rounded rounded-circle img-overlay">
                        <i id="camera_icon" class="fas fa-camera"></i>
                    </a>
                </div>
                <div class="text-center sideber-text mt-3 mb-0">
                    <div style="font-size: 18px; font-weight: bold;">Oh Ri Jin</div>
                    <div id="positionInfo" style="font-style: italic; display: none;">Camerwoman</div>
                    <div id="emailInfo" style="display: none;"><u>oh.ri.gin@gmail.com</u></div>

                    <div id="btnShowMoreInfo" title="show more profile information">
                        <i class="fas fa-caret-down"></i>
                    </div>
                </div>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="material-icons">cloud_upload</i>
                        <span>Upload Picture</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user-cog"></i>
                        Setting
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">
                                <i class="fas fa-user-edit"></i>
                                <span>Edit Account</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-key"></i>
                                <span>Change Password</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="article"><i class="fas fa-sign-out-alt"></i> Sign out</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info rounded rounded-circle d-flex align-items-center align-self-center">
                        <i class="fa fa-chevron-right"></i>
                    </button>
                    <div style="margin-left: 5px; font-size: 18px;">Mediatheque</div>
{{--                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                        <i class="fas fa-align-justify"></i>--}}
{{--                    </button>--}}
{{--                    <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                        <ul class="nav navbar-nav ml-auto">--}}
{{--                            <li class="nav-item active">--}}
{{--                                <a class="nav-link" href="#">Page</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="#">Page</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="#">Page</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="#">Page</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                    </div>--}}
                </div>
            </nav>

            </div>
    </div>


<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://kit.fontawesome.com/8d4428d323.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

        // button show more info
        $('#btnShowMoreInfo').click(function () {
            if($('#btnShowMoreInfo > i').attr('class') === 'fas fa-caret-down'){
                $('#btnShowMoreInfo').attr('title', 'hide profile information');

                $('#positionInfo').attr('style', 'font-style: italic; display: block;');
                $('#emailInfo').attr('style', 'display: block;');
                $('#btnShowMoreInfo > i').attr('class', 'fas fa-caret-up');
            }else{
                $('#btnShowMoreInfo').attr('title', 'show more profile information');

                $('#positionInfo').attr('style', 'font-style: italic; display: none;');
                $('#emailInfo').attr('style', 'display: none;');
                $('#btnShowMoreInfo > i').attr('class', 'fas fa-caret-down');
            }


        });
    });
</script>

</body>
</html>
