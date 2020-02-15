@extends('guests.parent')

@section('content')

<title>Searching Photo</title>
<link rel="stylesheet" href="{{ asset('css/searchPhoto.css') }}">
<div class="container">
  <br>
  <h4 align="center">Photo Seaching</h4>
  <div class="p-divider"></div><br>
  <div class="row">
    <div class="col-lg-5 col-md-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <h6>START DATE</h6>
        </div>
        <div class="col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <select id="day" class="search-field">
            <?php
            $start_date = 1;
            $end_date   = 31;
            for ($j = $start_date; $j <= $end_date; $j++) {
              echo '<option value=' . $j . '>' . $j . '</option>';
            }
            ?>
          </select>
        </div>
        <div class="col-lg-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <select id="month" class="search-field">
            <?php
            $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            $current_month = date('m');
            for ($i = 1; $i <= 12; $i++) {
              if ($i == $current_month) {
                echo '<option value="' . $i . '" selected>' . $months[$i - 1] . '</option>';
                continue;
              }
              echo '<option value="' . $i . '">' . $months[$i - 1] . '</option>';
            }
            ?>
          </select>
        </div>
        <div class="col-lg-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <select id="year" class="search-field">
            <?php
            echo '<option value="' . date('Y') . '">' . date('Y') . '</option>';
            for ($i = date('Y') - 1; $i >= 1950; $i--) {
              echo '<option value="' . $i . '">' . $i . '</option>';
            }
            ?>
          </select>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-md-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <h6>END DATE</h6>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <select id="day1" class="search-field" placeholder="Day">
            <?php
            $start_date = 1;
            $end_date   = 31;
            for ($j = $start_date; $j <= $end_date; $j++) {
              echo '<option value=' . $j . '>' . $j . '</option>';
            }
            ?>
          </select>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <select id="month1" class="search-field">
            <?php
            $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            $current_month = date('m');
            for ($i = 1; $i <= 12; $i++) {
              if ($i == $current_month) {
                echo '<option value="' . $i . '" selected>' . $months[$i - 1] . '</option>';
                continue;
              }
              echo '<option value="' . $i . '">' . $months[$i - 1] . '</option>';
            }
            ?>
          </select>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-3 col-xs-3">
          <select id="year1" class="search-field">
            <?php
            echo '<option value="' . date('Y') . '">' . date('Y') . '</option>';
            for ($i = date('Y') - 1; $i >= 1950; $i--) {
              echo '<option value="' . $i . '">' . $i . '</option>';
            }
            ?>
          </select>
        </div>
      </div>

    </div>
    <div class="col-lg-2 col-md-2">
      <button type="button" name="filter" id="filter" class="btn-primary">Filter</button>
    </div>
  </div><br>

  <div class="row justify-content-around">
    <div class="col-2">
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Category
          <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Album1</a></li>
          <li><a href="#">Album2</a></li>
          <li><a href="#">Album3</a></li>
        </ul>
        </button>
      </div>
    </div>
    <div class="col-2">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </div><br>
  <div class="row">
    <div class="col-lg-12">
      <h6>Match Found</h6>
      <hr class="divider">
      <div class="row">
        <div class="col-md-4 col-offset-4">
          <form class="form-inline btn_sumit">
            <i class="fas fa-search" aria-hidden="true"></i>
            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
          </form>
        </div>
      </div><br>
      <div class="row">
        @foreach ($all_data as $data)
        <div class="col-md-4 img-portfolio" style="margin-bottom: 30px;">
          <img src="{{$data[0]}}" alt=" ..." style="width: 100%"><br>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection