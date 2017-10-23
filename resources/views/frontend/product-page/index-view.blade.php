@extends('frontend._layouts.basic')

@section('title')
	<title>PT. Cahaya Panca Sukses Sentosa | {{ $CategoryProduk->nama }} : {{ $Produk->nama }}</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/product.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/product-index-view.css') }}">
@endsection

@section('body')
	<div id="banner" class="banner" style="background-image: url('{{ asset('amadeo/images-base/home-banner.jpg') }}');">
		<div id="descrip">
			<h1>DISTRIBUTOR OF QUALITY PIPE</h1>
			<h3>USING THE RIGHT PIPES IS INVESTMENT</h3>
		</div>
	</div>

	<div id="product" class="after-banner">
		<img id="top" src="{{ asset('amadeo/images-base/banner-b.png') }}">
		<div id="set-wrapper">
			<div id="img" class="bar">
				<div id="img-show" style="background-image: url('{{ asset('amadeo/images-base/lain/'.$Produk->img_produk) }}');"></div>
			</div>
			<div id="descrip" class="bar">
				<h1>{{ $Produk->nama }}</h1>
				<p>
					{{ $Produk->description }}
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<img id="botom" src="{{ asset('amadeo/images-base/after-banner-b.png') }}">
	</div>

@endsection

@section('script')
	
@endsection
