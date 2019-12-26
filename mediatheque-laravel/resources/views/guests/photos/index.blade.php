@extends('guests.parent')

@section('content')
<img src="{{URL::asset('img/search-photo.jpg')}}"class="img img-responsive" alt="..." style="width: 100%">
<link rel="stylesheet" href="{{ asset('css/searchPhoto.css') }}">
<div class="container">
	<br><h4 align="center">Photo Seaching</h4>
	<div class="p-divider"></div><br>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<h6>START DATE</h6>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<h6>END DATE</h6>
		</div>
		
	</div><br>
	<div class="row">
		<div class="col-lg-12">
			<h6>Match Found</h6>
			<hr class="divider">
		</div>
	</div>
</div>
@endsection