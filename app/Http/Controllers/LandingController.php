<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class LandingController extends Controller
{
    public function index()
    {

        $tahun = DB::table('data')
                ->select('tahun', DB::raw('count(tahun) as total_tahun'))
                ->groupBy('tahun')
                ->where('tahun', '>', now()->subYears(6)->year)
                ->orderBy('tahun', 'asc')
                // ->limit(3)
                ->get();

        // dd ($tahun);



        $siswa = Siswa::with(['prestasis' => function ($query) {
                    $query->latest()->take(1);
                }])->limit(8)->orderByDesc('created_at')
                ->get();

        $olahraga = DB::table('data')->where('bidang','=','Olahraga')->count();
        $seni = DB::table('data')->where('bidang','=','Seni')->count();
        $riset = DB::table('data')->where('bidang','=','Riset dan Teknologi')->count();
        $lain = DB::table('data')->where('bidang','=','Lain-lain')->count();

        $statistik = [
            'olahraga' => $olahraga,
            'seni' => $seni,
            'riset' => $riset,
            'lain' => $lain,
        ];

        // dd ($statistik);

        return view('welcome', [
            'title' => 'SIMT - UPTD SMP Negeri 1 Kalabahi',
            'datas' => $siswa,
            'statistik' => $statistik,
            'statistik2' => $tahun
        ]);

    }

    public function dashboard()
    {
        return view('dashboardlte', [
            'title' => 'Dashboard - SIMT',
            'title2' => "Dashboard",
            'datas' => Siswa::all()
        ]);

    }
    public function tambah()
    {
        return view('tambah', [
            'title' => 'Dashboard - SIMT',
            'title2' => "Tambah Data Prestasi",
            'datas' => Siswa::all()
        ]);

    }

    public function cekdata()
    {

        $searchTerm = request('search');

        $siswadenganprestasi = DB::table('siswas')
                                ->where('nama_siswa','like', '%' . $searchTerm . '%')
                                ->leftJoin('data', 'siswas.id', '=','data.siswa_id')
                                ->select('siswas.id', 'siswas.nama_siswa', 'siswas.nisn', DB::raw('count(data.id) as total_prestasi'))
                                ->groupBy('siswas.id', 'siswas.nama_siswa', 'siswas.nisn')
                                ->orderByDesc('total_prestasi')
                                ->orderBy('nama_siswa')
                                ->paginate(10);

        return view('cekdata', [
            'title' => 'Data | SIMT - UPTD SMP Negeri 1 Kalabahi',
            'datas' => $siswadenganprestasi,
            'search' => $searchTerm

        ]);
    }

    public function show (Siswa $nisn)
    {
        return view('detail', [
            'title' => 'Detail | SIMT - UPTD SMP Negeri 1 Kalabahi',
            'nama' => $nisn,
            'data' => $nisn->data
        ]);
    }

    public function tambahsiswa(Request $request)
    {
        $validatedData = $request->validate([
            'nama_siswa' => 'required',
            'nisn' => 'required|unique:siswas',
            'foto_siswa' => 'image|file|max:6056',
        ]);
        if($request->file('foto_siswa')){
            $validatedData['foto_siswa'] = $request->file('foto_siswa')->store('foto-siswa');
        }

        Siswa::create($validatedData);

        return redirect('/cekdata')->with('status', 'Data Berhasil Ditambah') ;

    }

    public function editsiswa(Siswa $nisn)
    {
        return 'edit';
        
        $nama = $nisn;

        dd($nama);



        return view('editsiswa', [
            'title' => 'Edit Data Siswa | SIMT - UPTD SMP Negeri 1 Kalabahi',
            'nama' => $nisn,
            // 'data' => $nisn->data
        ]);

    }

    public function tambahprestasi(Request $request, Siswa $nisn)
    {
        $validatedData = $request->validate([
            'tahun' => 'required|numeric',
            'jenis_lomba' => 'required',
            'prestasi' => 'required',
            'bidang' => 'notin:kosong',
        ]);

        $validatedData['siswa_id'] = $nisn->id;
        $validatedData['nisn'] = $nisn->nisn;

        Data::create($validatedData);

        return redirect("/detail/$nisn->nisn")->with('status', 'Data Berhasil Ditambah') ;

    }

    public function delete($id, $nisn)
    {

        Data::destroy($id);

        return redirect("/detail/$nisn")->with('status', 'Data Berhasil Dihapus') ;

    }


}
