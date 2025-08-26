@extends('layouts.main')
@section('title', 'Tentang Kami')
@section('content')
<h1>Tentang {{ $namaAplikasi }}</h1>

    <p>Aplikasi ini dikembangkan oleh <b>{{ $pengembang }}</b>.</p>

    <p>Versi saat ini dirilis pada tahun {{ $tahun }}.</p>

@endsection
