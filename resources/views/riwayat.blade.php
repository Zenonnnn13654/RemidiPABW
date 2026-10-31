@extends('layouts.main')

@section('content')

    <h2>Riwayat Deteksi Hama</h2>

    <table border="1" cellpadding="10">

        <tr>
            <th>No</th>
            <th>Lokasi</th>
            <th>Tanaman</th>
            <th>Jenis Hama</th>
            <th>Confidence Score</th>
            <th>Kerusakan Daun</th>
            <th>Status Deteksi</th>
            <th>Tanggal</th>
        </tr>

        @forelse ($riwayat as $data)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->lokasi }}</td>
                <td>{{ $data->nama_tanaman }}</td>
                <td>{{ $data->jenis_hama }}</td>
                <td>{{ $data->confidence_score }}%</td>
                <td>{{ $data->tingkat_kerusakan }}%</td>
                <td>{{ $data->status_deteksi }}</td>
                <td>{{ $data->created_at }}</td>
            </tr>

        @empty

            <tr>
                <td colspan="8">Belum ada data deteksi hama.</td>
            </tr>

        @endforelse

    </table>

@endsection