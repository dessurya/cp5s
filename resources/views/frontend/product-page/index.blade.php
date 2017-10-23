@extends('frontend._layouts.basic')

@section('title')
	<title>PT. Cahaya Panca Sukses Sentosa | Product</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/product.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/product-index.css') }}">
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
			<h1>Product</h1>
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
			</p>
			<p>
				Lorem Ipsum is simply dummy text of the
			</p>
			
			<div id="list">
				<div class="rows">
					@foreach($CategoryProduk as $list)
					<div class="bar">
						<a href="{{ route('frontend.product.index', ['slug'=>$list->slug]) }}">
							<div id="spacing">
								<div id="show">
									<div id="img" style="background-image: url('{{ asset('amadeo/images-base/'.$list->img_category) }}');">
										<div id="descrip">
											<h1>{{ $list->nama }}</h1>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					@endforeach
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<img id="botom" src="{{ asset('amadeo/images-base/after-banner-b.png') }}">
	</div>

@endsection

@section('script')
	
@endsection
