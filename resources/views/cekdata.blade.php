@extends('layout.main')

@section('body')

    <!-- hero section -->
    <section id="home" class="pt-36 pl-6 mb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 pl-7">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-bold text-teal-500 text-2xl mb-4 sm:text-3xl lg:text-3xl">DATA PRESTASI SISWA</h4>
                    </div>
                    <form action="{{ route('search') }}" method="get">
                        <div class="w-full px-4 mb-8 lg:flex items-center lg:w-3/4 mx-auto">
                            <label for="search" class="text-base font-bold text-center text-zinc-700 text-nowrap mr-4 lg:uppercase lg:text-lg lg:font-semibold">Input Nama Siswa</label>
                            <input type="text" id="search" name="search" class="w-full ring-offset-1 ring text-black p-2 mb-2 mt-1 rounded-md focus:outline-none
                            focus:ring-teal-500 focus:ring-1 focus:border-greem-500 uppercase">
                            <button class="bg-teal-500 py-2 px-4 rounded-lg lg:ml-3" type="submit">Cari</button>
                        </div>
                    </form>
                    <div class="shadow-lg pb-4">
                        <table class="table-fixed border-separate border-spacing-y-2 font-semibold text-md w-full lg:w-[80%] mx-auto ">
                            <thead class="text-center bg-slate-600 text-white lg:text-lg lg:uppercase lg:">
                              <tr>
                                <th class="lg:w-28 ">No</th>
                                <th class="w-[70%]">Nama Peserta Didik</th>
                                <th class="pr-1">Jumlah Medali</th>
                              </tr>
                            </thead>
                            <tbody class="lg:text-lg">
                            @forelse ($datas as $data)
                                <tr class="hover:bg-teal-500 hover:text-white">
                                    <td class="text-center">{{ $datas->firstItem() + $loop->index }}</td>
                                    {{-- <td class="text-center">{{ $loop->iteration }}</td> --}}
                                    <td class="uppercase"><a href="/detail/{{ $data->nisn }}">{{ $data->nama_siswa }}</a></td>
                                    <td class="text-center ">{{ $data->total_prestasi }}</td>
                                </tr>
                            @empty
                                <tr class="hover:bg-teal-500 hover:text-white ">
                                    <td class="text-center col-span-2"></td>
                                    <td class="text-center col-span-2">Data Tidak Ditemukan</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        {{-- <div class="flex justify-center md:justify-start mt-2">
                            {!! $datas->withQueryString()->links() !!}
                        </div> --}}
                        <div class="flex justify-center md:justify-start mt-2">
                            {!! $datas->withQueryString()->appends(['search' => $search])->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- hero section end -->



@endsection
