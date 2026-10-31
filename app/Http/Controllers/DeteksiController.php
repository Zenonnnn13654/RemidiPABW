<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeteksiHama;

class DeteksiController extends Controller
{
    public function index()
    {
        return view('deteksi');
    }

    public function prosesData(Request $request)
    {
        $data = $request->validate([
            'lokasi' => 'required',
            'nama_tanaman' => 'required',
            'jenis_hama' => 'required',
            'confidence_score' => 'required|numeric|min:0|max:100',
            'tingkat_kerusakan' => 'required|numeric|min:0|max:80',
        ]);

        $confidence = $data['confidence_score'];

        if ($confidence < 50) {
            $status = 'Tidak Pasti';
            $rekomendasi = 'Perlu verifikasi manual oleh petugas';
        } elseif ($confidence <= 80) {
            $status = 'Indikasi Hama';
            $rekomendasi = 'Lakukan pemantauan intensif';
        } else {
            $status = 'Hama Terkonfirmasi';
            $rekomendasi = 'Segera lakukan pengendalian hama';
        }

        $data['status_deteksi'] = $status;

        $deteksi = DeteksiHama::create($data);

        return view('hasil', compact(
            'data',
            'status',
            'rekomendasi',
            'deteksi'
        ));
    }

    public function riwayat()
    {
        $riwayat = DeteksiHama::latest()->get();

        return view('riwayat', compact('riwayat'));
    }
}