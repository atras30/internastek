<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home()
    {
        $logo = [
            "hero" => asset("assets/images/home/hero.png"),
        ];
        return view('pages.landing-page.landing-page', compact("logo"));
    }

    public function contactUs() {
        $image1 = asset("assets/images/contact-us/background.png");

        return view('pages.landing-page.contact-us', compact("image1"));
    }

    public function aboutUs() {
        return "About Us";
    }
    
    public function ourService() {
        return "our Service Page";
    }
    
    public function products() {
        return "Products page";
    }

    public function contactUs() {
        $image1 = asset("assets/images/contact-us/background.png");

        return view('pages.landing-page.contact-us', compact("image1"));
    }


    public function aboutUs()
    {
        $logo = [
            "aboutUs" => asset("assets/images/about-us/about-us.png"),
            'serviceLaptop'     => asset('assets/images/about-us/service-laptop.png'),
            'troubleshooting'   => asset('assets/images/about-us/troubleshooting.png'),
            'hddRecoveryData'   => asset('assets/images/about-us/hdd-recovery-data.png'),
            'cleaningDevices'   => asset('assets/images/about-us/cleaning-devices.png'),
            'cctv'              => asset('assets/images/about-us/cctv.png'),
            'pengadaanIT'       => asset('assets/images/about-us/pengadaan-it.png'),
            'adaptor'           => asset('assets/images/about-us/adaptor.png'),
            'battery'           => asset('assets/images/about-us/battery.png'),
            'hdd'               => asset('assets/images/about-us/hdd.png'),
            'keyboard'          => asset('assets/images/about-us/keyboard.png'),
            'mouse'             => asset('assets/images/about-us/mouse.png'),
            'panelLcd'          => asset('assets/images/about-us/panel-lcd.png'),
        ];
        
        return view('pages.landing-page.about-us', compact("logo"));
    }



    public function openingHours()
    {
        $image1 = asset("assets/images/opening-hours/background-1.jpeg");

        return view('pages.landing-page.opening-hours', compact("image1"));
    }

    public function partnerships(Request $request)
    {
        $logo = [
            "indofood" => asset('assets/images/partnerships/indofood.png'),
            "antero" => asset('assets/images/partnerships/antero.png'),
            "axioo" => asset('assets/images/partnerships/axioo.png'),
            "dhi" => asset('assets/images/partnerships/dhi.png'),
            "fast8" => asset('assets/images/partnerships/fast8.png'),
            "lay-motor" => asset('assets/images/partnerships/lay-motor.png'),
            "media-buffet" => asset('assets/images/partnerships/media-buffet.png'),
            "sefas" => asset('assets/images/partnerships/sefas.png'),
            "setia-multi-sarana" => asset('assets/images/partnerships/setia-multi-sarana.png'),
            "hero" => asset("assets/images/hero/hero.png"),
        ];

        return view('pages.landing-page.partnerships', compact("logo"));
    }

    public function review(Request $request)
    {
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
