@extends('guests.parent')

@section('content')
<title>Photo Albums</title>
<link rel="stylesheet" href="{{ asset('css/searchPhoto.css') }}">

<div class="container">
	<br><h5 align="center">Photo Albums</h5>
	<div class="p-divider"></div><br>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<h6>START DATE</h6>
				</div>
				<div class="col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<select id="day" class="search-field">
						<?php 
				          	$start_date = 1;
							$end_date   = 31;
							echo '<option value="0">Day</option>';
				          	for( $j=$start_date; $j<=$end_date; $j++ ) {
				            echo '<option value='.$j.'>'.$j.'</option>';
				          	}
        				?>
					</select>
				</div>
				<div class="col-lg-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<select id="start-month" class="search-field">
						@php
                            $months = ['Month','January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                            $current_month = date('m');
                            for($i = 0; $i <= 12; $i ++){
                                // if($i == $current_month){
                                //     echo '<option value="'.$i.'" selected>'.$months[$i].'</option>';
                                //     continue;
                                // }
                                echo '<option value="'.$i.'">'.$months[$i].'</option>';
                            }
                        @endphp
					</select>
				</div>
				<div class="col-lg-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<select id="end-year" class="search-field">
						@php
							echo '<option value="0">Year</option>';
							echo '<option value="'.date('Y').'" selected>'.date('Y').'</option>';
                            for($i = date('Y') - 1 ; $i >= date('Y')-10; $i--){
								echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                        @endphp
					</select>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<h6>END DATE</h6>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<select id="day1" class="search-field" placeholder="Day">
						<?php 
				          	$start_date = 1;
							$end_date   = 31;
							echo '<option value="0">Day</option>';
				          	for( $j=$start_date; $j<=$end_date; $j++ ) {
				            echo '<option value='.$j.'>'.$j.'</option>';
				          	}
        				?>
					</select>
					
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<select id="end-month" class="search-field">
						@php
                            $months = ['Month','January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                            $current_month = date('m');
                            for($i = 0; $i <= 12; $i ++){
                                // if($i == $current_month){
                                //     echo '<option value="'.$i.'" selected>'.$months[$i].'</option>';
                                //     continue;
                                // }
                                echo '<option value="'.$i.'">'.$months[$i].'</option>';
                            }
                        @endphp
					</select>
				</div>
				<div class="col-lg-3 col-md-2 col-sm-3 col-xs-3">
					<select id="end-year" class="search-field">
						@php
							echo '<option value="0">Year</option>';
                            echo '<option value="'.date('Y').'" selected>'.date('Y').'</option>';
                            for($i = date('Y') - 1 ; $i >= date('Y')-10; $i--){
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                        @endphp
					</select>
				</div>
			</div>
			
		</div>
	</div><br>
	<div  class="row">
		<div class="col-md-4 col-offset-4">
			<form class="form-inline btn_sumit">
	  			<i class="fas fa-search" aria-hidden="true"></i>
	  			<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
			</form>
		</div>
	</div><br>
	<div class="row">
		@foreach ($all_data as $data)
		<div class="col-md-4 img-portfolio">
			
			<h6><a href="">{{$data[0]}}</a> </h6>
			<a href=""><img src="{{$data[2]}}"" alt="..." style="width: 100%"></a><br>
			<div class="text-block">{{$data[1]}} items</div>
			
		</div>
		@endforeach
		
        {{-- <div class="col-md-4 img-portfolio">
        	<h6><a href="">Seminar</a> </h6>
			<a href=""><img src="{{URL::asset('img/albums/seminar.jpg')}}"class="img img-responsive" alt="..." style="width: 100%"></a>
			<div class="text-block">26 items</div>            
        </div>
        <div class="col-md-4 img-portfolio">
        	<h6><a href="">Charity</a></h6>
			<a href=""><img src="{{URL::asset('img/albums/charity.jpg')}}"class="img img-responsive" alt="..." style="width: 100%"></a>
			<div class="text-block">30 items</div>
        </div> --}}
    </div><br>

    {{-- <div class="row">
        <div class="col-md-4 img-portfolio">
        	<h6><a href="">Farewell Party</a></h6>
			<a href=""><img src="{{URL::asset('img/albums/farewell.jpg')}}"class="img img-responsive" alt="..." style="width: 100%"></a>
			<div class="text-block">32 items</div>
        </div>
        <div class="col-md-4 img-portfolio">
        	<h6><a href="">Gala Dinner</a></h6>
			<a href=""><img src="{{URL::asset('img/albums/gala_dinner.jpg')}}"class="img img-responsive" alt="..." style="width: 100%"></a>
			<div class="text-block">28 items</div>
        </div>
        <div class="col-md-4 img-portfolio">
        	<h6><a href="">Christmas Party</a></h6>
			<a href=""><img src="{{URL::asset('img/albums/christmas_party.jpg')}}"class="img img-responsive" alt="..." style="width: 100%"></a>
			<div class="text-block">30 items</div>
        </div>
    </div> --}}
</div>
<br>

<script src="{{URL::asset('js/date.js')}}"></script>
@endsection