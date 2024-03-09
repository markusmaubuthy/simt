@extends('layout.main')

@section('body')


<!-- Tambah Data -->

<!-- Tambah data End -->

    <!-- hero section -->
    <section id="home" class="pt-36 pl-6 mb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 bg-slate-300 rounded-xl py-5 shadow-lg">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-bold text-teal-500 text-2xl mb-4 sm:text-3xl lg:text-3xl">EDIT DATA SISWA</h4>
                    </div>
                    <div>
                        <form method="post" action="/tambah" enctype="multipart/form-data">
                            @csrf
                            <div class="w-full mx-auto lg:w-2/3 ">
                                <div class="w-full px-4 mb-8">
                                    <label for="nama_siswa" class="text-base text-teal-500 font-bold">Nama Siswa</label>
                                    <input type="text" id="nama_siswa" name="nama_siswa" class="w-full bg-slate-200 text-black p-2 rounded-md
                                    focus:outline-none focus:ring-teal-500 focus:ring-1 focus:border-teal-500" autofocus>
                                </div>
                                <div class="w-full px-4 mb-8">
                                    <label for="nisn" class="text-base text-teal-500 font-bold">NISN</label>
                                    <input type="text" id="nisn" name="nisn" class="w-full bg-slate-200 text-black p-2 rounded-md
                                    focus:outline-none focus:ring-teal-500 focus:ring-1 focus:border-teal-500">
                                </div>
                                <div class="w-full px-4 mb-8">
                                    <label class="block mb-2 text-base font-medium text-teal-500 " for="foto_siswa">Upload file</label>
                                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50
                                     dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600
                                     dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="foto_siswa" name="foto_siswa" type="file">
                                    <div class="mt-1 text-sm text-gray-500 dark:text-teal-500" id="user_avatar_help">Ukuran foto tidak lebih dari 2 MB</div>
                                </div>
                                <div class="w-full flex">
                                    <button class="text-base font-semibold bg-blue-500 w-1/4 mx-auto hover:opacity-80 hover:shadow-lg
                                    transition duration-500 text-white py-2 px-2 rounded full" type="submit">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- hero section end -->



@endsection
