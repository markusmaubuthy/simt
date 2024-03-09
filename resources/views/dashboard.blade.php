@extends('admin.main')

@section('body')
    
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">{{ $title2}}</h1>

                <form action="">
                        <div class="w-full px-4 mb-8 lg:flex items-center lg:w-3/4 mx-auto">
                            <label for="name" class="text-base font-bold text-center text-zinc-700 text-nowrap mr-4 lg:uppercase lg:text-lg lg:font-semibold">Input Nama Siswa</label>
                            <input type="text" id="name" class="w-full ring-offset-1 ring text-black p-2 mb-2 mt-1 rounded-md focus:outline-none
                            focus:ring-teal-500 focus:ring-1 focus:border-greem-500 uppercase">
                            <button class="bg-green-500 py-2 px-4 rounded-lg lg:ml-3">Cari</button>
                        </div>
                </form>


<!-- pretasi siswa -->
                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Prestasi Siswa
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Nomor</th>
                                    <th class="w-1/3 text-center py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Jumlah Medali</th>
                                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @foreach ($datas as $data)
                                <tr>
                                    <td class="text-center py-3 px-4">{{ $loop->iteration}}</td>
                                    <td class="w-1/3 text-left py-3 px-4">{{ $data->nama_siswa }}</td>
                                    <td class="text-center py-3 px-4">2</td>
                                    <td class="text-center py-3 px-4">
                                        <a class="hover:text-blue-500 ml-2 px-2 py-1 bg-blue-500 rounded-md" href="mailto:jonsmith@mail.com">Lihat</a>
                                        <a class="hover:text-blue-500 ml-2 px-2 py-1 bg-yellow-500 rounded-md" href="mailto:jonsmith@mail.com">Edit</a>
                                        <a class="hover:text-blue-500 ml-2 px-2 py-1 bg-red-500 rounded-md" href="mailto:jonsmith@mail.com">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
<!-- endprestasi -->

            </main>


@endsection