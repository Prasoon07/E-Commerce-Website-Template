@extends('Frontend.main_body_panel')

@section('content')
    <!-- Slider -->
    @include('Frontend.slider')

	<!-- Banner -->
	@include('Frontend.banner')

    <!-- Product -->
	@include('Frontend.home_products')

    <!-- Modal1 -->
	@include('Frontend.products_modal_quick_view')
@endsection