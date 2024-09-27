@extends('layouts.app')

@section('content')
    <div class="w-full h-full  bg-gradient-to-br from-[#00C4CC] to-[#0A1A44]">

        <div class="flex justify-between pt-20 items-center">
            <div class="w-1/2 px-14 text-white">
                <div class="text-[64px] max-w-xl tracking-wider">
                    Jadikan kami
                    partner solusi
                    laptop kamu.
                </div>
                <div class="pt-5 ">
                    <button class="bg-[#00C4CC] py-3 px-12 rounded-3xl text-[18px] font-thin hover:bg-[#0A1A44] hover:scale-110 transform transition duration-300 ease-in-out hover:text-shadow hover:shadow-md">
                        Our Company Profile
                      </button> 
                </div>
            </div>
            <div class="h-full w-1/2">
                <img src="{{ $logo['hero'] }}" alt="hero" class="w-full object-contain">
            </div>
        </div>
    </div>
@endsection
