<?php

namespace Database\Seeders;

use App\Models\Data;
use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'nisn'=> '1234567890',
            'nama_siswa' => 'Lenstia Clarita Lobangpali',
        ]);

        Data::create([
            'siswa_id' => '1',
            'nisn' => '1234567890',
            'tahun' => '2022',
            'jenis_lomba' => 'Olimpiade Sains Nasional',
            'prestasi' => 'Finalis Cabang IPA Nasional',
            'bidang' => 'Riset dan Teknologi'
        ]);

        Data::create([
            'siswa_id' => '1',
            'nisn' => '1234567890',
            'tahun' => '2021',
            'jenis_lomba' => 'Kompetisi Sains Nasional',
            'prestasi' => 'Finalis Cabang IPA Nasional Tahun 2021',
            'bidang' => 'Riset dan Teknologi'
        ]);

        Data::create([
            'siswa_id' => '1',
            'nisn' => '1234567890',
            'tahun' => '2022',
            'jenis_lomba' => 'Olimpiade Sains Nasional',
            'prestasi' => 'Juara 1 Cabang IPA Tingkat Provinsi',
            'bidang' => 'Riset dan Teknologi'
        ]);

        Data::create([
            'siswa_id' => '1',
            'nisn' => '1234567890',
            'tahun' => '2021',
            'jenis_lomba' => 'Kompetisi Sains Nasional',
            'prestasi' => 'Juara 2 Cabang IPA Tingkat Provinsi',
            'bidang' => 'Riset dan Teknologi'
        ]);


        Siswa::create([
            'nisn'=> '1234567891',
            'nama_siswa' => 'Farli Ztevans Malaikosa',
        ]);

        Data::create([
            'siswa_id' => '2',
            'nisn' => '1234567891',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Juara I | Emas Cabang Gitar Duet Tingkat Provinsi',
            'bidang' => 'Seni'
        ]);

        Data::create([
            'siswa_id' => '2',
            'nisn' => '1234567891',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Gitar Duet Tingkat Nasional',
            'bidang' => 'Seni'
        ]);


        Siswa::create([
            'nisn'=> '1234567892',
            'nama_siswa' => 'Hansel Giovann Djahila',
        ]);

        Data::create([
            'siswa_id' => '3',
            'nisn' => '1234567892',
            'tahun' => '2019',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Lomba Menyanyi Solo Tingkat Nasional',
            'bidang' => 'Seni'

        ]);

        Data::create([
            'siswa_id' => '3',
            'nisn' => '1234567892',
            'tahun' => '2019',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Emas | Juara I Cabang Lomba Menyanyi Solo Tingkat Provinsi',
            'bidang' => 'Seni'
        ]);

        Data::create([
            'siswa_id' => '3',
            'nisn' => '1234567892',
            'tahun' => '2019',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Penghargaan Khusus Cabang Lomba Menyanyi Solo Nasional Tahun 2019',
            'bidang' => 'Seni'
        ]);

        Siswa::create([
            'nisn'=> '1234567893',
            'nama_siswa' => 'PATRISYA MARTHINI GRASELLA MILLU',
        ]);

        Data::create([
            'siswa_id' => '4',
            'nisn' => '1234567893',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Emas | Juara I Cabang Kreativitas Seni Tari Provinsi Tahun 2021',
            'bidang' => 'Seni'
        ]);

        Data::create([
            'siswa_id' => '4',
            'nisn' => '1234567893',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Kreativitas Seni Tari Nasional Tahun 2021',
            'bidang' => 'Seni'
        ]);


        Siswa::create([
            'nisn'=> '1234567894',
            'nama_siswa' => 'KRISNAWATI BENI LORO',
        ]);

        Data::create([
            'siswa_id' => '5',
            'nisn' => '1234567894',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Emas | Juara I Cabang Kreativitas Seni Tari Provinsi Tahun 2021',
            'bidang' => 'Seni'
        ]);

        Data::create([
            'siswa_id' => '5',
            'nisn' => '1234567894',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Kreativitas Seni Tari Nasional Tahun 2021',
            'bidang' => 'Seni'
        ]);

        Siswa::create([
            'nisn'=> '1234567895',
            'nama_siswa' => 'DORINTAN STIFANI',
        ]);

        Data::create([
            'siswa_id' => '6',
            'nisn' => '1234567895',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Emas | Juara I Cabang Kreativitas Seni Tari Provinsi Tahun 2021',
            'bidang' => 'Seni'
        ]);

        Data::create([
            'siswa_id' => '6',
            'nisn' => '1234567895',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Kreativitas Seni Tari Nasional Tahun 2021',
            'bidang' => 'Seni'
        ]);


        Siswa::create([
            'nisn'=> '1234567896',
            'nama_siswa' => 'KEVIN THOBIAS OBISURU',
        ]);

        Data::create([
            'siswa_id' => '7',
            'nisn' => '1234567896',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Emas | Juara I Cabang Kreativitas Seni Tari Provinsi Tahun 2021',
            'bidang' => 'Seni'
        ]);

        Data::create([
            'siswa_id' => '7',
            'nisn' => '1234567896',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Kreativitas Seni Tari Nasional Tahun 2021',
            'bidang' => 'Seni'
        ]);


        Siswa::create([
            'nisn'=> '1234567897',
            'nama_siswa' => 'ALFA SAMUEL TIGE',
        ]);

        Data::create([
            'siswa_id' => '8',
            'nisn' => '1234567897',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Emas | Juara I Cabang Gitar Duet Provinsi Tahun 2021',
            'bidang' => 'Seni'
        ]);

        Data::create([
            'siswa_id' => '8',
            'nisn' => '1234567897',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Gitar Duet Nasional Tahun 2021',
            'bidang' => 'Seni'
        ]);


        Siswa::create([
            'nisn'=> '1234567898',
            'nama_siswa' => 'AGUNG PASCHARIO WAANG',
        ]);

        Data::create([
            'siswa_id' => '9',
            'nisn' => '1234567898',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Emas | Juara I Cabang Kreativitas Seni Tari Provinsi Tahun 2021',
            'bidang' => 'Seni'
        ]);

        Data::create([
            'siswa_id' => '9',
            'nisn' => '1234567898',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Kreativitas Seni Tari Nasional Tahun 2021',
            'bidang' => 'Seni'
        ]);


        Siswa::create([
            'nisn'=> '1234567899',
            'nama_siswa' => 'LOVINA SUMAWATHY DOLPALY',
        ]);

        Data::create([
            'siswa_id' => '10',
            'nisn' => '1234567899',
            'tahun' => '2022',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Kreativitas Seni Tari Nasional Tahun 2022',
            'bidang' => 'Seni'
        ]);


        Siswa::create([
            'nisn'=> '1234567901',
            'nama_siswa' => 'TEGAR JAHDIEL ABIYUGUSTANTHIUS LUASE',
        ]);

        Data::create([
            'siswa_id' => '11',
            'nisn' => '1234567901',
            'tahun' => '2022',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Kreativitas Seni Tari Nasional Tahun 2022',
            'bidang' => 'Seni'
        ]);

        // CARLALITA PETRONELLA DJOBO

        Siswa::create([
            'nisn'=> '1234567902',
            'nama_siswa' => 'CARLALITA PETRONELLA DJOBO',
        ]);

        Data::create([
            'siswa_id' => '12',
            'nisn' => '1234567902',
            'tahun' => '2022',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Kreativitas Seni Tari Nasional Tahun 2022',
            'bidang' => 'Seni'
        ]);

        // ERASMUS PULINGDAKA
        Siswa::create([
            'nisn'=> '1234567903',
            'nama_siswa' => 'ERASMUS PULINGDAKA',
        ]);

        Data::create([
            'siswa_id' => '13',
            'nisn' => '1234567903',
            'tahun' => '2022',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Gitar Duet Nasional Tahun 2022',
            'bidang' => 'Seni'
        ]);


        Siswa::create([
            'nisn'=> '1234567904',
            'nama_siswa' => 'GRACEMATHILDA MARTHA DJAHILA',
        ]);

        Data::create([
            'siswa_id' => '14',
            'nisn' => '1234567904',
            'tahun' => '2022',
            'jenis_lomba' => 'Festival dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Gitar Duet Nasional Tahun 2022',
            'bidang' => 'Seni'
        ]);

        // MIRANDA DA COSTA
        Siswa::create([
            'nisn'=> '1234567905',
            'nama_siswa' => 'MIRANDA DA COSTA',
        ]);

        Data::create([
            'siswa_id' => '15',
            'nisn' => '1234567905',
            'tahun' => '2021',
            'jenis_lomba' => 'Kompetisi Sains Nasional',
            'prestasi' => 'Finalis Cabang Matematika Nasional Tahun 2021',
            'bidang' => 'Riset dan Teknologi'
        ]);


        Siswa::create([
            'nisn'=> '1234567906',
            'nama_siswa' => 'MARIA BELLA MOILETI',
        ]);

        Data::create([
            'siswa_id' => '16',
            'nisn' => '1234567906',
            'tahun' => '2021',
            'jenis_lomba' => 'Kompetisi Sains Nasional',
            'prestasi' => 'Finalis Cabang IPA Nasional Tahun 2021',
            'bidang' => 'Riset dan Teknologi'
        ]);


        Siswa::create([
            'nisn'=> '1234567907',
            'nama_siswa' => 'DARA VITA FEBRIANA',
        ]);

        Data::create([
            'siswa_id' => '17',
            'nisn' => '1234567907',
            'tahun' => '2021',
            'jenis_lomba' => 'Kompetisi Sains Nasional',
            'prestasi' => 'Finalis Cabang IPA Nasional Tahun 2021',
            'bidang' => 'Riset dan Teknologi'
        ]);


        Siswa::create([
            'nisn'=> '1234567908',
            'nama_siswa' => 'DESTRI AGATHA LOBANGPALI',
        ]);

        Data::create([
            'siswa_id' => '18',
            'nisn' => '1234567908',
            'tahun' => '2023',
            'jenis_lomba' => 'Olimpiade Sains Nasional',
            'prestasi' => 'Finalis Cabang IPA Nasional Tahun 2023',
            'bidang' => 'Riset dan Teknologi'
        ]);

        Siswa::create([
            'nisn'=> '1234567909',
            'nama_siswa' => 'MERLIN ANGGRAENI MAUSALI',
        ]);

        Data::create([
            'siswa_id' => '19',
            'nisn' => '1234567909',
            'tahun' => '2023',
            'jenis_lomba' => 'Olimpiade Sains Nasional',
            'prestasi' => 'Finalis Cabang IPS Nasional Tahun 2023',
            'bidang' => 'Riset dan Teknologi'
        ]);


        Siswa::create([
            'nisn'=> '1234567910',
            'nama_siswa' => 'SHARINA WENI',
        ]);

        Data::create([
            'siswa_id' => '20',
            'nisn' => '1234567910',
            'tahun' => '2023',
            'jenis_lomba' => 'Olimpiade Sains Nasional',
            'prestasi' => 'Finalis Cabang IPA Nasional Tahun 2023',
            'bidang' => 'Riset dan Teknologi'
        ]);

        // 	CHRISTOPER SIMANJUNTAK
        Siswa::create([
            'nisn'=> '1234567911',
            'nama_siswa' => 'CHRISTOPER SIMANJUNTAK',
        ]);

        Data::create([
            'siswa_id' => '21',
            'nisn' => '1234567911',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival Dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Perak | Juara II Cabang Kreasi Musik Tradisional Provinsi Tahun 2021',
            'bidang' => 'Seni'
        ]);

        Siswa::create([
            'nisn'=> '1234567912',
            'nama_siswa' => 'FEBIYANTI MAU',
        ]);

        Data::create([
            'siswa_id' => '22',
            'nisn' => '1234567912',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival Dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Perak | Juara II Cabang Kreasi Musik Tradisional Provinsi Tahun 2021',
            'bidang' => 'Seni'
        ]);


        Siswa::create([
            'nisn'=> '1234567913',
            'nama_siswa' => 'MARGARETH PAOLIN APLUGI',
        ]);

        Data::create([
            'siswa_id' => '23',
            'nisn' => '1234567913',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival Dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Perak | Juara II Cabang Kreasi Musik Tradisional Provinsi Tahun 2021',
            'bidang' => 'Seni'
        ]);

        Siswa::create([
            'nisn'=> '1234567914',
            'nama_siswa' => 'OLGA MARSALINA MAU',
        ]);

        Data::create([
            'siswa_id' => '24',
            'nisn' => '1234567914',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival Dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Perak | Juara II Cabang Kreasi Musik Tradisional Provinsi Tahun 2021',
            'bidang' => 'Seni'
        ]);

        Siswa::create([
            'nisn'=> '1234567915',
            'nama_siswa' => 'THERESA AMELIA CEUNFIN',
        ]);

        Data::create([
            'siswa_id' => '25',
            'nisn' => '1234567915',
            'tahun' => '2021',
            'jenis_lomba' => 'Festival Dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Perak | Juara II Cabang Kreasi Musik Tradisional Provinsi Tahun 2021',
            'bidang' => 'Seni'
        ]);


        Siswa::create([
            'nisn'=> '1234567916',
            'nama_siswa' => 'BADIA LARASATI TUPONG',
        ]);

        Data::create([
            'siswa_id' => '26',
            'nisn' => '1234567916',
            'tahun' => '2022',
            'jenis_lomba' => 'Olimpiade Olahraga Siswa Nasional',
            'prestasi' => 'Finalis Cabang Pencak Silat Putri Nasional Tahun 2022',
            'bidang' => 'Olahraga'
        ]);

        Siswa::create([
            'nisn'=> '1234567917',
            'nama_siswa' => 'RONALITA LINGZA DOLPALY',
        ]);

        Data::create([
            'siswa_id' => '27',
            'nisn' => '1234567917',
            'tahun' => '2022',
            'jenis_lomba' => 'Festival Dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Kreativitas Seni Tari Nasional Tahun 2022',
            'bidang' => 'Seni'
        ]);

        Siswa::create([
            'nisn'=> '1234567918',
            'nama_siswa' => 'KYGAYLEN AUDREY KELENDONU',
        ]);

        Data::create([
            'siswa_id' => '28',
            'nisn' => '1234567918',
            'tahun' => '2022',
            'jenis_lomba' => 'Festival Dan Lomba Seni Siswa Nasional',
            'prestasi' => 'Finalis Cabang Kreativitas Seni Tari Nasional Tahun 2022',
            'bidang' => 'Seni'
        ]);






    }
}
