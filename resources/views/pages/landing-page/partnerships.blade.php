@extends('layouts.app')

@section('content')
    <div class="fixed top-0 right-0 left-0 bottom-0 z-[-1]"
        style="background-image: linear-gradient(to top right, #00c1ca, #0a1c46);"></div>
        
    <div class="h-full pt-8">
        <p class="text-center text-white  text-5xl mb-12">Partnerships</p>

        <div class="container mx-auto">
            <div class="grid gap-4 lg:grid-cols-3 sm:grid-cols-2">
                <img src="{{ $logo['indofood'] }}" alt="Image 1" class="w-full h-24 object-contain">
                <img src="{{ $logo['antero'] }}" alt="Image 1" class="w-full h-24 object-contain">
                <img src="{{ $logo['fast8'] }}" alt="Image 1" class="w-full h-24 object-contain">
                <img src="{{ $logo['sefas'] }}" alt="Image 1" class="w-full h-24 object-contain">
                <img src="{{ $logo['lay-motor'] }}" alt="Image 1" class="w-full h-24 object-contain">
                <img src="{{ $logo['axioo'] }}" alt="Image 1" class="w-full h-24 object-contain">
                <img src="{{ $logo['setia-multi-sarana'] }}" alt="Image 1" class="w-full h-24 object-contain">
                <img src="{{ $logo['dhi'] }}" alt="Image 1" class="w-full h-24 object-contain">
                <img src="{{ $logo['media-buffet'] }}" alt="Image 1" class="w-full h-24 object-contain">
            </div>
        </div>
    </div>
@endsection
