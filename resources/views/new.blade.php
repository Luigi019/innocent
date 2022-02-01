@extends("layout.layoutMaster")

@section("title", "IS - Noticias")
@section("content")

@if (Session::has('mensaje'))
	<div class="alert alert-success alert-dismissible" role="alert">

	{{	Session::get('mensaje')}}


	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	@endif
	
@include("inc.allnews") 
@include("inc.contactus") 
@endsection



@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">

@endsection