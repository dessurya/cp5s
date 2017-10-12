@extends('frontend._layouts.basic')

@section('title')
	<title>PT. Cahaya Panca Sukses Sentosa | Contact</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/contact.css') }}">
@endsection

@section('body')
	<div id="contacts" class="after-banner">
		<img id="top" src="{{ asset('amadeo/images-base/banner-b.png') }}">
		<div id="set-wrapper">
			<h1>Contact</h1>
			
			<div id="maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9672184751503!2d106.82671841431291!3d-6.135106995557875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1e02af564ea9%3A0xfdc3a529e38159eb!2sPrimalayan+Citra+Mandiri.+PT+(Datascrip+Service+Center)!5e0!3m2!1sid!2sid!4v1507604868031" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div id="contect-wrapper">
				<div id="descrip" class="bar">
					<h2>Address</h2>
					<div class="rows">
						<div class="cell">
							<img src="{{ asset('amadeo/images-base/icon-location.png') }}">
						</div>
						<div class="cell">
							<p>Jln. Kapuk Raya No 88, Samping Ruko Grisenda Jakarta Utara</p>
						</div>
					</div>
					<h2>Phones</h2>
					<div class="rows">
						<div class="cell">
							<img src="{{ asset('amadeo/images-base/icon-phone.png') }}">
						</div>
						<div class="cell">
							<p>021 6192424</p>
							<p>021 5417203</p>
						</div>
					</div>
					<h2>E-mail</h2>
					<div class="rows">
						<div class="cell">
							<img src="{{ asset('amadeo/images-base/icon-mail.png') }}">
						</div>
						<div class="cell">
							<p>pancalogam@ymail.com</p>
						</div>
					</div>
				</div>
				<div id="information" class="bar">
					<h2>Information</h2>
					<form class="form-style" method="post" action="{{ route('frontend.contact.store') }}">
						@if(Session::has('alert'))
							<script>
							  window.setTimeout(function() {
							    $("#alret-form-kontak").fadeTo(700, 0).slideUp(700, function(){
							        $(this).remove();
							    });
							  }, 5000);
							</script>
					        <div id="alret-form-kontak" class="alert {{ Session::get('alert') }}">
					        	<strong>{{ Session::get('info') }}</strong>
					        </div>
						@endif
				        {{ csrf_field() }}
				        <div class="float margin">
					        @if($errors->has('name'))
								<span>{{ $errors->first('name')}}</span>
							@endif
							<input 
								type="text" 
								name="name"
								placeholder="Name"
								value="{{ old('name') }}"
								{{ Session::has('autofocus') ? 'autofocus' : ''}}
							>
				        	
				        	@if($errors->has('telpon'))
								<span>{{ $errors->first('telpon')}}</span>
							@endif
				        	<input 
								type="text" 
								name="telpon"
								placeholder="Phone"
								onkeypress="return isNumber(event)"
								value="{{ old('telpon') }}"
							>
				        </div>
				        <div class="float">
							@if($errors->has('email'))
								<span>{{ $errors->first('email')}}</span>
							@endif
							<input 
								type="text" 
								name="email"
								placeholder="Email" 
								value="{{ old('email') }}"
							>
							
							@if($errors->has('subject'))
								<span>{{ $errors->first('subject')}}</span>
							@endif
							<input 
								type="text" 
								name="subject"
								placeholder="Subject" 
								value="{{ old('subject') }}"
							>
				        </div>
						<div class="clearfix"></div>
						@if($errors->has('pesan'))
							<span>{{ $errors->first('pesan')}}</span>
						@endif
						<textarea 
							name="pesan" 
							placeholder="Message"
							rows="2" 
						>{{ old('pesan') }}</textarea>
						<div class="submit-wrapper">
							@if($errors->has('g-recaptcha-response'))
								<span>{{ $errors->first('g-recaptcha-response')}}</span>
							@endif
							<div class="g-recaptcha" data-sitekey="6LfHAS4UAAAAAIR34oekoJOvk9WzQhc6utDRv9vK" data-callback="submitThisForm"></div>
							<button id="submit" class="btn-purple" type="submit">SUBMIT</button>
							<div class="clearfix"></div>
						</div>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<img id="botom" src="{{ asset('amadeo/images-base/after-banner-b.png') }}">
	</div>

@endsection

@section('script')
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
@endsection
