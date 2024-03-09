@extends('layout.main')

@section('body')

    <!-- hero section -->
    <section id="home" class="pt-36 pl-6 mb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2 pl-7">
                    <h1 class="text-base font-semibold text-teal-500 md:text-xl lg:text-2xl">Selamat Datang, di
                        <span class="block font-bold text-slate-900 text-4xl lg:text-5xl
                        bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent
                        ">Sistem Informasi Manajemen Talenta</span></h1>
                    <h2 class="font-bold text-slate-900 text-lg mb-5 md:text-2xl lg:text-4xl">UPTD SMP Negeri 1 Kalabahi</h2>
                    <p class="font-medium text-slate-500 mb-10 leading-relaxed lg:text-3xl">Pusat Pengelolaan Informasi Talenta, Bakat, dan Prestasi Peserta Didik</p>

                    <a href="/cekdata" class="text-base font-semibold text-white bg-teal-500 py-3 px-4 rounded-full hover:opacity-80 transition duration-300 ease-in-out">Lihat Data Prestasi</a>
                </div>

                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="{{ asset('img/1.png') }}" alt="gambar"
                        class="max-w-full mx-auto">
                        <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                            <svg width="350" height="350" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#14b8a6" d="M62,-21.9C70.2,5,59.6,36.3,41,47.7C22.4,59.2,-4.3,50.9,-24.5,35.7C-44.8,20.5,-58.8,-1.6,-53.6,-24.3C-48.5,-47.1,-24.2,-70.5,1.3,-71C26.9,-71.4,53.9,-48.8,62,-21.9Z" transform="translate(100 100) scale(1.2)" />
                              </svg>
                        </span>

                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- hero section end -->

    <!-- Prestasi Start -->

    <section id="prestasi" class="pt-36 pb-32 pl-6 bg-slate-200">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-bold text-teal-500 text-2xl mb-4 sm:text-3xl lg:text-3xl">Prestasi Peserta Didik Terkini</h4>
                </div>
            </div>

            <div class="flex flex-wrap">
                @foreach ($datas as $d)
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4 relative">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 h-[38rem] md:h-[28rem]">
                        @if ($d->foto_siswa !== null)
                        <!-- <img src="https://source.unsplash.com/100x100?student" alt="studen" class="w-full "> -->
                        <div class="px-8">
                            <img src="{{ asset('storage/'. $d->foto_siswa)}}" alt="student" class="w-full h-[355px] lg:h-[225px] mt-4 mx-auto object-stretch rounded-full border-2 border-solid border-teal-500">
                        </div>
                        @else
                        <img src="{{ asset('img/student.png')}}" alt="studen" class="w-full pt-4 px-8">
                        @endif

                        <div class="py-9 md:py-5 px-8">
                            <h3 class="mb-3 md:mb-1 font-semibold text-pink-500 text-xl hover:text-teal-500">{{$d->nama_siswa}}</h3>
                            @if($d->data->isNotEmpty())
                            <p class="font-medium text-sm text-blue-500 mb-0">{{ $d->data[0]->jenis_lomba }}</p>
                            <p class="font-light text-sm">{{ $d->data[0]->prestasi }}</p>
                        </div>
                        <div class="absolute bottom-10 right-10 md:bottom-9 md:right-10">
                            <a href="/detail/{{ $d->nisn }}" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">Lihat Prestasi</a>
                        </div>
                        @else
                        <p class="font-light text-base">Belum ada prestasi</p>
                        </div>
                        @endif
                    </div>
                </div>

                @endforeach
                {{-- prestasi awal --}}
                {{-- <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/100x100?people" alt="studen" class="w-full">
                        <div class="py-9 px-8">
                            <h3 class="mb-3 font-semibold text-black text-xl hover:text-teal-500">Irwanto Duru Paddang</h3>
                            <p class="font-medium text-base mb-6">Best Player Classmeeting Spensa 2023</p>
                            <a href="/detail/Irwanto Duru Paddang" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">Lihat Prestasi</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/100x100?employer" alt="studen" class="w-full">
                        <div class="py-9 px-8">
                            <h3 class="mb-3 font-semibold text-black text-xl hover:text-teal-500">Sutarmadi Usman</h3>
                            <p class="font-medium text-base mb-6">Juara Vokal Festival Bulan Bahasa 2023</p>
                            <a href="/detail/Sutarmadi Usman" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">Lihat Prestasi</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/100x100?employer" alt="studen" class="w-full">
                        <div class="py-9 px-8">
                            <h3 class="mb-3 font-semibold text-black text-xl hover:text-teal-500">Lionel Lutsina</h3>
                            <p class="font-medium text-base mb-6">Juara Tari Kreasi Festival Bulan Bahasa 2023</p>
                            <a href="/detail/Lionel " class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">Lihat Prestasi</a>
                        </div>
                    </div>
                </div> --}}
                {{-- prestasi akhir --}}
            </div>
        </div>

    </section>


    <!-- Prestasi end -->

        <!-- Statistik -->

        <section id="statistik" class="pt-36 pb-32 pl-6 bg-slate-500">
            <div class="container">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-bold text-white text-2xl mb-4 sm:text-3xl lg:text-3xl">Statistik Prestasi Peserta Didik</h4>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-5 pb-3">
                            <h2 class="font-semibold text-center my-5">Statistik Prestasi Berdasarkan Kategori</h2>
                            <div class="px-2 py-2 lg:flex flex-auto">
                                <div class="py-4 px-8 bg-yellow-400 lg:rounded-lg w-full lg:mr-1" >
                                    <div class="float-end">
                                        <span class="text-4xl float-end ml-4"><i class="fa-solid fa-basketball"></i></span>
                                        <p class="font-medium text-base mb-2 text-end">Bidang Olahraga</p>
                                    </div>
                                    <div class="w-[8rem]">
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-black">{{ $statistik['olahraga'] }}</h3>
                                    </div>
                                </div>

                                <div class="py-4 px-8 bg-pink-500 lg:rounded-lg w-full lg:mr-1" >
                                    <div class="float-end">
                                        <span class="text-4xl float-end ml-4"><i class="fa-solid fa-flask"></i></i></span>
                                        <p class="font-medium text-base mb-2 text-end lg:text-sm">Bidang Riset & Teknologi</p>
                                    </div>
                                    <div class="w-[8rem]">
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-black">{{ $statistik['riset'] }}</h3>
                                    </div>
                                </div>

                                <div class="py-4 px-8 bg-green-500 lg:rounded-lg w-full lg:mr-1" >
                                    <div class="float-end">
                                        <span class="text-4xl float-end ml-4"><i class="fa-solid fa-music"></i></i></span>
                                        <p class="font-medium text-base mb-2 text-end lg:text-sm">Bidang Seni dan Budaya</p>
                                    </div>
                                    <div class="w-[8rem]">
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-black">{{ $statistik['seni'] }}</h3>
                                    </div>
                                </div>

                                <div class="py-4 px-8 bg-blue-500 lg:rounded-lg w-full" >
                                    <div class="float-end">
                                        <span class="text-4xl float-end ml-4"><i class="fa-solid fa-layer-group"></i></i></span>
                                        <p class="font-medium text-base mb-2 text-end lg:text-sm">Bidang Lain (Uncategories)</p>
                                    </div>
                                    <div class="w-[8rem]">
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-black">{{ $statistik['lain'] }}</h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="w-full px-4">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                            <h2 class="font-semibold text-center my-5">Statistik Prestasi Berdasarkan Tahun</h2>
                            <div class="px-2 py-2 lg:flex flex-auto">
                                @foreach ($statistik2 as $s)
                                <div class="py-4 px-8 border-solid border-b-2  w-full lg:mr-1" >
                                    <div class="float-none">
                                        <p class="font-bold text-lg mb-3 text-center text-black border-dashed border-b-2 border-slate-200">{{ $s->tahun }}</p>
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-pink-700">{{ $s->total_tahun }}</h3>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>


        <!-- Statistik -->


   @endsection
