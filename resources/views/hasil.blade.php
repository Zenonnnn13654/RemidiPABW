@extends('layouts.main')

@section('content')

    <h2>Hasil Deteksi Hama Tanaman</h2>

    <table border="1" cellpadding="10">

        <tr>
            <th>Parameter</th>
            <th>Hasil</th>
        </tr>

        <tr>
            <td>Lokasi Lahan</td>
            <td>{{ $data['lokasi'] }}</td>
        </tr>

        <tr>
            <td>Nama Tanaman</td>
            <td>{{ $data['nama_tanaman'] }}</td>
        </tr>

        <tr>
            <td>Jenis Hama</td>
            <td>{{ $data['jenis_hama'] }}</td>
        </tr>

        <tr>
            <td>Confidence Score</td>
            <td>{{ $data['confidence_score'] }}%</td>
        </tr>

        <tr>
            <td>Tingkat Kerusakan Daun</td>
            <td>{{ $data['tingkat_kerusakan'] }}%</td>
        </tr>

        <tr>
            <td>Status Deteksi</td>
            <td>
                @if ($status == 'Tidak Pasti')
                    Tidak Pasti
                @elseif ($status == 'Indikasi Hama')
                    Indikasi Hama
                @else
                    Hama Terkonfirmasi
                @endif
            </td>
        </tr>

        <tr>
            <td>Rekomendasi</td>
            <td>{{ $rekomendasi }}</td>
        </tr>

    </table>

    <br>

    <a href="{{ route('deteksi') }}">Kembali ke Form Deteksi</a>

@endsection