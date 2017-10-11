<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use Validator;

class FrontendController extends Controller
{
    // home
		function home() {
		    return view('frontend.home-page.index');
		}
	// home

	// about
		function about() {
		    return view('frontend.about-page.index');
		}
	// about

	// product
		function product() {
		    return view('frontend.product-page.index');
		}
		function productIndex($slug) {
			$slug = $slug;
		    return view('frontend.product-page.index-list', compact(
		    	'slug'
		    ));
		}
		function productView($slug, $subslug) {
			$slug = $slug;
			$subslug = $subslug;
		    return view('frontend.product-page.index-view', compact(
		    	'slug',
		    	'subslug'
		    ));
		}
	// product

	// contact
		function contact() {
		    return view('frontend.contact-page.index');
		}
		function contactStore(Request $request){
			$message = [
				'name.required' 	=> 'dibutuhkan',
				'name.min' 		=> 'terlalu pendek',
				'email.required'  => 'dibutuhkan',
				'email.email'  	=> 'format email salah',
				'telpon.required'	=> 'dibutuhkan',
				'telpon.min' 		=> 'terlalu pendek',
				'telpon.max' 		=> 'terlalu panjang',
				'subject.required'=> 'dibutuhkan',
				'subject.min' 	=> 'terlalu pendek',
				'pesan.required'	=> 'dibutuhkan',
				'pesan.min' 		=> 'terlalu pendek',
				'pesan.max' 		=> 'terlalu panjang',
				'g-recaptcha-response.required'  => 'dibutuhkan',
		    ];

		    $validator = Validator::make($request->all(), [
				'name' 	=> 'required|min:3',
				'email' 	=> 'required|email',
				'telpon'	=> 'required|min:8|max:22',
				'subject'	=> 'required|min:3',
				'pesan' 	=> 'required|min:10|max:580',
				'g-recaptcha-response' => 'required',
			], $message);

		    if($validator->fails()){
		        return redirect()
		        	->route('frontend.contact')
		        	->withErrors($validator)
		        	->withInput()
		        	->with('autofocus', true)
		        	->with('info', 'terjadi kesalahan...!')
		        	->with('alert', 'alert-danger');
		    }

		    if(!str_contains($request->email, ['gmail', 'yahoo', 'ymail', 'hotmail'])){
		        return redirect()
		          ->route('frontend.contact')
		          ->with('autofocus', true)
		          ->with('info', 'Terimakasih')
		          ->with('alert', 'alert-success');
		    }
		    if(str_contains($request->pesan, ['href', 'http', 'https', 'porn', 'pocker'])){
		        return redirect()
		          ->route('frontend.contact')
		          ->with('autofocus', true)
		          ->with('info', 'Terimakasih')
		          ->with('alert', 'alert-success');
		    }

		    // DB::transaction(function() use($request){
		        
		    //     $save = new Kontak;
		    //     $save->nama = $request->name;
		    //     $save->email = $request->email;
		    //     $save->telepon = $request->telpon;
		    //     $save->subyek = $request->subject;
		    //     $save->pesan = $request->pesan;
		    //     $save->save();

		    //     $getSendTo = General::first();

		    //     try {
		    //       Mail::send('frontend.kontak-page.mail', ['request' => $request], function($message) use ($request, $getSendTo) {
		    //         $message->from('administrator@pancalogam.com', 'Administrator')
		    //                 ->to($getSendTo->email_to);
		    //         if ($getSendTo->email_cc != null) {
		    //                 $message->cc($getSendTo->email_cc);
		    //         }
		    //                 $message->subject('New Inbox From : '.$request->email);
		    //       });
		    //     } catch (\Exception $e) {
		    //       // dd($e);
		    //     }
		    // });

			return redirect()
				->route('frontend.contact')
				->with('autofocus', true)
				->with('info', 'Berhasil')
				->with('alert', 'alert-success');
	  	}
	// contact
}
