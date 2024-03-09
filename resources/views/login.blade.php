@extends('layout.main')

@section('body')

    <!-- hero section -->
    <section id="home" class="pt-36 pl-6 mb-12">
        <div class="container">
            <div class="flex flex-wrap">
      
                <div class="w-full self-center px-4 lg:w-1/3 pl-0 ">
                    <h1 class="text-base font-semibold text-teal-500 md:text-xl lg:text-2xl">Selamat Datang, di
                        <span class="block font-bold text-slate-900 text-4xl">Sistem Informasi Manajemen Talenta</span></h1>
                    <h2 class="font-medium text-slate-900 text-lg mb-5 md:text-2xl">UPTD SMP Negeri 1 Kalabahi</h2>
                    <p class="font-medium text-slate-500 mb-10 leading-relaxed lg:text-xl">Pusat Pengelolaan Informasi Talenta, Bakat, dan Prestasi Peserta Didik</p>
                    <a href="/cekdata" class="hidden md:inline-flex text-base font-semibold text-white bg-teal-500 py-3 px-4 rounded-full hover:opacity-80 transition duration-300 ease-in-out">Lihat Data Prestasi</a>
                </div>

                <div class="w-full self-end px-2 lg:w-2/3 bg-cover rounded-lg md:rounded-tl-full md:pt-5" style="background-image: url('{{ asset('img/curved6.jpg') }}');">
                <div class="flex flex-wrap mt-0 -mx-3">
              <div class="flex flex-col w-full max-w-full px-3 mx-auto md:ml-[15rem] md:flex-0 shrink-0 md:w-2/3">
                <div class="relative flex flex-col min-w-0 mt-3 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                  <div class="p-0 pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                  @if (session('status'))
                  <h1 class="text-base text-center font-semibold text-black bg-green-200 px-3 md:text-lg md:bg-opacity-65 md:inline-block md:ml-[12rem]">
                    {{ session('status') }}
                  </h1>
                  @endif
                    <p class="mb-0 py-2 font-semibold text-center text-lg text-white shadow-mdo">Input Email dan Password untuk Masuk</p>
                  </div>
                  <div class="flex-auto p-6">
                    <form role="form" action="/login" method="POST">
                      @csrf
                      <label for="email" class="mb-2 ml-1 font-bold text-xs text-white" >Email</label>
                      <div class="mb-4">
                        <input type="email" name="email" id="email" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" autofocus>
                      </div>
                      <label for="password" class="mb-2 ml-1 font-bold text-xs text-white">Password</label>
                      <div class="mb-4">
                        <input type="password" name="password" id="password" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                      </div>

                      <div class="text-center">
                        <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle bg-blue-500 rounded-xl hover:bg-teal-800 ">Login</button>
                      </div>
                    </form>
                  </div>
                  <div class="p-6 px-1 pt-0 text-center bg-transparent border-t-0 border-t-solid rounded-b-2xl lg:px-2">
                    <p class="mx-auto mb-6 leading-normal text-sm text-white">
                      Belum punya akun?
                      <a href="/register" class="relative z-10 font-semibold text-teal-300 ">Daftar</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- hero section end -->






   @endsection
