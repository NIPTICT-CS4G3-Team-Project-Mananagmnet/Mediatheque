<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                <div class="text-center sideber-text mt-3 mb-2">
                    <div style="font-size: 18px; font-weight: bold;">{{ Auth::user()->name }}</div>
                    <div style="font-style: italic;">{{ Auth::user()->position }}</div>
                    <div><u>{{ Auth::user()->email }}</u></div>
                </div>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Upload Picture</a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Setting</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">

                                <span>Edit Account</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Change Password</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="{{ route('logout') }} class="article" onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Sign out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
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
    });
</script>

</body>
</html>
