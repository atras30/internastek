@extends('layouts.app')

@section('content')
    <div class="w-full h-full overflow-auto bg-white">
        <div class="flex flex-col lg:flex-row justify-between">
            <div class="lg:w-[50%]">
                <div class="pt-10">
                    <div>
                        <h1 class="px-6 lg:px-20 text-[#0a1a44] text-[48px] lg:text-[64px]">Internastek</h1>
                    </div>
                    <div class="bg-[#fcc018] ml-6 lg:mr-40 w-20 lg:w-40 h-2"></div>
                    <div class="pl-6 lg:pl-20 pt-6 lg:pt-12 w-[300px] lg:w-[450px] text-[14px] lg:text-[16px]">
                        <p>
                            Internastek merupakan perusahaan yang telah berjalan sejak tahun 2019, kami menyediakan
                            jasa untuk reparasi laptop, PC, dan Proyektor.
                            <br><br>
                            Kepercayaan adalah hal utama yang kami prioritaskan. Dengan begitu, kami telah berhasil untuk
                            membangun relasi dengan berbagai mitra.
                        </p>
                    </div>
                    <div class="pt-16 lg:pt-[330px] w-full">
                        <h1 class="px-6 lg:px-20 text-[#0a1a44] text-[48px] lg:text-[64px]">Our Services</h1>
                        <div class="bg-[#fcc018] ml-6 lg:mr-40 w-20 lg:w-40 h-2"></div>
                    </div>
                </div>
            </div>
            <div class="lg:w-[50%] h-auto">
                <img src="{{ $logo['aboutUs'] }}" alt="img" class="w-full h-auto object-contain fade-bottom">
            </div>
        </div>



        <!-- Our Services Section -->
        <div class="pt-10 lg:pt-20">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <!-- Service 1: Service Laptop dan Proyektor -->
                <div class="bg-[#0a1a44] text-white p-8 items-center">
                    <img src="{{ $logo['serviceLaptop'] }}" alt="Service Laptop" class="h-16 mb-4 rounded-full">
                    <h3 class="text-[20px] lg:text-[24px] font-bold">Service Laptop dan Proyektor</h3>
                    <p class="pt-4">
                        Melakukan service rutin untuk laptop, PC, dan Proyektor agar dapat digunakan dengan optimal.
                    </p>
                </div>
                <!-- Service 2: Troubleshooting OS & Hardware -->
                <div class="bg-[#0a1a44] md:bg-[#0a1a44] lg:bg-[#071332] text-white p-8 items-center">
                    <img src="{{ $logo['troubleshooting'] }}" alt="Troubleshooting" class="h-16 mb-4 rounded-full">
                    <h3 class="text-[20px] lg:text-[24px] font-bold">Troubleshooting OS & Hardware</h3>
                    <p class="pt-4">
                        Membantu untuk menyelesaikan masalah troubleshooting OS dan hardware agar data penting tetap aman
                        dan terjaga.
                    </p>
                </div>
                <!-- Service 3: Harddisk Recovery Data -->
                <div class="bg-[#0a1a44] md:bg-[#071332] lg:bg-[#0a1a44] text-white p-8 items-center">
                    <img src="{{ $logo['hddRecoveryData'] }}" alt="Harddisk Recovery" class="h-16 mb-4 rounded-full">
                    <h3 class="text-[20px] lg:text-[24px] font-bold">Harddisk Recovery Data</h3>
                    <p class="pt-4">
                        Menyediakan jasa untuk mengembalikan data yang hilang akibat kerusakan pada harddisk.
                    </p>
                </div>
                <!-- Service 4: Cleaning Devices -->
                <div class="bg-[#0a1a44] md:bg-[#071332] lg:bg-[#0a1a44] text-white p-8 items-center">
                    <img src="{{ $logo['cleaningDevices'] }}" alt="Cleaning Devices" class="h-16 mb-4 rounded-full">
                    <h3 class="text-[20px] lg:text-[24px] font-bold">Cleaning Devices</h3>
                    <p class="pt-4">
                        Kebersihan dari dalam laptop terjamin, untuk mencegah penumpukan debu dan kotoran pada laptop, PC,
                        dan Proyektor.
                    </p>
                </div>
                <!-- Service 5: Setting & Installation CCTV -->
                <div class="bg-[#0a1a44] md:bg-[#0a1a44] lg:bg-[#071332] text-white p-8 items-center">
                    <img src="{{ $logo['cctv'] }}" alt="CCTV" class="h-16 mb-4 rounded-full">
                    <h3 class="text-[20px] lg:text-[24px] font-bold">Setting & Installation CCTV</h3>
                    <p class="pt-4">
                        Menyediakan jasa untuk pemasangan CCTV untuk kantor ataupun rumah Anda.
                    </p>
                </div>
                <!-- Service 6: Pengadaan IT -->
                <div class="bg-[#0a1a44] text-white p-8 items-center">
                    <img src="{{ $logo['pengadaanIT'] }}" alt="Pengadaan IT" class="h-16 mb-4 rounded-full">
                    <h3 class="text-[20px] lg:text-[24px] font-bold">Pengadaan IT</h3>
                    <p class="pt-4">
                        Menyediakan pengadaan IT baik untuk corporate dan maintenance.
                    </p>
                </div>
            </div>

            <!-- Our Products Section -->
            <div class="py-10 lg:py-20 text-[#00C4CC]">
                <h1 class="px-6 lg:px-20 text-[#0a1a44] text-[48px] lg:text-[64px]">Products</h1>
                <div class="bg-[#fcc018] ml-6 lg:mr-40 w-20 lg:w-40 h-2"></div>

                <div class="pt-10 lg:pt-20 grid grid-cols-2 md:grid-cols-6 lg:gap-8 `">

                    <div class="flex flex-col items-center">
                        <img src="{{ $logo['adaptor'] }}" alt="Adaptor" class="h-16 mb-4 rounded-full">
                        <h3 class="text-[20px] lg:text-[18px] font-bold">Adaptor</h3>
                    </div>


                    <div class="flex flex-col items-center">
                        <img src="{{ $logo['battery'] }}" alt="Baterai" class="h-16 mb-4 rounded-full">
                        <h3 class="text-[20px] lg:text-[18px] font-bold">Baterai</h3>
                    </div>

                    <div class="flex flex-col items-center">
                        <img src="{{ $logo['keyboard'] }}" alt="Keyboard" class="h-16 mb-4 rounded-full">
                        <h3 class="text-[20px] lg:text-[18px] font-bold">Keyboard</h3>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ $logo['panelLcd'] }}" alt="Panel LCD" class="h-16 mb-4 rounded-full">
                        <h3 class="text-[20px] lg:text-[18px] font-bold">LED/LCD Panel </h3>
                    </div>



                    <div class="flex flex-col items-center">
                        <img src="{{ $logo['hdd'] }}" alt="HDD" class="h-16 mb-4 rounded-full">
                        <h3 class="text-[20px] lg:text-[18px] font-bold">Harddisk / SSD</h3>
                    </div>


                

                    <div class="flex flex-col items-center">
                        <img src="{{ $logo['mouse'] }}" alt="Mouse" class="h-16 mb-4 rounded-full">
                        <h3 class="text-[20px] lg:text-[18px] font-bold">Mouse & Aksesoris</h3>
                    </div>


                   
                </div>
            </div>
        @endsection


        <style>
            .fade-bottom {
                /* Start solid (opaque) at 70% and begin fading to transparent */
                mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1) 40%, rgba(0, 0, 0, 0) 100%);
                -webkit-mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 1) 40%, rgba(0, 0, 0, 0) 100%);
            }
        </style>
