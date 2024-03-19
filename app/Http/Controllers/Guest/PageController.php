<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $navLinks = config("partialsLink.navLinks");
        $footerLinks = config("partialsLink.footerLinks");
        $socials = config("partialsLink.socials");

        return view('home', compact('navLinks', 'footerLinks', 'socials'));
    }
}
