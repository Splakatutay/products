@extends('admin.layouts.app')

@section('content')

	<h1> PRODUCTS </h1>

	@foreach( $products as $product )
		<h3> {{ $product->name }} </h3>
	@endforeach

@endsection