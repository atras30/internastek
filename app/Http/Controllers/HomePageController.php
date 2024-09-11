<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home() {
        return view('pages.landing-page.landing-page');
    }

    public function openingHours() {
        $image1 = asset("assets/images/opening-hours/background-1.jpeg");

        return view('pages.landing-page.opening-hours', compact("image1"));
    }
    
    public function partnerships(Request $request) {
        $logo = [
            "indofood" => asset('assets/images/partnerships/indofood.png'),
            "antero" => asset('assets/images/partnerships/antero.png'),
            "axioo" => asset('assets/images/partnerships/axioo.png'),
            "dhi" => asset('assets/images/partnerships/dhi.png'),
            "fast8" => asset('assets/images/partnerships/fast8.png'),
            "lay-motor" => asset('assets/images/partnerships/lay-motor.png'),
            "media-buffet" => asset('assets/images/partnerships/media-buffet.png'),
            "sefas" => asset('assets/images/partnerships/sefas.png'),
            "setia-multi-sarana" => asset('assets/images/partnerships/setia-multi-sarana.png')
        ];
        
        return view('pages.landing-page.partnerships', compact("logo"));
    }

    public function review(Request $request) {
        $logo = [
            "indofood" => asset('assets/images/partnerships/indofood.png'),
            "antero" => asset('assets/images/partnerships/antero.png'),
            "axioo" => asset('assets/images/partnerships/axioo.png'),
            "dhi" => asset('assets/images/partnerships/dhi.png'),
            "fast8" => asset('assets/images/partnerships/fast8.png'),
            "lay-motor" => asset('assets/images/partnerships/lay-motor.png'),
            "media-buffet" => asset('assets/images/partnerships/media-buffet.png'),
            "sefas" => asset('assets/images/partnerships/sefas.png'),
            "setia-multi-sarana" => asset('assets/images/partnerships/setia-multi-sarana.png')
        ];
        
        return view('pages.landing-page.reviews', compact("logo"));
    }
}
