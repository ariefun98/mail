<?php

namespace zirvu\mail;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class MailController extends Controller
{
	
    public function view(Request $request)
    {
		$message = 'Welcome to mail!';
		return view('mail::view')
			->with('message', $message);
	}
}
