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
					@for($a=0; $a<=6; $a++)
					<div class="bar">
						<a href="{{ route('frontend.product.index', ['slug'=>'slug-'.$a]) }}">
							<div id="spacing">
								<div id="show">
									<div id="img" style="background-image: url('{{ asset('amadeo/images-base/lain/3cce7076-95d9-4928-a7eb-a3ce01100bb7_800x663.jpg') }}');">
										<div id="descrip">
											<h1>Name Of Product</h1>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					@endfor
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<img id="botom" src="{{ asset('amadeo/images-base/after-banner-b.png') }}">
	</div>

@endsection

@section('script')
	
@endsection
