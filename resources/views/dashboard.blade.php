@extends('layouts.main')
@section('title', 'Dashboard Admin')
@section('content')
<h1>Dashboard Admin</h1>
<p>Halo, <b>{{ $namaAdmin }}</b>! Selamat datang di panel administrasi Aplikasi Web Sekolah.</p>
<div style="background-color: #e9ecef; padding: 15px;
border-radius: 5px;">
    <h3>Statistik Cepat:</h3>
    <ul>
        <li>Jumlah Siswa: {{ $jumlahSiswa }}</li>
        <li>Jumlah Guru: {{ $jumlahGuru }}</li>
    </ul>
</div>
<br>
<p>Nanti di sini akan ada ringkasan data penting dan
    fitur-fitur administrasi.</p>
@endsection
