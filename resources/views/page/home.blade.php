@extends('index.index')
@section('title')
Thư viện số UTT
@endsection
@section('header')
	@include('page.header')
	@include('page.mainmenu')
@endsection
@section('content')
	@include('page.slide')
	@include('page.content')
@endsection
@section('footer')
	@include('page.footer')
@endsection