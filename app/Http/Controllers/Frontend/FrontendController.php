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
			$project_refren = [
				'Royal Springhill Project',
				'Sumerecon Gading Serpong',
				'Sumerecon Bekasi',
				'St. Moritz Apartemen and Mall',
				'Rasuna Office Tower',
				'Apartemen Regatta Project',
				'Kuningan Project',
				'Nestle Project',
				'P & G Project',
				'Guardian Project',
				'Enersis (Adem Sari Group) Project',
				'Sari Roti Project',
				'Honda Prospect Motor Project Krawang',
				'Metropolitan Mall Bekasi',
				'Hotel Margo and Mall Depok',
				'Alam Sutera Office Tower',
				'Giant Project BSD, Alam Sutera, Bekasi, etc.',
				'The Park Solo',
				'Cibinong Mall',
				'Hotel Pesona Alam',
				'MSIG Tower',
				'Hotel Pesona Alam',
				'Green Bay Condomonium',
				'Bintaro Life Style Mall',
				'Gading Greenhill',
				'Fujitsu Bogor',
				'GP Plaza',
				'Mercure Alam Sutra',
				'Cirebon Project',
				'Greenlake Apartement',
				'Holiday in Express Surabaya',
				'HPM. Project Karawang',
				'IKEA Project',
				'Royal Springhill 2 Project',
				'The Alana Sentul City',
				'Novotel Palembang',
				'Recamaya Bogor',
				'Klinik Anak Bandung',
				'Skyland Hotel Surabaya',
				'Indofood Hotel Surabaya',
				'Santika Bekasi Hotel',
				'Indofood Hotel Surabaya',
				'Santika Bekasi Hotel',
				'Telaga Sari Bandung',
				'Bintaro life Style Mall',
				'Maxiair Residance',
				'PIK Avenue (mall & Hotel)',
				'Unilever Medan',
				'RS Siloam & Mall Safir Jogja',
				'Whizz Bali',
				'Epicentrum Lombok',
				'Hotel Dafam Lampung',
				'Grand Daya Makasar',
				'The Royal Olive R',
				'Royal Spring Hill 2',
				'Hotel Cirebon',
				'Pajajaran Hotel',
				'Best Western Solo',
				'One Bell park',
				'Indofood Cibitung',
				'Hotel Renaissance Bali',
				'South Quarter',
				'GTU Project (Izzara)',
				'Springlake Apt. Bekasi',
				'Kuta Icon Mall, Bali',
				'paddington Project',
				'Pakuwon Mall Srb',
				'Balikpapan superblock',
				'Hotel Pop Surabaya',
				'Hotel Samasta Bali',
				'TFJ Factory, pasuruan',
				'TFJ Factory, Tanggerang',
				'TFJ Factory, Makasar',
				'Galery West AKR',
				'Mayora Factory',
				'Indopoly Factory',
				'Fastive Karawang',
				'SCBD Lot 10',
				'Bazura Project',
				'Bogor Valley',
				'Gramedia Project',
				'Springsport club serpong',
				'Bahana Tower',
				'The Tower',
				'Alana Hotel Solo',
				'Hartono Mall Jogja',
				'District 8 Langham',
				'Kirana Commercial Ave',
				'TFJ PALEMBANG',
				'Menara Astra',
				'Midtown Serpong',
				'Cocacola Pandaan',
				'Taman Anggrek',
				'AEON Mall Cakung',
				'Pakubuwono Spring',
				'MRT - (Shinryo)',
				'Menara Kompas',
				'Royal Suite Apart',
				'Proyek Senen Blok 3',
				'Proyek Crown Cikarang',
				'Proyek Mall Paskal Bandung',
				'RS. ST. Carolus - Salemba',
				'Transmart Menado',
				'Transmart Cirebon',
				'MPI Kemayoran Tahap 2',
				'RS. UKM Kopo Bandung',
				'Proyek Unilever Bekasi',
				'Proyek Midtown Office & Ibis Style',
				'Proyek PTC Palembang',
				'Proyek Bandara Kertajati Cirebon',
				'Proyek Mangkuhulur City',
				'Proyek Riverview Residence',
				'Proyek BTN',
				'Proyek RSIA Brawijaya Depok',
				'Proyek Five Hotel Madiun',
				'Proyek The Branz BSD',
				'Proyek Chombhipar Bandung',
				'Proyek TAMC'
			];
		    return view('frontend.about-page.index', compact('project_refren'));
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
				'name.required' 	=> 'required',
				'name.min' 		=> 'to short',
				'email.required'  => 'required',
				'email.email'  	=> 'format email salah',
				'telpon.required'	=> 'required',
				'telpon.min' 		=> 'to short',
				'telpon.max' 		=> 'to long',
				'subject.required'=> 'required',
				'subject.min' 	=> 'to short',
				'pesan.required'	=> 'required',
				'pesan.min' 		=> 'to short',
				'pesan.max' 		=> 'to long',
				'g-recaptcha-response.required'  => 'required',
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
