<?php

namespace App\Http\Controllers;

class PenilaianController extends Controller
{
    public function index()
    {
        /** @var string $universitas */
        $universitas = 'Universitas Teknologi Yogyakarta';
        /** @var int $tahunMasuk */
        $tahunMasuk = 2024;
        /** @var list<string> $mataKuliah */
        $mataKuliah = [
            'Pemrograman Web Lanjut',
            'Sistem Basis Data',
            'Kecerdasan Buatan',
            'Jaringan Komputer',
        ];
        /** @var list<int> $jumlahSks */
        $jumlahSks = [3, 4, 3, 2];

        return view('penilaian', compact(
            'universitas',
            'tahunMasuk',
            'mataKuliah',
            'jumlahSks'
        ));
    }
}
