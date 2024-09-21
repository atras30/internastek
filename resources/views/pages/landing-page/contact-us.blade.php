@extends('layouts.app')

@section('style')
    <style>
        .background {
            background-image: url('{{ $image1 }}');
            background-size: cover;
            background-position: center;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
    <div class="h-full relative background bg-no-repeat overflow-y-scroll">
        <div class="flex h-full md:items-center ps-16 md:ps-32 mt-8 pe-0 gap-16 flex-col md:flex-row">
            <div>
                <h1 class="text-6xl text-white font-bold">Contact Us</h1>
                <a href="https://lynk.id/internastek_" class="underline text-blue-400">lynk.id/internastek_</a>
            </div>

            <div class="text-white space-y-4 grow">
                <div>
                    <p class="text-3xl font-semibold">Mall Ambassador</p>
                    <p class="text-xl">LT 2 No.47-49, Stand Counter </p>
                </div>
                <div>
                    <p class="text-3xl font-semibold">ITC BSD</p>
                    <p class="text-xl">LT 1 Blok A2 No. 23</p>
                </div>
                <div>
                    <p class="text-3xl font-semibold">SUPERMAL KARAWACI</p>
                    <p class="text-xl">LT FF C6 NO.1-2</p>
                </div>
                <div>
                    <p class="text-3xl font-semibold">ISTANA BEC 2 BANDUNG</p>
                    <p class="text-xl">LT 1 NO X/9</p>
                </div>

                <div class="flex justify-end text-black">
                    <div class="bg-[#57e4ff] w-[512px] p-4 px-8 text-xl space-y-2">
                        <p class="font-semibold text-xl">Follow us on</p>
                        <div class="flex justify-start items-center gap-8">
                            <div class="flex gap-2">
                                <i class="fa-brands fa-instagram w-14 h-14 text-4xl rounded-full border border-black flex justify-center items-center"></i>
                                <i class="fa-brands fa-facebook-f w-14 h-14 text-4xl rounded-full border border-black flex justify-center items-center"></i>
                            </div>
                            <p class="grow text-center">@Internastek</p>
                        </div>

                        <p class="font-semibold">Social media</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
