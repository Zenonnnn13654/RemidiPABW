@extends('layouts.main')

@section('content')

    <h2>Tentang AgriVision Garut</h2>

    <p>
        AgriVision merupakan sistem pencatatan hasil deteksi
        hama tanaman berbasis Computer Vision.
    </p>

    <h3>Tujuan Sistem</h3>

    <p>
        Membantu Kelompok Tani Makmur dalam mengidentifikasi,
        mencatat, dan memantau serangan hama tanaman.
    </p>

    <h3>Lokasi Deteksi</h3>

    <ul>
        <li>Garut Kota</li>
        <li>Tarogong Kaler</li>
        <li>Samarang</li>
    </ul>

    <h3>Parameter Hasil Deteksi</h3>

    <ul>
        <li>Jenis Hama</li>
        <li>Confidence Score</li>
        <li>Tingkat Kerusakan Daun</li>
    </ul>

    <h3>Model Klasifikasi</h3>

    <p>EfficientNet-B0</p>

@endsection