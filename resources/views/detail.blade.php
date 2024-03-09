@extends('layout.main')

@section('body')

    <!-- Prestasi Start -->

    <section id="prestasi" class="pt-36 pb-32 pl-6 bg-slate-200">
        <div class="container justify-center">
            <div class="flex flex-wrap">
                @guest
                <div class="w-full px-2 lg:w-3/4 mx-auto ">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <h4 class="font-bold text-teal-500 text-xl mb-4 text-center pt-4 sm:text-3xl lg:text-3xl">Detail Prestasi Siswa</h4>
                        @if ($nama->foto_siswa !== null)
                        <img src="{{ asset('storage/'. $nama->foto_siswa)}}" alt="student" class="rounded-full w-[16rem] h-[16rem] object-stretch border-2 border-solid border-teal-500 mt-5 mx-auto md:float-left md:rounded-xl md:ml-10 md:mr-0 md:mt-0">
                        @else
                        <img src="{{ asset('img/student.png')}}" alt="studen" class="rounded-full w-[15rem] mt-5 mx-auto md:float-left md:rounded-xl md:ml-10 md:mr-0 md:mt-0">
                        @endif

                        <div class="py-9 px-8 md:w-full md:ml-80">
                            <h3 class="mb-5 font-semibold text-xl text-center md:text-left text-pink-500 uppercase">{{ $nama->nama_siswa }}</h3>
                            @foreach($data as $d)
                                <h3 class="text-center md:text-left font-medium text-md italic">{{ $d->tahun }}</h3>
                                <h3 class="text-center md:text-left font-bold text-md">{{ $d->jenis_lomba}}</h3>
                                <h3 class="text-center md:text-left font-light text-md italic pb-5 ">{{ $d->prestasi}}</h3>
                            @endforeach

                            <div class="flex justify-around mt-5 border-t-2 py-3 md:justify-start">
                                <a href="#" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">Unduh</a>
                                <a href="/" class="hidden font-medium content-end text-sm text-white bg-yellow-500 py-2 px-4 rounded-lg hover:opacity-80">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endguest

                @auth
                <div class="w-full px-2 lg:w-2/3 mx-auto ">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <h4 class="font-bold text-teal-500 text-xl mb-4 text-center pt-4 sm:text-3xl lg:text-3xl">Detail Prestasi Siswa</h4>
                        @if ($nama->foto_siswa !== null )
                        <img src="{{ asset('storage/'. $nama->foto_siswa)}}" alt="student" class="rounded-full w-[16rem] h-[16rem] object-stretch border-2 border-solid border-teal-500 mt-5 mx-auto md:float-left md:rounded-xl md:ml-10 md:mr-0 md:mt-0">
                        @else
                        <img src="{{ asset('img/student.png')}}" alt="studen" class="rounded-full w-[15rem] mt-5 mx-auto md:float-left md:rounded-xl md:ml-10 md:mr-0 md:mt-0">
                        @endif

                        <div class="py-9 px-8 md:w-full md:ml-80">
                            <h3 class="mb-5 font-semibold text-xl text-center md:text-left text-pink-500 uppercase">{{ $nama->nama_siswa }}</h3>
                            @foreach($data as $d)
                                <h3 class="text-center md:text-left font-medium text-md italic">{{ $d->tahun }}</h3>
                                <h3 class="text-center md:text-left font-bold text-md">{{ $d->jenis_lomba}}</h3>
                                <h3 class="text-center md:text-left font-light text-md italic pb-1 ">{{ $d->prestasi}}</h3>
                                <!-- <div class="flex justify-center mb-2 mt-0">
                                    <p class="inline-flex text-black text-sm font-light px-2 py-0.5 rounded-md"">{{ $d->bidang}}</p>
                                </div> -->
                                <div class="flex justify-center md:justify-start">
                                    <form action="/detail/{{ $d->id }}/nisn/{{ $d->nisn }}" method="post">
                                        <!-- @method('delete') -->
                                        @csrf
                                        <button class="md:text-left font-semibold mb-5 text-base px-4 py-1 bg-red-400 hover:bg-red-600 hover:text-white rounded-lg ">Hapus</a>
                                    </form>
                                </div>
                            @endforeach
                            <div class="flex justify-around mt-5 border-t-2 py-3 md:space-x-1 bg-blue-200 md:w-3/4 md:pr-20">
                                <a href="#" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">Unduh Prestasi</a>
                                <a href="#" class=" font-medium content-end text-sm text-white bg-yellow-500 py-2 px-4 rounded-lg hover:opacity-80">Ubah Data</a>
                                <a href="#" class=" font-medium content-end text-sm text-white bg-red-500 py-2 px-4 rounded-lg hover:opacity-80">Hapus Data</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- form start --}}
                <div class="w-full px-2 lg:w-1/3 mx-auto ">

                    {{-- upload foto profil --}}

                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-2">
                        <div class="py-9 px-8 md:w-full">
                            <h4 class="font-semibold  text-black text-xl mb-4 text-center pt-4">Tambah Prestasi Siswa</h4>
                            <form action="/detail/{{ $nama->nisn }}" method="post">
                                @csrf
                                <div class="w-full mx-auto ">
                                    <div class="w-full px-4 mb-8">
                                        <label for="tahun" class="text-base text-teal-500 font-bold">Tahun</label>
                                        <input type="text" id="tahun" name="tahun" class="w-full bg-slate-200 text-black p-2 rounded-md
                                        focus:outline-none focus:ring-teal-500 focus:ring-1 focus:border-teal-500" autofocus>
                                    </div>
                                    <div class="w-full px-4 mb-8">
                                        <label for="jenis_lomba" class="text-base text-teal-500 font-bold">Nama Kegiatan/Lomba</label>
                                        <input type="text" id="jenis_lomba" name="jenis_lomba" class="w-full bg-slate-200 text-black p-2 rounded-md
                                        focus:outline-none focus:ring-teal-500 focus:ring-1 focus:border-teal-500">
                                    </div>
                                    <div class="w-full px-4 mb-8">
                                        <label for="prestasi" class="text-base text-teal-500 font-bold">Peroleh Prestasi/Medali</label>
                                        <input type="text" id="prestasi" name="prestasi" class="w-full bg-slate-200 text-black p-2 rounded-md
                                        focus:outline-none focus:ring-teal-500 focus:ring-1 focus:border-teal-500">
                                    </div>
                                    <div class="relative w-full px-4 mb-8">
                                        <label for="bidang" class="text-base text-teal-500 font-bold">Bidang Lomba</label>
                                        <select id="bidang" name="bidang" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                          <option value="kosong">Pilih Bidang Lomba</option>
                                          <option value="Olahraga">Olahraga</option>
                                          <option value="Riset dan Teknologi">Riset dan Teknologi</option>
                                          <option value="Seni">Seni dan Budaya</option>
                                          <option value="Lain-lain">Lain-lain</option>
                                        </select>
                                        <div class="pointer-events-none absolute px-6 inset-y-0 right-0 flex items-center text-blue-700 pt-2">
                                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>
                                    </div>

                                    <div class="flex justify-around mt-5 border-t-2 py-3 md:justify-start">
                                        <button type="submit" class="font-medium text-sm text-white bg-blue-500 py-2 px-4 rounded-lg hover:opacity-80">Simpan</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    {{-- end foto profil --}}


                </div>
                @endauth
            </div>
        </div>
    </section>


    <!-- Prestasi end -->

@endsection
