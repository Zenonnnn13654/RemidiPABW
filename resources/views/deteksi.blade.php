@extends('layouts.main')

@section('content')

    <h2>Form Input Deteksi Hama</h2>

    <form action="{{ url('/hasil-deteksi') }}" method="POST">
        @csrf

        <label>Lokasi Lahan</label><br>
        <select name="lokasi" required>
            <option value="Garut Kota">Garut Kota</option>
            <option value="Tarogong Kaler">Tarogong Kaler</option>
            <option value="Samarang">Samarang</option>
        </select>
        <br><br>

        <label>Nama Tanaman</label><br>
        <select name="nama_tanaman" required>
            <option value="Padi">Padi</option>
            <option value="Jagung">Jagung</option>
            <option value="Cabai">Cabai</option>
        </select>
        <br><br>

        <label>Jenis Hama</label><br>
        <select name="jenis_hama" required>
            <option value="Wereng Cokelat">Wereng Cokelat</option>
            <option value="Ulat Grayak">Ulat Grayak</option>
            <option value="Kutu Daun">Kutu Daun</option>
        </select>
        <br><br>

        <label>Confidence Score (%)</label><br>
        <input type="number" name="confidence_score"
               min="0" max="100" required>
        <br><br>

        <label>Tingkat Kerusakan Daun (%)</label><br>
        <input type="number" name="tingkat_kerusakan"
               min="0" max="80" step="0.01" required>
        <br><br>

        <button type="submit">Proses Deteksi</button>

    </form>

@endsection