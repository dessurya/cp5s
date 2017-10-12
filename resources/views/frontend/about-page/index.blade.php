@extends('frontend._layouts.basic')

@section('title')
	<title>PT. Cahaya Panca Sukses Sentosa | About</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/about.css') }}">
@endsection

@section('body')
	<div id="banner" class="banner" style="background-image: url('{{ asset('amadeo/images-base/home-banner.jpg') }}');">
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
				Cahaya Panca Sukses Sentosa an Indonesia-based company primaly ensased in distributing Steel Pipes and other steel profile. Our main office is stratesically located in the heart of Jakarta, with easy convenient and access.
			</p>
			<p>
				Competitive price and good quality services are our main priorities. Along with continuous innovation and qualified team members with numerous field experiences, and other intangible resources such as reputable and good networking with local and international suppliers, we believe we can provide our customers with products that will be most satisfying and in accordance with their needs.
			</p>
			<p>
				In today's dynamic modern growing - evolving world, infrastructures development is inevitable. Higher needs for Steel-Pipes, piping systems, and other industrial iron materials will be our main focus in advancing domestic industrial growth.
			</p>
			<h1>Our Vision</h1>
			<p>
				To become a market leader in Steel-Pipes and other iron materials distribution in Indonesia, with products and immediate services exceeding quality requirements.
			</p>
			<h1>Our Mission</h1>
			<p>
				Restless innovation and continuous upgrade in products and services knowledge. Providing quality products and reliable services, being the preferred supplier of our customers
			</p>
			<h1>Staff Team</h1>
			<p>
				We understand that trust is needed as the strongest base in any relationship, through our staff members, made up of people from different backgrounds with conducted experiences, friendly, personable, and fully committed to provide the best service, we hope to foster growth and promote enduring busniess ties with our clients.
			</p>
			<h1>Project and Reference</h1>
			<ul>
				@foreach($project_refren as $list)
				<li>
					<label>
						{{ $list }}
					</label>
				</li>
				@endforeach
			</ul>
			<div class="clearfix"></div>
		</div>
		<img id="botom" src="{{ asset('amadeo/images-base/after-banner-b.png') }}">
	</div>

@endsection

@section('script')
	
@endsection
