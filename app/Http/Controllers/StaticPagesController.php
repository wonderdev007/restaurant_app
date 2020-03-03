<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class StaticPagesController extends Controller
{
    public function home() {
        return view('home');
    }
    public function about() {
        return view('pages/about');
    }
    public function contact() {
        return view('pages/contact');
    }
    public function reservations() {
        return view('pages/reservations');
    }
    public function offers() {
        return view('pages/offers');
    }
    public function registerMember() {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string']
        ]);

        $member = new Member();
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();

        return redirect('/offers/thank-you');
    }
    public function offersThankYou() {
        return view('/pages/thank-you');
    }

    public function menu() {
        return view('menu/index');
    }
    public function singleMenu() {
        return view('menu/single-menu');
    }
}
