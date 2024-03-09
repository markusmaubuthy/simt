<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SIMT | UPTD SMP Negeri 1 Kalabahi</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/7150ead3b8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>

<body>
<!-- header start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flext items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-teal-500 block py-4 pl-6">SIMT - UPTD SMP NEGERI 1 KALABAHI</a>
                </div>
                <div class="flext items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="humberger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="humberger-line transition duration-300 ease-in-out"></span>
                        <span class="humberger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[200px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="/#home" class="text-base text-black py-2 mx-6 flex group-hover:text-teal-500">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="/#prestasi" class="text-base text-black py-2 mx-6 flex group-hover:text-teal-500">Prestasi Terkini</a>
                            </li>
                            <li class="group">
                                <a href="/#statistik" class="text-base text-black py-2 mx-6 flex group-hover:text-teal-500">Statistik</a>
                            </li>
                            <li class="group">
                                <a href="index.html#home" class="text-base text-black py-2 mx-6 flex group-hover:text-teal-500">Login</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </header>
<!-- header end -->

    <!-- hero section -->
    <section id="home" class="pt-36 pl-6 mb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2 pl-7">
                    <h1 class="text-base font-semibold text-teal-500 md:text-xl lg:text-2xl">Selamat Datang, di 
                        <span class="block font-bold text-slate-900 text-4xl lg:text-5xl">Sistem Informasi Manajemen Talenta</span></h1>
                    <h2 class="font-medium text-slate-900 text-lg mb-5 md:text-2xl lg:text-4xl">UPTD SMP Negeri 1 Kalabahi</h2>
                    <p class="font-medium text-slate-500 mb-10 leading-relaxed lg:text-3xl">Pusat Pengelolaan Informasi Talenta, Bakat, dan Prestasi Peserta Didik</p>

                    <a href="cekdata.html" class="text-base font-semibold text-white bg-teal-500 py-3 px-4 rounded-full hover:opacity-80 transition duration-300 ease-in-out">Cek Data Prestasi</a>
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
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/100x100?student" alt="studen" class="w-full">
                        <div class="py-9 px-8">
                            <h3 class="mb-3 font-semibold text-black text-xl hover:text-teal-500">Simon Y. Berimau</h3>
                            <p class="font-medium text-base mb-6">Juara 1 OSN IPA Tk. Kabupaten Tahun 2023</p>
                            <a href="#" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">Cek Data Prestasi</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/100x100?people" alt="studen" class="w-full">
                        <div class="py-9 px-8">
                            <h3 class="mb-3 font-semibold text-black text-xl hover:text-teal-500">Irwanto Duru Paddang</h3>
                            <p class="font-medium text-base mb-6">Best Player Classmeeting Spensa 2023</p>
                            <a href="#" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">Cek Data Prestasi</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/100x100?employer" alt="studen" class="w-full">
                        <div class="py-9 px-8">
                            <h3 class="mb-3 font-semibold text-black text-xl hover:text-teal-500">Sutarmadi Usman</h3>
                            <p class="font-medium text-base mb-6">Juara Vokal Festival Bulan Bahasa 2023</p>
                            <a href="#" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">Cek Data Prestasi</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="https://source.unsplash.com/100x100?employer" alt="studen" class="w-full">
                        <div class="py-9 px-8">
                            <h3 class="mb-3 font-semibold text-black text-xl hover:text-teal-500">Lionel Lutsina</h3>
                            <p class="font-medium text-base mb-6">Juara Tari Kreasi Festival Bulan Bahasa 2023</p>
                            <a href="#" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">Cek Data Prestasi</a>
                        </div>
                    </div>
                </div>
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
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-black">150</h3>
                                    </div>
                                </div>
    
                                <div class="py-4 px-8 bg-pink-500 lg:rounded-lg w-full lg:mr-1" >
                                    <div class="float-end">
                                        <span class="text-4xl float-end ml-4"><i class="fa-solid fa-flask"></i></i></span>
                                        <p class="font-medium text-base mb-2 text-end lg:text-sm">Bidang Riset & Teknologi</p> 
                                    </div>
                                    <div class="w-[8rem]">
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-black">150</h3>
                                    </div>
                                </div>
    
                                <div class="py-4 px-8 bg-green-500 lg:rounded-lg w-full lg:mr-1" >
                                    <div class="float-end">
                                        <span class="text-4xl float-end ml-4"><i class="fa-solid fa-music"></i></i></span>
                                        <p class="font-medium text-base mb-2 text-end lg:text-sm">Bidang Seni dan Budaya</p> 
                                    </div>
                                    <div class="w-[8rem]">
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-black">120</h3>
                                    </div>
                                </div>
    
                                <div class="py-4 px-8 bg-blue-500 lg:rounded-lg w-full" >
                                    <div class="float-end">
                                        <span class="text-4xl float-end ml-4"><i class="fa-solid fa-layer-group"></i></i></span>
                                        <p class="font-medium text-base mb-2 text-end lg:text-sm">Bidang Lain (Uncategories)</p> 
                                    </div>
                                    <div class="w-[8rem]">
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-black">12</h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="w-full px-4">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                            <h2 class="font-semibold text-center my-5">Statistik Prestasi Berdasarkan Tahun</h2>
                            <div class="px-2 py-2 lg:flex flex-auto">
                                <div class="py-4 px-8 border-solid border-b-2  w-full lg:mr-1" >
                                    <div class="float-none ">
                                        <p class="font-bold text-lg mb-3 text-center text-black border-dashed border-b-2 border-slate-200">2019</p> 
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-pink-700">150</h3>
                                    </div>
                                </div>
                                <div class="py-4 px-8 border-solid border-b-2  w-full lg:mr-1" >
                                    <div class="float-none">
                                        <p class="font-bold text-lg mb-3 text-center text-black border-dashed border-b-2 border-slate-200">2020</p> 
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-pink-700">15</h3>
                                    </div>
                                </div>
                                <div class="py-4 px-8 border-solid border-b-2  w-full lg:mr-1" >
                                    <div class="float-none">
                                        <p class="font-bold text-lg mb-3 text-center text-black border-dashed border-b-2 border-slate-200">2021</p> 
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-pink-700">150</h3>
                                    </div>
                                </div>
                                <div class="py-4 px-8 border-solid border-b-2  w-full lg:mr-1" >
                                    <div class="float-none">
                                        <p class="font-bold text-lg mb-3 text-center text-black border-dashed border-b-2 border-slate-200">2022</p> 
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-pink-700">150</h3>
                                    </div>
                                </div>
                                <div class="py-4 px-8 border-solid border-b-2  w-full lg:mr-1" >
                                    <div class="float-none">
                                        <p class="font-bold text-lg mb-3 text-center text-black border-dashed border-b-2 border-slate-200">2023</p> 
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-pink-700">150</h3>
                                    </div>
                                </div>
                                <div class="py-4 px-8 border-solid border-b-2  w-full lg:mr-1" >
                                    <div class="float-none">
                                        <p class="font-bold text-lg mb-3 text-center text-black border-dashed border-b-2 border-slate-200">2024</p> 
                                        <h3 class="mb-3 text-5xl text-center font-semibold text-pink-700">150</h3>
                                    </div>
                                </div>
    

    
                            </div>

                        </div>
                    </div>

                </div>
            </div>
    
        </section>
    
      
        <!-- Statistik -->
    

    <!-- footer start -->
    <footer class="bg-black pt-20 pb-12 pl-6">
        <div class="container">
            <div class="flex flex-wrap lg:pb-10">
                <div class="w-ful px-4 mb-10 md:w-1/2 items-center">
                    <img src="{{ asset('img/2.png') }}" alt="tut" class="w-[5rem] float-start mr-2 lg:mr-4">
                    <h2 class="text-white font-semibold lg:text-2xl">UPTD SMP Negeri 1 Kalabahi</h2>
                    <p class="text-slate-300 lg:text-lg">Kreatif, Efektif, Religius, Eksotis, dan Nyaman</p>
                    <p class="text-slate-300 invisible lg:visible">Jl. Ade Irma Nasution No. 09, Kalabahi</p>
                    
                </div>
                <div class="w-ful px-4 mb-10 md:w-1/2 ">
                    <p class="text-slate-300">Kontak Kami :</p>
                    <p class="text-slate-300 mr-5"><span><i class="fa-solid fa-globe"></i></span>  www.spensakalabahi.sch.id</p>
                    <p class="text-slate-300 mr-5"><span><i class="fa-regular fa-envelope"></i></span>  info@spensakalabahi.sch.id</p>
                    <p class="text-slate-300 mr-5 lg:hidden"><span><i class="fa-solid fa-location-dot"></i></span>  Jl. Ade Irma Nasution No. 09, Kalabahi</p>
                </div>

            </div>

            <div class="w-full pt-10 border-t border-slate-700 items-center">

                <div class="flex items-center justify-center mb-5">
                    <!-- Youtube -->
                    <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-white text-red-700 hover:border-red-700 hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <!-- Facebook -->
                    <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-white text-blue-600 hover:border-red-700 hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg>
                    </a>
                    <!-- Tiktok -->
                    <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-red-700 text-slate-300 hover:border-white hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-white text-pink-600 hover:border-red-700 hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                    <!-- Twitter/X -->
                    <a href="#" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-white text-blue-600 hover:border-red-700 hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                    </a>
                </div>
             
                
                <p class="text-slate-200 font-medium text-[0.75rem] text-center">Situs ini dibuat dengan ❤️ oleh Markus Simeon K. Maubuthy, M.Pd ©️ 2023</p>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
