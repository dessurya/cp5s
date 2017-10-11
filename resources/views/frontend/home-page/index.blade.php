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
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
			</p>
			<p>
				standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
			</p>
			<p>
				scrambled it to make a type specimen book. It has survived not only five centuries</p>
			</p>
			<div class="text-center">
				<a href="{{ route('frontend.about') }}" class="btn-gray">Detail</a>
			</div>
		</div>
	</div>

	<div id="pressure" style="background-image: url('{{ asset('amadeo/images-base/pressure-bg.png') }}');">
		<div id="descrip">
			<h1>Pressure Gauge</h1>
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
			</p>
			<a href="" class="btn-gray">Detail</a>
		</div>
		<div id="quotes">
			<h1>Spend Your Business Using High Quality Pipes</h1>
		</div>
	</div>

	<div id="product">
		<div id="set-wrapper">
			<div id="title">
				<h1>Product</h1>
				<p>Lorem Ipsum is simply dummy text of the printing.</p>
			</div>
			<div id="product-index-list">
				@for($a=0; $a<=2; $a++)
				<div class="bar">
					<div id="spacing">
						<a href="{{ route('frontend.product.view', ['slug'=>'slug-'.$a, 'subslug'=>'subslug-'.$a]) }}">
							<div id="show">
								<div id="img" style="background-image: url('{{ asset('amadeo/images-base/lain/3cce7076-95d9-4928-a7eb-a3ce01100bb7_800x663.jpg') }}');"></div>
							</div>
						</a>
						<div id="descrip">
							<a href="{{ route('frontend.product.view', ['slug'=>'slug-'.$a, 'subslug'=>'subslug-'.$a]) }}">
								<h3>Name Of Product</h3>
							</a>
							<p>Simple description of product on here...</p>
						</div>
					</div>	
				</div>
				@endfor
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
