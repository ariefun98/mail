<?php

namespace zirvu\mail;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class MailController extends Controller
{

    public function view(Request $request)
    {
		$title = 'Mail';
		return view('mail::view')
			->with('title', $title);
	}
}
