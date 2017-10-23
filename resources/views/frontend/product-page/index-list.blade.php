@extends('frontend._layouts.basic')

@section('title')
	<title>PT. Cahaya Panca Sukses Sentosa | {{ $CategoryProduk->nama }}</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/product.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/product-index-list.css') }}">
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
			<h1>{{ $CategoryProduk->nama }}</h1>
			<p>
				{{ $CategoryProduk->description }}
			</p>
			
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
		</div>
		<img id="botom" src="{{ asset('amadeo/images-base/after-banner-b.png') }}">
	</div>

@endsection

@section('script')
	
@endsection
