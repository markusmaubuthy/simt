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
                            @guest
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
                                <a href="/cekdata" class="text-base text-black py-2 mx-6 flex group-hover:text-teal-500"><span class="mr-1"><i class="fa fa-search" aria-hidden="true"></i></span> Cari Data Prestasi</a>
                            </li>
                            @endguest
                            @auth
                            <li class="group">
                                <a href="/#home" class="text-base text-black py-2 mx-6 flex group-hover:text-teal-500">Dashboard</a>
                            </li>
                            <li class="group">
                                <a href="/tambah" class="text-base text-black py-2 mx-6 flex group-hover:text-teal-500">Tambah Siswa</a>
                            </li>
                            <li class="group">
                                <a href="/cekdata" class="text-base text-black py-2 mx-6 flex group-hover:text-teal-500">Edit Prestasi</a>
                            </li>
                            <li class="group">
                                <a href="/user" class="text-base text-black py-2 mx-6 flex group-hover:text-teal-500">Manajemen User</a>
                            </li>
                            <li class="group">
                                <a href="/logout" class="text-base text-black py-2 mx-6 flex group-hover:text-teal-500">Logout</a>
                            </li>
                            @else
                            <li class="group">
                                <a href="/login" class="text-base text-black py-2 mx-6 flex group-hover:text-teal-500">Login</a>
                            </li>
                            @endauth
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </header>
<!-- header end -->
