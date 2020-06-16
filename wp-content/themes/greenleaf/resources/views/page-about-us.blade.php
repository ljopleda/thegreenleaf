@extends('layouts.app')

@section('content')
	<div class="main_container about-page">
		<div class="overlay"></div>
  	@include('partials.about-us-banner')
  	@include('partials.about-us-content')
	</div>
@endsection
