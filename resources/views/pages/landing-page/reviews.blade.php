@extends('layouts.app')

@section('content')
    <div class="fixed top-0 right-0 left-0 bottom-0 z-[-1]"
        style="background-image: linear-gradient(to top right, #00c1ca, #0a1c46);"></div>
    <p class="text-center text-white  text-5xl mb-4 pt-12">Read the reviews</p>

    <div class="flex justify-center mb-8">
        <button
            class="bg-[#00c4cc] text-white py-3 mb-4 px-24 rounded-full hover:bg-[#00a6a9] focus:outline-none focus:ring-2 focus:ring-[#00a6a9] focus:ring-opacity-50 transition ease-in-out duration-150">
            Check here!
        </button>
    </div>

    <div class="container mx-auto px-12 pb-4">
        <div class="grid md:gap-12 gap-8 lg:grid-cols-3 sm:grid-cols-2">
            <div class="flex flex-col justify-between">
                <div>
                    <div>
                        <i class="fa-solid fa-quote-left text-2xl text-[#57e4ff]"></i>
                    </div>
                    <p class="text-white">
                        Terimakasih internastek udah ngebantu bgt disaat lg mendesak bgt krn laptop gabisa nyala malam2,
                        servisnya cepat bisa ditungguin, harganya masih terjangkau bgt, ada ka budi juga yang ramah bgt
                        dalam
                        pelayanannya 🤗
                    </p>
                </div>

                <p class="text-white underline font-bold">Asfira Nurul Fadhillah</p>
            </div>
            <div class="flex flex-col justify-between">
                <div>
                    <div>
                        <i class="fa-solid fa-quote-left text-2xl text-[#57e4ff]"></i>
                    </div>
                    <div class="text-white flex flex-col gap-3">
                        <p>Pelayanannya ramah, baik, informatif dan cukup membantu setiap jawabannya.</p>
                        <p>Sangat rekomend, bagi yang pertama kali ingin service laptop maupun penambahan RAM, Hardisk atau
                            SSD</p>
                    </div>
                </div>

                <p class="text-white underline font-bold">Reza Eka Aditya</p>
            </div>
            <div class="flex flex-col justify-between">
                <div>
                    <div>
                        <i class="fa-solid fa-quote-left text-2xl text-[#57e4ff]"></i>
                    </div>
                    <p class="text-white">
                        Tempat service laptop yg dapat dipercaya, pelayanan ramah dan memuaskan, terutama dengan brand Axioo
                        karena merupakan official partner.
                    </p>
                </div>

                <p class="text-white underline font-bold">Rian</p>
            </div>
        </div>
    </div>
@endsection
