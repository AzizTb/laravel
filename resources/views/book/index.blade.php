@extends('layouts.admin')

@section('header-content')
    Halaman Index
@endsection

@section('content')

    @foreach ($buku as $data )
        Nama Buku : {{ $data->nama_buku }} <br>
        Jumlah Halaman Buku : {{ $data->jumlah_halaman }} <br>
        Translate Judul : {{ $data->translate_judul_buku ?? 'Tidak Ada TL' }} <br>
        <hr>
    @