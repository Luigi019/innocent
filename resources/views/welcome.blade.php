@extends("layout.layoutMaster")

@section("title", "IS")
@section("content")
@include("inc.navbar")
@include("inc.gallery")
@include("inc.aboutus")
@include("inc.news")
@include("inc.contactus")

@endsection



@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">

@endsection