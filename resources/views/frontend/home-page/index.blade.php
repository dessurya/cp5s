@extends('frontend._layouts.basic')

@section('title')
	<title>PT. Cahaya Panca Sukses Sentosa</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/home.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/product-index-list.css') }}">
@endsection

@section('body')
	<div id="banner" style="background-image: url('{{ asset('amadeo/images-base/home-banner.jpg') }}');">
		<div id="descrip">
			<h1>DISTRIBUTOR OF QUALITY PIPE</h1>
			<h3>USING THE RIGHT PIPES IS INVESTMENT</h3>
		</div>
	</div>

	<div id="about" class="after-banner">
		<img id="top" src="{{ asset('amadeo/images-base/banner-b.png') }}">
		<div id="set-wrapper">
			<h1>About Us</h1>
			<p>
				Cahaya Panca Sukses Sentosa an Indonesia-based company primaly ensased in distributing Steel Pipes and other steel profile.
			</p>
			<p>
				Our main office is stratesically located in the heart of Jakarta, with easy convenient and access.
			</p>
			<div class="text-center">
				<a href="{{ route('frontend.about') }}" class="btn-gray">Detail</a>
			</div>
		</div>
		<img id="bottom" src="{{ asset('amadeo/images-base/home-show-top.png') }}">
	</div>

	@if(isset($CategoryProduk[0]))
	<div id="show-top">
		<div id="set-wrapper">
			<div id="img">
				<img src="{{ asset('amadeo/images-base/'.$CategoryProduk[0]->img_category) }}">
			</div>
			<div id="descrip">
				<h1>{{ $CategoryProduk[0]->nama }}</h1>
				<p>
					{{ $CategoryProduk[0]->description }}
				</p>
				<a href="{{ route('frontend.product.index', ['slug'=>$CategoryProduk[0]->slug]) }}" class="btn-gray">Detail</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	@endif

	<div id="quotes" style="background-image: url('{{ asset('amadeo/images-base/home-quotes.png') }}');">
		<div id="set-wrapper">
			<h1>Spend Your Business Using High Quality Pipes</h1>
		</div>
	</div>

	@if(isset($CategoryProduk[1]))
	<div id="show-bottom">
		<div id="set-wrapper">
			<div id="img">
				<img src="{{ asset('amadeo/images-base/'.$CategoryProduk[1]->img_category) }}">
			</div>
			<div id="descrip">
				<h1>{{ $CategoryProduk[1]->nama }}</h1>
				<p>
					{{ $CategoryProduk[1]->description }}
				</p>
				<a href="{{ route('frontend.product.index', ['slug'=>$CategoryProduk[1]->slug]) }}" class="btn-gray">Detail</a>
			</div>
			<div class="clearfix"></div>
		</div>
		<img id="bottom" src="{{ asset('amadeo/images-base/home-show-bottom.png') }}">
	</div>
	@endif

	<div id="product">
		<div id="set-wrapper">
			<div id="title">
				<h1>Product</h1>
				<p>Lorem Ipsum is simply dummy text of the printing.</p>
			</div>
			<div id="product-index-list">
				@foreach($Produk as $list)
				<div class="bar">
					<div id="spacing">
						<a href="{{ route('frontend.product.view', ['slug'=>$list->category->slug, 'subslug'=>$list->slug]) }}">
							<div id="show">
								<div id="img" style="background-image: url('{{ asset('amadeo/images-base/lain/'.$list->img_produk) }}');"></div>
							</div>
						</a>
						<div id="descrip">
							<a href="{{ route('frontend.product.view', ['slug'=>$list->category->slug, 'subslug'=>$list->slug]) }}">
								<h3>{{ $list->nama }}</h3>
							</a>
							<p>{{ Illuminate\Support\Str::words($list->description, 15, "...") }}</p>
						</div>
					</div>	
				</div>
				@endforeach
				<div class="clearfix"></div>
			</div>
			<div class="text-center">
				<a href="{{ route('frontend.product') }}">All Product</a>
			</div>
		</div>
	</div>
@endsection

@section('script')
	
@endsection
