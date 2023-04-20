<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function menu()
    {
        return view('pages.menu');
    }

    public function booking()
    {
        return view('pages.booking');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function testimonial()
    {
        return view('pages.testimonial');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function orders(Request $request)
    {
        // return $request;
        DB::table('orders')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
        ]);

        return back();
    }

}
