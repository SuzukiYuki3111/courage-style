<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    public function welcome()
    {
	    return view('welcome');
    }

    public function contact()
    {
        // 1
	    $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contents' => 'required',
	    ]);

        // 2
	    $contact = \App\Models\Contact::create($data);

        $mail = new \App\Mail\ContactReceived($contact);
        $mail->subject('Contact Received From My Profile Site.');
        // dd($mail);
        Mail::to('yukicourage3111@gmail.com')
        ->send($mail);
	    // \Illuminate\Support\Facades\Mail::to(env('MAIL_FROM_ADDRESS', 'yukicourage3111@gmail.com'))
		//     ->send($mail);

        session()->flash('contact_result', 'メッセージが送信されました！');


	    // 3
	    return back();
    }
}
