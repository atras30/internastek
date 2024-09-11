@extends('layouts.app')

@section('style')
    <style>
        .bg-image-1 {
            background-image: url("{{ $image1 }}")
        }

        .gradient-overlay {
            position: absolute; /* Positions the overlay on top of the images */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0; /* Fills the entire container */
            background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%); /* White gradient from left (transparent) to right (white)  */
        }
    </style>
@endsection

@section('content')
    <div class="fixed top-0 right-0 left-0 bottom-0 z-[-1] bg-blue-50 grid grid-cols-2 grid-rows-2">
        <div class="bg-cover bg-center bg-no-repeat bg-image-1" src="{{ $image1 }}"></div>
        <div class="bg-cover bg-center bg-no-repeat bg-image-1" src="{{ $image1 }}"></div>
        <div class="bg-cover bg-center bg-no-repeat bg-image-1" src="{{ $image1 }}"></div>
        <div class="bg-cover bg-center bg-no-repeat bg-image-1" src="{{ $image1 }}"></div>
        <div class="gradient-overlay"></div>
    </div>
@endsection
